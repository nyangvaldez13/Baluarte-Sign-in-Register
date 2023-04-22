<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- SEO Meta Tags -->
        <meta name="description" content="Your description">
        <meta name="author" content="Your name">

        <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
        <meta property="og:site_name" content="" /> <!-- website name -->
        <meta property="og:site" content="" /> <!-- website link -->
        <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
        <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
        <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
        <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
        <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

        <!-- Webpage Title -->
        <title>Baluarte Bar | Sign In</title>

        <!-- Styles -->
        <!-- Styles -->

        <link href="Membership/css/sign-in.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <!-- Favicon  -->
        <link rel="icon" href="images/baluarte-logo.jpg">

</head>

<body data-bs-spy="scroll" data-bs-target="#navbarExample">
        
  <!-- Navigation -->
  <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
      <div class="container">

          <!-- Image Logo -->
          <a class="navbar-brand logo-image" href="home.html"><img src="images/baluarte-logo.jpg" alt="alternative"></a> 

          <!-- Text Logo - Use this if you don't have a graphic logo -->
          <!-- <a class="navbar-brand logo-text" href="index.html">Vera</a> -->

          <!--<button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>-->

  <div class="signin-container">
    <h1>Sign in or create an account</h1>
    <form>
        <h3>* indicates required field</h3>
        <input type="email" id="email" name="email" required placeholder="*Username or email address">
        <div class="password-input-container">
        <div class="password-field">

          <input type="password" id="password" name="password" class="password-input" required placeholder="*Password">
          <label for="password-input" id="password-toggle">
            <i class="fas fa-eye"></i>
          </label>
        </div>
        </div>
        
        <div class="form-checkbox">
            <input type="checkbox" id="keep-signed-in">
            <label for="keep-signed-in">Keep me signed in</label>
        </div>
        <button type="submit" name="sign-in">Sign In</button>
        <div class="form-links">
          <a href="#">Forgot your password?</a>
        </div>
      </form>
      
  </div>

  <div class="signup-container">
    <h3>JOIN OUR MEMBERSHIP</h3>
    <div class="text">Lorem ipsum dolor sit amet, consectetur <br>
      adipiscing elit, sed do eiusmod tempor incididunt ut <br>
      labore et dolore magna aliqua. 
    </div>
    <button type="join"><a href="create-account.html">Join now</a></button>
  </div>  

  <script>
  const passwordInput = document.querySelector('.password-input');
  const togglePassword = document.querySelector('#password-toggle');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
  });

  </script>

<?php include('php/bs-user.php'); ?>


</body>

</html>
