<?php 

$con = mysqli_connect('localhost', 'root','','test');

if($con){
    echo "Connection successful";
} else{

    echo "No connection";
}

mysqli_select_db($con,'test');

$name = $_POST['name'];
$rating = $_POST['rating'];
$suggestion = $_POST['suggestion'];

$query = "insert into suggestion values('','$name', '$rating','$suggestion') ";

echo "$query";

mysqli_query($con, $query);

header('location: suggest.html');

?>