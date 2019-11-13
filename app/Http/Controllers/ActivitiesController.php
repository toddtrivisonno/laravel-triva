<?php

namespace App\Http\Controllers;

use App\Activities;
use App\Http\Resources\UserCollection;


use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function index() 
    {
        return new UserCollection(Activities::all());
    }
}
