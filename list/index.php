<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
<!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
  
<h1 class="text-center py-4 my-4">Revise Your Tasks</h1>

    <div class="w-50 m-auto">
    <form action="data.php" method="post" autocomplete="off">
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title" placeholder="Type Here To Add Tasks ..." Required>
  </div><br>
  <button class="btn btn-success">Add To List</button>
</form>

</div><br>
    <hr class="bg-dark w-50 m-auto">
    <div class="lists w-50 m-auto my-4">
        <h1>Your Lists</h1>
        <div id="lists">
        <table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col" name="id">listNum</th>
      <th scope="col">ToDo List</th>
    <th>Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
        include '../database.php';
        $sql="SELECT * FROM todo";
        $result=mysqli_query($conn, $sql);

        if($result){
          while($row=mysqli_fetch_assoc($result)){
              $id=$row['id'];
              $title=$row['title'];
      ?>
        <tr>
        <td><?php echo $id ?></td>
        <td><?php echo $title  ?></td>
      <td>
<a class="btn btn-success btn-sm" href="edit.php?id=<?php echo $id ?>" role="button">Edit</a>
<a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $id ?>" role="button">Delete</a>
</td>
</tr>
<?php

              
          }
      }
  ?>
  
 
</tbody>
</table>
      </div>
  </div>






</body>
</html>