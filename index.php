<?php
session_start();
require_once "header.php";
?>



<div class="site-blocks-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" id="home-section">

     <div class="container">
          <div class="row align-items-center justify-content-center">

               <!-- alert for error -->
               <?php if (isset($_SESSION['error']) &&  $_SESSION['error'] == 1) { ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alertActivation">
                         <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                              <use xlink:href="#exclamation-triangle-fill" />
                         </svg>
                         <div>
                              <?php echo $_SESSION['errorMassage']; ?>
                              <?php $_SESSION['error'] = 0   ?>
                         </div>
                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

               <?php } ?>


               <div class="col-md-10 mt-lg-5 text-center">
                    <div class="single-text owl-carousel">
                         <div class="slide">
                              <h1 class="text-uppercase" data-aos="fade-up">Citizens Financial Institutions</h1>
                              <p class="mb-5 desc" data-aos="fade-up" data-aos-delay="100">Trusted name in the financial industry, committed to serving the financial needs of our community</p>
                              <div data-aos="fade-up" data-aos-delay="100">
                                   <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn  btn-primary mr-2 mb-2">Get Started</a>
                              </div>
                         </div>

                         <div class="slide">
                              <h1 class="text-uppercase" data-aos="fade-up">Personal</h1>
                              <p class="mb-5 desc" data-aos="fade-up" data-aos-delay="100">Checking Accounts: Choose from a variety of checking account options to suit your daily needs.</p>
                              <div data-aos="fade-up" data-aos-delay="100">
                                   <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn  btn-primary mr-2 mb-2">Get Started</a>
                              </div>
                         </div>

                         <div class="slide">
                              <h1 class="text-uppercase" data-aos="fade-up">Savings Accounts</h1>
                              <p class="mb-5 desc" data-aos="fade-up" data-aos-delay="100">Savings Accounts: Build your financial future with our savings account options.</p>
                              <div data-aos="fade-up" data-aos-delay="100">
                                   <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn  btn-primary mr-2 mb-2">Get Started</a>
                              </div>
                         </div>

                    </div>
               </div>

          </div>
     </div>

     <a href="#next" class="mouse smoothscroll">
          <span class="mouse-icon">
               <span class="mouse-wheel"></span>
          </span>
     </a>
</div>


<div class="site-section cta-big-image" id="about-section">
     <div class="container">
          <div class="row mb-5 justify-content-center">
               <div class="col-md-8 text-center">
                    <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">About Us</h2>
                    <p class="lead" data-aos="fade-up" data-aos-delay="100">we are dedicated to serving the financial needs of our community</p>
               </div>
          </div>
          <div class="row">
               <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
                    <figure class="circle-bg">
                         <img src="images/img_2.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
                    </figure>
               </div>
               <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">

                    <h3 class="text-black mb-4">We Solve Your Financial Problem</h3>

                    <p>At Citizens Financial Institutions, we are dedicated to serving the financial needs of our community.</p>

                    <p>With a history deeply rooted in providing reliable services, we are committed to helping individuals, businesses, and organizations achieve their financial goals.</p>

               </div>
          </div>

     </div>
</div>

<div class="site-section" id="next">
     <div class="container">
          <div class="row mb-5">
               <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="">
                    <img src="images/flaticon-svg/svg/001-wallet.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
                    <h3 class="card-title">Money Savings</h3>
                    <p>Effective money-saving strategies can help you achieve your financial goals and secure your future.</p>
               </div>
               <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="100">
                    <img src="images/flaticon-svg/svg/004-cart.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
                    <h3 class="card-title">Online Shoppings</h3>
                    <p>Online shopping has revolutionized the way we shop, offering convenience, variety, and cost-saving opportunities.</p>
               </div>
               <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="200">
                    <img src="images/flaticon-svg/svg/006-credit-card.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
                    <h3 class="card-title">Credit / Debit Cards</h3>
                    <p>Credit and debit cards are essential tools in today's financial landscape. They offer convenience, security, and a range of benefits to users.</p>
               </div>

          </div>

          <div class="row">
               <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
                    <figure class="circle-bg">
                         <img src="images/about_2.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
                    </figure>
               </div>
               <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
                    <div class="mb-4">
                         <h3 class="h3 mb-4 text-black">Solutions Is Our Priority</h3>
                         <p>We embrace innovation and technology to continually improve our services. We stay ahead of the curve to provide you with modern solutions.</p>

                    </div>

                    <div class="mb-4">
                         <ul class="list-unstyled ul-check success">
                              <li>Online and Mobile </li>
                              <li>Business </li>
                              <li>Loans and Mortgages</li>
                         </ul>

                    </div>




               </div>
          </div>
     </div>
