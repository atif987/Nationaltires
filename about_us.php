
  <?php 
  $pageTitle = "About Us";
  include 'header.php'; 
  ?>

 
  <!-- :: Header -->
	<header class="p-0 setblackbackgroundcolor">
		<div class="container">
			<!-- contain -->
			<div class="row align-items-center">
        <div class="col-7">
          <h1 class="mb-4 text-uppercase text-white">About us</h1>
          <p class="mb-0 text-white">
          Welcome to National Tires & Auto Repairs! We are your trusted destination for top-quality automotive services. With a team of highly skilled technicians and state-of-the-art facilities, we provide comprehensive tire and auto repair solutions. From routine maintenance to complex repairs, our commitment to excellence ensures that your vehicle receives the utmost care and attention. Count on us for reliable and efficient service, keeping your vehicle in optimal condition for a smooth and safe driving experience.</p>
        </div>
        <div class="col-5">
          <img src="./assets/images/char/man.png" class="img-fluid" alt="man">
        </div>
			</div>
		</div>
	</header>


  <div class="container-fluid pt-5 pb-5 text-white setblackbackgroundcolor">
    <div class="row">
        <div class="col-lg-6 col-md-9 col-sm-12 mx-auto">
            <form method="POST" id="contactusform">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="number" class="form-control" id="phone" name="phone" required>
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div>

            <button type="submit" id="contactsubmitbutton" class="btn btn-light w-100">Submit</button>
            </form>
        </div>
    </div>
  </div>

  <!--:: Location-->
  <div class="container-fluid" style="background-color: black;padding-top: 10px;">
  </div>
  <div class="loc-container">
    <div class="contact-details">
      <h5>Location</h5>
      <p>1050 n state road 7 Hollywood Florida 33021</p>

      <h5>Email Address</h5>
      <p>info@nationaltires.com</p>

      <h5>Phone Number</h5>
      <p>Phone: 954-987-2390<br>

      <h5>Hours of Operation</h5>
      <p>Store hours are 8am-7:30pm<br>
      Open 7 days a week</p>
    </div>
    <div class="google-map" style="border-radius: 10px;overflow: hidden;">
      <!-- Your Google Map embed code or API integration goes here -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3585.4366722657946!2d-80.21045628497377!3d26.019264683520486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9a96b1824da1b%3A0x4dca69c1b455ee80!2sNational%20Tires!5e0!3m2!1sen!2s!4v1689057576283!5m2!1sen!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>

  <div class="faq-cont">
    <div class="container">
      <div class="row justify-content-center">
        <h4 class="text-white mb-3">MOST ASKED QUESTIONS</h4>
      </div>
      <div class="row">
        <div class="faq-container">
          <div class="faq">
            <div class="faq-question">Q: How do I get started?<span class="plus-icon">&#43;</span></div>
            <div class="faq-answer">A: To get started, simply follow the instructions provided in the user manual.</div>
          </div>
          <div class="faq">
            <div class="faq-question">Q: Can I change my password?<span class="plus-icon">&#43;</span></div>
            <div class="faq-answer">A: Yes, you can change your password by going to the Account Settings page and selecting the password change option.</div>
          </div>
          <div class="faq">
            <div class="faq-question">Q: What payment methods are accepted?<span class="plus-icon">&#43;</span></div>
            <div class="faq-answer">A: We accept major credit cards, PayPal, and bank transfers.</div>
          </div>
          <!-- Add more FAQ entries as needed -->
        </div>
      </div>
    </div>
  </div>
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

            $("#contactsubmitbutton").on("click", function(e) {
                console.log("Button Clicked");
                e.preventDefault();
                var formdata = jsonData("#contactusform");
                // validate form fields
                var name = $('#name').val();
                var email = $('#email').val();
                var phone = $('#phone').val();
                var message = $('#message').val();
    
                if (name == '' || email == '' || message == '' || phone == '') {
                 Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'All Fields are Required',
                    footer: '<a href="">Why do I have this issue?</a>'
                  })
                }else {

                    $.ajax({
                        url: "insertcontactusdetails.php",
                        type: 'POST',
                        data: formdata,
                        success: function(data) {
                            if (data.status == true) {
                                Swal.fire(
                                  'Query Recorded!',
                                  'Our Team will soon contact you',
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
  
  <?php 
  include 'footer.php'; 
  ?>
  