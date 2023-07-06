<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;

    public static function searchUserData($name){
        $allData = self::all();
        $allFindData = array();
        foreach($allData as $data){
            if(strtolower($data['name']) === strtolower($name)){
                array_push($allFindData, $data);
            }
        }
        return $allFindData;
    }
}
