<?php  
//export.php  

require_once 'config/connection.php';

$display = "SELECT * FROM employee_data";
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
                        <th>Age</th>
                        <th>Sex</th>
                        <th>Department</th>
                        <th>Salary</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["name"].'</td>  
                         <td>'.$row["age"].'</td>  
                         <td>'.$row["sex"].'</td>  
                        <td>'.$row["department"].'</td>  
                        <td>'.$row["salary"].'</td>
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
