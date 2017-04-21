<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="Delphinus Employee Recognition">
        <meta name="author" content="Emmalee Jones, Yae Jin Oh">

        <title>Employee Recognition Awards</title>

        <!-- Bootstrap core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="../css/blog.css" rel="stylesheet">
        <script src="../js/jquery.min.js"></script>
        <script src="../js/functions.js"></script>

    </head>
    <body>
        <!-- --------------------------------- Navigation Bar --------------------------------- -->

        <div class="blog-masthead">
            <div class="container">
                <nav class="blog-nav">
                    <h2><a class="navbar-brand" href="../index.php"> Employee Recognition Awards</a></h2>                   
                </nav>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
            </div>
        </div>
        <div class="container">
            <div class="row"> 
                <br/>
                <div class="col-sm-4"></div> 
                <div class="col-sm-4"></div>
                <div class="col-sm-4" style="color:#FF0000" id="login_message"></div>
                </br>
            </div>     
        </div>  

        <!-- --------------------------------- Admin Sign In Form --------------------------------- -->
        <div class="container" >
            <h1>User Registration</h1>
            <form method="POST" onsubmit="editdata();
                    return false;">
                <label for="username" class="control-label">Username</label>
                <input name="username" type="text" class="form-control" id="usernamer" placeholder="Username(Email Address)" required>
                <label for="fullname" class="control-label">Full Name</label>
                <input name="fullname" type="password" class="form-control" id="fullnamer" placeholder="Full Name" required>
                <label for="password" class="control-label">Password</label>
                <input name="password" type="password" class="form-control" id="passwordr" placeholder="Password" required>
                <label for="confirmpassword" class="control-label">Confirm Password</label>
                <input name="confirmpassword" type="password" class="form-control" id="confirmpasswordr" placeholder="Confirm Password" required>
                <div class="image-editor">
                    <label>Upload Signature</label><input type="file" class="image" name="signature" accept="image/*" required />
                </div>
                </br>
                <button type="submit" name="usersignin" class="btn btn-lg btn-primary btn-block ">Submit</button> 
                <div class="col-sm-6" style="color:#FF0000" id="signin_message"></div>
            </form> 
            </br>
            <a href="../index.php">User Sign In</a>
        </div>
        <div class="container">
            <div class="row">   
                <div class="col-sm-4"></div> 
                <div class="col-sm-4"></div>
                <div class="col-sm-4" style="color:#006600" id="signed_message"></div>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
            </div>     
        </div>
        <!-- --------------------------------- Footer --------------------------------- -->
        <footer class="blog-footer">
            <p>Powered by <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a></p>
        </footer>
        <script src="../js/bootstrap.min.js"></script>

    </body>
</html>