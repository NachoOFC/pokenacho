<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Task::orderBy('created_at', 'asc')->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
      $this->validate($request, [ //inputs are not empty or null
        'title' => 'required',
        'description' => 'required',
    ]);

    $task = new Task;
    $task->title = $request->input('title'); //retrieving user inputs
    $task->description = $request->input('description');  //retrieving user inputs
    $task->save(); //storing values as an object
    return $task; 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Task::findorFail($id); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [ // the new values should not be null
            'title' => 'required',
            'description' => 'required',
        ]);
  
        $task = Task::findorFail($id); // uses the id to search values that need to be updated.
        $task->title = $request->input('title'); //retrieves user input
        $task->description = $request->input('description');////retrieves user input
        $task->save();//saves the values in the database. The existing data is overwritten.
        return $task; // 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::findorFail($id); //searching for object in database using ID
        if($task->delete()){ //deletes the object
            return 'deleted successfully'; //shows a message when the delete operation was successful.
        }
    }
}