
<?php


session_start();

// print_r($_POST);

#=====dada=========

include("func/connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $user= $_POST["username"];
  $pass= $_POST["password"];


  $select_admin="SELECT * FROM admins WHERE username ='$user' AND password='$pass'";
   
  $result_admin = $con -> query($select_admin);

  $num =$result_admin -> num_rows;
 
  if ($num == 1) {

   $_SESSION['login']= $user;
    header("location:products.php");
  }

  

}













?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>

  <style>
    * {
      box-sizing: border-box;
    }

    html {
      overflow-y: scroll;
    }

    

    body {
  
    background-color: #0d0f1e;
    height: 100vh;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: "Segoe UI", sans-serif;
  }

.form {
  background: rgba(19, 35, 47, 0.9);
  padding: 40px;
  max-width: 600px;
  border-radius: 4px;
  box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
  width: 100%;
  }

    a {
      text-decoration: none;
      color: #1ab188;
      transition: 0.5s ease;
    }

    a:hover {
      color: #159f76;
    }

    .form {
      background: rgba(19, 35, 47, 0.9);
      padding: 40px;
      max-width: 600px;
      margin: 100px auto;
      border-radius: 4px;
      box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
    }

    h1 {
      text-align: center;
       color:rgb(253, 250, 255);
      font-weight: 300;
      margin: 0 0 40px;
      font-family: "Segoe UI", sans-serif;
    }

    label {
      position: absolute;
      transform: translateY(6px);
      left: 13px;
      color: rgba(255, 255, 255, 0.5);
      transition: all 0.25s ease;
      pointer-events: none;
      font-size: 22px;
    }

    label.active {
      transform: translateY(50px);
      left: 2px;
      font-size: 14px;
    }

    label.highlight {
      color: #ffffff;
    }

    input, textarea {
      font-size: 22px;
      display: block;
      width: 100%;
      padding: 5px 10px;
      background: none;
      border: 1px solid #a0b3b0;
      color: #ffffff;
      transition: border-color 0.25s ease, box-shadow 0.25s ease;
    }

    input:focus, textarea:focus {
      outline: 0;
      border-color: #1ab188;
    }

    .field-wrap {
      position: relative;
      margin-bottom: 40px;
    }

    .button {
      border: 0;
      outline: none;
      padding: 15px 0;
      font-size: 2rem;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.1em;
     
      background: linear-gradient(90deg,rgb(34, 152, 156), #a64bf4);
      color: #ffffff;
      transition: all 0.5s ease;
      width: 100%;
    }

    .button:hover,
    .button:focus {
      background: #159f76;
    }

    .forgot {
      margin-top: -20px;
      text-align: right;
    }
</style>
</head>
<body>

  <div class="form">
    <h1>Welcome Back</h1>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">

      <div class="field-wrap">
        <label>User Name <span class="req">
          </span></label>
        <input type="text" name="username" required autocomplete="off" />
      </div>

      <div class="field-wrap">
        <label>Password<span class="req"></span></label>
       <input type="password" name="password" required autocomplete="off" />
      </div>



      <!-- <p class="forgot"><a href="#">Forgot Password?</a></p> -->

     <button type="submit" class="button">Log In</button>

    </form>
  </div>

  <script>
    document.querySelectorAll('.form input, .form textarea').forEach(function (el) {
      el.addEventListener('keyup', updateLabel);
      el.addEventListener('blur', updateLabel);
      el.addEventListener('focus', updateLabel);
    });

    function updateLabel(e) {
      const label = this.previousElementSibling;
      if (e.type === 'keyup') {
        label.classList.toggle('active', this.value !== '');
        label.classList.toggle('highlight', this.value !== '');
      } else if (e.type === 'blur') {
        label.classList.toggle('active', this.value !== '');
        label.classList.remove('highlight');
      } else if (e.type === 'focus') {
        if (this.value !== '') {
          label.classList.add('highlight');
        }
      }
    }
  </script>

</body>
</html>
