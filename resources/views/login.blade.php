<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<title> Login Page </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
button {   
       background-color: #4CAF50;   
       width: 100%;  
        color: orange;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
  
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        

	.container-design {   
        padding: 25px;   
        background-color: lightblue;  
    }   
	@media(min-width:768px){
		.margin-auto {
    margin: auto;
    margin-left: 27%;

	}
	}
	.small, small {
    font-size: 85%;
    font-size: 16px;
    color: red;
}
</style>   
</head>    
<body>    
    <center> <h1>Login Form </h1> </center> 

	
     <form action="/login-post" method="post" class="needs-validation" novalidate="">
	 
	  
                  <!--novalidate>-->
                   {{ csrf_field() }}
        <div class="container-fluid">  
			<div class="container-design col-lg-6 margin-auto">
			@include('msg')
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  
            <button type="submit">Login</button>   
            </div>
        </div>   
    </form>     
</body>     
</html>  