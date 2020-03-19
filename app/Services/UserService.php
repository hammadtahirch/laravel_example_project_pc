<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;

/**
 * Class UserService
 * @package App\Services
 */
class UserService
{
    public function verifyUser($postParam){
        if (Auth::attempt(['email' => $postParam["email"], 'password' => $postParam["password"]]))
        {
            return true;
        }else{
            return false;
        }
    }
}