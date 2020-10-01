<?php
  session_start();
  if (isset($_SESSION['login'])) {
    $fname=$_SESSION['fname'];
    $lname=$_SESSION['lname'];
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Perfect Cup-Blog</title>
     <!-- CSS link -->
     <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/business-casual.css">
    <script src="js/jquery-3.5.1.js"></script>
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
          <section class="pt-2">
                <h2 class="text-center">Welcome<?php echo " "; echo $fname; echo " "; echo $lname;?>- <a href="logout.php">LOGOUT</a> </h2>
                <hr style="width:50%; text-align:center; ">
                <h5><small><em> ABOUT <strong>COFFEE BEAN </strong> </em></small></h5>
                <hr style="width:50%; text-align:center;">
                     <div class="col-lg-12">
                       <img src="img/slide1.jpg" class="resize2" alt="">
                    </div>
                <div class="tx-size">
                  <p class="mt-2"><small> A coffee bean is a seed of the Coffea plant and the source for coffee. It is the pit inside the red or purple fruit often referred to as a cherry. ... The two most economically important varieties of coffee plant are the Arabica and the Robusta; ~60% of the coffee produced worldwide is Arabica and ~40% is Robusta. </small> </p>
                  <button class=" btn btn-primary" type="button" data-toggle="modal" data-target="#dipa1">READ MORE
                 </button>
                  <hr>
                </div>
          </section>
       </div>       
  </div>
  <div class="container"> 
        <div class="col-lg-6 text-center">
          <section>
                <hr style="width:50%; text-align:center; ">
                <h5><small><em> ABOUT <strong>COFFEE</strong> </em></small></h5>
                <hr style="width:50%; text-align:center;">
                <div class="col-lg-12">
                    <img src="img/slide2.jpg" class="resize2" alt="">
                </div>
                <div class="tx-size">
                  <p class="mt-2"><small>Coffee is a brewed drink prepared from roasted coffee beans, the seeds of berries from certain Coffea species. When coffee berries turn from green to bright red in color – indicating ripeness – they are picked, processed, and dried. Dried coffee seeds are roasted to varying degrees, depending on the desired flavor.</small> </p>
                  <button class=" btn btn-primary" type="button" data-toggle="modal" data-target="#dipa2">READ MORE
                 </button>
                  <hr>
                </div>
               
          </section>
       </div>       
  </div>
  <div class="container "> 
        <div class="col-lg-6 text-center">
          <section>
                <hr style="width:50%; text-align:center; ">
                <h5><small><em> ABOUT <strong>COFFEE MEAKING</strong> </em></small></h5>
                <hr style="width:50%; text-align:center;">
                     <div class="col-lg-12">
                       <img src="img/slide3.jpg" class="resize2" alt="">
                    </div>
                <div class="tx-size">
                  <p class="mt-2" ><small>There are three common brewing methods for coffee at home. The long-standing favorite has been a classic drip coffee machine, but pour-over coffee at home is becoming increasingly more popular, and the French press is an easy favorite as well. Find out how to make coffee with all three methods with these easy steps. </small></p>

                  <button class=" btn btn-primary" type="button" data-toggle="modal" data-target="#dipa3">READ MORE
                 </button>
                 <hr style="width:50%; text-align:center; ">
                 <div class="btn btn-outline-success ">
                      <a style="text-decoration:none; color:black;" href="pdf/Coffee.pdf" download>Download PDF &nbsp;<i class="fas fa-download"></i></a>
                </div>
                <hr>
               
                </div>
               
          </section>
       </div>       
  </div>
  <div id="dipa1" class="modal fade" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">COFFEE BEAN</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>     
              </div>
              <div class="modal-body">
                  <p>Sample Text.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
  </div>
  <div id="dipa2" class="modal fade" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">COFFEE</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>     
              </div>
              <div class="modal-body">
                  <p>Sample Text.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
  </div>
  <div id="dipa3" class="modal fade" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">COFFEE MEAKING</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>     
              </div>
              <div class="modal-body">
                  <p>Sample Text.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
              </div>
          </div>
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
<?php
  }
  else{
    header("location:login.php");
  }
?>