<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Question;
use App\Models\TestQuestion;
use App\Models\Test;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $test_list = Test::paginate(6);
        return view('test.testlist',['test_list'=>$test_list]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subject = Subject::all();
        $question = Question::paginate(10);
     return view('test.add',['subjects'=>$subject , 'question'=>$question]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate(
            [
                'title'=>['required'],
                'testdate'=>['required'],

            ]);

            $title = $request->title;
            $testdate = $request->testdate;
            $subject_id = $request->subject_id;

            $question_id = $request->question_id;
            if($question_id){
                $question_id = serialize($question_id);
            }
            $test = new Test();
            $test->title = $title;
            $test->testdate = $testdate;
            $test->subject_id = $subject_id;
             $test->question_id = $question_id;

            
             $test->save();
             if($test){

                $test_id = $test->id;

                foreach($request->question_id as $key =>$value ){
                    

                            $test_question = new TestQuestion();

                            $test_question->test_id = $test_id;
                            $test_question->question_id = $value;
                            $test_question->save();

               
                }
             }
             $request->session()->flash('success','Added Successfully!');
             return redirect()->back();
} 

    /**
     * Display the specified resource.
     */
    public function show($id = null)
    {
        $test = Test::find($id);

        return view('test.testdetail',['test_detail' =>$test]);
    }

    /**z
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
