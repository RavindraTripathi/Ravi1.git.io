<?php
require 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login or Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
     *{
         margin:0;
         padding: 0;
         box-sizing: border-box;
      }
      html{
      	height: 100%;
      }
      body{
      	background-image:linear-gradient(#100c08,#32174d);
	   font-family: 'Segoe UI', sans-serif;;
      	font-size: 1rem;
      	height: 100%;
      	line-height: 1.6;
      }
      .wrap {
      	width: 350px;
      	margin: 50px auto;
      	background: #fafafa;
     }
    .login-form{
        width: 350px;
        margin: 0 auto;
        border: 4px solid wheat;
        padding: 2rem;
        background:transparent;
        box-shadow:2px solid black;
    }
    .form-input{
        background: #fafafa;
        border: 1px solid #eeeeee;
        padding: 12px;
        width: 100%;
    }
    .form-group{
        margin-bottom: 1rem;
    }
    .form-button{
       background:#32174d;
       border: 1px solid #ddd;
       color: #ffffff;
       padding: 10px;
       width: 100%;
       text-transform: uppercase;
   }
   .form-button:hover{
       background:black;
       color:white;
   }
   .form-header{
     text-align: center;
     margin-bottom : 2rem;
   }
   .form-footer{
     text-align: center;
     color:white;
    }
   .flipcard{
     background-color: transparent;
     width : 350px;
     perspective: 1000px;
   }
  .flipcard-inner{
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.8s;
    transform-style: preserve-3d;
   }
  .flipcard-front, .flipcard-back{
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
   }
  .flipcard-front{
    color: black;
   }
  .flipcard-back{
    background-color:dodgerblue;				
    transform: rotateY(180deg);
  }		
  input[type="checkbox"]:checked + .flipcard .flipcard-inner{
    transform: rotateY(180deg);
  }
  .form-button-register{
     background:#32174d;
   }
   .form-button-register:hover{
     background:#100c08;
   }
.switch_form:before{
    content: " ";
    display: block;
    background:red;
}
.label-highlight{
    color:wheat;
}
h3{
    color:white;
}
p{
    color:white;
}
</style>
</head>
<body>
    <div class="wrap">			
        <input type="checkbox" id="form_switch" style="display: none;">
	<div class="flipcard">
	    <div class="flipcard-inner">
		<div class="flipcard-front">
		    <form class="login-form" method="post" action="login.php">
            		<div class="form-header">
                	    <h3>To Enter into Website</h3>
                	    <p>Login Here</p>
            		</div>
                        <!--Email Input-->
            		<div class="form-group">
		            <input type="text" class="form-input" name="email" placeholder="email@example.com">
            		</div>
            		<!--Password Input-->
            		<div class="form-group">
                	    <input type="password" class="form-input" name="password" placeholder="password">
            		</div>
            		<!--Login Button-->
            		<div class="form-group">
                	  <button class="form-button" type="submit">Login</button>
            		</div>
            		<div class="form-footer">
            		 Don't have an account? <label class="label-highlight" for="form_switch"> Sign Up </label>
            		</div>
        	</form>
	</div>
	<div class="flipcard-back">
             <form class="login-form" method="post"action="conn.php">
            	<div class="form-header">
             	    <h3>Signup Form</h3>
                    <p>Register for a new account</p>
            	</div>
		<!--Email Input-->
		<div class="form-group">
  		    <input type="text" class="form-input" id ="email" name="email" placeholder="email@example.com"required>
            	</div>
            	<!--Password Input-->
            	<div class="form-group">
                   <input type="password" class="form-input"  id="password" name="password" placeholder="Password"required>
            	</div>
            	<!--Password Input-->
            	<div class="form-group">
                    <input type="password" class="form-input" id="confirm_password"name="confirm_password" placeholder="Confirm Password"required>
            	</div>
            	<!--Login Button-->
            	<div class="form-group">
                <button class="form-button form-button-register" type="submit"value="Register">Signup</button>
            	</div>
            	<div class="form-footer">
            	    Already have an account? <label class="label-highlight" for="form_switch"> Login</label>
                </div>
                <p style="color:white;">OR</p> 
                <div class="footer">
                                    <a href="https://forms.gle/g6s5FUs3Woc1Fcoz9" class="fa fa-google"style="color:red;text-decoration:none;"></a>
                                    <a href="" class="fa fa-facebook"style="color:blue;text-decoration:none;"></a>
                                    <a href="" class="fa fa-twitter"style="color:blue;text-decoration:none;"></a>
                                </div>

        </form>
    </div>
</div>
</div>
</div>
</body>
</html>