</div>




<section class="site-section border-bottom" id="team-section">
     <div class="container">
          <div class="row mb-5 justify-content-center">
               <div class="col-md-8 text-center">
                    <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">Meet Team</h2>
                    <p class="lead" data-aos="fade-up" data-aos-delay="100">Our success is driven by the exceptional individuals who make up our team. Comprising a diverse group of professionals with a shared commitment to excellence, our team is here to serve you and provide the highest level of financial services and expertise.</p>
               </div>
          </div>
          <div class="row">



               <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="">
                    <div class="team-member">
                         <figure>
                              <ul class="social">
                                   <li><a href="#"><span class="icon-facebook"></span></a></li>
                                   <li><a href="#"><span class="icon-twitter"></span></a></li>
                                   <li><a href="#"><span class="icon-linkedin"></span></a></li>
                                   <li><a href="#"><span class="icon-instagram"></span></a></li>
                              </ul>
                              <img src="images/person_1.jpg" alt="Image" class="img-fluid">
                         </figure>
                         <div class="p-3">
                              <h3>Dan Laurenz</h3>
                              <span class="position">Managing Director</span>
                         </div>
                    </div>
               </div>

               <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-member">
                         <figure>
                              <ul class="social">
                                   <li><a href="#"><span class="icon-facebook"></span></a></li>
                                   <li><a href="#"><span class="icon-twitter"></span></a></li>
                                   <li><a href="#"><span class="icon-linkedin"></span></a></li>
                                   <li><a href="#"><span class="icon-instagram"></span></a></li>
                              </ul>
                              <img src="images/person_2.jpg" alt="Image" class="img-fluid">
                         </figure>
                         <div class="p-3">
                              <h3>Dave Simpson</h3>
                              <span class="position">Teller</span>
                         </div>
                    </div>
               </div>

               <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-member">
                         <figure>
                              <ul class="social">
                                   <li><a href="#"><span class="icon-facebook"></span></a></li>
                                   <li><a href="#"><span class="icon-twitter"></span></a></li>
                                   <li><a href="#"><span class="icon-linkedin"></span></a></li>
                                   <li><a href="#"><span class="icon-instagram"></span></a></li>
                              </ul>
                              <img src="images/person_3.jpg" alt="Image" class="img-fluid">
                         </figure>
                         <div class="p-3">
                              <h3>Ben Thompson</h3>
                              <span class="position">Teller</span>
                         </div>
                    </div>
               </div>



          </div>
     </div>
</section>

<section class="site-section" id="gallery-section" data-aos="fade">


     <div class="container">

          <div class="row mb-3">
               <div class="col-12 text-center">
                    <h2 class="section-title mb-3">Gallery</h2>
               </div>
          </div>



          <div id="posts" class="row no-gutter">
               <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                    <a href="images/img_1.jpg" class="item-wrap fancybox">
                         <span class="icon-search2"></span>
                         <img class="img-fluid" src="images/img_1.jpg">
                    </a>
               </div>
               <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                    <a href="images/img_2.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
                         <span class="icon-search2"></span>
                         <img class="img-fluid" src="images/img_2.jpg">
                    </a>
               </div>

               <div class="item brand col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                    <a href="images/img_3.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
                         <span class="icon-search2"></span>
                         <img class="img-fluid" src="images/img_3.jpg">
                    </a>
               </div>

               <div class="item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">

                    <a href="images/img_4.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
                         <span class="icon-search2"></span>
                         <img class="img-fluid" src="images/img_4.jpg">
                    </a>

               </div>

               <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                    <a href="images/img_5.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
                         <span class="icon-search2"></span>
                         <img class="img-fluid" src="images/img_5.jpg">
                    </a>
               </div>

               <div class="item brand col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                    <a href="images/img_1.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
                         <span class="icon-search2"></span>
                         <img class="img-fluid" src="images/img_1.jpg">
                    </a>
               </div>

               <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                    <a href="images/img_2.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
                         <span class="icon-search2"></span>
                         <img class="img-fluid" src="images/img_2.jpg">
                    </a>
               </div>

               <div class="item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                    <a href="images/img_3.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
                         <span class="icon-search2"></span>
                         <img class="img-fluid" src="images/img_3.jpg">
                    </a>
               </div>

               <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                    <a href="images/img_4.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
                         <span class="icon-search2"></span>
                         <img class="img-fluid" src="images/img_4.jpg">
                    </a>
               </div>

               <div class="item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                    <a href="images/img_5.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
                         <span class="icon-search2"></span>
                         <img class="img-fluid" src="images/img_5.jpg">
                    </a>
               </div>

               <div class="item brand col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                    <a href="images/img_1.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
                         <span class="icon-search2"></span>
                         <img class="img-fluid" src="images/img_1.jpg">
                    </a>
               </div>

               <div class="item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                    <a href="images/img_2.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
                         <span class="icon-search2"></span>
                         <img class="img-fluid" src="images/img_2.jpg">
                    </a>
               </div>


          </div>
     </div>

