
<?php
session_start();
include("db_connect.php");
require "vendor/autoload.php";
if(!isset($_COOKIE['adminid'])&&$_COOKIE['adminemail']){ header('location:index.php');
      exit;}
	



$fromm=$_POST['startpoint'];
$too=$_POST['endpoint'];
$startsat=$_POST['receiptrange'];


$_SESSION['from']=$fromm;
$_SESSION['to']=$too;
$_SESSION['receiptrange']=$startsat;

$from=$_SESSION['from'];
$to=$_SESSION['to'];
$startsat=$_SESSION['receiptrange'];

?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<title>card</title>
<style>
  body{
		  	background:grey;
		  }
#bg {
 
  height: 450px;
 
  margin:60px;
 	float: left; 
 		
}

#id {
  width:250px;
  height:450px;
  position:absolute;
  opacity: 0.88;
font-family: sans-serif;

		  	transition: 0.4s;
		  	background-color: #FFFFFF;
		  		box-shadow: 0 4px 8px 0 rgba(0,0,0,0.6);
		  	transition: 0.4s;
		}

#id::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background: url('images/GPA2.png');
  background-repeat:repeat-x;
  background-size: 250px 450px;
  opacity: 0.2;
  z-index: -1;
  text-align:center;
  
 
}
 .container{
		  	font-size: 12px;
		  	font-family: sans-serif;
		    
		  }
		 .id-1{
		  	transition: 0.4s;
		  	width:250px;
		  	height:450px;
		  	background: #FFFFFF;
		  	text-align:center;
		  	font-size: 16px;
		  	font-family: sans-serif;
		  	float: left;
		  	margin:auto;		  	
		  	margin-left:270px;
		  		box-shadow: 0 4px 8px 0 rgba(0,0,0,0.6);
		  	transition: 0.4s;

		  	
		  }
</style>
	</head>

	<body>
		<script type="text/javascript">	
 		
 	window.print();
 </script>
 
		  <?php  
		  $sqluse ="SELECT * FROM Inorg WHERE id=1 ";
$retrieve = mysqli_query($db,$sqluse);
    $numb=mysqli_num_rows($retrieve); 
	while($foundk = mysqli_fetch_array($retrieve))
	                                     {
                                              $profileK= $foundk['pname'];
											  $name = $foundk['name'];
		                                  }

    
      $sqlmember ="SELECT * FROM Users WHERE id>=$from && id<=$to";
			       $retrieve = mysqli_query($db,$sqlmember);
				                    $count=0;
                     while($found = mysqli_fetch_array($retrieve))
	                 {
                      $title=$found['Mtitle'];$firstname=$found['Firstname'];$Sirname=$found['Sirname'];$rank=$found['Rank'];$id=$found['id'];$dept=$found['Department'];$Email=$found['Email'];
			                $count=$count+1;  $get_time=$found['Time']; $time=time(); $pass=$found['Staffid'];
			                $names=$title." ".$firstname;
						  $profile= $found['Picname'];
						 
		?>
		
      <div id="bg">
            <div id="id">
            	 <table>
        <tr> <td><?php  if($numb!=0 ){
                                    if($profile!=""){echo"<img src='media/$profileK'  width='45pxpx' height='45pxpx' alt=''>";}
									else{
										 echo"<img src='images/GPA.png' alt='Avatar'  width='45pxpx' height='45pxpx'>";
									    }	   
                               }else{
			?>
        	<img src="images/GPA.png" alt="Avatar"  width="45px" height="45px"> <?php }?>
        	</td>
        <td><h4><p align="center" style="margin:auto;color:#000080;font-style: italic;font-weight: bold;">Government Polytechnic,Amravati.</p></h4></td>
        <p align=left  style="margin:auto;color:black;font-weight:bold;font-style:italic;">STAFF ID.</p>
       </tr>         
    </table>    
				<center>
        <?php  
      	 

             	 	
             	 	if($profile!=""){          
										   echo"<img src='images/$profile' height='150px' width='150px' alt='' style='border: 2px solid black;'>";	   
									    }
								else{
									echo"<img src='admin/images/profile.png' height='150px' width='150px' alt='' style='border: 2px solid black;'>";	   
														     	
									} 
             	 	 ?>   </center> 
             	 	  <div class="container" align="center">
      
      	<p style="margin-top:2%">NAME:</p>
      	<p style="font-weight: bold;color:#000080;margin-top:-4%"><?php if(isset($names)){echo$names;} ?></p>
      	<p style="margin-top:-4%">DESIGNATION:</p>
      	<p style="font-weight: bold;;color:#000080;margin-top:-4%"><?php if(isset($rank)){ echo$rank;} ?></p>
       <p style="margin-top:-4%">SEVARTH ID:</p>
        <p style="font-weight: bold;;color:#000080;margin-top:-4%"><?php if(isset($pass)){ echo$pass;} ?></p>
      	<p style="margin-top:-4%">DEPARTMENT:</p>
      	<p style="font-weight: bold;;color:#000080;margin-top:-4%"><?php if(isset($dept)){ echo$dept;} ?></p> 
      	<p style="margin-top:-4%">BLOOD GROUP:</p>
      	<p style="font-weight: bold;;color:#000080;margin-top:-4%"><?php if(isset($Email)){ echo$Email;} ?></p>     	
      	<p style="margin-top:-4%">MOBILE NO:</p>
      	<p style="font-weight: bold;;color:#000080;margin-top:-4%"><?php if(isset($Sirname)){ echo$Sirname;} ?></p>
            
      </div>
            </div>
            <div class="id-1">
    	 
                     	 
    	 
                     	 <p style="font-size:8px ;margin-bottom:auto;">.</p>
            	
                     	 <center><img src="images/GPA2.png" alt="Avatar" width="200px" height="175px" ></center>        
       <div class="container" align="center">
 
      	<h3 style="color:#000080;margin-left:2%;font-weight: bold ;font-style: italic ;">Government Polytechnic,Amravati.</h3>
      	<p align="container" style="margin:auto;color:black;font-size:9px;">(An Autonomous Institute Of Government Of Maharashtra)</p>

      	<p align="center" style="margin:auto;color:black;font-size:13px;">Gadge Nagar Amravati 444603 0721.2660127</p>
 
      	<p align="center" style="margin:auto;">                                     .</p>
      	<p align="center" style="margin:auto;">                                     .</p>
      
<center><img src="images/GPA4.png" alt="Avatar" width="100px" height="20px">

      	<p align="center" style="margin-bottom:;color:#000080 ;font-weight: bold;font-style:italic;">Principle Signature</p>

      	
      </center>
      		 <p style="font-size:8px ;margin-bottom:auto;">website-www.gpamravati.ac.in</p>
      		 <p style="font-size:8px ;margin-bottom:auto;">email id-gpamravati@dtemaharashtra.gov.in</p>
      		 

      		 
      		 
<p align="auto" style="margin-bottom:;font-weight: bold;font-style:italic;font-size:10px;">If Lost Anywhere Please Return To Government Polytechnic,Amravati.
</center>
     </div>
</div>
    </div>
       <?php } ?>
    
	</body>
</html>
