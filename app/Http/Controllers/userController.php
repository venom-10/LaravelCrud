<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class userController extends Controller
{
    public function index(){
        return view('pages.index', [
            'allData' => DB::table('users')->paginate(4)
        ]);
    }
    public function searchIndex(Request $req){
        $name = $req->search;
        return view('pages.searchIndex', [
            // 'allData'=> users::searchUserData($name)
            'allData'=> DB::table('users')->where('name', $name)->paginate(1)
        ]);
    }
    public function show(){
        return view('pages.create');
    }
    public function store(Request $req){
        $formFields = $req->validate([
            'name'=>'required',
            'email'=>'required|unique:users',
            'state'=>'required',
            'address'=>'required',
            'dob'=>'required',
            // 'file'=>'required',
            'gender' => [
                'required',
                function ($attribute, $value, $fail) {
                    if ($value === 'default') {
                        $fail('The '.$attribute.' field cannot be set to "gender".');
                    }
                },
            ],
        ]);
        users::create($formFields);
        return redirect('/');
    }
}
