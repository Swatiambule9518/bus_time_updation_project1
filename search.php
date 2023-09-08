<?php
  include"lock.php";
?>


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
       $qry=mysqli_query($con,"SELECT * FROM friends WHERE f_name LIKE '%$search%' OR f_cont LIKE '%$search%' OR f_mail LIKE '%$search%'
       OR f_gender LIKE '%$search%' OR f_addres LIKE '%$search%'  ");

   echo"<table class='table'>
   <tr>
   <th>ID</th>
   <th>NAME</th>
   <th> CONT</TH>
   <th> ADDRESS</th>
   <th>BIRTHDATE</th>
   <th>MAIL</th>
   <th> BLOOD</TH>
   <th> NICKNAME</th>
   <th>HOBBIES</th>
   <th>FIRST_MEET</th>
   <th> HATES</TH>
   <th> LIKE</th>
   <th>FAV_SONG</th>
   <th>INSTA_ID</th>
   <th> SNAP_ID</TH>

   </tr>";




  while($row=mysqli_fetch_array($qry))
  {
    echo"<tr>";
    echo "<td>".$row["f_id"]."</td>";
    echo"<td>".$row["f_name"]."</td>";
    echo"<td>".$row["f_cont"]."</td>";
    echo "<td>".$row["f_addres"]."</td>";
    echo"<td>".$row["f_birthdate"]."</td>";
    echo"<td>".$row["f_mail"]."</td>";
    echo"<td>".$row["f_blood"]."</td>";
    echo"<td>".$row["f_nikname"]."</td>";
    echo"<td>".$row["f_hobbies"]."</td>";
    echo"<td>".$row["f_first_meet"]."</td>"; 
      echo"<td>".$row["f_hates"]."</td>";
      echo"<td>".$row["f_like"]."</td>"; 
        echo"<td>".$row["f_fav_song"]."</td>";
        echo"<td>".$row["f_insta_id"]."</td>";
        echo"<td>".$row["f_snap_id"]."</td>";


  }
}
?>
