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

if(isset($_POST['submit']))
{
    $firstName=$_POST['firstName'];
    $number=$_POST['number'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];

    $sql_query = "INSERT INTO form(firstName,number,email,gender)
    VALUES ('$firstName',$number,'$email','$gender')";

    if (mysqli_query($conn,$sql_query))
    {
        echo "new details entry inserted successfully";
    }
    else{
        echo "error: " .$sql ."" .mysqli_error($conn);
    }
    mysqli_close($conn);
    header("location: paper2.html");
}

?>