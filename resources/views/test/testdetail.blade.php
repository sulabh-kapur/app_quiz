@extends('layouts.test_default')
<div class="container">

  <h2>Question Listing</h2>          
  <table class="table">
    <thead>
      <tr>
        <th>Title</th>
        <th>Option 1</th>
        <th>Option 2 </th>
        <th>Option 3</th>
        <th>Option 4</th>
        <th>Right Answer</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($test_detail->getQuestion as $key => $value){?>
      <tr>
      <td><?php echo ($value->getQuestion)?$value->getQuestion->title: ''?></td>
      <td><?php echo ($value->getQuestion)?$value->getQuestion->option1: ''?></td>
      <td><?php echo ($value->getQuestion)?$value->getQuestion->option2: ''?></td>
      <td><?php echo ($value->getQuestion)?$value->getQuestion->option3: ''?></td>
      <td><?php echo ($value->getQuestion)?$value->getQuestion->option4: ''?></td>
      <td><?php echo ($value->getQuestion)?$value->getQuestion->rightans: ''?></td>
</tr>
    </tbody>
    <?php } ?>
  </table>
</div>
</body>
</html>
