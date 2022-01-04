<?php
$servername="localhost";
$username="root";
$password="";
$database_name="mydemodb";

$conn=mysqli_connect($servername,$username,$password,$database_name);

if(!$conn)
{
    die("Connection Failed:".mysqli_connect_error());
}
if(isset($_POST['back'])){
    header("location: paper1.html");

}

if(isset($_POST['next']))
{
    $fav_language1=$_POST['fav_language1'];
    $fav_language2=$_POST['fav_language2'];
    $fav_language3=$_POST['fav_language3'];
    $fav_language4=$_POST['fav_language4'];
    $fav_language5=$_POST['fav_language5'];
    $fav_language6=$_POST['fav_language6'];
    $fav_language7=$_POST['fav_language7'];
    $fav_language8=$_POST['fav_language8'];
    $fav_language9=$_POST['fav_language9'];


    $sql_query = "INSERT INTO form(fav_language1,fav_language2,fav_language3,fav_language4,fav_language5,fav_language6,fav_language7,fav_language8,fav_language9)
    VALUES ('$fav_language1','$fav_language2','$fav_language3','$fav_language4','$fav_language5','$fav_language6','$fav_language7','$fav_language8','$fav_language9')";

    if (mysqli_query($conn,$sql_query))
    {
        echo "new details entry inserted successfully";
    }
    else{
        echo "error: " .$sql ."" .mysqli_error($conn);
    }
    mysqli_close($conn);
    header("location: paper3.html");

}

?>