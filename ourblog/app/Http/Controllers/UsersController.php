<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function adminUserInfo() {
        return response("Пользователи сайта: ")
        ->header('Content-Type','text/plain');
    }
}
