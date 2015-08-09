<?php

namespace App\Http\Controllers;

use App\People;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

class PeopleController extends Controller
{


    // Get the people list

    public function getList()
    {
        $people = People::all();

        return view('people.list');
    } 

    public function index()
    {
    	$people = People::all();

    	return view('people.index', compact('people'));
    }

    public function show($id)
    {
    	$people = People::findOrFail($id);

    	return view('people.show', compact('people')); 
    }

	public function create()
	{
		return view('people.create');
	}    

	public function store()
	{
		$input = Request::all();

		People::create($input);

		return $input;
	}

}
