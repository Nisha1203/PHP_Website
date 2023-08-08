<!DOCTYPE html>
<html lang="en">
<head>
  <title>Photography Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css" media="screen">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />

    <style>
      /* Add your inline CSS styles here */
      .logo-container {
        text-align: center;
        background-color: #f4f4f4;
        height: 25px;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
      }

      .logo-text {
        font-size: 15px;
        color: #333;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: bold;
        margin: 0;
        padding: 2px;
      }
    </style>
</head>
<body>
<!-- Navbar -->
<div class="header">
  <nav>
    <div class="logo-container">
      <h5 class="logo-text">Nish Studio</h5>
    </div>
    <ul>
      <li><a href="#">HOME</a></li>
      <li><a href="#about">ABOUT</a></li>
      <li><a href="#Services">SERVICES</a></li>
      <li><a href="#Department">OUR WORK</a></li>
      <li><a href="#contact">CONTACT</a></li>
    </ul>
    <div class="toggle-btn" id="btn">
      <span id="btnText">Dark</span>
      <img src="images/moon.png" id="btnIcon" />
    </div>
  </nav>
</div>
<!-- //Navbar -->

<!-- Home -->
<section class="banner">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h1>We capture your memories</h1>
            <p>We provide a wide array of photography services.</p>
          </div>
        </div>
      </div>
    </section>
<!-- //Home -->

<!-- stats -->
<section id="strats">
  <div class="wrapper1">
    <div class="container1">
      <span class="num" data-val="45">000</span>
      <span class="text">Experienced Photographer</span>
    </div>
    <div class="container1">
      <span class="num" data-val="250">000</span>
      <span class="text">Success Stories</span>
    </div>
    <div class="container1">
      <span class="num" data-val="225">000</span>
      <span class="text">Photography Programs</span>
    </div>
    <div class="container1">
      <span class="num" data-val="500">000</span>
      <span class="text">Happy clients</span>
    </div>
  </div>
</section>

<!-- //stats -->
<!-- About -->
<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1>About us</h1>
        <h2>
          "Capturing moments, framing emotions, and painting stories with light and imagination."
        </h2>
      </div>
      <div class="col-md-6">
        <div class="abouttext">
          <p>
            Welcome to our photography page, where moments come to life through the lens of our cameras. 
            We are a passionate team of photographers dedicated to capturing the beauty, emotions, and 
            stories that unfold in every frame. With a keen eye for detail and a love for creativity, 
            we strive to freeze time and transform fleeting moments into cherished memories. 
            Our journey in photography has been marked by a relentless pursuit of excellence, 
            always pushing the boundaries to deliver stunning visuals that speak volumes. 
          </p>
          <!-- <button type="button" class="btn btn-info">Info</button> -->
        </div>
      </div>
    </div>
  </div>
</section>

<!-- //About -->

<!-- Services -->
<section id="Services">
  <div class="container text-center">
    <div class="row">
      <div class="col-md-6">
        <h1>Why Should You Choose Us?</h1>
        <div class="icon-container">
          <span class="icon">&#128336;</span>
          <span class="text">24/7 Support</span>
        </div>
        <br />
        <div class="icon-container">
          <span class="icon">&#10003;</span>
          <span class="text">100% Guarantee</span>
        </div>
        <div class="icon-container">
          <span class="icon">📷</span>
          <span class="text">Experienced Photographer</span>
        </div>
        <br />
        <div class="icon-container">
          <span class="icon">📞</span>
          <span class="text">Free Consultation</span>
        </div>
      </div>
      <div class="col-md-6">
        <div class="aboutimg">
          <img src="images/about.jpg" class="img-fluid" alt="About Image" />
        </div>
      </div>
    </div>
  </div>
</section>

<!-- //Services -->

