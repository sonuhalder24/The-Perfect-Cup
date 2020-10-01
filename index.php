<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Perfect Cup-Home</title>
    <!-- CSS link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  <?php
    if(isset($_GET["logout"])){
      if($_GET["logout"]=='true'){
  ?>
  <div class="alert alert-warning">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>You have been logged out of the system</strong>
  </div>
  <?php
      }
    }?>
  <?php require_once 'nav.php'; ?> 
 <div class="container"> 
        <div class="col-lg-6 text-center">
          <section>
        <div id="carouselExampleControls" class="carousel slide " data-ride="carousel" data-interval="1000"    data-pause="hover">  
               <ol class="carousel-indicators py-4 " >
                   <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                   <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                   <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol> 
            <div class="carousel-inner">
              <div class="carousel-item active">
                 <img src="img/slide1.jpg" class="d-block w-100 resize" >
              </div>
              <div class="carousel-item">
                  <img src="img/slide2.jpg"class="d-block w-100 resize" >
              </div>
              <div class="carousel-item">
                  <img src="img/slide3.jpg"class="d-block w-100 resize" >
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>  
            </div>
          </div>
            <h2><small>Welcome to</small></h2>
            <h1>Perfect Cup</h1>
            <h4 class="mb-5"> <small ><em>By Dipa Halder</em> </small></h4>
       </section>
       </div>   
       
  </div>
  <div class="container">
       <div class="col-lg-6 text-center">
          <section>
                <hr style="width:50%; text-align:center; ">
                <h5><small><em> MAKE A <strong>PERFECT CUP OF COFFEE</strong> </em></small></h5>
                <hr style="width:50%; text-align:center;">
                <div class="clearfix tx-size">
                  <img class=" float-left shape mr-2" src="img/coffee.jpg" alt="">
                  <p class="text-left"><small> Coffee preparation is the process of turning coffee beans into a beverage. While the particular steps vary with the type of coffee and with the raw materials, the process includes four basic steps: raw coffee beans must be roasted, the roasted coffee beans must then be ground, the ground coffee must then be mixed with hot water for a certain time (brewed), and finally the liquid coffee must be separated from the used grounds.Coffee is usually brewed immediately before drinking. In most areas, coffee may be purchased unprocessed, or already roasted, or already roasted and ground. Coffee is often vacuum packed to prevent oxidation and lengthen its shelf life.</small> <strong>Thank you all of you</strong> </p>
                </div>
                
                <hr>
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