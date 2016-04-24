<?php

namespace App\Http\Controllers;

use App\Internship;
use App\Status;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class InternshipController extends Controller
{

    public function index (){
        return User::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  Internship $internship
     * @return Response
     */
    public function show(Internship $internship)
    {
        return view('internship', compact('internship'));
    }

}