</section>


<section class="site-section">
     <div class="container">

          <div class="row mb-5 justify-content-center">
               <div class="col-md-7 text-center">
                    <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">How It Works</h2>
                    <p class="lead" data-aos="fade-up" data-aos-delay="100">In today's digital age, online Finance has revolutionized the way we manage our finances. It offers convenience, security, and accessibility like never before</p>
               </div>
          </div>

          <div class="row align-items-lg-center">
               <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">

                    <div class="owl-carousel slide-one-item-alt">
                         <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                         <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                         <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="custom-direction">
                         <a href="#" class="custom-prev"><span><span class="icon-keyboard_backspace"></span></span></a><a href="#" class="custom-next"><span><span class="icon-keyboard_backspace"></span></span></a>
                    </div>

               </div>
               <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">

                    <div class="owl-carousel slide-one-item-alt-text">
                         <div>
                              <h2 class="section-title mb-3">01. Account Setup</h2>
                              <p>In today's digital age, online Finance has revolutionized the way we manage our finances. It offers convenience, security, and accessibility like never before. If you're new to online or looking to understand how it works.</p>

                              <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p>
                         </div>
                         <div>
                              <h2 class="section-title mb-3">02. Logging In</h2>
                              <p>Once your online account is set up, log in using your username and password</p>
                              <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p>
                         </div>
                         <div>
                              <h2 class="section-title mb-3">03. Navigating the Dashboard</h2>
                              <p>After logging in, you'll be directed to your account dashboard. Here, you can view account balances, recent transactions, and other account details.</p>

                              <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p>
                         </div>

                    </div>

               </div>
          </div>
     </div>
</section>




<section class="site-section border-bottom bg-light" id="services-section">
     <div class="container">
          <div class="row mb-5">
               <div class="col-12 text-center" data-aos="fade">
                    <h2 class="section-title mb-3">Our Services</h2>
               </div>
          </div>
          <div class="row align-items-stretch">
               <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                    <div class="unit-4">
                         <div class="unit-4-icon">
                              <img src="images/flaticon-svg/svg/001-wallet.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
                         </div>
                         <div>
                              <h3>Business Consulting</h3>
                              <p>Personal : Discover a wide range of personal services designed to simplify your financial life. From savings and checking accounts to loans and credit cards, we have you covered</p>
                              <!-- <p><a href="#">Learn More</a></p> -->
                         </div>
                    </div>
               </div>
               <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="unit-4">
                         <div class="unit-4-icon">
                              <img src="images/flaticon-svg/svg/006-credit-card.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
                         </div>
                         <div>
                              <h3>Business </h3>
                              <p>We understand the complexities of running a business. Our business Finance solutions are tailored to support your growth and financial stability</p>
                              <!-- <p><a href="#">Learn More</a></p> -->
                         </div>
                    </div>
               </div>
               <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="unit-4">
                         <div class="unit-4-icon">
                              <img src="images/flaticon-svg/svg/002-rich.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
                         </div>
                         <div>
                              <h3>Income Monitoring</h3>
                              <p>Monitor your account balances in real-time. This helps you keep track of your finances and ensures you have sufficient funds</p>
                              <!-- <p><a href="#">Learn More</a></p> -->
                         </div>
                    </div>
               </div>


               <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">
                    <div class="unit-4">
                         <div class="unit-4-icon">
                              <img src="images/flaticon-svg/svg/003-notes.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
                         </div>
                         <div>
                              <h3>Security Features</h3>
                              <p>Online is secure.Employ encryption protocols and robust security measures to protect your data</p>
                              <!-- <p><a href="#">Learn More</a></p> -->
                         </div>
                    </div>
               </div>
               <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="unit-4">
                         <div class="unit-4-icon">
                              <img src="images/flaticon-svg/svg/004-cart.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
                         </div>
                         <div>
                              <h3>Mobile</h3>
                              <p>We offer mobile apps, allowing you to access your accounts from your smartphone or tablet</p>
                              <!-- <p><a href="#">Learn More</a></p> -->
                         </div>
                    </div>
               </div>
               <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="unit-4">
                         <div class="unit-4-icon">
                              <img src="images/flaticon-svg/svg/005-megaphone.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
                         </div>
                         <div>
                              <h3>Customer Support</h3>
                              <p>If you encounter any issues or have questions about online, most financial offer customer support via phone, email, or live chat.</p>
                              <!-- <p><a href="#">Learn More</a></p> -->
                         </div>
                    </div>
               </div>

          </div>
     </div>
