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
    public function create(){
        return view('pages.create');
    }
}
