
<?php


$db=mysqli_connect ("111.118.215.242", "rydef1gn_ryde", "Welcome","rydef1gn_ryde") ;

 

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}





if($_POST)
	{
		$uname = $_POST['uname'];
		$pswd = $_POST['pswd'];
		
		$sql = "SELECT * FROM `st_admin` where st_uname = '".$uname."' and st_pswd = '".$pswd."' ";
		$query =  mysqli_query($db, $sql);
		if(mysqli_num_rows($query)>0)
		{
			$row = mysqli_fetch_assoc($query);
			session_start();
			$_SESSION['st_uname'] = $row['st_uname'];

            // echo "<script> alert(' Password succesful login.'); </script>";

echo '<script type="text/javascript">
     window.location.href = "st_add_admin.php";
     </script>';  
           
			
// header("Location:st_add_admin.php");


		}
		else
		{
			echo "<script> alert('Invalid userid or Password.'); </script>";
		}
	}

    ?>  



            
      






<html>
<head>

     <style>
       
.black{

     margin: 0;
 .0
 0.................    padding: 0;
     background-color: #3C4858;;
     height: 100%;
     width: 100%;
     opacity: 0.8;

}


       .img{
        background-image: url("back.jpg");
        background-repeat: no-repeat;
        background-size:cover;       
       }

.box{

 
    background: #f5f5f5;
    color: red;
    top: 50%;
    left: 30%;
    opacity:1;
    position: absolute;
    transform: translate(40%,-30%);
    box-sizing: border-box;
    padding: 70px 30px;
    
}



.avatar{
    width: 100px;
    height: 100px;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);

}

h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
    color: black;
}

p{
    color: #f49126;
    margin: 0;
    padding: 0;
    font-weight: bold;
}

input{
    width: 100%;
    margin-bottom: 10px;
}

 input[type="text"], input[type="password"] ,input[type="email"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #673ab7;
    font-size: 16px;
}

input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #2196f3;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;

}


input[type="submit"]:hover
{
    cursor: pointer;
    background: #0097a7;
}

a
{
    text-decoration: none;
    font-size: 16px;
    line-height: 20px;
    color: #069818;
}


a:hover
{
    color: red;
}



    </style>




</head>
<body class="img">

<div class="black"> 

<div class="box">

    <img src="user.png"  class="avatar" >

        <h1>ADMIN LOGIN</h1>

        <form name="myform"  action="st_adminlogin.php" method="POST" >

            <p>Username</p>
            <input type="text" name="uname" placeholder="Enter Username " required="">

            <p>Password</p>
            <input type="password" name="pswd" placeholder="Enter Password" required="">


            <input type="submit" name="" value="Login">
            <br><br>
            

        </form>
        
    </div>

</div>


</body>

    </html>