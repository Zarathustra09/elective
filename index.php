<?php
  
  require_once 'config/connection.php';

  $display_all = "SELECT * FROM employee_data";
  $query = mysqli_query($connection, $display_all);

?>




<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="styles/style.css" rel="stylesheet">
 
</head>


<?php
	include ('includes/header.html');
?>

<body>

  <main>
  <div class="container">
    <table class="table table-striped" style="overflow: auto; height: 700px">
      <thead class="thead-dark">
        
        <tr>
          <th>Name</th>
          <th>Age</th>
          <th>Sex</th>
          <th>Department</th>
          <th>Salary</th>
         
        </tr>
      </thead>
      <tbody>
        <tr>



        <?php while($rows = mysqli_fetch_array($query)){ ?>


          <td><?php echo $rows['name']; ?></td>
          <td><?php echo $rows['age']; ?></td>
          <td><?php echo $rows['sex']; ?></td>
          <td><?php echo $rows['department']; ?></td>
          <td><?php echo $rows['salary']; ?></td>

        </tr>
        <?php } ?>





      </tbody>
    </table>
    
  </div>
  </main>

  <br><br>
<center>

  <div class="container">
    <div class="row btn-container">
      <div class="col">

      <form method="post" action="export.php">
      <input type="submit" name="export" class="btn btn-success" value="Export" />
      </form>

      </div>
      <div class="col">

      <form method="post" action="email.php">
      <input type="submit" name="export" class="btn btn-success" value="Export" />
      </form>

      </div>
    </div>
  </div>



  </center>


  
<br><br><br>



  <?php
	include ('includes/footer.html');
  ?>


</body>
</html>