</section>

<section class="site-section testimonial-wrap" id="testimonials-section" data-aos="fade">
     <div class="container">
          <div class="row mb-5">
               <div class="col-12 text-center">
                    <h2 class="section-title mb-3">Happy Customers</h2>
               </div>
          </div>
     </div>
     <div class="slide-one-item home-slider owl-carousel">
          <div>
               <div class="testimonial">

                    <blockquote class="mb-5">
                         <p>&ldquo;Switching to Citizens Financial Institutions' online was a game-changer for me. I can't express how convenient and secure it has made managing my finances. From checking my account balances to paying bills and even applying for loans, everything is just a click away.&rdquo;</p>
                    </blockquote>

                    <figure class="mb-4 d-flex align-items-center justify-content-center">
                         <div><img src="images/person_1.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                         <p>John Smith</p>
                    </figure>
               </div>
          </div>
          <div>
               <div class="testimonial">

                    <blockquote class="mb-5">
                         <p>&ldquo;The user-friendly interface of their online platform makes it incredibly easy to navigate, and I love the added security features like two-factor authentication. I feel confident that my financial information is in safe hands.&rdquo;</p>
                    </blockquote>
                    <figure class="mb-4 d-flex align-items-center justify-content-center">
                         <div><img src="images/person_2.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                         <p>Christine Aguilar</p>
                    </figure>

               </div>
          </div>

          <div>
               <div class="testimonial">

                    <blockquote class="mb-5">
                         <p>&ldquo;What truly sets Citizens Financial Institutions apart is their excellent customer support. Whenever I have a question or need assistance, their support team is just a phone call or chat message away, and they're always quick to help.&rdquo;</p>
                    </blockquote>
                    <figure class="mb-4 d-flex align-items-center justify-content-center">
                         <div><img src="images/person_3.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                         <p>Robert Spears</p>
                    </figure>


               </div>
          </div>

          <div>
               <div class="testimonial">

                    <blockquote class="mb-5">
                         <p>&ldquo;I can't recommend Citizens Financial Institutions' online enough. It has simplified my financial life and given me peace of mind. If you're looking for a reliable and efficient online experience, give them a try—you won't be disappointed!&rdquo;</p>
                    </blockquote>
                    <figure class="mb-4 d-flex align-items-center justify-content-center">
                         <div><img src="images/person_1.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                         <p>Bruce Rogers</p>
                    </figure>

               </div>
          </div>

     </div>
</section>

