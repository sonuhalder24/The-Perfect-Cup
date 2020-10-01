<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Perfect Cup-LogIn</title>

    <!-- CSS link  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/business-casual.css">

    <!-- JQuery link -->
    <script src="js/jquery-3.5.1.js"></script>

    <!-- script -->
    <script type="text/javascript">
        $(document).ready(function(){
            $("#login").click(function() {
               email=$("#email").val();
               password=$("#password").val();
               
               $.ajax({
                    type:"POST",
                    url:"pcheck.php",
                    data:"&email="+email+" &password="+password,
                    success:function(html) {
                        if(html=='true'){
                            $("#add_err2").html('<div class="alert alert-success"\
                               <strong>Authentication</strong> processed.\
                               </div>');
                            window.location.href="blog.php";
                        }
                        else if(html=='false'){
                            $("#add_err2").html('<div class="alert alert-danger"\
                                <strong>Authentication</strong> failure.\
                               </div>');
                        }
                        else {
                            $("#add_err2").html('<div class="alert alert-danger"\
                                <strong>Error</strong> processing request.Please try again.\
                                </div>');
                        }
                    },
                    beforeSend:function(){
                        $("#add_err2").html("loading....");
                    }
               });
               return false;
            });
        });
    </script>
</head>
<body>
    <div class="text-center text-white"><h1>THE  PERFECT   CUP</h1></div>
    <div class="text-center text-white lg-text">1/14/4,Satyajit Park | Thakurpukur | Kolkata-700063</div>
    <!-- navbar -->
    <?php require_once 'nav.php'; ?> 
    <!-- container -->
    <div class="container"> 
        <div class="col-lg-6 pb-3">
          <section>
                <hr>
                <div class="alert alert-danger">
                    <strong>You must be logged in to view the blog</strong>
              </div>
              <hr style="width:50%; text-align:center; ">
                <h5 class="text-center playful">LOGIN</h5>
                <hr style="width:50%; text-align:center;">
                <div class="tx-size">
                  <p class="mt-2"><small>Hellow everyone..We are trying to introduce you about a cafe <strong>'THE PERFECT CUP'</strong> .So please login our page about more information.</small> </p>
                  <div id="add_err2"></div>
                  <form role="form">
                  <div class="form-group text-left">
                      <label style="color:green"><strong> Email address:</strong></label>
                      <input type="email" class="form-control" id="email" name="email"  max-legth="25" required>
                  </div>
                  <div class="form-group text-left">
                      <label style="color:green"><strong>Password:</strong> </label>
                      <input type="password" class="form-control" id="password" name="password"  max-legth="250" required="required">
                  </div>
                    <button type="submit" id="login" class="btn btn-primary">LOGIN</button>
                  </form>
                  <hr>
                  <div class="form-group col-lg-12 ">
                      <a href="register.php"><button type="submit" class="btn btn-outline-dark">Not a member?Register here</button></a>
                  </div>  
                </div>               
          </section>
       </div>       
  </div>
  <!-- footer  -->
  <footer class="py-1 lg-text fixed-bottom set-cl">
       <div class="container">
           <p class="m-0 text-center text-white">Copyright &copy; Perfect Cup 2020</p>
       </div>
    </footer>
  
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>