<!-- Department -->
<section id="Department">
  <div class="container">
    <h1>Our Work</h1>
    <div class="row">
      <div class="col-sm-4">
        <!-- Content for first grid -->
        <div class="card">
          <img src="images/wedding.jpg" class="card-img-top" alt="Photo" style="max-width: 100%;"/>
          <div class="card-body">
            <h5 class="card-title">Wedding Photos</h5>
            <p class="card-text">
            "Capturing moments that make your heart skip a beat – from 'I do' to forever. Let us frame your love story in timeless elegance and turn into cherished memories."
            </p>
          </div>
        </div>
        <div class="card">
          <img src="images/Birthday.jpg" class="card-img-top" alt="Photo" style="max-width: 100%;" />
          <div class="card-body">
            <h5 class="card-title">Birthday Photos</h5>
            <p class="card-text">
            "From the first candle to the last cheer, we're here to document your birthday memories, one snapshot at a time."
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <!-- Content for second grid -->
        <div class="card">
          <img
            src="images/Vacation.jpg"
            class="card-img-top"
            alt="Photo"
            style="max-width: 100%;"
          />
          <div class="card-body">
            <h5 class="card-title">Vacation</h5>
            <p class="card-text">
            "Capturing moments, one adventure at a time. Let us frame your vacation memories in pixels of perfection."
            </p>
          </div>
        </div>
        <div class="card">
          <img
            src="images/event.jpg"
            class="card-img-top"
            alt="Photo"
            style="max-width: 100%;"
          />
          <div class="card-body">
            <h5 class="card-title">Party and Events</h5>
            <p class="card-text">
            "Capturing moments that turn into memories – your party, our lens. Let us frame the joy, laughter, and excitement of your special event, creating timeless images that you'll treasure forever."
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <!-- Content for third grid -->
        <div class="card">
          <img src="images/editing.jpg" class="card-img-top" alt="Photo" style="max-width: 100%;"/>
          <div class="card-body">
            <h5 class="card-title">Photo and video editing</h5>
            <p class="card-text">
            "Capturing Moments, Crafting Stories: Our Photo and Video Editing Elevate Your Visual Narratives to a Whole New Level."
            </p>
          </div>
        </div>
        <div class="card">
          <video class="card-img-top" controls style="max-width: 100%;">
            <source src="images/video.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <div class="card-body">
            <h5 class="card-title">Videos</h5>
            <p class="card-text">
            "From Lens to Screen: Transforming Reality into Cinematic Excellence with Our Videography."
            </p>
          </div>
        </div>

        
      </div>
    </div>
  </div>
</section>
<!-- //Department -->

<section id="contact" class="contact" style="background-color: #bbf0df">
  <h1>CONTACT</h1>
  <div class="container">
    <div class="contact-form">
    <form class="form-horizontal" action="userinfo.php" method="post">
      <div class="form-group">
          <label class="control-label col-sm-2" for="email">Username:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="username" name="user" placeholder="Enter username">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Email:</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Mobile:</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="pwd" name="mobile" placeholder="Enter mobile number">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Comments:</label>
          <div class="col-sm-10">
          <textarea class="form-control" name="comment" placeholder="Enter Comment">
          </textarea>
          </div>
        </div>
        
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
              <label><input type="checkbox"> Remember me</label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
<!-- //Contact -->




<!-- footer -->
<footer class="footer">
      <div class="container5">
        <div class="row5">
          <div class="footer-col">
            <h4>company</h4>
            <div class="foot">
              <ul>
                <li><a href="#">about us</a></li>
                <li><a href="#">our services</a></li>
                <li><a href="#">privacy policy</a></li>
                <li><a href="#">affiliate program</a></li>
              </ul>
            </div>
          </div>
          <div class="footer-col">
            <h4>Useful Links</h4>
            <div class="foot">
              <ul>
                <li><a href="#">Terms of service</a></li>
                <li><a href="#">Documentation</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">Components</a></li>
                <li><a href="#">Changelog</a></li>
              </ul>
            </div>
          </div>
          <div class="footer-col">
            <h4>Website</h4>
            <div class="foot">
              <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#services">SERVICES</a></li>
                <li><a href="#department">DEPARTMENT</a></li>
                <li><a href="#contact">CONTACT</a></li>
              </ul>
            </div>
          </div>
          <div class="footer-col">
            <h4>follow us</h4>
            <div class="social-links">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
        <div class="text-center">
          <p>
            All rights reserved by Nishigandha developed for personal project &copy;
            2023
          </p>
        </div>
      </div>
    </footer>
    <!-- //footer -->
<script>
      let btn = document.getElementById("btn");
      let btnText = document.getElementById("btnText");
      let btnIcon = document.getElementById("btnIcon");
      let logo = document.getElementById("logo");

      btn.onclick = function () {
        document.body.classList.toggle("dark-theme");

        if (document.body.classList.contains("dark-theme")) {
          btnIcon.src = "images/sun.png";
          btnText.innerHTML = "Light";
        } else {
          btnIcon.src = "images/moon.png";
          btnText.innerHTML = "Dark";
        }
      };
    </script>
    <script src="index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></s>
</body>
</html>