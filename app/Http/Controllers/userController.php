<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class userController extends Controller
{
    public function index(Request $req)
    {
        return view('pages.index', [
            'allData' => DB::table('users')->orderBy($req->filter ?? 'id')->paginate(4)
        ]);
    }
    public function searchIndex(Request $req)
    {
        $name = $req->search;
        return view('pages.searchIndex', [
            // 'allData'=> users::searchUserData($name)
            'allData' => DB::table('users')->where('name', $name)->paginate(4)
        ]);
    }
    public function show()
    {
        return view('pages.create');
    }
    public function store(Request $req)
    {
        $formFields = $req->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'state' => 'required',
            'address' => 'required',
            'dob' => 'required',
            'gender' => [
                'required',
                function ($attribute, $value, $fail) {
                    if ($value === 'default') {
                        $fail('The ' . $attribute . ' field can'."'".'t be empty.');
                    }
                },
            ],
        ]);
        if ($req->hasFile('file')) {
            $file = $req->file('file');
            $newFileName = $req->name . '_' . $req->email . '.png';
            $file->storeAs('public/uploads', $newFileName, 'local');
            $formFields['imagepath'] = $newFileName;
        }
        users::create($formFields);
        return redirect('/');
    }
}
