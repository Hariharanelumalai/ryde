
<?php


$db=mysqli_connect ("111.118.215.242", "rydef1gn_ryde", "Welcome","rydef1gn_ryde") ;

 

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>



<!DOCTYPE html>
<html>
<head>
  <div class="b1">
  <title>Ryde Foundation</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
    /* Make the image fully responsive */
  .carousel-inner img {
      width:120%;
      height: 500px;
  }
</style>
<div class="container-fluid">
  <div class="row">
   <div class="col-sm-3"> 
  <img src="http://www.rydefoundation.in/rydefndimages/image/bg.png" class="float-left"  width="100" height="100"> 
  </div>
  <div class="col-sm-6">
<center><h1 style="font-family: Castellar;">RYDE FOUNDATION</h1></center>

 <center> <p style="font-size: 29px; font-family:Algerian;"><b>R</b>ural <b>Y</b>outh <b>D</b>evelopment <b>E</b>ducation </p></center>
</div>
<div class="col-sm-2">
  <br>
 solomon@rydecs.com
   <br>044-27973411
   
    </div>
<div class="col-sm-1">
  <br>
<button style="margin-left:-35px;"type="button" class="btn btn-info" ><a href="http://www.rydefoundation.in/rydefndhtml/students_user/Index.html" style="text-decoration: none;color: white;">logout</a></button>
</div>

    </div>
    </div>
</head>
<body>
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
 <ul class="navbar-nav">
    <li class="nav-item" >
      <a class="nav-link " href="st_add_students.php">Add Student</a>
      
    </li>

    
     
    </li>
     <li class="nav-item">
      <a class="nav-link" href="st_manage_students.php">Manage Student</a>
      
    </li>

    <li class="nav-item">
      <a class="nav-link" href="st_add_admin.php">Add Admin</a>
      
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="st_admin_details.php">Admin Details</a>
      
    </li>
    
    
     
     <li class="nav-item">
      <a class="nav-link" href="st_manage_admin.php">Manage Admin</a>
     
    </li>

  </ul>
 
  <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text">
    <button class="btn btn-success" type="submit" style="margin-left: 270px;">Search</button>
  </form>
</nav>
</nav>

  </div>
</div>
  

  
 
  <?php

// include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from st_user"); // fetch data from database

while($data = mysqli_fetch_array($records))
{ 

 ?>
 <div class="media border p-7"> 
   <img src="https://www.pngfind.com/pngs/m/608-6087418_man-icon-free-icon-man-hd-png-download.png" class="align-self-start mr-3" style="width:300px;height: 300px;">
    <div class="media-body">
 <table style="width:100%">
 
      
   <tr> 
  <td><h4> <b id="<?php echo $data['st_name']; ?>">Name: </b><?php echo $data['st_name']; ?></h4></td> </tr> 


        <tr> <td><b>Role:</b><?php echo $data['st_role']; ?></td>  



       <td> <b>College:</b><?php echo $data['st_clg']; ?></td> </tr> 



         <tr> <td>  <b> Branch:</b><?php echo $data['st_branch']; ?></td>  


          <td>  <b> Batch:</b><?php echo $data['st_batch']; ?></td></tr>  

             <tr> <td>  <b>Learning at Ryde Center:</b><?php echo $data['st_studing']; ?> </td>  


              <td> <b> Web Pages Developed:</b><?php echo $data['st_wpd']; ?></td></tr>  

               <tr><td> <b>Ambition in life:</b><?php echo $data['st_ambition']; ?></td>  

               <td><b>Hobbies:</b><?php echo $data['st_hobbies']; ?></td></tr>  

                                 
                 

                    <tr> <td><b>Fathers Name:</b><?php echo $data['st_fname']; ?></td>  

                                <td><b> Fathers Job:</b><?php echo $data['st_fjob']; ?></td></tr>  

                            <tr> <td>  <b> Mothers Name:</b><?php echo $data['st_mname']; ?>
  <td><b>Mothers Job:</b><?php echo $data['st_mjob']; ?></td>  </tr>
                                                  


          <tr>   

          <td> <b >Address:</b><?php echo $data['st_addr']; ?></td></tr>
        <tr>  <td><a href="st_manage_students.php? id=<?php echo $data['st_id']; ?>"  >Edit</a></td>


   <td><a href="st_user_delete.php? id=<?php echo $data['st_id']; ?>">Delete</a></td></tr>
                                                     
   </table>
    </div>
<br><br>
<br><br>
  </div><br><br><br>
<?php
}
?>
  
<br>

<?php

// include "edit.php"; // Using database connection file here

$id = $_GET['st_id']; // get id through query string

