<!DOCTYPE html>
<html lang="en">
  <?php include 'layouts/header.php' ?>
  <!-- Main navigation bar end -->
<link rel="stylesheet" type="text/css" href="layouts/css/login.css">

  <div class="padding"> </div>
  <!-- Body start -->
  
  <div style="padding-top: 120px"></div>

<div>  <div class="col-sm-4"></div>
  
  <div class="col-sm-4"> 
  
  <div class="bg"><b>Login</b></div>
  <form action="/action_page.php">
 
  <div class="containerr">
    <label><b>Username</b></label><br/>
	 
    <input type="text" placeholder="Username" name="uname" required>
	 
<br/>
    <label><b>Password</b></label><br/>
    <input type="password" placeholder="Password" name="psw" required><br/>

    <button type="submit" align="center">Login</button><span class="psws"> <a href="#">Forgot password?</a></span>
    
  </div> 
   
</form>
<div class="col-sm-12" style="padding-top: 80px;">
</div>
</div>  
<!-- Footer start -->

    <?php include 'layouts/footer.php' ?>
  
</html>