
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
    header("location: paper2.html");

}

if(isset($_POST['submit']))
{
    $fav_language10=$_POST['fav_language10'];
    $fav_language11=$_POST['fav_language11'];
    $fav_language12=$_POST['fav_language12'];
    $fav_language13=$_POST['fav_language13'];
    $fav_language14=$_POST['fav_language14'];
    $fav_language15=$_POST['fav_language15'];
    $fav_language16=$_POST['fav_language16'];
    $fav_language17=$_POST['fav_language17'];
    $fav_language18=$_POST['fav_language18'];


    $sql_query = "INSERT INTO form(fav_language10,fav_language11,fav_language12,fav_language13,fav_language14,fav_language15,fav_language16,fav_language17,fav_language18)
    VALUES ('$fav_language10','$fav_language11','$fav_language12','$fav_language13','$fav_language14','$fav_language15','$fav_language16','$fav_language17','$fav_language18')";

    if (mysqli_query($conn,$sql_query))
    {
        echo "new details entry inserted successfully";
    }
    else{
        echo "error: " .$sql ."" .mysqli_error($conn);
    }
    mysqli_close($conn);

}

?>