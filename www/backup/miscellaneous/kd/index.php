<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
/*
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");    
}

else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
*/
?><!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>IPR | Welcome</title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <!-- CUSTOM STYLE -->
      <link rel="stylesheet" href="css/template-style.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>

                 
      <!--[if lt IE 9]>
	      <script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
      <![endif]-->
	    <link rel="shortcut icon" href="img/icon.png" >
   </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->
      <header>
         <div id="topbar">
            <div class="line">
               <div class="s-12 m-6 l-6">
                  <div class="social left">
                     <div><br><img src="img/logoieeebombaymedium.png"/></div>
                  </div>
                  
               </div>
               <div class="s-12 m-6 l-6">
                  <div class="social right">
                     <div><a class="white-btn" href="index_loginsignup.php">Login | Sign Up</a></div>
                  </div>
               </div>
            </div>  
         </div> 
         <nav>
            <div class="line">
               <div class="s-12 l-2">
                  <p class="logo"><img src="img/logobgsmall.png"/></p>

               </div>
               
               <div class="top-nav s-12 l-10">
                  <p class="nav-text">Menu</p>
                  <ul class="right">
                     <li><a href="home.php">Home</a></li>
                     <li><a href="#">IPR</a>
					 <ul>
								<li><a href="copyright.php">Copyright</a></li>
								<li><a href="patent.php">Patent</a></li>
								<li><a href="trademark.php">Trademark</a></li>
								</ul>
					 </li>
                     <li><a href="#">Team</a>
					  <ul>
								<li><a href="coreteam.php">Core Team</a></li>
								<li><a href="mentors.php">Mentors</a></li>
								</ul>
					 </li>
                     <li><a href="blog.php">Blog</a></li>
                     <li><a href="#">FAQs</a>
					 <ul>
								<li><a href="copyrightfaqs.php">Copyright FAQs</a></li>
								<li><a href="patentfaqs.php">Patent FAQs</a></li>
								<li><a href="trademarkfaqs.php">Trademark FAQs</a></li>
					 </ul></li>
                <li><a href="news.php">News</a>
            <ul>
                <!-- <li><a href=""></a></li> this creates problem -->
                
                </ul>
           </li>
           <li><a href="contact.php">Contact Us</a>
            <ul>
                
                </ul>
           </li>



                  </ul>
               </div>
            </div>
         </nav>
      </header>  
      <section>
         <!-- CAROUSEL --> 
         <div id="carousel">
            <div id="owl-demo" class="owl-carousel owl-theme"> 
               <div class="item">
                  <img src="img/a.png" alt="">
                  
               </div>
            </div>
         </div>
         <!-- FIRST BLOCK -->
         <div id="first-block">
            <div class="line">
               <h1>Welcome to <strong>IPR</strong>4Students</h1>
           
            </div>
         </div>
         <!-- OUR WORK -->
         <div id="our-work">
            <div class="line">
               <h3 style=""><b><u>Indian Organizations and IP</u></b></h3>
			   <p style="font-size:20px;color:#606060;LINE-HEIGHT:25px;">Look at the global ICT companies; it is clear that their strategic growth is more IP driven.
How many companies in India are IP driven? Do we see this information coming in quarterly result? How many reporters raise questions about the IP issue during interviews and talk show?
People talk about strategic direction (IoT, Digital etc), which is indirectly related to IP, however only few talk clearly in terms of  IP (Patent Goals, Area of interest, IP driven Collaborations etc).
Predominantly, Indian companies are service driven and IP is dominated by product driven companies. Is this one of the reasons?
</p>
			    <p style="font-size:20px;color:#606060;LINE-HEIGHT:25px;">Can Indian project/program manager think and drive IP focused tactical actions ?<br>

Is IP a hype? But then, when merger or acquisition happens, it is the prime asset and adds valuation in the range of 30% to 60% to overall company asset valuation.<br>

