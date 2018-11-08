<!DOCTYPE html>
<html lang="en">
  <?php include 'layouts/header.php' ?>
  <!-- Main navigation bar end -->



  
<link rel="stylesheet" type="text/css" href="layouts/css/registration.css">

  <div class="padding"> </div>
  <!-- Body start -->
  
  <div style="padding-top: 10px"></div>
  <div class="col-sm-2"></div>
  
  <div class="col-sm-8"> 
  
  <div class="bg"><b>REGISTER</b></div>
  <form action="/action_page.php">
 
  <div class="containerr">
    <label><b>Email: </b></label>
	 <br/>
    <input type="text" placeholder="Email" name="email" required>
	 <br/>
<label><b>Full Name:</b></label>
<br/>
	 
    <input type="text" placeholder="Full Name" name="fname" required>
	 <br/>
	 <label><b>Username:</b></label>
	 <br/>
    <input type="text" placeholder="Username" name="uname" required>
	 <br/>
	 <label><b>EWU-ID:</b></label>
	 <br/>
    <input type="text" placeholder="xxxx-x-xx-xxx" name="ewuid" required>
	 <br/>
	 
    <label><b>Password:</b></label>
	<br/>
    <input type="password" placeholder="Password" name="psw" required><br/>

    <label><b>Confirm Password:</b></label>
	<br/>
    <input type="password" placeholder="Confirm Password" name="cpsw" required><br/>

    <button type="submit" align="center">REGISTER</button>
    
  </div> 
   
</form>
  
  </div>
  
<div class="col-sm-2">
  </div>
<div class="col-sm-12" style="padding-top: 50px;">
</div>
      
    <?php include 'layouts/footer.php' ?>
</html>