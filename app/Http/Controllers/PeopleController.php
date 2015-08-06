<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\People;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PeopleController extends Controller
{


    // Get the people list

    public function getList()
    {
        $people = People::all();

        return view('people.list');
    } 

}
