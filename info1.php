<html>
    <head>
        <style>
         body{
               padding-left:60px;
               color:white;
               background-color:black;
         }
         table{
          border-style:solid;
          border-width:5px;
          border-color:white;

         }
         .AB{
          line-height: 31px;
          width: 97px;
          font-size: 11pt;
          font-family: tahoma;
          margin-top: 30px;
          margin-right: 60px;
          position: absolute;
          top: 0;
          right: 0;

         }
         div{
      
             margin: right 1800px;
         }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<center>
<h1>WELCOME</h1></center>
<button class="AB" ><a href= "logout.php"> logout</a></button>
  <form action="" method="POST">
    <!--<br>
    search by user value:
    <br>
    <input type="text" name="searchname"><br><br>-->

    <div class="input-group rounded">
  <input type="search" class="form-control rounded" placeholder="Search"  name="searchname" aria-label="Search" aria-describedby="search-addon" />
  <span class="input-group-text border-0" id="search-addon" name="searchname">
    <i class="fas fa-search"></i>
  </span>
</div>
<br><br>
    <button  > submit</button>

</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>

<?php
require_once("config.php");

if($_SERVER["REQUEST_METHOD"]=="POST")
{

  




  $search=$_POST["searchname"];
       $qry=mysqli_query($con,"SELECT * FROM info WHERE i_from LIKE '%$search%' OR i_to LIKE '%$search%' OR i_ar_time LIKE '%$search%'
       OR i_dept_time LIKE '%$search%' OR i_date LIKE '%$search%'  ");

   echo"<table class='table'>
   <tr>
   <th>Bus Number</th>
   <th>From</th>
   <th> To</TH>
   <th> arrival time</th>
   <th>dept time</th>
   <th>date</th>
   <th> status</TH>
   <th> current location</th>
   

   </tr>";




  while($row=mysqli_fetch_array($qry))
  {
    echo"<tr>";
    echo "<td>".$row["i_bus_num"]."</td>";
    echo"<td>".$row["i_from"]."</td>";
    echo"<td>".$row["i_to"]."</td>";
    echo "<td>".$row["i_ar_time"]."</td>";
    echo"<td>".$row["i_dept_time"]."</td>";
    echo"<td>".$row["i_date"]."</td>";
    echo"<td>".$row["i_status"]."</td>";
    echo"<td>".$row["i_current_loc"]."</td>";
    

  }
}
$qrry=mysqli_query($con,"SELECT * FROM info  ");
  
  


  echo"<table class='table'>
   <tr>
   <th>Bus Number</th>
   <th>From</th>
   <th> To</TH>
   <th> arrival time</th>
   <th>dept time</th>
   <th>date</th>
   <th> status</TH>
   <th> current location</th>
   

   </tr>";
  while($row=mysqli_fetch_array($qrry))
  {
    echo"<tr>";
    echo "<td>".$row["i_bus_num"]."</td>";
    echo"<td>".$row["i_from"]."</td>";
    echo"<td>".$row["i_to"]."</td>";
    echo "<td>".$row["i_ar_time"]."</td>";
    echo"<td>".$row["i_dept_time"]."</td>";
    echo"<td>".$row["i_date"]."</td>";
    echo"<td>".$row["i_status"]."</td>";
    echo"<td>".$row["i_current_loc"]."</td>";
    

  }
?>
