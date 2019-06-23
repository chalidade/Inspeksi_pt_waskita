<div class="sticky">
  <hr>
  <div class="row" style="padding-left:10px;padding-top:10px;margin-top:-10px;text-align:center;background:#fff;">
    <div class="col-1"></div>
    <div class="col-2">
       <img id="user" src="img/user.png" alt="" style="width:35px">
       <font style="font-weight:600;color:#242424;font-size:10px">USER</font>
    </div>
    <div class="col-2">
      <img id="inspeksi" data-target="#add" src="img/test.png" alt="" style="width:35px">
      <font style="font-weight:600;color:#242424;font-size:10px">INSPEKSI</font>
    </div>
    <div class="col-2">
      <img id="cek" src="img/rec.png" alt="" style="width:35px;margin-left: -2px;">
      <font style="font-weight:600;color:#242424;font-size:10px">HOME</font>
    </div>
    <div class="col-2">
      <img id="report" data-target="#report" src="img/warning.png" alt="" style="width:35px">
      <font style="font-weight:600;color:#242424;font-size:10px">REPORT</font>
    </div>
    <div class="col-2">
      <a href="../index.php">
      <img id="report" src="img/log-out.png" alt="" style="width:35px">
        <font style="font-weight:600;color:#242424;font-size:10px">LOGOUT</font></a>
    </div>
    <div class="col-1"></div>
  </div>
</div>
    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="js/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/parallax.min.js"></script>
    <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/swiper.js"></script>
    <script src="js/swiper.min.js"></script>
    <script type="text/javascript">
    var mySwiper = new Swiper ('.swiper-container');
    </script>
    <script>

    $(document).ready(function(){
      $("#user").click(function(){
          $("#div1").load("user.php");
      });
    });

    $(document).ready(function(){
      $("#cek").click(function(){
          $("#div1").load("home.php");
      });
    });

    $(document).ready(function(){
      $("#report").click(function(){
          $("#div1").load("report.php");
      });
    });

    $(document).ready(function(){
      $("#inspeksi").click(function(){
          $("#div1").load("inspeksi.php");
      });
    });
    </script>
  </body>
</html>
