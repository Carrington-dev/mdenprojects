 <!-- ======= Top Bar ======= -->
 <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:<?php echo "$email"; ?>"><?php echo "$email"; ?></a></i>
        
         <!-- <i class="bi bi-phone d-flex align-items-center ms-4"><span><?php echo "$tel"; ?></span></i>  -->
     
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="https://x.com/i_am_emerge" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/iamemerge/" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.facebook.com/iamemerge/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://x.com/i_am_emerge" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        
        <a href="/"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="/">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <!--
            <li><a href="{% url 'calculator' %}">Calculator</a></li>
          -->
         
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->