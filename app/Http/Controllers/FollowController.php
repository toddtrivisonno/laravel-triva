<?php

namespace App\Http\Controllers;

use App\Follow;
use App\Http\Resources\UserCollection;


use Illuminate\Http\Request;

class FollowController extends Controller
{
    public function index()
    {
        return new UserCollection(Follow::all());
    }
}
