<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Panels in Bootstrap</title>
<style>
.row_style{
width:1400px;
}
.footer{
padding: 10px 0;
 background-color: #101010;
color:#9d9d9d;
bottom: 0;
 width: 100%;
}
</style>
    </head>
    <body>
                <div class="row row_style"> 
<nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">LOGO</a>
                </div>
                <div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>

                </div>
            </div>
        </nav>

                 <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary" >
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <form>
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Email" name="e-mail" required = "true">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                                </div>
                              <center>
                               <a href="#" class="btn btn-primary">Login</a><br><br>
                            </center>
                            </form><br/>
                        </div>
                        <div class="panel-footer"><p>Don't have an account? <a href="#">Register</a></p></div>
                    </div>
                </div>
            </div>
        </div>
<br>
<br><br><br><br><br><br><br><br>
<div class= "footer">
<center>
<p>Copyright © JTC. All Rights
Reserved and Contact Us: +91 90000 00000</p>
</center>
</div>
</div>
    </body>
</html>