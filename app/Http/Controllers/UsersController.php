<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\Users;

class UsersController extends Controller
{
    public function getAllUsers()
    {
        return Users::all();
    }
}
