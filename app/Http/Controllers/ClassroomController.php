<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classroom;
use Illuminate\Validation\Rule;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classrooms = Classroom::all();

        return view('classrooms.index', compact('classrooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('classrooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        //validate
        $request->validate($this->validationRules());

        //save on db the new classroom data
        $classroom = new Classroom();
        // $classroom->name = $data['name'];
        // $classroom->description = $data['description'];
        $classroom->fill($data);

        $saved = $classroom->save(); 
        // dd($saved);

        //redirect to show route
        if($saved) {
            $newClass = Classroom::find($classroom->id);
            return redirect()->route('classrooms.show', $newClass);       
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Classroom $classroom)
    {
        return view('classrooms.show', compact('classroom'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Classroom $classroom)
    {
        // $classroom = Classroom::find($id); //dietro le quinte

        return view('classrooms.edit', compact('classroom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classroom $classroom)
    {
        $data = $request->all();

        //validazione
        // $request->validate ([
        //     'name' => 'required|unique:classrooms|max:20',
        //     'description' => 'required'
        // ]);
        //cosi' si poteva fare copiando lo store
        $request->validate($this->validationRules($classroom->id));

        //update db
        $updated = $classroom->update($data);
        
        //redirect
        if($updated) {
            $newClass = Classroom::find($classroom->id);
            return redirect()->route('classrooms.show', $classroom->id); 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classroom $classroom)
    {
        //ref deleted entity
        $ref = $classroom->name;

        //delete 
        $deleted = $classroom->delete();

        //redirect with session data 
        if ($deleted) {
            return redirect()->route('classrooms.index')->with('deleted', $ref);
        }
    }

    /**
     * define validation rules
     */
    private function validationRules($id = null) {
        return [
            'name' => [
                'required',
                'max:20',
                Rule::unique('classrooms')->ignore($id),
            ],
            'description' => 'required'
        ];
    }
}
