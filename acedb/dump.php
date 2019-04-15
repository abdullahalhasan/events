<?php
//ENTER THE RELEVANT INFO BELOW
/*$mysqlUserName      = "root";
$mysqlPassword      = "";
$mysqlHostName      = "localhost";
$DbName             = "badas_db";
$backup_name        = "mybackup.csv";
$tables             = "badas";*/
error_reporting(0);
//export.php
$connect = mysqli_connect("localhost", "root", "", "incepta_events");
//include('db_connect.php');
$output = '';

$query = "SELECT * FROM `acedb_table` ORDER BY id DESC";
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
    $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                        <th class="th-md">#
                        </th>
                        <th class="th-md">Name
                        </th>
                        <th class="th-md">Mobile Number
                        </th>
                        <th class="th-md">Organization
                        </th>
                        <th class="th-md">Question One
                        </th>
                        <th class="th-md">Question Two
                        </th>
                        <th class="th-md">Question Three
                        </th>
                        <th class="th-md">Question Four
                        </th>
                        <th class="th-md">Question Five
                        </th>                       
                    </tr>
  ';
    while($row = mysqli_fetch_array($result))
    {
        $output .= '
                    <tr>  
                       <td>'.$row["id"].'</td>  
                       <td>'.$row["name"].'</td>  
                       <td>'.$row["mobile"].'</td>
                       <td>'.$row["organization"].'</td>  
                       <td>'.$row["q1"].'</td>    
                       <td>'.$row["q2"].'</td>  
                       <td>'.$row["q3"].'</td>
                       <td>'.$row["q4"].'</td>  
                       <td>'.$row["q5"].'</td>
                    </tr>
   ';
    }
    $output .= '</table>';
    header('Content-Type: application/xls');
    header('Content-Disposition: attachment; filename=acedb_report.xls');
    echo $output;

}
?>