<?php
  @session_start();
  mysql_connect("localhost","root","");
  mysql_select_db("eshop");
 
  
  if(isset($_POST['submit']))
  {
	$a1=$_POST['email'];  
	$b1=$_POST['password'];
	
	$q1=mysql_query("select *from signup where email='$a1'");
	 $data1=mysql_fetch_array($q1);
	 
	 $email=$data1['email'];
	 $password=$data1['password'];
	 $name=$data1['name'];
	 $i=$data1['id'];
	 
	 if(($email==$a1 && $password==$b1) && ($a1!="" && $b1!=""))
	 {
		 echo "<script>alert('Welcome User');</script>";
		 $_SESSION['nm']=$name;
		 $_SESSION['email']=$email;
		 $_SESSION['in']=$i;
	 }
    else
	 {
		 
		 echo "<script>alert('Email or password is wrong');</script>";
	 }
  }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Header</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<script src="boot css/jquery.countdown-2.2.0/jquery.countdown-2.2.0/jquery.countdown.js"></script> 
<script src="boot css/jquery.countdown-2.2.0/jquery.countdown-2.2.0/jquery.countdown.min.js"></script>
  
 <link href="boot css/animate.min.css" rel="stylesheet" type="text/css" />
 <script src="boot css/wow.min.js"></script> 
 <script type="text/javascript">
  new WOW().init();
 </script>
  
 
 <script type="text/javascript">
 function Check()
  {
	alert('Please login to view cart!!');  
  }
 </script>
  
  <script>
   $(document).ready(function(e) {
     
	 $(".li2").mouseenter(function(e) {
        $("#ul1").fadeIn();
    });
	
	$(".li2").mouseleave(function(e) {
        $("#ul1").fadeOut();
    });
	
	$(".linav1").hover(function(e) {
        $(".a1").toggleClass("crt");
    });
	
	$(".linav2").hover(function(e) {
        $(".a2").toggleClass("crt");
    });

$(".linav3").hover(function(e) {
        $(".a3").toggleClass("crt");
    });

$(".linav4").hover(function(e) {
        $(".a4").toggleClass("crt");
    });
	
	
	$(".linav1").mouseenter(function(e) {
        $(".ul3").fadeIn();
		$(this).css({"border-bottom":"3px solid red"});                                
    });                                                        
	
	$(".linav1").mouseleave(function(e) {
        $(".ul3").fadeOut();
		$(this).css("border-bottom","0px")
    });
	
	$(".linav2").mouseenter(function(e) {
        $(".ul4").fadeIn();
		$(this).css("border-bottom","3px solid red");
    });
	
	$(".linav2").mouseleave(function(e) {
        $(".ul4").fadeOut();
		$(this).css("border-bottom","0px")
    });

    $(".linav3").mouseenter(function(e) {
        $(".ul5").fadeIn();
		$(this).css("border-bottom","3px solid red");
    });
	
	$(".linav3").mouseleave(function(e) {
        $(".ul5").fadeOut();
		$(this).css("border-bottom","0px")
    });
	
	 $(".linav4").mouseenter(function(e) {
        $(".ul6").fadeIn();
		$(this).css("border-bottom","3px solid red");
    });
	
	$(".linav4").mouseleave(function(e) {
        $(".ul6").fadeOut();
		$(this).css("border-bottom","0px")
    });	
	
	
	$(".ser1").focus(function(){
		$("#sd").fadeIn();
	});
	$(".ser1").blur(function(){
		$("#sd").fadeOut();
	});
		

});
  
  </script>
  
   <script>
  	function getXMLHTTP()
 {
	 var xmlhttp=false;
	 xmlhttp=new XMLHttpRequest();//Create an XMLHTTPRequest object
	 return xmlhttp;
 }
 

	
 function dis(nm)
 {
	 var path="s.php?name="+nm;
	 
	 var req=getXMLHTTP();
	
	 if(req)
	 {
		 req.onreadystatechange=function()
		 {
			 if(req.readyState==4)
			 {	
				 if(req.status==200)
				 
				 {
					 document.getElementById("sd").innerHTML=req.responseText;
				 }
			 }
		 }
		 
		 req.open("GET",path,true);
		 req.send();

	 
 }	}
  </script>
  
</head>