<section class="site-section bg-light" id="pricing-section">
     <div class="container">
          <!-- <div class="row mb-5">
               <div class="col-12 text-center" data-aos="fade-up">
                    <h2 class="section-title mb-3">Pricing</h2>
               </div>
          </div>
          <div class="row mb-5">
               <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="">
                    <div class="pricing">
                         <h3 class="text-center text-black">Basic</h3>
                         <div class="price text-center mb-4 ">
                              <span><span>$47</span> / year</span>
                         </div>
                         <ul class="list-unstyled ul-check success mb-5">

                              <li>Officia quaerat eaque neque</li>
                              <li>Possimus aut consequuntur incidunt</li>
                              <li class="remove">Lorem ipsum dolor sit amet</li>
                              <li class="remove">Consectetur adipisicing elit</li>
                              <li class="remove">Dolorum esse odio quas architecto sint</li>
                         </ul>
                         <p class="text-center">
                              <a href="#" class="btn btn-secondary">Buy Now</a>
                         </p>
                    </div>
               </div>

               <div class="col-md-6 mb-4 mb-lg-0 col-lg-4 pricing-popular" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing">
                         <h3 class="text-center text-black">Premium</h3>
                         <div class="price text-center mb-4 ">
                              <span><span>$200</span> / year</span>
                         </div>
                         <ul class="list-unstyled ul-check success mb-5">

                              <li>Officia quaerat eaque neque</li>
                              <li>Possimus aut consequuntur incidunt</li>
                              <li>Lorem ipsum dolor sit amet</li>
                              <li>Consectetur adipisicing elit</li>
                              <li class="remove">Dolorum esse odio quas architecto sint</li>
                         </ul>
                         <p class="text-center">
                              <a href="#" class="btn btn-primary">Buy Now</a>
                         </p>
                    </div>
               </div>

               <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="pricing">
                         <h3 class="text-center text-black">Professional</h3>
                         <div class="price text-center mb-4 ">
                              <span><span>$750</span> / year</span>
                         </div>
                         <ul class="list-unstyled ul-check success mb-5">

                              <li>Officia quaerat eaque neque</li>
                              <li>Possimus aut consequuntur incidunt</li>
                              <li>Lorem ipsum dolor sit amet</li>
                              <li>Consectetur adipisicing elit</li>
                              <li>Dolorum esse odio quas architecto sint</li>
                         </ul>
                         <p class="text-center">
                              <a href="#" class="btn btn-secondary">Buy Now</a>
                         </p>
                    </div>
               </div>
          </div> -->

          <div class="row site-section" id="faq-section">
               <div class="col-12 text-center" data-aos="fade">
                    <h2 class="section-title">Frequently Ask Questions</h2>
               </div>
          </div>
          <div class="row">
               <div class="col-lg-6">

                    <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                         <h3 class="text-black h4 mb-4">What are your business hours?</h3>
                         <p>Our business hours are Monday to Friday from 9:00 AM to 5:00 PM. We are closed on weekends and major holidays.</p>
                    </div>

                    <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                         <h3 class="text-black h4 mb-4">How can I open a new account?</h3>
                         <p>You can open a new account by visiting one of our branch locations or by filling out an online application on our website. Please bring the necessary identification and documentation.</p>
                    </div>

                    <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                         <h3 class="text-black h4 mb-4">Are my deposits insured by the FDIC?</h3>
                         <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>

                    <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                         <h3 class="text-black h4 mb-4">What available is refund period?</h3>
                         <p>Yes, your deposits are insured up to $250,000 per account by the Federal Deposit Insurance Corporation (FDIC).</p>
                    </div>
               </div>
               <div class="col-lg-6">

                    <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                         <h3 class="text-black h4 mb-4">What types of loans do you offer?</h3>
                         <p>We offer a variety of loans, including home loans, auto loans, personal loans, and business loans. Contact our loan department for more information.</p>
                    </div>

                    <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                         <h3 class="text-black h4 mb-4">How can I report a lost or stolen credit card?</h3>
                         <p>If your credit card is lost or stolen, please contact our 24/7 customer service hotline at +12025686466 to report it immediately.</p>
                    </div>

                    <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                         <h3 class="text-black h4 mb-4">What is the minimum balance requirement for a savings account?</h3>
                         <p>The minimum balance requirement for a savings account is $100. However, some accounts may have different requirements, so please check the account details.</p>
                    </div>

                    <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                         <h3 class="text-black h4 mb-4">Can I access my accounts online?</h3>
                         <p>Yes, you can access your accounts online through our secure online portal or mobile app. You can check balances, transfer funds, and more.</p>
                    </div>
               </div>
          </div>
     </div>
</section>

<section class="site-section" id="about-section">
     <div class="container">

          <div class="row">
               <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
                    <figure class="circle-bg">
                         <img src="images/img_4.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
                    </figure>
               </div>
               <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">


                    <div class="row">



                         <div class="col-12 mb-4" data-aos="fade-up" data-aos-delay="">
                              <div class="unit-4 d-flex">
                                   <div class="unit-4-icon mr-4 mb-3"><span class="text-primary flaticon-head"></span></div>
                                   <div>
                                        <h3>Local Commitment</h3>
                                        <p>We are deeply rooted in the communities we serve, and our decisions are made locally to benefit our customers and neighbors.</p>
                                        <!-- <p class="mb-0"><a href="#">Learn More</a></p> -->
                                   </div>
                              </div>
                         </div>
                         <div class="col-12 mb-4" data-aos="fade-up" data-aos-delay="100">
                              <div class="unit-4 d-flex">
                                   <div class="unit-4-icon mr-4 mb-3"><span class="text-primary flaticon-smartphone"></span></div>
                                   <div>
                                        <h3>Personalized Service</h3>
                                        <p>Our experienced team is dedicated to understanding your unique financial needs and providing tailored solutions.</p>
                                        <!-- <p class="mb-0"><a href="#">Learn More</a></p> -->
                                   </div>
                              </div>
                         </div>
                    </div>



               </div>
          </div>


     </div>
