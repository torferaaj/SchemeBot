<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

     <!-- Title icon -->
     <link rel="shortcut icon" type="x-icon" href="./img/bot-logo.png">

     <!-- Bootstrap CSS v5.0.2 -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     
     <!-- FontAwesome -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
     <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
 
</head>
<body>
    <!-- Navbar 1 -->
    <section class="bg-transparent">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(56, 54, 54);">
            <div class="container-fluid" style="height: 35px;" >
                <a class="navbar-brand" href="https://www.tn.gov.in/" style="font-size: 20px; color: rgb(235, 225, 225);">
                    <img src="./img/TN-Govt.png" alt="TN logo" width="35" class="d-inline-block align-text-top">
                    Government of tamilnadu
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="left: 100px;">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link"  style="color: rgb(235, 225, 225);" href="https://tirunelveli.nic.in/"><u><i>Tirunelveli District</i></u></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  style="color: rgb(235, 225, 225);" href="https://tirunelveli.nic.in/"><u><i>திருநெல்வேலி மாவட்டம்</i></u></a>
                        </li>
                    <li class="nav-item dropdown" style="left: 85%;">
                            <a class="nav-link dropdown-toggle"  style="color: rgb(235, 225, 225); font-size: 13px;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Language/மொழி
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="font-size: small;">
                                <li><a class="dropdown-item" href="./home_tam.php"><b>தமிழ்</b></a></li>
                                <!-- <li><hr class="dropdown-divider"></li> -->
                                <li><a class="dropdown-item" href="./index.php"><b>English</b></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    
    <div>
    
<table  class="table  table-dark table-hover">
  <tr>
    <th>எண்</th>
    <th>திட்டத்தின் பெயர்</th>
    <th>பயனாளி வகை</th>
    <th>தொகை </th>
    <th>தகுதி அளவுகோல்கள்</th>
    <th>துறை</th>
  </tr>
  <?php

         include "config.php"; // Using database connection file here
        
        

        $records = mysqli_query($conn,"select nameTam,bcTam,amountTam,ecTam,deptTam from records where bcTAM like '%மகளிர்%' or bcTam like '%பெண்%' or bcTam like '%மாணவிகள்%' or bcTam like '%விதவை%'"); // fetch data from database
          if($records->num_rows>0){    
              $i=1;

   while($data = mysqli_fetch_array($records))
        {
           ?>
  <tr >
    <td><?php echo $i++ ?></td>
    <td><?php echo $data['nameTam']; ?></td>
     <td><?php echo $data['bcTam']; ?></td>
      <td><?php echo $data['amountTam']; ?></td>
       <td><?php echo $data['ecTam']; ?></td>
        <td><?php echo $data['deptTam']; ?></td>
    
     
     </tr>
  <tr>
  <?php
} 
}else{
    echo "<table><p>no records found</p></table><style>p{text-align:center;font-size:24px;}</style>";
}

?>
</tr>
</table>
<?php mysqli_close($conn);  // close connection ?>
    </div>
</body>
</html>