@extends('layouts.subject_default')
@section('content')
<div class="container">
@if(session('success'))

<div class="alert alert-success">

        {{session('success')}}
</div>
@endif
  <h2>Subject Add </h2>
  <form method="post" action = "{{route('subject.store')}}">
  @csrf
    <div class="form-group">
      <label for="subject">Subject</label>
      <input type="text" class="form-control" id="subject" placeholder="Enter Subject" name="title">
      @error('title')
     <div class="alert alert-danger">{{ $message }}</div>
       @enderror
      </div>
      
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
@stop


