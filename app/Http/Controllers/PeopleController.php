<?php

namespace App\Http\Controllers;

use App\People;
use App\Http\Requests;
use App\Http\Requests\PeopleRequest;
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

    /**  
     * Show all people
     *
     * @return Response
     */

    public function index()
    {
    	$people = People::all();

    	return view('people.index', compact('people'));
    }

    /**  
     * Show a given person
     *
     * @return Response
     */

    public function show($id)
    {
    	$people = People::findOrFail($id);


    	return view('people.show', compact('people')); 
    }

    /**  
     * Save a new person
     *
     * @return Response
     */

	public function create()
	{
		return view('people.create');
	}    

	
	/**  
     * Save a new person
     *
     * @return Response
     */

	public function store(PeopleRequest $request)
	{
		//dd($request);
		$people = People::create($request->all());

        $message = trans('people.create_success_message');

        return redirect('people')->with('OK', $message.' : '.$people->name.' '.$people->last_name);
	}


	/**  
     * Retrieve a given person
     *
     * @return Response
     */
	
	public function edit($id)
	{
		
		$people = People::findOrFail($id);

        return view('people.edit', compact('people'));
	}

	/**  
     * Update a given person
     *
     * @return Response
     */
	
	public function update($id, PeopleRequest $request)
	{
		
		$people = People::findOrFail($id);

		$people->update($request->all());

        $message = trans('people.update_success_message');

		return redirect('people')->with('OK', $message.' : '.$people->name.' '.$people->last_name);

	}

    /**  
     * Return the for to delete person
     *
     * @return Response
     */
    
    public function delete($id)
    {
        
        $people = People::findOrFail($id);

        return view('people.delete', compact('people'));

    }

    /**  
     * Delete a given person
     *
     * @return Response
     */
    
    public function destroy($id)
    {
        
        $people = People::findOrFail($id);

        $people->delete();

        $message = trans('people.delete_success_message');

        return redirect('people')->with('OK', $message.' : '.$people->name.' '.$people->last_name);

    }
}
