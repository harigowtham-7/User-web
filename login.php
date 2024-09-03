<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>eSPORTS-Login</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <div class="wrapper-login">
    <form action="logindb.php" method="post" id="form">
      <h2>Login</h2>
        <div class="input-field">
        <input type="email" name="email" id="email" required>
        <label>Enter your email</label>
      </div>
      <div class="input-field">
        <input type="password" name="password" id="pass" required>
        <label>Enter your password</label>
      </div>
      <div class="forget">
       
        <a href="forget.php">Forgot password?</a>
      </div>
      <button type="submit" name="submit">Log In</button>
      <div class="register">
        <p>Don't have an account? <a href="register.html">Register</a></p>
      </div>
    </form>
  </div>
  <script>
    const form = document.querySelector('#form');
const email = document.querySelector('#email');
const pass = document.querySelector('#pass');
form.addEventListener('submit',(e)=>{
    
    if(!validateInputs()){
       // e.preventDefault();
    }else{
 //       e.preventDefault()
   //     window.location="valid.php";
    }
})

function validateInputs(){
    
    const emailVal = email.value.trim();
    const passwordVal = pass.value.trim();
   
    


    if(emailVal===''){
       
        alert('Email is required');
    }
    else if(!validateEmail(emailVal)){
        
        alert('Please enter a valid email');
    }
    else{
        
    }
  }
  const validateEmail = (email) => {
    return String(email)
      .toLowerCase()
      .match(
        /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
      );
    
     
  };
  </script>
</body>

</html>