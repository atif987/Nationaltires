 
 <!-- :: Footer -->
 <footer class="setblackbackgroundcolor">
    <!-- newsletter -->
    <div class="n-l">
      <div class="container text-center">
        <h2 class="mb-4">Subscribe To Our Newsletter</h2>
        <form method="POST" class="mx-auto text-center" id="subscribersform">
          <div class="d-sm-flex align-items-center justify-content-start">
            <input type="email" name="email" id="emailaddress" class="w-100 mb-sm-0 mb-3" placeholder="Email Address" autocomplete="off" required>
            <button class="text-uppercase" type="submit" id="subscriberssubmitbutton">Sign Up</button>
          </div>
        </form>
      </div>
    </div>
    <!-- links -->
    <div class="links">
      <div class="container">
        <!-- row -->
        <div class="row">
          <!-- col -->
          <div class="col-lg-3 col-md-4 col-sm-6 mb-lg-0 mb-0">
            <ul class="list-unstyled mb-0">
              <li class="title text-uppercase mb-3">COMPANY</li>
              <li><a href="index.php" class="text-capitalize text-white">Home</a></li>
              <li><a href="services.php" class="text-capitalize text-white">Services</a></li>
              <li><a href="meet_the_mechanic.php" class="text-capitalize text-white">Meet The Mechanics</a></li>
              <li><a href="rims.php" class="text-capitalize text-white">Rims</a></li>
              <li><a href="schedule-service.php" class="text-capitalize text-white">Schedule-Service</a></li>
              <li><a href="special_customize.php" class="text-capitalize text-white">Special Customize</a></li>
              <li><a href="products.php" class="text-capitalize text-white">Products</a></li>
              <li><a href="about_us.php" class="text-capitalize text-white">About Us</a></li>
            </ul>
          </div>
          <!-- col -->
          <div class="col-lg-3 col-md-4 col-sm-6 mb-lg-0 mb-0">
            <ul class="list-unstyled mb-0">
              <li class="title text-uppercase mb-3">POLICIES</li>
              <li><a href="#" class="text-capitalize text-white">Privacy Policy</a></li>
              <li><a href="terms&conditions.php" class="text-capitalize text-white">Terms of Service</a></li>
            </ul>
          </div>
          <!-- col -->
          <div class="col-lg-3 col-md-4 col-sm-6 mb-lg-0 mb-0">
            <ul class="list-unstyled mb-0">
              <li class="title text-uppercase mb-3">SUPPORT</li>
              <li><a href="schedule-service.php" class="text-capitalize text-white">Schedule Service</a></li>
              <li>
                <a href="https://www.facebook.com/profile.php?id=100067901697288&mibextid=LQQJ4d"><i class="fa-brands fa-facebook fa-bounce fa-2xl"></i></a>
                <a href="https://www.instagram.com/nationaltires/"><i class="fa-brands fa-instagram fa-bounce fa-2xl"></i></a>
              </li>
            </ul>
          </div>
          <!-- col -->
          <div class="col-lg-3 col-md-4 col-sm-6 mb-lg-0 mb-0">
            <ul class="list-unstyled mb-0">
              <li class="title text-uppercase mb-3">LOCATION</li>
              <li><span class="text-capitalize text-white">Address : 1050 n state road 7 Hollywood Florida 33021 </span><br><br>
                  <span class="text-capitalize text-white">Phone number : 954-987-2390</span><br><br>
                  <span class="text-capitalize text-white">Store hours are 8am-7:30pm</span><br>
                  <span class="text-capitalize text-white">Open 7 days a week</span>
                </span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- copyrights -->
    <div class="c-r text-left">
      <div class="container">
        <p class="mb-0 text-white">&copy; 2023 National tires & Auto repairs Ltd. Trademarks and brands are the property of their respective owners.</p>
        <p class="comment mb-0 text-white">Developed By
          <a href="index.php" target="_blank">National tires & Auto repairs</a>
        </p>
      </div>
    </div>
  </footer>

  <!-- :: Scripts -->
  <script src="./assets/js/lib/jquery-3.3.1.min.js"></script>
  <script src="./assets/js/lib/popper.js"></script>
  <script src="./assets/js/lib/bootstrap.min.js"></script>
  <script src="./assets/js/theme/theme.js"></script>
  <script src="./assets/js/loader.js"></script>
  <script src="https://kit.fontawesome.com/12cd0f72cd.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script type="text/javascript">
        $(document).ready(function() {
          
          function jsonData(targetform) {
                var arr = $(targetform).serializeArray();
                var obj = {};
                
                for (var i = 0; i < arr.length; i++) {
                    if (obj[arr[i].name] == "") {
                        return false;
                    }
                    obj[arr[i].name] = arr[i].value;
                }
                var JSONFormat = JSON.stringify(obj);
                return JSONFormat;
            }

            $("#subscriberssubmitbutton").on("click", function(e) {
                console.log("Button Clicked");
                e.preventDefault();
                var formdata = jsonData("#subscribersform");
                // validate form fields
                var email = $('#emailaddress').val();
                console.log(email);

                if (email == '') {
                 Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Email Field are Required',
                    footer: '<a href="">Why do I have this issue?</a>'
                  })
                }else {

                    $.ajax({
                        url: "insertsubscribers.php",
                        type: 'POST',
                        data: formdata,
                        success: function(data) {
                            if (data.status == true) {
                                Swal.fire(
                                  'Query Recorded!',
                                  data.message,
                                  'success'
                                )
                                $("#contactusform").trigger("reset");
                            }
                        }
                    })
                  }
            });

            });
  </script>
</body>
</html>