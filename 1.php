<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>

<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
</head>
<body>

<h1>UiTM</h1>

<link rel="stylesheet" href="stylee45.css">
<link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">

<nav role="navigation" class="primary-navigation">
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">IMPORT &dtrif;</a>
      <ul class="dropdown">
        <li><a href="#">C7-INVENTORI</a></li>
        <li><a href="#">KEWPA.14</a></li>
      </ul>
    </li>
    <li><a href="#">ACTION &dtrif;</a>
      <ul class="dropdown">
        <li><a href="#">C7-INVENTORI</a></li>
        <li><a href="#">KEWPA.14</a></li>
      </ul>
    </li>
    <li><a href="#">EXPORT &dtrif;</a>
      <ul class="dropdown">
        <li><a href="#">C7-INVENTORI</a></li>
        <li><a href="#">KEWPA.14</a></li>
      </ul>
    </li>
    <li><a href="#">LOGOUT</a></li>
  </ul>
</nav>



</html>

<?php 
}else{
     header("Location: index1.php");
     exit();
}
 ?>