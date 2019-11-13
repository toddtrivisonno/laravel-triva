<?php

namespace App\Http\Controllers;

use App\Profile;
use App\Http\Resources\UserCollection;


use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return new UserCollection(Profile::all());
    }
}
