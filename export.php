<?php  
//export.php  
session_start();
require_once 'config/connection.php';
$user = $_SESSION['username'];
$display = "SELECT * FROM employee_data where username = '$user'";
$result = mysqli_query($connection, $display);

$output = '';

if(isset($_POST["export"]))
{
 $query = "SELECT * FROM tbl_customer";
 
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                        <th>Name</th>
                        <th>Department</th>
                        <th>Salary</th>
                        <th>Salary_Date</th>
                     
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["name"].'</td>  
                         <td>'.$row["department"].'</td>  
                         <td>'.$row["salary"].'</td>  
                        <td>'.$row["salary_date"].'</td>  
                       
                                        </tr>



                 
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  header("Pragma: no-cache"); 
  header("Expires: 0");
  echo $output;
 }
}
?>
