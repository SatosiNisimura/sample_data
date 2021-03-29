<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class User extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        //'name' => 'required',
        'name' => [
            'required',
            'regex:/^[ア-ン゛゜ァ-ォャ-ョー]+$/u',
            'between:0,40',
        ],
        //'mail' => 'email',
         'mail' => 'email|unique:users'
    );
    
}