</section>




<section class="site-section" id="blog-section">
     <div class="container">
          <div class="row mb-5">
               <div class="col-12 text-center" data-aos="fade">
                    <h2 class="section-title mb-3">Our Blog</h2>
               </div>
          </div>

          <div class="row">
               <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">
                    <div class="h-entry">
                         <a href="single.html">
                              <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                         </a>
                         <h2 class="font-size-regular"><a href="#">Stay Secure: Tips for Safe operation with Citizens Financial Institutions</a></h2>
                         <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2022<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                         <p>In this comprehensive guide, we'll walk you through the process of setting up and using online with Citizens Financial Institutions. Learn how to register, log in, and take advantage of the many features and benefits of our online platform.</p>
                         <p><a href="single.php">Continue Reading...</a></p>
                    </div>
               </div>
               <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="h-entry">
                         <a href="single.html">
                              <img src="images/img_4.jpg" alt="Image" class="img-fluid">
                         </a>
                         <h2 class="font-size-regular"><a href="#">Managing Your Finances Anytime, Anywhere: The Benefits of Mobile</a></h2>
                         <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2020<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                         <p>Discover how mobile app from Citizens Financial Institutions can make your life easier. Learn how to download and use our mobile app to access your accounts, transfer funds, pay bills, and more, all from the convenience of your smartphone.</p>
                         <p><a href="single.php">Continue Reading...</a></p>
                    </div>
               </div>
               <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="h-entry">
                         <a href="single.html">
                              <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                         </a>
                         <h2 class="font-size-regular"><a href="#">Maximizing Your Savings: Online Tools and Features at Citizens Financial Institutions"</a></h2>
                         <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                         <p>Our online platform offers powerful tools to help you save and manage your money effectively. In this blog post, we'll explore features like budgeting tools, automatic transfers, and account alerts that can help you reach your financial goals.</p>
                         <p><a href="single.php">Continue Reading...</a></p>
                    </div>
               </div>

          </div>
     </div>
</section>




<section class="site-section bg-light" id="contact-section" data-aos="fade">
     <div class="container">
          <div class="row mb-5">
               <div class="col-12 text-center">
                    <h2 class="section-title mb-3">Contact Us</h2>
               </div>
          </div>
          <div class="row mb-5">



               <div class="col-md-4 text-center">
                    <p class="mb-4">
                         <span class="icon-room d-block h2 text-primary"></span>
                         <span>Address 1401 I St NW #110, Washington, DC 20005, United States</span>
                    </p>
               </div>
               <div class="col-md-4 text-center">
                    <p class="mb-4">
                         <span class="icon-phone d-block h2 text-primary"></span>
                         <a href="#">+12025686466</a>
                    </p>
               </div>
               <div class="col-md-4 text-center">
                    <p class="mb-0">
                         <span class="icon-mail_outline d-block h2 text-primary"></span>
                         <a href="#">info@citizenscommercialins.com</a>
                    </p>
               </div>
          </div>
          <div class="row">
               <div class="col-md-12 mb-5">



                    <form action="#" class="p-5 bg-white">

                         <h2 class="h4 text-black mb-5">Contact Form</h2>

                         <div class="row form-group">
                              <div class="col-md-6 mb-3 mb-md-0">
                                   <label class="text-black" for="fname">First Name</label>
                                   <input type="text" id="fname" class="form-control">
                              </div>
                              <div class="col-md-6">
                                   <label class="text-black" for="lname">Last Name</label>
                                   <input type="text" id="lname" class="form-control">
                              </div>
                         </div>

                         <div class="row form-group">

                              <div class="col-md-12">
                                   <label class="text-black" for="email">Email</label>
                                   <input type="email" id="email" class="form-control">
                              </div>
                         </div>

                         <div class="row form-group">

                              <div class="col-md-12">
                                   <label class="text-black" for="subject">Subject</label>
                                   <input type="subject" id="subject" class="form-control">
                              </div>
                         </div>

                         <div class="row form-group">
                              <div class="col-md-12">
                                   <label class="text-black" for="message">Message</label>
                                   <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                              </div>
                         </div>

                         <div class="row form-group">
                              <div class="col-md-12">
                                   <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                              </div>
                         </div>


                    </form>
               </div>

          </div>
     </div>
</section>

<?php
require_once "footer.php";
