<?php

$servername = 'localhost';
$username = 'root';
$password= 'root';
$dbname = 'acxss';
$port = 8889;



$connect = mysqli_connect(
   $servername,
   $username,
   $password,
   $dbname,
   $port
);

if(!$connect){
    die("database not connected");
}
//echo "Connected";

if($_SERVER['REQUEST METHOD'] == 'POST')
{
    $txt = $_POST['search'];
    $sql = "SELECT * FROM 'users' WHERE 'name' like '%".$txt."%'";
    $result = mysqli_query($connect,$sql);

    if(mysqli_num_rows($result))
    {
        while($row = mysqli_fetch_assoc($result))
        {
            echo '<tr class="userDatatable-header">'.$row['name'].'</table>';
        }
    }
    else 
    {
        echo 'Record Not Found';
    }


}

?> 