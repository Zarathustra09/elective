<?php
  

  require_once 'config/connection.php';



  $display_all = "SELECT * FROM employee_data";
  $query = mysqli_query($connection, $display_all);

?>



























<!DOCTYPE html>
<html>
<head>
  <title>Simple Homepage</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    
    header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
    
    h1 {
      margin: 0;
      font-size: 28px;
    }
    
    nav {
      background-color: #f2f2f2;
      text-align: center;
      padding: 10px;
    }
    
    nav a {
      text-decoration: none;
      color: #333;
      padding: 10px;
    }
    
    nav a:hover {
      background-color: #ccc;
    }
    
    main {
      padding: 20px;
      text-align: center;
    }
    
    footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
  </style>
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
      <a href="#" class="btn btn-success">Export as Excel</a>
      </div>
      <div class="col">
      <a href="#" class="btn btn-success">Import as Excel</a>
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
