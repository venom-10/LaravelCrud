<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class userController extends Controller
{
    public function index(){
        return view('pages.index', [
            'allData' => users::all()
        ]);
    }
    public function searchIndex(Request $req){
        $name = $req->search;
        return view('pages.searchIndex', [
            'allData'=> users::searchUserData($name)
        ]);
    }
    public function show(){
        return view('pages.create');
    }
    public function store(Request $req){
        // $name = $req->name;
        // $email = $req->email;
        // $state = $req->state;
        // $address = $req->address;
        // $dob = $req->dob;
        // $file = $req->file;
        // $gender = $req->gender;
        // dd($name, $email, $state, $address, $dob, $gender, $file);
        $formFields = $req->validate([
            'name'=>'required',
            'email'=>'required',
            'state'=>'required',
            'address'=>'required',
            'dob'=>'required',
            'file'=>'required',
            'gender'=>['required']
        ]);
        // redirect('/');  
    }
}
