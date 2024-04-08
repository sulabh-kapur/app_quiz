@extends('layouts.test_default')
@section('content')
<div class="container">
  <h2>Test Add </h2>
  <form method="post" action = "{{route('test.store')}}">
  @csrf
  <div class="col-md-12">
    <div class="form-group">
      <label for="title">Test Title</label>
      <input type="text" class="form-control" id="title" placeholder="Test Title" name="title">
      </div>
    </div>

    <div class="col-md-12">
      <div class="form-group">
      <label for="testdate">Test Date</label>
      <input type="date" class="form-control" id="testdate" name="testdate">
      </div>
    </div>

    <div class="col-md-12">
      <div class="form-group">
          <label for="usr"> Select Subject:</label>
          <select class="form-control" name="subject_id" id="sel1">
          <?php foreach($subjects as $key => $value){?>
          <option value="<?php echo $value['id']; ?>"><?php echo $value['title']; ?></option>
          <?php } ?>
      </select>
      </div>
    </div>


<?php if(count($question) > 0) { ?>
  <div class="col-md-12">
    <hr/>
        
  <table class="table">
    <thead>
      <tr>

      <th>Action</th>
        <th>Questions</th>
        <th>Option 1</th>
        <th>Option 2</th>
        <th>Option 3</th>
        <th>Option 4</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($question as $key => $value){?>
      
      <tr>
      <td> <input type="checkbox" name= "question_id[]" value="{{$value['id']}}"></td>
      <td><?php echo $value['title']; ?></td>
      <td><?php echo $value['option1']; ?></td>
      <td><?php echo $value['option2']; ?></td>
      <td><?php echo $value['option3']; ?></td>
      <td><?php echo $value['option4']; ?></td>
      
     

      
</tr>
    </tbody>
    <?php } ?>
  </table>
    </div>
  {{$question->links()}}
  <?php }  else {?>
    <h3>Sorry,No Data is available!</h3>
<?php } ?>
</div>

      
    <button type="submit" class="btn btn-primary">Save</button>
  </form>
</div>
@stop


