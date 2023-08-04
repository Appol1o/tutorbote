<!DOCTYPE html>
<html lang="en">
    
<head>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="login.css">
    <title>Tutor Bot:Login</title>
        <link rel="icon" type="image" href="tutorbotlogo.png">
        <link rel="icon" type="image/png" href="file:///Users/jacobdaniels/Downloads/Untitled_design__3_-removebg-preview.png"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

      
</head>
<body>
    <section>
    <div class="login-box">
        <form action="">
            <h2>Login</h2>
            <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="email"   name="email" id="full_name" required>
                <label>Email</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" name="password" id="password" required>
                <label>Password</label>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox"> Remember me</label>
                <a href="#">Forgot Password?</a>
            </div>
            <button type="submit" id="submit" onclick="submitData()" value="SEND">Login</button>
            <div class="register-link"></div>
            <p>Don't Have An Account?<a href="Signup.html">Register!!!</a></p>
        </form>
    </div>
</section>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <header>
      <div class="Tb">
        <h3>TutorBot</h3>
      </div>
        <div class="container">
            <img src="file:///Users/jacobdaniels/Downloads/Untitled_design__1_-removebg-preview.png" class="Logo"></img>
          </div>
        <nav class="navigation">
          <a data-active="home" href="index.html">Home</a>
          <a data-active="about" href="AboutUs.html">About Us</a>
          <a data-active="tutors" href="Tutors.html">Tutors</a>
          <a data-active="contact" href="Contacts.html">Contacts</a>

            <button onclick="window.location.href = 'login.html';" class="btnLogin-popup">Login</button>
    
        </nav>
        
    </header>
   
    <footer> 
        <div class="footerContainer">
          <div class="socialicons">
            <a href="https://www.facebook.com/signup"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://twitter.com/?logout=1690618089534"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://support.google.com/answer/2451065?hl=en"><i class="fa-brands fa-google-plus"></i></a>
            <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
          </div>
        <div class="footerNav">
          <ul>
            <li><a data-active="home" href="index.html">Home</a></li>
            <li><a data-active="about" href="AboutUs.html">About Us</a></li>
            <li><a data-active="tutors" href="Tutors.html">Tutors</a></li>
            <li><a data-active="contact" href="Contacts.html">Contacts</a></li>
            <li><a href="login.html">Login/Signup</a></li>
          </ul>
        </div>
        
      </div>
      <div class="footerBottom">
        <p>Copyright &copy;2023 Designed by <span class="designer"></span>Jacob Daniels</p>
      </div>
    </footer>

    </script>

</body>
</html>

<?php
  extract($_REQUEST);
  $file=fopen("form.txt" , "a");

  fwrite($file , "name :");
  fwrite($file , "email :");
  fwrite($file , $email , "\n");
  fwrite($file , "password :");
  fwrite($file , $password , "\n");
  fclose($file);
?>

