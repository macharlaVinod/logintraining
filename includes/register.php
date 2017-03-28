<?php 
 ///////// Insert User Values  ///////////

	 if (isset($_POST['Register']))
    {
        $role = $_POST['role'];
		$username = $_POST['username'];
        $password = $_POST['password'];
        $hashed_password = sha1($password);
       
 
        $insert_query = "INSERT INTO users (role, username , password, created_at, udated_at) VALUES ('$role', '$username', '$hashed_password', now(), now())";
     
        $result = mysql_query($insert_query);
      
        if($result){
         
            echo "Register success";
        }else{
         
            echo "Register failed";
        }
    }