<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Perfect Cup-About</title>
    <!-- css links -->
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
          <section>
                <hr style="width:50%; text-align:center; ">
                <h5><small><em> ABOUT <strong>THE PERFECT CUP </strong> </em></small></h5>
                <hr style="width:50%; text-align:center;">
                <div class="col-lg-12">
                <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/wKTPJXEpqMs' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <div class="tx-size">
                  <p ><small> Coffee preparation is the process of turning coffee beans into a beverage. While the particular steps vary with the type of coffee and with the raw materials. </small> <strong>Thank you all of you</strong> </p>
                </div>
               
          </section>
       </div>       
  </div>
  <div class="container ">
        <div class="col-lg-6 text-center ">
          <section>
                <hr style="width:50%; text-align:center; ">
                <h5><small><em> OUR <strong>TEAM</strong></em></small></h5>
                <hr style="width:50%; text-align:center;">
                <div class="row">
                    <div class="col-sm-4 text-center">
                        <img src="img/pic1.jpg" class="resize2"alt="">
                        <h3 class="mt-2"><small>Rupa Halder</small> </h3>
                    </div>
                    <div class="col-sm-4 text-center">
                        <img src="img/pic2.jpg"class="resize2" alt="">
                        <h3 class="mt-2"><small>Dipa Halder</small></h3>
                    </div>
                    <div class="col-sm-4 text-center">
                        <img src="img/pic3.jpg" class="resize2" alt="">
                        <h3 class="mt-2"><small>Riya Halder</small></h3>
                    </div>
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