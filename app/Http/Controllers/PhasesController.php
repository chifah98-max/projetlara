<?php

namespace App\Http\Controllers;

use App\Models\Phases;
use Illuminate\Http\Request;


class PhasesController extends Controller
{
    public function index()
    {
        $phases = Phase::latest()->paginate(5);
        return view('phases.index',compact('phases'))
            ->with('i',(request()->input('page', 1) -1) *5);
    }

    
    public function create()
    {
         return view('phases.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'duree' => 'required',
            'priorite' =>'required',
        ]);

        Phase::create($request->all());

        return redirect()->route('phases.index')
            ->with('success','Students created successfully. '); 
    }

    public function show(Student $student)
    {
        return view('phases.show',compact('phase'));
    }

    public function edit(Phases $phases)
    {
        return view('phases.edit',compact('phase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Phases  $phases
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Phases $phases)
    {
        $request->validate([

        ]);
        $student->update($request->all());

        return redirect()->route('phases.index')
            ->with('success','Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Phases  $phases
     * @return \Illuminate\Http\Response
     */
    public function destroy(Phases $phases)
    {
        $student->delete();

        return redirect()->route('phases.index')
            ->with('success','Student deleted successfully');
    }
}
