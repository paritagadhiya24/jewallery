<?php
//database connection
session_start();
//echo "<pre>";print_r($_POST);die;

include('./config.php');
	if(isset($_POST['submit'])){
//            echo "hi";die;
//            echo "<pre>";print_r($submit);die;

		
		//query for check valid id or password
	    
            $sql="SELECT * FROM admin_login WHERE name='".$_POST['name']."' AND password='".$_POST['password']."'";
//           echo $sql;die; 
            $result =$conn->query($sql);
            $result = mysqli_query($conn,$sql);
//  echo "<pre>"; print_r($result);die;
	 $count=mysqli_num_rows($result);
                
//                echo $count;die;
		if($count>0){
                    
                
                        $_SESSION['username'] = $username; 
                        //$_SESSION['user_id'] = 12; 
			echo "Successfully Logged In....";
                       
			header('Location:index.php');
		}else{
			echo "Wrong ID or Password";
			header('Location:loginform.php');
		}
	}
 else {
  echo "\ ID or Password";
//			header('Location:loginform.php');   
 }
	
?>    