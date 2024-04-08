@extends('layouts.quiz_default')
@section('content')

<div class="quiz-container" id="quiz">
    <div class="quiz-header">
        <h2 id="question"><?php echo $getdetails->title; ?></h2>
        <ul>
            <li>
                <input type="radio" id="a" name="answer" class="answer">
                <label id="a_text" for="a"><?php echo $getdetails->option1; ?></label>
            </li>
            <li>
                <input type="radio" id="b" name="answer" class="answer">
                <label id="b_text" for="b"><?php echo $getdetails->option2; ?></label>
            </li>
            <li>
                <input type="radio" id="c" name="answer" class="answer">
                <label id="c_text" for="c"><?php echo $getdetails->option3; ?></label>
            </li>
            <li>
                
                <input type="radio" id="d" name="answer" class="answer">
                <label id="d_text" for="d"><?php echo $getdetails->option4; ?></label>
            </li>
        </ul>
    </div>
    <button id="submit">Submit</button>
    @stop