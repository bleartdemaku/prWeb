<?php
include '../components/header.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact us</title>
	<link rel="stylesheet" href="../css/contactus.css">
	<script src="scripts.js"></script>
</head>
<body>
    <div class="main">
<div class="wrapper">
  <h2>Contact us</h2>
  <div id="error_message"></div>
  <form id="myform" action = '' onsubmit="return validate();">
    <div class="input_field">
        <input type="text" placeholder="Name" name="name">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Subject" name="subject">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Phone" name="phone">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Email" name="email">
    </div>
    <div class="input_field">
        <textarea placeholder="Message" name="message"></textarea>
    </div>
    <div class="btn">
        <input type="submit">
    </div>
  </form>
</div>
</div>

</body>
</html>