Indian patent offices are publishing the patent application list, where more than 80% invention  application are from non-Indian companies.<br>
How long and when will we be IP driven ?<br>
Do we need to change work culture ?
</p><br><br>
				 <h3><b><u>IPR, Innovation and Students:</u></b></h3>
				  <p style="font-size:20px;color:#606060;LINE-HEIGHT:25px;">Students and academia talks about Innovation, but rarely about IPR. Let's share our experience and services to build this future currency. IPR exposure will fast forward the innovations in universities, because it brings value to the innovators. IPR cells are formed at institute level and workshops are happening, however more member can take up similar activity to create value for themselves and others. We request to students to contribute to this website for their fellow students benefits.</p><br><br>
				  <h3><b><u>Patents: Making it simple and reducing the fear</u></b> </h3>
				   <p style="font-size:20px;color:#606060;LINE-HEIGHT:25px;">Main roadblock in building the IP asset is fear about the patent filling process and investment needed. <strong>Mr.Dnyaneshwar Kamble </strong>,  Technology evangelist and visionary young leader, board member of IEEE Bombay section and advisor to various technical institutes , conceptualized  and formed the core team with <strong>Mr.Pratik Baheti</strong> (BE Student), to facilitate following actions:</p>
				   <ul>
  <li style="font-size:20px;color:#606060;LINE-HEIGHT:30px;">Ipr4students site to simplify patent filling process for students, answer their queries and knowledge sharing on IPR by allowing them to write blogs.</li>
  <li style="font-size:20px;color:#606060;LINE-HEIGHT:30px;">Guidance of mentors :  <strong>Dr.Saurabh Mehta</strong> (VIT), <strong>Prof. Kiran Talele</strong> (SPIT),<strong> Dr.Vinit Dongre </strong>(TCET), <strong>Mr.Abhay Phansikar</strong> (Startup Consultant and Vice President IEEE Bombay section) and <strong>Dr. Dinesh Israni </strong>(Counsultant at SP-TBI) to advice students through Ipr4students . Based on their availability, they will conduct the IPR sessions.</li>
  <li style="font-size:20px;color:#606060;LINE-HEIGHT:30px;">IP Pledge for students to reinforce commitment toward respecting other people / organization IP.</li>
 <li style="font-size:20px;color:#606060;LINE-HEIGHT:30px;"> Recognize the  organizations (including startup's) who adopts IP culture in their organizations.</li>
</ul> 
<p style="font-size:20px;color:#606060;LINE-HEIGHT:30px;"><strong>Mr. Pratik Baheti </strong> is a motivated and committed student. He has filed three patent applications.<br> <strong>Mr. Kirtiraj R. Garud, Mr.Shubham Madke</strong>, and <strong>Mr.Shubham Patil</strong> are contributing towards the development of this website. </p>
            </div>
         </div>         
         <!-- SERVICES -->
         <div id="services">
            <div class="line">
               <h2 class="section-title">Intellectual Property Rights<br><font size="4">(Students)</font></h2>
               <div class="margin">
                  <div class="s-12 m-6 l-4 margin-bottom">
				   <a href="copyright.php">
                     <i class="icon-pen"></i>
                     <div class="service-text">
                        <h3 style="font-size:30px">Copyright</h3>
                        <p>Copyright is a legal term used to describe the rights that creators have over their literary and artistic works. <br><br>More...</p>
                     </a></div>
                  </div>
                  <div class="s-12 m-6 l-4 margin-bottom">
				  <a href="patent.php">
                     <i class="icon-sheet"></i>
                     <div class="service-text">
                        <h3 style="font-size:30px">Patent</h3>
                        <p>A patent is an exclusive right granted for an invention. <br><br><br>More...</p>
						</a>
                     </div>
                  </div>
                  <div class="s-12 m-12 l-4 margin-bottom">
				  <a href="trademark.php">
                     <i class="icon-label"></i>
                     <div class="service-text">
                        <h3 style="font-size:30px">Trademark</h3>
                        <p>A trademark is a sign capable of distinguishing the goods or services of one enterprise from those of other enterprises. <br><br>More...</p>
                     </a></div>
                  </div>
               </div>
            </div>
         </div>

        
         
         
      </section>
      <!-- FOOTER -->
      <footer>
         <div class="line">
            <div class="s-12 l-6">
               <p>Copyright 2017, IPR4Students</p>
               <!-- <a href="https://www.twitter.com/ipr4students "><img src="img/socialicon1.png"></a><a href="https://www.facebook.com/ipr4students "><img src="img/socialicon2.png"></a>-->
               <p>For Query contact : support@ipr4student.org</p>
               <p>Designed and Maintained by : <a href="http://www.rainbowdimensions.org"><font size="2" color="white"><strong>Rainbow Dimensions<strong></font></a> & <a href="http://www.mediaspa.in"><font size="2" color="white"><strong>Mediaspa<strong></font></a>
               </p>
                        
                                </div>
                    </div>
        			
      </footer>
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
		  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-98184758-1', 'auto');
  ga('send', 'pageview');

</script>
      <script type="text/javascript">
         jQuery(document).ready(function($) {
            var theme_slider = $("#owl-demo");
            $("#owl-demo").owlCarousel({
                navigation: false,
                slideSpeed: 300,
                paginationSpeed: 400,
                autoPlay: 6000,
                addClassActive: true,
             // transitionStyle: "fade",
                singleItem: true
            });
            $("#owl-demo2").owlCarousel({
                slideSpeed: 300,
                autoPlay: true,
                navigation: true,
                navigationText: ["&#xf007","&#xf006"],
                pagination: false,
                singleItem: true
            });
        
            // Custom Navigation Events
            $(".next-arrow").click(function() {
                theme_slider.trigger('owl.next');
            })
            $(".prev-arrow").click(function() {
                theme_slider.trigger('owl.prev');
            })     
        }); 
      </script>
   </body>
</html>