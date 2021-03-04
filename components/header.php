<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <div class="main">
  <nav>
               <div class="logo">
                   <img src="../images/logo.png">
               </div>

               <div class="nav-links">
                   <ul>
                    <?php
                    if (isset($_SESSION["role"]) && $_SESSION['role'] == '1') {
                    ?>
                    <li><a href="../views/dashboard.php">Dashboard</a></li>
                    </a>
                    <?php
                    }
                    ?>
                       <li><a href="../views/index.php">Home</a></li>
                       <li><a href="../views/phoneSpecs.php">Phone full specs</a></li>
                       <li><a href="#">Something</a></li>
                       <li><a href="#footer">About Us</a></li>
                       <li><a href="../views/contactus.php">Contact Us</a></li>
                       <?php
                       if (isset($_SESSION["role"])) {
                       ?>
                       <li><a href="../businessLogic/logout.php">Logout</a></li>
                    </a>
                    <?php
                    }
                    ?>
                   </ul>
               </div>
           </nav>
  </div>
  