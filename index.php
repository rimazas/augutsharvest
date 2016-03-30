<!doctype html>
<?php 
$dev = 0;
if ($dev == 0) {
  $website = 'http://augustharvest.dev/';
  $css = 'css/style.css.php';
  $js = 'js/main.js';
} else if ($dev == 1){
  $website = 'http://augustharvest.co.uk.puriena.serveriai.lt/'; 
  $css = 'http://augustharvest.co.uk.puriena.serveriai.lt/css/style.css.php';
  $js = 'http://augustharvest.co.uk.puriena.serveriai.lt/js/main.js';
} else if ($dev == 2){
  $website = 'http://www.augustharvest.co.uk/'; 
  $css = 'http://augustharvest.co.uk/css/style.css.php';
  $js = 'http://augustharvest.co.uk/js/main.js';
}
?>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <title>Personal Shopper. Menswear</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--     <meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1" /> -->
    
    <meta property="og:url" content="<?php echo $website ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="AUGUST HARVEST">
    <meta property="og:description" content="A menswear personal shopper based in London, who is harvesting all year round to find the best hidden gems amongst the online stores, sample sales, designer brands and high street shops.">
    <meta property="og:image" content="<?php echo $website ?>img/fb_share.png">  

    <meta name="twitter:card" content="photo" />
    <meta name="twitter:site" content="@August_Harvest" />
    <meta name="twitter:title" content="AUGUST HARVEST" />
    <meta name="twitter:image" content="<?php echo $website ?>img/share_twitter.png" />
    <meta name="twitter:url" content="<?php echo $website ?>" />   
       
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="<?php echo $website ?>">
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="apple-touch-icon" href="img/app.png">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap.3.3.5/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="<?php echo $css; ?>" />
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script type="text/javascript">
    var html = document.getElementsByTagName('html')[0];
    html.className += '  wf-loading';
    setTimeout(function() {
      html.className = html.className.replace(' wf-loading', '');
    }, 2000);
    WebFontConfig = { fontdeck: { id: '59462' } };
    (function() {
      var wf = document.createElement('script');
      wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
      wf.type = 'text/javascript';
      wf.async = 'true';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
    })();
    </script>      
  </head>
    <body>
      <div id="viewvport">
      <header class="navbar">
        <div class="navbar-fixed-top mobmenu visible-xs">
          <div class="navbar-toggler toggler" data-target="#mobmenu"><i class=""><span></span><span></span><span></span></i></div>
          <a class="navbar-brand wf scroll" data-scrollto="#about" >August Harvest</a>
          <a href="#" id="touch-mob" data-scrollto="#contacts" class="scroll touch">
            <i class="fa fa-genderless"></i>
          </a>
          <div class="clearfix"></div>
          <nav id="mobmenu" class="navbar-collapse collapse">
            <i class="close"><span></span><span></span></i>
            <ul class="nav navbar-nav">
              <li><a class="scroll" data-scrollto="#about">About</a></li>
              <li><a class="scroll" data-scrollto="#services" data-open-block="#online-personal-shopping">Online personal shopping</a></li>
              <li><a class="scroll" data-scrollto="#services" data-open-block="#shopping-session">Personal shopping session</a></li>
              <li><a class="scroll" data-scrollto="#services" data-open-block="#wardrobe-management">Wardrobe management</a></li>
              <li><a class="scroll" data-scrollto="#three-steps-mob">The three steps</a></li>
              <li><a class="scroll" data-scrollto="#inspiration-mob">Follow for inspiration</a></li>
              <li><a class="scroll" data-scrollto="#contacts">Get in touch</a></li>
              <li><a class="scroll" data-scrollto="#legal">Terms & conditions</a></li>
            </ul>
          </nav>          
        </div>        
        <div class="navbar-toggleable-xs collapse in hidden-xs">
          <nav class="nav navbar-nav nav-header navbar-fixed-top">
            <h2><a href="#" class="scroll wf" data-scrollto="#about">August Harvest</a></h2>
            <a href="#" id="touch" data-scrollto="#contacts" class="scroll touch">get in touch</a>
          </nav>
        </div>
      </header>

      <div id="menu" class="menu hidden-xs" style="transition-duration: 0.6s;">
        <i class="white"><span></span><span></span><span></span></i>
        <ul>
            <li><a class="scroll" data-scrollto="#about">About</a></li>
            <li><a class="scroll" data-scrollto="#services" data-open-block="#online-personal-shopping">Online personal shopping</a></li>
            <li><a class="scroll" data-scrollto="#services" data-open-block="#shopping-session">Personal shopping session</a></li>
            <li><a class="scroll" data-scrollto="#services" data-open-block="#wardrobe-management">Wardrobe management</a></li>
            <li><a class="scroll hidden-sm" data-scrollto="#three-steps">The three steps</a></li>
            <li><a class="scroll visible-sm" data-scrollto="#three-steps-mob">The three steps</a></li>
            <li><a class="scroll" data-scrollto="#inspiration">Follow for inspiration</a></li>
            <li><a class="scroll" data-scrollto="#contacts">Get in touch</a></li>
            <li><a class="scroll" data-scrollto="#legal">Terms & conditions</a></li>
        </ul>
      </div>
      
      <section id="intro" class="intro">
        <div class="vertical-wrapper">
          <div class="vertical-center">
            <h1 class="wf">August Harvest</h1>
            <h2>Personal Shopper. Menswear</h2>          
          </div>          
        </div>
        <div class="arrow-hint">
          <div class="wrap">
            <a data-scrollto="#about" class="scroll more">
              <div class="icon-arrow arrow-1"><i class="fa fa-angle-down"></i></div>
              <div class="icon-arrow arrow-2"><i class="fa fa-angle-down"></i></div>
            </a>
          </div>
        </div>
      </section>

      <section id="fake" class="fake"></section>

      <section id="about" class="about">
          <div class="white">
            <div class="vertical-wrapper">
              <div class="vertical-center">
                <div class="container">
                  <div class="text">
                    <p>A menswear personal shopper based in London, who is harvesting all year round to find the best hidden gems amongst the online stores, sample sales, designer brands and high street shops.</p>
                    <p>My professional experience ranges from assisting at London Fashion Week shows to personal shopping. I believe in style over fashion, I believe the way you look should match your personality. I work hard to know you and deliver the best possible personal shopping experience and result. </p>
                  </div>
                </div> 
                <div id="services" class="services">
                  <div>
                    <a data-scrollto="#services" class="scroll service-title" data-open-block="#online-personal-shopping">Online personal shopping</a>
                    <div id="online-personal-shopping" class="service-block">
                      <i class="close"><span></span><span></span></i>
                      <div class="row">
                        <div class="col-md-12 col-lg-10 col-lg-offset-1">                      
                          <p>A knock on your door. Whether you don't have much time on your hands or you want to get the best deals from around the world - after we speak, I will order your items online and personally pack them into a parcel before sending your shopping to you.</p>
                        </div>
                      </div>
                    </div> 
                  </div> 

                  <div>
                    <a data-scrollto="#services" class="scroll service-title" data-open-block="#shopping-session">Personal shopping session</a>
                    <div id="shopping-session" class="service-block">
                      <div class="row">
                        <div class="col-md-12 col-lg-10 col-lg-offset-1">
                          <p>The ideal experience. Let's go shopping for a day or a couple of hours and show you where and how to shop. There are lots of places that you may have had no idea existed: this session will leave you with worthwhile new items for you wardrobe and show you how to shop efficiently.</p>                          
                        </div>
                      </div>
                      <i class="close"><span></span><span></span></i>
                    </div>                    
                  </div>

                  <div>
                    <a data-scrollto="#services" class="scroll service-title" data-open-block="#wardrobe-management">Wardrobe management</a>
                    <div id="wardrobe-management" class="service-block">
                      <i class="close"><span></span><span></span></i>
                      <div class="row">
                        <div class="col-md-12 col-lg-10 col-lg-offset-1">                      
                          <p>Replacing clothes in your wardrobe with new sets of outfits. Let's look through your current wardrobe, small or large, to work out what is just hanging there, unworn and what you are missing. With my help you will come to know your personal style and how to match your clothes to your personality and lifestyle.</p>
                        </div>
                      </div>
                    </div>  
                  </div>             
                 
                </div>                         
              </div>
            </div>
          </div>
      </section>

      <section id="three-steps" class="reasons hidden-xs hidden-sm">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="item engagement">
                <div class="title title1">
                  <h2>Engagement</h2>
                  <div class="number">1</div>                  
                </div>
                <div class="text text1">
                  <p>That moment when the thought of shopping fills you with dread? Let’s work on this. First we will discuss your style, objectives and budget. We will communicate at your convenience to help and encourage you.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="item trust">
                <div class="title title2">
                  <h2>Trust</h2>
                  <div class="number">2</div>                  
                </div>
                <div class="text text2">
                  <p>Focus on what you like and what you're good at - let me deal with what you wear. A selection of images will be provided to inspire our upcoming shopping, either in store or online. Shopping has never been so relaxing and enjoyable. Let’s share the responsibilities and you will get the most out of it.</p>
                </div>
              </div>            
            </div>
            <div class="col-md-4">
              <div class="item evolvement">
                <div class="title title3">
                  <h2>Evolvement</h2>
                  <div class="number">3</div>                  
                </div>
                <div class="text text3">
                  <p>You become confident as what you wear is being taken care of. After browsing in the stores or online, we will discuss the experience and how to combine new items with your wardrobe: understanding your personality and lifestyle will enable continuous style evolvement.</p>
                </div>
              </div>                       
            </div>
          </div>          
        </div>
      </section>

      <section id="three-steps-mob" class="reasons-mob visible-xs visible-sm">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="item engagement">
                <div class="title title1">
                  <h2>Engagement</h2>
                  <div class="number">1</div>                  
                </div>
                <div class="text text1">
                  <p>That moment when the thought of shopping fills you with dread? Let’s work on this. First we will discuss your style, objectives and budget. We will communicate at your convenience to help and encourage you.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="item trust">
                <div class="title title2">
                  <h2>Trust</h2>
                  <div class="number">2</div>                  
                </div>               
                <div class="text text2">
                  <p>Focus on what you like and what you're good at - let me deal with what you wear. A selection of images will be provided to inspire our upcoming shopping, either in store or online. Shopping has never been so relaxing and enjoyable. Let’s share the responsibilities and you will get the most out of it.</p>
                </div>               
              </div>            
            </div>
            <div class="col-lg-4">
              <div class="item evolvement">
                <div class="title title3">
                  <h2>Evolvement</h2>
                  <div class="number">3</div>                  
                </div>
                <div class="text text3">
                  <p>You become confident as what you wear is being taken care of. After browsing in the stores or online, we will discuss the experience and how to combine new items with your wardrobe: understanding your personality and lifestyle will enable continuous style evolvement.</p>
                </div>
              </div>                       
            </div>
          </div>          
        </div>
      </section>      

      <section id="inspiration" class="social hidden-xs">
        <div class="container">
          <div class="wrapper">
            <div class="dots"></div>
            <div class="h">H</div>
            <div class="a">A</div>
            <a href="http://www.instagram.com/august_harvest" class="link instagram" target="_blank" rel="nofollow">
              <div class="overlay"></div>
              <img src="img/instagram.jpg" alt="">
              <span>Instagram</span>
            </a>            
            <a href="https://twitter.com/August_Harvest" class="link lookbook" target="_blank" rel="nofollow">
              <div class="overlay"></div>
              <img src="img/lookbook.jpg" alt="">
              <span>Twitter</span>
            </a>   
            <a href="https://www.linkedin.com/in/augustharvest" class="link facebook" target="_blank" rel="nofollow">
              <div class="overlay"></div>
              <img src="img/facebook.jpg" alt="">
              <span>LinkedIn</span>
            </a>                       
          </div>           
        </div>             
      </section>

      <section id="inspiration-mob" class="social-mob visible-xs">
        <div class="container">
          <div class="wrapper">
            <div class="dots-mob">
              <img src="img/dots-mob.png" alt="">
            </div>
            <a href="http://www.instagram.com/august_harvest" class="link instagram" target="_blank" rel="nofollow">
              <span>Instagram</span>
              <img src="img/instagram-mob.png" alt="Instagram AUGUST HARVEST">
            </a>            
            <a href="https://twitter.com/August_Harvest" class="link lookbook" target="_blank" rel="nofollow">
              <span>Twitter</span>
              <img src="img/lookbook-mob.png" alt="Lookbook AUGUST HARVEST">
            </a>   
            <a href="https://www.linkedin.com/in/augustharvest" class="link facebook" target="_blank" rel="nofollow">
              <span>LinkedIn</span>
              <img src="img/facebook-mob.png" alt="LinkedIn AUGUST HARVEST">
            </a>    
          </div>           
        </div>             
      </section>      

      <section id="contacts" class="contacts">
        <div class="vertical-wrapper">
          <div class="vertical-center">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="text">
                    <p>Hello.</p>
                    <p>Let me deal with what you wear.</p>
                  </div>                  
                </div>
              </div> 
              <div class="contacts-block">
                  <a href="mailto:a@augustharvest.co.uk" class="email">a@augustharvest.co.uk</a>
                  <div class="phone">+44 7437 635118</div>  
                  <div class="size" style="font-size:30px;"></div>                     
              </div>                       
            </div>
          </div>
        </div>  
        <div class="social-icons">
          <a href="http://www.instagram.com/august_harvest" class="instagram" target="_blank" rel="nofollow">
            <i class="fa fa-instagram"></i>
          </a>
          <a href="https://twitter.com/August_Harvest" class="twitter" target="_blank" rel="nofollow">
            <i class="fa fa-twitter-square"></i>
          </a>
          <a href="https://www.linkedin.com/in/augustharvest" class="facebook" target="_blank" rel="nofollow">
            <i class="fa fa-linkedin-square"></i>
          </a>         
        </div>              
      </section>

      <section id="legal" class="terms">
        <div class="container">
            <div class="text">
              <p>QUALITY CONTROL - every item will be inspected on your behalf before purchase and delivery. PAYMENTS AND RETURNS - payment for service and products can be made on the day of appointment either in cash or through a bank payment. If shopping takes place without the client or online, a payment to cover agreed cost must be made in advance. Unless stated otherwise, unwanted items can be returned in person or by post with the original receipt within 7 days. PRIVACY - any personal information you provide via this website or in person will be held securely and will not be passed to a third party unless required by law. Data Protection Act 1998.</p>
              <p>Further and third party legal stuff applies.</p><br>
              <p>Trading as AUGUST HARVEST PSM, London.</p>  
              <p><span class="copyright">&copy; AUGUST HARVEST PSM. All rights reserved.</span></p>
            </div>
            <div class="text-center hidden-xs hidden-sm"><a data-scrollto="#fake" class="scroll touch"><i class="fa fa-angle-up"></i></a></div>
            <!-- <div class="text-center visible-xs"><a data-scrollto="#intro" class="scroll touch"><i class="fa fa-angle-up"></i></a></div> -->
        </div>
      </section>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
      <script src="js/vendor/jquery.easing.min.js"></script>
      <script src="bootstrap.3.3.5/js/bootstrap.min.js"></script>
      <script src="<?php echo $js ?>"></script>     
      <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
      <script>
          (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
          function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
          e=o.createElement(i);r=o.getElementsByTagName(i)[0];
          e.src='//www.google-analytics.com/analytics.js';
          r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
          ga('create','UA-67052655-1','auto');ga('send','pageview');
      </script>
    </div>
  </body>
</html>