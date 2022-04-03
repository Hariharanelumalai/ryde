






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





$db=mysqli_connect ("111.118.215.242", "rydef1gn_ryde", "Welcome","rydef1gn_ryde") ;

 

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
} 


error_reporting(0);
// Create connection

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
  

  $sql="INSERT INTO st_user 
  (st_userid,st_pswd,st_name,st_role,st_branch,st_studing,st_ambition,st_fname,st_mname, st_addr,st_clg,st_batch,st_wpd,st_hobbies,st_fjob,st_mjob) VALUES 
  ('$userid','$pswd','$name','$role','$branch','$studing','$ambition','$fname','$mname','$addr','$clg','$batch','$wpd','$hobbies','$fjob','$mjob')";
  $db->query($sql);
  
  
  
  
  

?>

 
 <div class="media border p-7"> 
   
    <div class="media-body">
 <table style="width:100%">
 
 <form action="st_add_students.php" method="POST">     
  

   <tr> 
  <td><h4> <b id="">Name: </b><input type="text" name="name" required=""></h4></td> </tr> 


        <tr> <td><b>Role:</b><input type="text" name="role"></td>  



       <td> <b>College:</b><input type="text" name="clg"></td> </tr> 



         <tr> <td>  <b> Branch:</b> <input type="text" name="branch"></td>  


          <td>  <b> Batch:</b> <input type="text" name="batch">
</td></tr>  

             <tr> <td>  <b>Learning at Ryde Center:</b><input type="text" name="studing"> </td>  


              <td> <b> Web Pages Developed:</b> <input type="text" name="wpd">
</td></tr>  

               <tr><td> <b>Ambition in life:</b><input type="text" name="ambition"></td>  

               <td><b>Hobbies:</b><input type="text" name="hobbies"></td></tr>  

                                 
                 

                    <tr> <td><b>Fathers Name:</b> <input type="text" name="fname">
</td>  

                                <td><b> Fathers Job:</b> <input type="text" name="fjob"></td></tr>  

                            <tr> <td>  <b> Mothers Name:</b> <input type="text" name="mname">

  <td><b>Mothers Job:</b> <input type="text" name="mjob">
</td>  </tr>
                                                  
 <tr> <td><b>User Id:</b> <input type="text" name="userid">
</td>  

                                <td><b> Password:</b> <input type="text" name="pswd"></td></tr>  

          <tr>   

          <td> <b >Address:</b> <input type="text" name="addr">
           <td>  <input type="submit" name="submit" value="submit" id="but"></td>

</td></tr>
      
                                                     
   </table>
    </div>
    </form>
<br><br>
<br><br>
  </div><br><br><br>

  
<br>



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