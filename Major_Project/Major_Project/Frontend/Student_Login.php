<!DOCTYPE html>
<html>
    <head></head>
    <link rel="stylesheet" type="text/css" href="css/Student_Login.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<body>
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form name="Student_Login" method="POST" action="../Backend/Login_Method.php">
                <h2 class="text-center"><strong>Student Login</strong></h2>
                    <div class="form-group"><input class="form-control" type="Username" name="S_Id" id="S_Id" placeholder="Student ID"></div>
                    <div class="form-group"><input class="form-control" type="password" name="S_Pass" id="S_Pass" placeholder="Password"></div>
                        <div class="form-group">
                            <div class="d-flex justify-content-between">
                                <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> 
                                    <label class="form-check-label" for="flexCheckDefault"> Remember me </label> 
                            </div>
                                
                            </div>
                        </div>
                    <div class="form-group"><button class="btn btn-success btn-block btn-info" type="submit">Login</button></div>
            </form>
        </div>
    </div>
</body>
</html>