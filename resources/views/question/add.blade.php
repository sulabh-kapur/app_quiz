@extends('layouts.question_default')
@section('content')
<div class="container">
@if(session('success'))

<div class="alert alert-success">

        {{session('success')}}
</div>
@endif
  <h2>Add Questions </h2>
  <form method="post" action = "{{route('question.store')}}">
  @csrf
    <div class="form-group">
      <label for="question">Question</label>
      <input type="text" class="form-control" id="title" placeholder="Enter Question" name="title">
      @error('title')
     <div class="alert alert-danger">{{ $message }}</div>
       @enderror
      </div>
      <div class="form-group">
      <label for="option1">Option 1 </label>
      <input type="text" class="form-control" id="option1" placeholder="Enter Option 1" name="option1">
      @error('option1')
     <div class="alert alert-danger">{{ $message }}</div>
       @enderror
      </div>
      <div class="form-group">
      <label for="option2">Option 2 </label>
      <input type="text" class="form-control" id="option2" placeholder="Enter Option 2" name="option2">
      @error('option2')
     <div class="alert alert-danger">{{ $message }}</div>
       @enderror
      </div>
      <div class="form-group">
      <label for="option3">Option 3 </label>
      <input type="text" class="form-control" id="option3" placeholder="Enter Option 3" name="option3">
      @error('option3')
     <div class="alert alert-danger">{{ $message }}</div>
       @enderror
      </div>
      <div class="form-group">
      <label for="option4">Option 4 </label>
      <input type="text" class="form-control" id="option4" placeholder="Enter Option 4" name="option4">
      @error('option4')
     <div class="alert alert-danger">{{ $message }}</div>
       @enderror
      </div>
      <div class="form-group">
      <label for="rightans">Right Answer </label>
      <input type="text" class="form-control" id="rightans" placeholder="Right Answer" name="rightans">
      @error('rightans')
     <div class="alert alert-danger">{{ $message }}</div>
       @enderror
      </div>
      <div class="form-group">
    <label for="usr"> Select Subject:</label>
    <select class="form-control" name="subject_id" id="sel1">
    <?php foreach($subjects as $key => $value){?>
    <option value="<?php echo $value['id']; ?>"><?php echo $value['title']; ?></option>
    <?php } ?>
</select>
</div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
@stop


