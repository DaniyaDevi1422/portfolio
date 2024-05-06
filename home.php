<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="sweetalert.js"></script>
</head>
</html>
<?php
$con=mysqli_connect("localhost","root","","form");
if(isset($_POST["submit"]))
{
$n=$_POST['Name'];
$s=$_POST['email'];
$d=$_POST['message'];
$sql = "INSERT INTO `profile` (`Name`, `email`, `message`) VALUES ('$n', '$s', '$d')";

$query=mysqli_query($con,$sql);

//header("Location:home.html");
if($query)
{
    ?>
    <script>
    swal({
    title: "Good job!",
    text: "Your message has been sent",
    icon: "success",
    }) .then((value)=> {
    window.location.href = "home.html";
});
    </script>
    <?php
}
}
?>