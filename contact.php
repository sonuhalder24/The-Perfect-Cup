<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Perfect Cup-Contact</title>

    <!-- CSS link  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/business-casual.css">

    <!-- JQuery link -->
    <script src="js/jquery-3.5.1.js"></script>

    <!-- script -->
    <script type="text/javascript">
         $(document).ready(function(){
            $("#contact").click(function() {
               fname=$("#fname").val();
               email=$("#email").val();
               messege=$("#messege").val();
               
               $.ajax({
                    type:"POST",
                    url:"send.php",
                    data: "fname="+fname+"&email="+email+" &messege="+messege,
                    success:function(html) {
                        if(html=='true'){
                            $("#add_err2").html('<div class="alert alert-success"\
                               <strong>Messege sent!</strong>.\
                               </div>');
                        }
                        else if(html=='flong'){
                            $("#add_err2").html('<div class="alert alert-danger"\
                                <strong>Name cannot excced 50 characters</strong>.\
                               </div>');
                        }
                        else if(html=='fshort'){
                            $("#add_err2").html('<div class="alert alert-danger"\
                                <strong>Name must be 2 characters</strong>.\
                               </div>');
                        }
                       
                        else if(html=='elong'){
                            $("#add_err2").html('<div class="alert alert-danger"\
                                <strong>Email cannot excced 50 characters</strong>.\
                               </div>');
                        }
                       
                        else if(html=='eshort'){
                            $("#add_err2").html('<div class="alert alert-danger"\
                                <strong>Email must be 2 characteers</strong>.\
                               </div>');
                        }
                       
                        else if(html=='eformat'){
                            $("#add_err2").html('<div class="alert alert-danger"\
                                <strong>Email format </strong>incorrect.\
                               </div>');
                        }
                        else if(html=='messege_short'){
                            $("#add_err2").html('<div class="alert alert-danger"\
                                <strong>Messege must be 3 characters</strong>.\
                               </div>');
                        }
                        else if(html=='messege_long'){
                            $("#add_err2").html('<div class="alert alert-danger"\
                                <strong>Messege cannot excced 100 characters</strong>.\
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
<!--CSS Spinner-->
<div class="spinner-wrapper">
        <div class="spinner"></div>
 </div>
    <div class="text-center text-white"><h1>THE  PERFECT   CUP</h1></div>
    <div class="text-center text-white lg-text">1/14/4,Satyajit Park | Thakurpukur | Kolkata-700063</div>
    <?php require_once 'nav.php'; ?> 
    <div class="container"> 
        <div class="col-lg-6 text-center">
          <section>
                <hr style="width:50%; text-align:center;">
                <h5><small><em> OUR <strong>LOCATION</strong> </em></small></h5>
                <hr style="width:50%; text-align:center;">
                <div class="col-lg-12">
                <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="styling"  src="https://maps.google.com/maps?q=%2CThakurpukur%20%2CKolkata-700063%2Csatyajit%20park&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                </div>
                <div class="tx-size py-3 pl-3 text-left">
                  <p><strong style="color:blue">Phone:</strong>1234567890</p>
                  <p><strong style="color:blue">Email:</strong>dipa@gmail.com</p>
                  <p><strong style="color:blue">Address:</strong>1/14/4,Satyajit Park,Thakurpukur,Kolkata-700063</p>
                </div>
          </section>
       </div>       
  </div>
  <div class="container"> 
        <div class="col-lg-6 pb-3">
          <section>
                <hr style="width:50%; text-align:center; ">
                <h5 class="text-center"><small><em><strong>CONTACT FORM</strong></em></small></h5>
                <hr style="width:50%; text-align:center;">
                <div class="tx-size">
                  <div id="add_err2"></div>
                  <form role="form">
                  <div class="form-group text-left">
                      <label style="color:green"><strong>Name</strong> </label>
                      <input type="text" class="form-control" id="fname" name="fname" max-length="25" >
                  </div>
                  <div class="form-group text-left">
                      <label style="color:green"><strong> Email address</strong></label>
                      <input type="email" class="form-control" id="email" name="email"  max-legth="25">
                  </div>
                  <div class="form-group text-left">
                      <label style="color:green"><strong>Messege</strong></label>
                      <textarea name="messege" id="messege" class="form-control" max-length="100" rows="5"></textarea>
                  </div>
                    <button type="submit" id="contact" class="btn btn-primary">Submit</button>
                  </form>
                  <hr>
                </div>
               
          </section>
       </div>       
  </div>
  <footer class="py-1 lg-text fixed-bottom set-cl">
       <div class="container">
           <p class="m-0 text-center text-white">Copyright &copy; Perfect Cup 2020</p>
       </div>
    </footer>
    <script>
            $(document).ready(function() {
            //Preloader
            preloaderFadeOutTime = 500;
            function hidePreloader() {
            var preloader = $('.spinner-wrapper');
            preloader.fadeOut(preloaderFadeOutTime);
            }
            hidePreloader();
            });
    </script>
  
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>