<style>
 .d1 a
 {
	 
  color:white;	 
 }
 .d1 a:hover
 {
   color:yellow;	 
 }
 .d1 ul li
 {
	 text-align:center;
	 
 }
 .d1 ul li ul li a:hover
 {
   color:white;	 
   background-color:red;
 }
 .li2,.li3 
 {
  display:inline;
  	 
 }
 .dnav ul li .aw
 {
   color:white;
   font-size:16px;
   font-weight:bold;	 
 }
 .dnav ul li a:hover
 {
   background-color:#0D86FF;
   color:yellow;
 }
 .crt
 {
	transform:rotate(180deg); 
 }
 .dnav ul .linav1 .ul3 li a
 {
	color:black;
 }
 .dnav ul .linav1 .ul3 li a
 {
   text-align:center;	 
 }
 .dnav ul .linav1 .ul3 li a:hover
 {
	background-color:red;
	color:white;
 }
 .dnav ul .linav2 .ul4 li a
 {
	text-align:center; 
 }
  .dnav ul .linav2 .ul4 li a:hover
 { 
    background-color:red;
	color:white;  
  }
 .dnav ul .linav3 .ul5 li a
 {
	text-align:center;  
 }
  .dnav ul .linav3 .ul5 li a:hover
 {
	background-color:red;
	color:white;
 }
  .dnav ul .linav4 .ul6 li a
 {
	text-align:center;  
 }
  .dnav ul .linav4 .ul6 li a:hover
 {
	background-color:red;
	color:white;
 }
 .dnav ul .linav1 a:visited
 {
	 background-color:#0D86FF;
 }
  .dnav ul .linav2 a:visited
 {
	 background-color:#0D86FF;
 }
 
  .dnav ul .linav3 a:visited
 {
	 background-color:#0D86FF;
 }
 
 .dnav ul .linav4 a:visited
 {
	 background-color:#0D86FF;
 }
 .d1 .ul2 .li2 .asign:visited
 {
	 background-color:#0D86FF;
 }
 .lout a
 {
	 color:#FFF;
 }
 .lout a:hover
 {
  
  text-decoration:none;
  color:yellow;
}
</style>
<body>

<div class="nav navbar-default">
 
 <div class="row" style="background-color:#0D86FF">
  
  <div class="col-sm-2 ">
   <a href="homepage.php" style="text-decoration:none"  ><h1 style="color:white;font-family:'Comic Sans MS', cursive" class="wow zoomIn" >E-shop</h1></a>
  </div>
  
  <div class="col-sm-7" style="margin-top:23px">
    <div class="input-group">
    <span class="input-group-addon"><a href="#"><i class="glyphicon glyphicon-search"></i></a></span>
    <input type="text" class="form-control ser1" name="search" placeholder="Search Products" onkeypress="dis(this.value)">
  </div>
  <div id="sd">
    	<div></div>
  	</div>
  </div>
  
  
  
  <div class="col-sm-3" style="margin-top:25px" class="wow fadeInRightBig">
  <div class="d1">
    <ul class="ul2">
    
    <li class="li2">
   <a href="#" data-toggle="dropdown" class="dropdown asign"  style="text-decoration:none;font-size:18px;">Sign In&nbsp;<span class="glyphicon glyphicon-user"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;
      <ul class="dropdown-menu" id="ul1">
       <?php
	     if(isset($_SESSION['email']))
		 {
	   ?>
       <li class="disabled" style="background-color:#CCC"><a href="#">Login</a></li>
       <?php
		 }
		 else
		 {
	   ?>
        <li class><a href="#" data-toggle="modal" data-target="#myModal">Login</a></li>
       <?php
		 }
	   ?>
       <li class="divider"></li>
       <?php
	     if(isset($_SESSION['email']))
		 {
	   ?>
       <li class="disabled" style="background-color:#CCC"><a href="#">Sign Up</a></li>
       <?php
		 }
		 else
		 {
		?>
         <li><a href="signup.php">Sign Up</a></li>
       <?php
		  }
		?>
       <li class="divider"></li>
       
       <?php
	     if(isset($_SESSION['email']))
		 {
	   ?>
       <li><a href="view_order.php">Orders</a></li>
       <li class="divider"></li>
       <?php
		 }
	   ?>
       <?php
	     if(isset($_SESSION['email']))
		{
	  ?>
       <li><a href="view_wishlist.php">Wishlist</a></li>
       <li class="divider"></li>
      <?php
		}
	  ?>
	   
      
       <?php
	     if(isset($_SESSION['email']))
		 {
	   ?>
       <li><a href="user_details.php">My Account</a></li>
      <?php
		 }
	  ?>
      </ul>
    
    </li>
     
	 <?php
	  if(isset($_SESSION['email']))
	  {
	?>
     <li class="li3"> <a href="view_cart.php" style="text-decoration:none;font-size:18px;">Cart&nbsp;<span class="glyphicon glyphicon-shopping-cart"></span>
    <?php
	  }
	 else
	  { 
	?>
		 <li class="li3"> <a href="#" style="text-decoration:none;font-size:18px;" onclick="Check()">Cart&nbsp;<span class="glyphicon glyphicon-shopping-cart"></span>
   <?php
	  }
    ?>
    
     <?php
	  if(isset($_SESSION['email']))
	  {
		  $q4=mysql_query("select count(*) from cart_detail where user_email='{$_SESSION['email']}'");
          $row=mysql_fetch_array($q4);
	       if($row)
	     {
	        foreach($row as $v)
	       {
		      $v;
		  
	       }
	    }
	     else
	    {
	      $v=0;	
	    }
	 ?>
     <span class="badge" style="background-color:red;color:white;"><?php echo $v;?></span>
     <?php
	  }
	 ?>
     </li></a>
     
    </ul>
    </div>
  </div>
 
 </div>
