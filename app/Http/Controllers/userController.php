<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class userController extends Controller
{
    // Show all Data of User
    public function index(Request $req)
    {
        return view('pages.index', [
            'allData' => DB::table('users')->orderBy($req->filter ?? 'id')->paginate(4)
        ]);
    }
    
    // Show all Search Data of User
    public function searchIndex(Request $req)
    {
        $name = $req->search;
        return view('pages.searchIndex', [
            // 'allData'=> users::searchUserData($name)
            'allData' => DB::table('users')->where('name', $name)->paginate(4)
        ]);
    }

    // Show Create Form to the User
    public function show()
    {
        return view('pages.create');
    }

    // Store or Save User Data in Database
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

    // Show Update Form to User
    public function showUpdateForm(Request $req){
        $id = $req->id;
        return view('pages.update', ['id' => $id]);
    }

    // Store or Save the Updated data of User
    public function update(Request $req){
        $id = $req->query()['id'];
        $formFields = $req->validate([
            'name'=>'required',
            'state'=>'required',
            'address'=>'required', 
            'dob'=>'required',
            'gender'=>['required', function($attribute, $value, $fail){
                if($value === 'default'){
                    $fail('The ' . $attribute . ' field can'."'".'t be empty.');
                }
            }]
        ]);
        
        $existedUser = users::find($id);
        // nice one
        $fields = array('name', 'state', 'address', 'dob', 'gender');
        foreach($fields as $field){
            $existedUser[$field] = $formFields[$field];
        }
        $existedUser->save();
        return redirect('/');
    }

    // Delete User from Database
    public function deleteUser(Request $req){
        $id = $req->id;
        $existedUser = users::find($id);
        $existedUser->delete();
        return redirect('/');
    }
}
