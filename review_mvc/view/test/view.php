
<a href="index.php?action=add">Add new</a>
<table>
  <thead>
  <tr>
      <th>ID</th>
      <th>First Name</th>
       <th>Last Name</th>
       <th>Province</th>
   </tr>
  </thead>
  <?php 
   if(isset($data['view'])){
      $id = 1;
      foreach($data['view'] as $rows){
         ?>
         <tbody>
         <tr>
            <td><?php echo $rows['emp_id']; ?></td>
            <td><?php echo $rows['emp_fname']; ?></td>
            <td><?php echo $rows['emp_lname']; ?></td>
            <td><?php echo $rows['pro_name']; ?></td>
         </tr>
      </tbody>
      <?php
      $id++;
      }
   }
  ?>

</table>