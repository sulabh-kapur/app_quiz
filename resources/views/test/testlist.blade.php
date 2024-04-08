@extends('layouts.test_default')
<div class="container">
<?php if(count($test_list) > 0) { ?>
  <h2>Test Listing</h2>          
  <table class="table">
    <thead>
      <tr>
        <th>Title</th>
        <th>Subject Name</th>
        <th>Test Date</th>
        <th>Action</th?
      </tr>
    </thead>
    <tbody>
    <?php foreach($test_list as $key => $value){?>
      <tr>
      <td><?php echo $value['title']; ?></td>
      <td><?php echo ($value->getSubject)?$value->getsubject->title: ''?></td>
      <td><?php echo $value->testdate->format('F-d-Y'); ?></td>
      <td><a class="btn btn-primary btn-grid" href="/test/{{$value->id}}">View</a>
      

    <?php if(date('Y-m-d',strtotime($value->testdate)) == date('Y-m-d')){?>
     <a class="btn btn-danger btn-grid" href="/quiz/{{$value->id}}">Attempt</a>
     <?php } ?>
    </td>
      
      
     

      
</tr>
    </tbody>
    <?php } ?>
  </table>
  {{$test_list->links()}}
  <?php }  else {?>
    <h3>Sorry,No Data is available!</h3>
<?php } ?>
</div>
</body>
</html>