$qry = mysqli_query($db,"select * from st_user where st_id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
  
   $userid=$_POST["userid"];
  $branch=$_POST["branch"];
  $studing=$_POST["studing"];
  $ambition=$_POST["ambition"];
  $fname=$_POST["fname"];
  $mname=$_POST["mname"];
  $addr=$_POST["addr"];
  $pswd=$_POST["pswd"];
  $name=$_POST["name"];
  $role=$_POST["role"];
  $clg=$_POST["clg"];
  $batch=$_POST["batch"];
  $wpd=$_POST["wpd"];
  $hobbies=$_POST["hobbies"];
  $fjob=$_POST["fjob"];
  $mjob=$_POST["mjob"];
  
    $edit = mysqli_query($db,"update st_user set 

      st_userid='$userid', 
      
     st_pswd ='$pswd',

      st_name='$name',

      st_role='$role',


      st_branch='$branch',

      st_studing='$studing',

     st_ambition ='$ambition',

     st_fname ='$fname',

     st_mname='$mname',

     st_addr ='$addr',

     st_clg='$clg',


      st_batch='$batch',

      st_wpd='$wpd',


      st_hobbies='$hobbies',

     st_fjob ='$fjob',

    st_mjob ='$mjob'

      


     where st_id='$id'");
  
    // if($edit)
    // {
    //     mysqli_close($db); // Close connection
    //     header("location:all_records.php"); // redirects to all records page
    //     exit;
    // }
    // else
    // {
    //     echo mysqli_error();
    // }      
}
?>




<form method="POST" id="edit">
  <h3>Update Data</h3><br>

  <input type="text" name="userid" value="<?php echo $data['st_userid'] ?>" placeholder="Enter UserId" Required>

    <input type="text" name="pswd" value="<?php echo $data['st_pswd'] ?>" placeholder="Enter Password" Required>


  <input type="text" name="name" value="<?php echo $data['st_name'] ?>" placeholder="Enter Name" Required>

  <input type="text" name="role" value="<?php echo $data['st_role'] ?>" placeholder="Enter Roll" Required>

  <input type="text" name="branch" value="<?php echo $data['st_branch'] ?>" placeholder="Enter Branch" Required>

  <input type="text" name="studing" value="<?php echo $data['st_studing'] ?>" placeholder="Enter Learning in rydefoundation" Required>

  <input type="text" name="ambition" value="<?php echo $data['st_ambition'] ?>" placeholder="Ambition" Required>

  <input type="text" name="fname" value="<?php echo $data['st_fname'] ?>" placeholder="Enter Fathers Name" Required>

  <input type="text" name="mname" value="<?php echo $data['st_mname'] ?>" placeholder="Enter Mothers Name" Required>

  <input type="text" name="addr" value="<?php echo $data['st_addr'] ?>" placeholder="Enter Address" Required>

  <input type="text" name="clg" value="<?php echo $data['st_clg'] ?>" placeholder="Enter college" Required>

  <input type="text" name="batch" value="<?php echo $data['st_batch'] ?>" placeholder="Enter Batch" Required>

  <input type="text" name="wpd" value="<?php echo $data['st_wpd'] ?>" placeholder="Enter Web Pages Created" Required>

  <input type="text" name="hobbies" value="<?php echo $data['st_hobbies'] ?>" placeholder="Enter Hobbies" Required>
  <input type="text" name="fjob" value="<?php echo $data['st_fjob'] ?>" placeholder="Enter Fathers Job" Required>

  <input type="text" name="mjob" value="<?php echo $data['st_mjob'] ?>" placeholder="Enter Mothers Job" Required>

  
  <input type="submit" name="update" value="Update"  >



</form>

<footer>
 
<div class="container text-center">
  <div class="row">
    <div class="col-sm-4">
<center>      <h2>Address</h2></center>
<br>
    <center>  <p style="font-size: 16px"> <i class="fas fa-home"style="font-size: 16px"></i>

     Old No:42a,New noL:65/1<br>
  Opposite to All Women Police,Station,<br>Ponneri Road,<br>
      Ponneri 601 204</center></p>
    </div>
    <div class="col-sm-4">
     <center> <h2>Weblinks</h2></center>
<br>
     <center> <p style=" font-size: 16px"> <i class="fas fa-envelope"style="font-size: 16px"> </i>
contact@rydecs.com</p>
     <p style=" font-size: 16px"> <i class="fas fa-globe"style="font-size: 10px"></i>www.rydes.com</p></center>
    </div>
    <div class="col-sm-4">
    <center>  <h2><i class="fas fa-phone-volume"style="font-size: 22px"> </i> Contact Us</h2>   </center>  
    <br>   
   <center>    
      <p style=" font-size: 16px">044-2797 3411</p>
      <p style=" font-size: 16px"> 9840073411 </p>
      </center>
    </div>
  </div>
</div>
</body>
</html>