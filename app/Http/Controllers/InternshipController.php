<?php

namespace App\Http\Controllers;

use App\Internship;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class InternshipController extends Controller
{

    public function index (){
        return Internship::all();
    }

}
