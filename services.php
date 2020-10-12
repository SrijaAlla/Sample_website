<!DOCTYPE html>
<html>

<head>
    <title>JTC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="front.css">

</head>

<body>
    <div class="top-nav-bar">
        <div class="search-box">
            <i class="fa fa-bars" id="menu-btn" onclick="openmenu()"></i>
            <i class="fa fa-times" id="close-btn" onclick="closemenu()"></i>
            <i><b><img class="d-block w-100" src="jindal1.jpg" height="60px"></b></i>
			 <input type="text" class="form-control">
            <span class="input-group-text"><i class="fa fa-search"></i></span>
        </div>
        <div class="menu-bar">
            <ul>
                <li><a href="#"><i class="fa fa-shopping-basket"></i>cart</a></li>
                <li><a href=""><i class="fa fa-heart-o"></i> Wishlist</a></li>
                <li><a href="signup.php"><i class="fa fa-sign-in"></i> Sign up</a></li>
                <li><a href="login panel.php">Login</a></li>
            </ul>
        </div>
    </div>
    <section class="header">
        <div class="side-menu" id="side-menu">
            <ul >
							<li><a href="front.php">Home</a></li>
							<li><a href="services.php">Services</a></li>
							<li><a href="#">Projects</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
        </div>
		  <center>
    
                            <h4>Consultancy</h4>
							<p> details of how it works </p>
                     
                      <div class="login">
                <form name="form1" method="post" action="sender.php">
                  <table style="margin-top:10px; margin-left:300px;">
                    <tr>
                      <td><strong>Name</strong></td>
                    </tr>
                    <tr>
        <td><span id="sprytextfield1">
                        <label>
                        <input type="varchar" name="varname" id="varname" >
                        </label>
                      <span class="textfieldRequiredMsg">*</span></span>
          <label></label></td>
                    </tr>
                   
                    
                    <tr>
                      <td><strong>Location</strong></td>
                    </tr>
                    <tr>
                     <td><span id="sprytextfield3">
                        <label>
                        <input type="varchar" name="varlocation" id="varlocation">
                        </label>
                      <span class="textfieldRequiredMsg">*</span></span></td>
                    </tr>
		<td><strong>Phone Number</strong></td>
                    <tr>
                     <td><span id="sprytextfield4">
                        <label>
                        <input type="varchar" name="varphone" id="varphone">
                        </label>
                      <span class="textfieldRequiredMsg">*</span></span></td>
                    </tr>
                      <td><strong>Start Date</strong></td>
                    
                    <tr>
                     <td><span id="sprytextfield5">
                        <label>
                        <input type="date" name="varsdate" id="varsdate">
                        </label>
                      <span class="textfieldRequiredMsg">*</span></span></td>
                    </tr>
		<td><strong>End Date</strong></td>
                
                    <tr>
                     <td><span id="sprytextfield6">
					 
                        <label>
                        <input type="date" name="varedate" id="varedate">
                        </label>
                      <span class="textfieldRequiredMsg">*</span></span></td>
                    </tr>
		<td><strong>Details</strong></td>
                                    <tr>
                     <td><span id="sprytextfield7">
					 
                        <label>
						<textarea  cols="50" rows="10" input type="varchar" name="vardetails" id="vardetails">
                        </textarea>
						</label>
                      <span class="textfieldRequiredMsg">*</span></span></td>
                    </tr>
 
                    <tr>
                      <td><label>
                
                          <input type="submit" name="button" id="button" value="Request date">
                       
                      </label></td>
                    </tr>
                  </table>
      </form>
              </div>
               </center>
                        <div cl
    </section>

    
    <!-----------------------website features-->

    <section class="website-features">
        <div class="container">
            <center>
                <h1>Website Services</h1>
            </center><br>
            <br>
            <div class="row">
                <div class="col-md-3 feature-box">
                    <img src="web sat.png">
                    <div class="feature-text">
                        <p><b>100% Original items</b> are available at company</p>
                    </div>
                </div>
                <div class="col-md-3 feature-box">
                    <img src="return.png">
                    <div class="feature-text">
                        <p><b>Return within 30 days</b> of recieving your order </p>
                    </div>
                </div>
                <div class="col-md-3 feature-box">
                    <img src="delivery.jpg">
                    <div class="feature-text">
                        <p><b>Get free delivery for every</b> order on more than price</p>
                    </div>
                </div>
                <div class="col-md-3 feature-box">
                    <img src="pay.webp">
                    <div class="feature-text">
                        <p><b>Pay online through multiple</b> options(Card/Net banking</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-------------------------Footer-->
    <section class="footer">
        <div class="container ">
            <div class="row">
                <div class="col-md-3">
                    <h1>Useful Links</h1>
                    <p>Privacy Policy</p>
                    <p>Terms of Use</p>
                    <p>Return Policy</p>
                    <p>Discount coupons</p>
                </div>
                <div class="col-md-3">
                    <h1>Company</h1>
                    <p>About Us</p>
                    <p>Contact Us</p>
                    <p>Career</p>
                    <p>Affiliate</p>
                </div>
                <div class="col-md-3">
                    <h1>Follow Us On</h1>
                    <p><i class="fa fa-facebook-official"></i>Facebook</p>
                    <p><i class="fa fa-youtube-play"></i>Youtube</p>
                    <p><i class="fa fa-linkedin"></i>Linkedin</p>
                    <p><i class="fa fa-twitter"></i>Twitter</p>
                </div>
                <div class="col-md-3 footer-image">
                    <h1>Download App</h1>
                    <img src="app.png" width="60%">
                </div>
            </div>
            <hr>
            <p class="copyright">Made with <i class="fa fa-heart-o"></i> by Jindal Traders</p>
        </div>

    </section>



    <script>
        function openmenu() {
            document.getElementById("side-menu").style.display = "block";
            document.getElementById("menu-btn").style.display = "none";
            document.getElementById("close-btn").style.display = "block";
        }

        function closemenu() {
            document.getElementById("side-menu").style.display = "none";
            document.getElementById("menu-btn").style.display = "block";
            document.getElementById("close-btn").style.display = "none";
        }
    </script>


</body>

</html>