<!-- ********************************************************************************************** -->

<div class="row" style="background-color:#0D86FF">
 <div class="col-sm-3">
 </div>
 <div class="col-sm-6 dnav">
   <ul class="nav nav-justified">
   
    <li class="linav1"><a href="#" data-toggle="dropdown" class="dropdown aw">Mobile<span class="caret a1"></span></a>
    <ul class="dropdown-menu ul3">
     <li><a href="show_category.php?product_type=samsung & category_id=2">Samsung</a></li>
     <li class="divider"></li>
     <li><a href="show_category.php?product_type=apple & category_id=2">Apple</a></li>
     <li class="divider"></li>
     <li><a href="show_category.php?product_type=sony & category_id=2">Sony</a></li>
     <li class="divider"></li>
     <li><a href="show_category.php?product_type=motorola & category_id=2">Motorola</a></li>
    </ul>
    </li>
  
    <li class="linav2"><a href="#" data-toggle="dropdown" class="dropdown aw">Laptop<span class="caret a2"></span></a>
     <ul class="dropdown-menu ul4">
     <li><a href="show_category.php?product_type=dell & category_id=3">Dell</a></li>
     <li class="divider"></li>
     <li><a href="show_category.php?product_type=lenovo & category_id=3">Lenovo</a></li>
     <li class="divider"></li>
     <li><a href="show_category.php?product_type=hp & category_id=3">HP</a></li>
     <li class="divider"></li>
     <li><a href="show_category.php?product_type=apple & category_id=3">Apple</a></li>
    </ul>
    </li>
    
    <li class="linav3"><a href="#" data-toggle="dropdown" class="dropdown aw">TV<span class="caret a3"></span></a>
     <ul class="dropdown-menu ul5">
     <li><a href="show_category.php?product_type=sony & category_id=4">Sony</a></li>
     <li class="divider"></li>
     <li><a href="show_category.php?product_type=samsung & category_id=4">Samsung</a></li>
     <li class="divider"></li>
     <li><a href="show_category.php?product_type=lg & category_id=4">LG</a></li>
     <li class="divider"></li>
     <li><a href="show_category.php?product_type=micromax & category_id=4">Micromax</a></li>
    </ul>
    </li>
    
     <li class="linav4"><a href="#" data-toggle="dropdown" class="dropdown aw">Camera<span class="caret a4"></span></a>
     <ul class="dropdown-menu ul6">
     <li><a href="show_category.php?product_type=sony & category_id=5">Sony</a></li>
     <li class="divider"></li>
     <li><a href="show_category.php?product_type=nikon & category_id=5">Nikon</a></li>
     <li class="divider"></li>
     <li><a href="show_category.php?product_type=canon & category_id=5">Canon</a></li>
     <li class="divider"></li>
     <li><a href="show_category.php?product_type=panasonic & category_id=5">Panasonic</a></li>
    </ul>
    </li>
    
  
   </ul>
 </div>

 <div class="col-sm-3 lout">
 <?php
   if(isset($_SESSION['email']))
  {
 ?>
  <h4 class="text-center"><a href="user_logout.php">Logout,&nbsp;<?php echo $_SESSION['nm'];?></a></h4>
<?php
  }
  else
  {
	  
  }
 ?>

 </div>

</div>
 

</div>
<!-- *********************************************************************************************************************** -->

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title text-center">Login</h3>
        </div>
       
        <div class="modal-body">
          <form method="post">
           <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" name="email"  />
           </div>
           
           <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" />
           </div>
            
           <div class="form-group text-center">
              <button type="submit" class="btn btn-success" name="submit" >Submit</button>
           </div>
          </form>
        </div>
       
          
       
      </div>
      
    </div>
  </div>
  
