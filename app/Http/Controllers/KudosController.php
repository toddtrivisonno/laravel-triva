<?php

namespace App\Http\Controllers;

use App\Kudos;
use App\Http\Resources\UserCollection;


use Illuminate\Http\Request;

class KudosController extends Controller
{
    public function index() 
    {
        return new UserCollection(Kudos::all());
    }
}
