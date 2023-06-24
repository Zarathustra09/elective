<?php
  session_start();
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
 
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
          <th>Department</th>
          <th>Salary</th>
          <th>Date</th>
         
        </tr>
      </thead>
      <tbody>
        <tr>



        <?php while($rows = mysqli_fetch_array($query)){ ?>


          <td><?php echo $rows['name']; ?></td>
          <td><?php echo $rows['department']; ?></td>
          <td><?php echo $rows['salary']; ?></td>
          <td><?php echo $rows['salary_date']; ?></td>
    

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



  


</body>
</html>
