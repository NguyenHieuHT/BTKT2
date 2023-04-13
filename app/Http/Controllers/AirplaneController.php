<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Airplane;
class AirplaneController extends Controller
{
    //
    public function index()
    {
        $airplaneModel = new Airplane();
        $data = $airplaneModel -> getData();
        return view('airplane.index', compact('data'));
    }
    public function create(){
        return view('airplane.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'registration_number' => 'required|numeric',
            'model_number' => 'required|numeric',
            'capacity' => 'required|numeric',
        ]);

        $plane = new Airplane();
        $plane->registration_number = $request->input('registration_number');
        $plane->model_number = $request->input('model_number');
        $plane->capacity = $request->input('capacity');

        if($plane->save())
            return redirect()->route('airplane.index')->with('success','Airplane has been created successfully.');
    }
    public function edit(Airplane $airplane)
    {
        return view('airplane.edit',compact('airplane'));
    }
    public function update(Request $request, Airplane $airplane)
    {
        $request->validate([
            'registration_number' => 'required|numeric',
            'model_number' => 'required|numeric',
            'capacity' => 'required|numeric',
        ]);

        $airplane = Airplane::find($airplane->registration_number);
        $airplane->registration_number = $request->input('registration_number');
        $airplane->model_number = $request->input('model_number');
        $airplane->capacity = $request->input('capacity');
        $airplane->save();
        return redirect()->route('airplane.index')->with('success','Airplane has been updated successfully.');
    }

    public function destroy(Airplane $airplane)
    {
        $airplane = Airplane::find($airplane->registration_number);
        if ($airplane) {
            $airplane->remove();
            return redirect()->back()->with('success', 'Airplane deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Airplane not found.');
        }
    }
}
