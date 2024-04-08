<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

use App\Models\Subject;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subject = Subject::all();
        return view('question.add',['subjects'=>$subject]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

     
        $validate = $request->validate(
            [
                'title'=>['required','unique:questions'],
                'option1'=>['required'],
                'option2'=>['required'],
                'option3'=>['required'],
                'option4'=>['required'],
                'rightans'=>['required'],
                

                
            ]
            );
        $question_1 = Question::create($request->all());

        if($question_1){
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
        //
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
