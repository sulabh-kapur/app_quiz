@extends('layouts.subject_default')
<div class="container">
<?php if(count($subject_list) > 0) { ?>
  <h2>Subject Listing</h2>          
  <table class="table">
    <thead>
      <tr>
        <th>Title</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($subject_list as $key => $value){?>
      <tr>
      <td><?php echo $value['title']; ?></td>
      
</tr>
    </tbody>
    <?php } ?>
  </table>
  {{$subject_list->links()}}
  <?php }  else {?>
    <h3>Sorry,No Data is available!</h3>
<?php } ?>
</div>
</body>
</html>
