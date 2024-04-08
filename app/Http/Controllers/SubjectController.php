<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subject = Subject::paginate(10);
        return view('subject.list',['subject_list'=>$subject]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subject.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate(
            [
                'title'=>['required','unique:subjects'],
            ]
            );
        $subject_id = Subject::create($request->all());

        if($subject_id){
            $request->session()->flash('success','Added Successfully!');

            return redirect()->back();
        }else{
            $request->session()->flash('error','Something Went Wrong');
        }
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
