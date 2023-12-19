<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;

class Admin2Controller extends Controller
{
   

    // Add your other CRUD methods below

    // Show a list of resources
    public function index()
    {
        // Your code for listing resources goes here.
    }

    // Show the form for creating a new resource
    public function create()
    {
        return view('admin.add_doctor');
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        // Your code for storing a newly created resource goes here.
    }

    // Display the specified resource
    public function show(string $id)
    {
        // Your code for displaying a specific resource goes here.
    }

    // Show the form for editing the specified resource
    public function edit(string $id)
    {
        // Your code for showing the form to edit a specific resource goes here.
    }

    // Update the specified resource in storage
    public function update(Request $request, string $id)
    {
        // Your code for updating a specific resource goes here.
    }

    // Remove the specified resource from storage
    public function destroy(string $id)
    {
        // Your code for deleting a specific resource goes here.
    }
}
