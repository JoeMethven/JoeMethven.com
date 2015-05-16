<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Importing bootstrap.css, normalize.css, font-awesome-->
    <title>Joe Methven
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="The Personal Website of Joe Methven: Design Enthusiast">
    <link rel="icon" href="assets/img/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/img/appleFavicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="bower_components/normalize-css/normalize.css" type="text/css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" type="text/css">
    <link href="css/main.css" media="screen, projection" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div id="start" class="container-fluid start-wrapper">
      <div id="element"></div>
      <div class="col-md-12 logo"><a onclick="$('#home').animatescroll({scrollSpeed:2000,easing:'easeInQuad'});"><img src="assets/img/logo.png" alt="Joe Methven"></a></div>
      <div class="col-md-12 arrow-wrapper"><a onclick="$('#home').animatescroll({scrollSpeed:2000,easing:'easeInQuad'});"><i class="fa fa-angle-down"></i></a></div>
    </div>
    <div id="mobileNavigation">
      <div class="close"><img src="assets/img/close.png"></div>
      <ul class="main-navigation">
        <li><a href="#home" onclick="$('#start').animatescroll({scrollSpeed:2000,easing:'easeInQuad'});">HOME<span class="sr-only">(current)</span></a></li>
        <li><a href="#menu-about" onclick="$('#menu-about').animatescroll({scrollSpeed:2000,easing:'easeInQuad'}); $('#about').addClass('current')">ABOUT</a></li>
        <li><a href="#menu-portfolio" onclick="$('#menu-portfolio').animatescroll({scrollSpeed:2000,easing:'easeInQuad'}); $('#test').addClass('current')">PORTFOLIO</a></li>
        <li class="last"><a href="#menu-contact" onclick="$('#menu-contact').animatescroll({scrollSpeed:2000,easing:'easeInQuad'}); $('#contact').addClass('current')">CONTACT</a></li>
      </ul>
    </div>
    <nav id="navigation">
      <div class="nav">
        <div class="mobile-navigation">
          <div class="logo-mobile"><a href="#" onclick="$('#start').animatescroll({scrollSpeed:2000,easing:'easeInQuad'});" class="logo-image-mobile"><img src="assets/img/logo-ext-bold.png" alt="Joe Methven"></a></div>
          <div class="dropdown clearfix"><a href="#" role="dropdown-nav" data-toggle="dropdown" aria-labelledby="dropdownMenu" class="dropdown-toggle"><i class="fa fa-bars"></i></a></div>
        </div>
        <div class="main-navigation">
          <ul class="nav navbar-nav">
            <li><a href="#home" onclick="$('#start').animatescroll({scrollSpeed:2000,easing:'easeInQuad'});">HOME<span class="sr-only">(current)</span></a></li>
            <li><a href="#menu-about" onclick="$('#menu-about').animatescroll({scrollSpeed:2000,easing:'easeInQuad'}); $('#about').addClass('current')">ABOUT</a></li>
            <div class="logo"><a href="#" onclick="$('#start').animatescroll({scrollSpeed:2000,easing:'easeInQuad'});" class="logo-image"><img src="assets/img/logo-ext-bold.png" alt="Joe Methven"></a></div>
            <li><a href="#menu-portfolio" onclick="$('#menu-portfolio').animatescroll({scrollSpeed:2000,easing:'easeInQuad'}); $('#test').addClass('current')">PORTFOLIO</a></li>
            <li><a href="#menu-contact" onclick="$('#menu-contact').animatescroll({scrollSpeed:2000,easing:'easeInQuad'}); $('#contact').addClass('current')">CONTACT</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div id="home" class="container-fluid">
      <div class="text-wrapper">
        <h1>JOE METHVEN</h1>
        <h3>WEB &amp; UI/UX Designer</h3>
      </div>
      <div class="triangle-container"><a href="#" data-in="photo" class="triangle"><img src="assets/img/desk_illustration.png"></a></div>
    </div>
    <div id="about" class="container-fluid">
      <div id="menu-about"></div>
      <div class="container about-container">
        <div class="col-md-12 about-wrapper">
          <div class="row">
            <div class="col-md-4 image-wrapper"><img src="assets/img/Joe.png"></div>
            <div class="col-md-8 text-wrapper">
              <h3>Hey, I'm Joe</h3>
              <p class="first">
                I've had a passion for Design since I was 10 years old, 
                from then on I have studied in areas of Photography, Videography, 
                Graphics and recently Web Design &amp; Development, I consider myself a 
                perfectionist at heart, which helps when creating designs!
                I've had experience designing websites a while prior to learning how to
                code, and feel extensively undestanding the complications in design beforehand
                has helped me to think differently about how I craft my websites.
              </p>
              <p style="margin-bottom: 0;">
                 
                I'm currently freelancing so if you're
                interested in hiring me for a project or have any enquiries,
                just shoot me an <a href="mailto:contact@joemethven.com"> email </a>and we can get talking!
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row stages-wrapper">
        <div class="col-md-4 stage-1">
          <div class="overlay-1 overlay">
            <h2>STAGE ONE - CONCEPT</h2>
            <div class="line"></div>
            <h3 class="toph">COMMUNICATE</h3>
            <p>
               
              The first step to getting your website off the ground is to
              get some firm details on what exactly is needed, this is best
              done in a brief. A brief should contain specific details such as
              amount of pages, branding, a current website if viable, and more!
            </p>
            <h3>PLAN</h3>
            <p>
              Once the details are over I can start thinking of ways to bring your
              ideas to life, if your brief is vague I can help give ideas for the
              particular obstacles you could be facing visually.
            </p>
          </div>
          <div class="stage-content stage-content1">
            <div class="content"><i class="fa fa-comment-o"></i>
              <h3>CONCEPT</h3>
            </div>
          </div>
        </div>
        <div class="col-md-4 stage-2">
          <div class="overlay-2 overlay">
            <h2>STAGE TWO - CONSTRUCT</h2>
            <div class="line"></div>
            <h3 class="toph">VISUALISE</h3>
            <p>
              Once all information needed has been sent over and discussed its likely I'll 
              need to create a visual overview of the scope involved, this could be in the form of
              small sketches, a full-fledged wireframe or a colourful Photoshop Document.
              This will help you view what could be your website, from here we start seeing the process
              slowly coming to life! You can then have the chance to adjust changes on a large scale before 
              things get directly implemented.
            </p>
            <h3>FINALIZE</h3>
            <p>
              Now things are pretty much settled we can finalize all the different parts of the website and any
              strict orders on what should and what shouldn't be in the final developed version.
            </p>
          </div>
          <div class="stage-content stage-content2">
            <div class="content"><i class="fa fa-connectdevelop"></i>
              <h3>CONSTRUCT</h3>
            </div>
          </div>
        </div>
        <div class="col-md-4 stage-3">
          <div class="overlay-3 overlay">
            <h2>STAGE THREE - COMMUNICATE</h2>
            <div class="line"></div>
            <h3 class="toph">DEVELOP</h3>
            <p>
              We're finally at the stage where your website gets coded, the languages being
              used is specified below, however if your website is bearing lots of functionality
              you'll also need a Back-End Web Developer, or possibly a Content Management System such as Wordpress.
            </p>
            <h3>REVISIONS</h3>
            <p>
              Now its all done! I'll allow a few minor revisions free of charge, so as not to have you stranded with
              things you decided you now don't want.
            </p>
          </div>
          <div class="stage-content stage-content3">
            <div class="content"><i class="fa fa-code"></i>
              <h3>CREATE</h3>
            </div>
          </div>
        </div>
      </div>
      <div id="calltoaction-wrapper" class="container-fluid">
        <div class="col-md-6">
          <div class="graphic">
            <div class="monitor">
              <div id="contents">
                <div id="websites">
                  <div id="bad-website">
                    <div class="bad-website-contents">
                      <div id="bad-website-element-1"></div>
                      <div id="bad-website-element-2"></div>
                      <div id="bad-website-element-3">
                        <div class="p-bar-1-1"></div>
                        <div class="p-bar-1-2"></div>
                        <div class="p-bar-1-3"></div>
                      </div>
                      <div id="bad-website-element-4"></div>
                      <div id="bad-website-element-5"></div>
                      <div id="bad-website-element-6"></div>
                    </div>
                  </div>
                  <div id="good-website">
                    <div class="good-website-contents">
                      <div id="good-website-element-1"></div>
                      <div id="good-website-element-2"></div>
                      <div id="good-website-element-3"></div>
                      <div id="good-website-element-4"></div>
                      <div id="good-website-element-5">
                        <div class="p-bar-1-1"></div>
                        <div class="p-bar-1-2"></div>
                        <div class="p-bar-1-3"></div>
                      </div>
                      <div id="good-website-element-6">
                        <div class="p-bar-2-1"></div>
                        <div class="p-bar-2-2"></div>
                        <div class="p-bar-2-3"></div>
                      </div>
                      <div id="good-website-element-7">
                        <div class="p-bar-3-1"></div>
                        <div class="p-bar-3-2"></div>
                        <div class="p-bar-3-3"></div>
                      </div>
                      <div id="good-website-element-8"></div>
                      <div id="good-website-element-9"></div>
                      <div id="good-website-element-10">
                        <div class="p-bar-4-1"></div>
                        <div class="p-bar-4-2"></div>
                        <div class="p-bar-4-3"></div>
                      </div>
                      <div id="good-website-element-11"></div>
                    </div>
                  </div>
                </div>
                <div class="icon">
                  <div class="icon-contents"></div>
                </div>
              </div>
            </div>
            <div class="stand"><img src="assets/img/stand.png"></div>
          </div>
        </div>
        <div class="col-md-6 action-content-wrapper">
          <div class="action-text text">
            <h3>Do you need a new website?</h3>
            <h3 class="last">
               
              For a <strong>quick turnaround time </strong>with an <strong>absolute perfected design, </strong>use my services.
            </h3>
          </div>
          <div class="action-button"><a href="#menu-contact" onclick="$('#menu-contact').animatescroll({scrollSpeed:2000,easing:'easeInQuad'}); $('#contact').addClass('current')" class="button">
              <h2>CONTACT</h2></a></div>
        </div>
      </div>
      <div id="social-bar" class="container-fluid"><a href="https://www.linkedin.com/profile/view?id=374907095&amp;trk" target="_blank"><img src="assets/img/linkedin.png"></a><a href="http://twitter.com/joemethven" target="_blank"><img src="assets/img/twitter.png"></a><a href="https://github.com/joemethven" target="_blank"><img src="assets/img/github.png"></a><a href="http://behance.net/joemethven" target="_blank"><img src="assets/img/behance.png"></a></div>
    </div>
    <div id="portfolio" class="container-fluid">
      <div id="menu-portfolio"></div>
      <div class="portfolio-container col-md-12">
        <div class="row row1">
          <div id="portfolio-item1" class="col-md-3 portfolio-item"><img src="assets/img/craftguard.png"><img src="assets/img/craftguard-active.png"></div>
          <div id="portfolio-item2" class="col-md-3 portfolio-item"><img src="assets/img/booket.png"><img src="assets/img/booket-active.png"></div>
          <div id="portfolio-item3" class="col-md-3 portfolio-item"><img src="assets/img/chromahills.png"><img src="assets/img/chromahills-active.png"></div>
          <div id="portfolio-item4" class="col-md-3 portfolio-item"><img src="assets/img/jrh.png"><img src="assets/img/jrh-active.png"></div>
        </div>
        <div class="row row2">
          <div id="portfolio-item5" class="col-md-3 portfolio-item"><img src="assets/img/lfcwa.png"><img src="assets/img/lfcwa-active.png"></div>
          <div id="portfolio-item6" class="col-md-3 portfolio-item"><img src="assets/img/lakeCountry.png"><img src="assets/img/lakeCountry-active.png"></div>
        </div>
      </div>
    </div>
    <div id="portfolioItem1" class="portfolioItem container-fluid">
      <div class="portfolioClose"><img src="assets/img/portfolioClose.png" onclick="$('#menu-portfolio').animatescroll({scrollSpeed:0}); $('#test').addClass('current')"></div>
      <div class="portfolioWrapper">
        <div class="portfolioHeader"><img src="assets/img/craftguardLogo.png"></div>
        <div class="portfolioContainer1 col-md-12">
          <div class="row">
            <div class="col-md-4 fullWebsite"><img src="assets/img/craftguardFullWebsite.jpg"></div>
            <div class="col-md-8 overview">
              <h2>A COMMISSION BASED MANAGEMENT SERVICE</h2>
              <h6> <span>What did I do? </span>Web design, CMS, content creation, graphic design...</h6>
              <p>
                 
                CraftGuard was a project I had collaborated on, the business itself revolves around 
                self-employed members &amp; clients registering, putting a middle man in place to stop
                the high volume of fraud taking place with freelance creatives. The members can become part of the 
                service which involved them performing jobs for clients, in return a small commission 
                fee goes to CraftGuard and the rest solely to the Member. For this general website I 
                had the job of designing pages such as Home, About &amp; Rates through the CMS Wordpress. 
                I picked a specific set of colours to be used throughout this and also designed a 
                professional simplistic logo that matches. I chose to use a shield design to resemble
                security that the business aims to provide. I also worked a little on content creation 
                (especially on the home page), this involved learning more about CraftGuard and how they 
                work in order to show users exactly what they want to see when they visit the website.
              </p>
            </div>
          </div>
        </div>
        <div class="portfolioContainer2 col-md-12">
          <h4>ICON CREATION</h4>
          <div class="row">
            <div class="col-md-3 first"><img src="assets/img/craftguard/icon1.png"></div>
            <div class="col-md-3 first"><img src="assets/img/craftguard/icon2.png"></div>
            <div class="col-md-3 second"><img src="assets/img/craftguard/icon3.png"></div>
            <div class="col-md-3 second"><img src="assets/img/craftguard/icon4.png"></div>
          </div>
          <div class="row">
            <div class="col-md-3 first"><img src="assets/img/craftguard/icon5.png"></div>
            <div class="col-md-3 first"><img src="assets/img/craftguard/icon6.png"></div>
            <div class="col-md-3 second"><img src="assets/img/craftguard/icon7.png"></div>
            <div class="col-md-3 second"><img src="assets/img/craftguard/icon8.png"></div>
          </div>
        </div>
        <div class="portfolioContainer3 col-md-12">
          <div class="banner">
            <h4>ADMIN DASHBOARD</h4>
          </div>
          <div class="row header">
            <div class="col-md-6 image"><img src="assets/img/craftguard/dashboard1.png"></div>
            <div class="col-md-6 text">
              <h3>CLIENT MANAGEMENT DASHBOARD RESTYLE</h3>
            </div>
          </div>
          <div class="content-wrapper">
            <div class="content-container">
              <div class="col-md-6 fullWebsite"><img src="assets/img/craftguard/dashboard2.jpg"><img src="assets/img/craftguard/dashboard3.jpg"></div>
              <div class="col-md-6 text">
                <p>
                   
                  After the website was complete I moved onto restyling an admin dashboard, the original 
                  used a dark colour scheme, so instead I chose to keep with consistency and have the same colour 
                  scheme throughout both the website and the dashboard. The dashboard serves the purpose of 
                  clients being able to login and track their progress of projects members within CraftGuard 
                  are working on, there are many other features to this dashboard as well such as a ticket 
                  system, extensive settings, report statistics and more. This restyle involved a lot of CSS 
                  styling to adjust areas and a little bit of HTML to move areas around and contain elements.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="portfolioContainer4 col-md-12">
          <div class="content-container">
            <h3>EMAIL TEMPLATES<i class="fa fa-envelope-o"></i></h3>
            <div class="text">
              <p>
                 
                My final work on Craft Guard was to design and develop responsive, professional 
                email templates that can be re-used in various notifications, in total I created 
                6 templates. Below you can see 2 previews of these templates.
              </p>
            </div>
            <h3>A FEW PREVIEWS<i class="fa fa-caret-down"></i></h3>
          </div>
          <div class="preview">
            <h4>WELCOME TEMPLATE</h4><img src="assets/img/craftguard/welcome.jpg">
            <h4 class="last">VERIFIED TEMPLATE</h4><img src="assets/img/craftguard/verified.jpg">
          </div>
        </div>
        <div class="endItem-wrapper">
          <div class="endItem-container">
            <h4>END</h4>
            <p>Thanks for reading!</p>
            <div class="portfolioClose"><img src="assets/img/close.png" onclick="$('#menu-portfolio').animatescroll({scrollSpeed:0}); $('#test').addClass('current')"></div>
          </div>
        </div>
      </div>
    </div>
    <div id="portfolioItem2" class="portfolioItem container-fluid">
      <div class="portfolioClose"><img src="assets/img/portfolioClose.png" onclick="$('#menu-portfolio').animatescroll({scrollSpeed:0}); $('#test').addClass('current')"></div>
      <div class="portfolioWrapper">
        <div class="portfolioHeader"><img src="assets/img/booket/booketLogo.png"></div>
        <div class="portfolioContainer2 col-md-12">
          <div class="header"><img src="assets/img/booket/calendar.png">
            <h4>A clear, clean, customisable booking system.</h4>
          </div>
          <div class="row info">
            <div class="col-md-6 image"></div>
            <div class="col-md-6 content">
              <p> <strong>What did I do? </strong><span style="font-style: italic">Logo Design, Website Design</span><br><br>Booket is an upcoming UK-Based booking system that allows the public to implement a system
                on there website, the ability to cusomise the visual look and feel and to allow the public to
                book 'availability', the system is completely flexible, allowing one user to be booking Cinema Tickets
                whilst another books time with their personal trainer or a driving lesson!<br><br>I had designed what could be the initial front page of the website, the whole design plans to be extremely simplistic,
                with smart features making use of the spacious areas available such as a fixed menu that transforms on scroll so the menu 
                mixes with the white modules below, and the dropdowns propel open large clean modules without clashing with the rest of the
                design. 
                I tried to give specific attention to the menu, to give the effect that there isn't much there by expanding what could
                be stuffed all on one row into multiple rows that makes it a lot easier to read for the viewer.
              </p>
            </div>
          </div>
          <div class="logoInfo">
            <div class="content col-md-6">
              <p>
                I created the logo in a way that it felt professional, kept with the calm blue colour scheme and also 
                appears with the text so the viewer can understand the business straight away resembles booking with the
                business terminology 'Booket' which translates to 'Book it' when pronounced. On the first 'O' I transformed
                the standard version to a location pointer to resemble booking to be somewhere or to do something. The final
                ending of 'et' was changed in colour to differentiate between 'book' and 'et' to help the viewer find it easier
                in understanding the translation by emphasising book in brighter whilst pointing the 'et' extension.
              </p>
            </div>
            <div class="image col-md-6">
              <div class="imageWrapper"><img src="assets/img/booket/logoBig.png"></div>
            </div>
          </div>
          <div class="website"><img src="assets/img/booket/website.png" class="img-responsive"></div>
        </div>
        <div class="mockups"><img src="assets/img/booket/mockup1.jpg"><img src="assets/img/booket/mockup2.jpg"></div>
        <div class="endItem-wrapper">
          <div class="endItem-container">
            <h4>END</h4>
            <p>Thanks for reading!</p>
            <div class="portfolioClose"><img src="assets/img/close.png" onclick="$('#menu-portfolio').animatescroll({scrollSpeed:0}); $('#test').addClass('current')"></div>
          </div>
        </div>
      </div>
    </div>
    <div id="portfolioItem3" class="portfolioItem container-fluid">
      <div class="portfolioClose"><img src="assets/img/portfolioClose.png" onclick="$('#menu-portfolio').animatescroll({scrollSpeed:0}); $('#test').addClass('current')"></div>
      <div class="portfolioWrapper">
        <div class="portfolioHeader"><img src="assets/img/chromahills/logo.png"></div>
        <div class="portfolioContainer3 col-md-12">
          <div class="header"><img src="assets/img/chromahills/preview.png"></div>
          <div class="content row">
            <div class="col-md-6 image"></div>
            <div class="col-md-6 info">
              <p><strong>What did I do? </strong><span style="font-style: italic">Icon Design, Website Design</span><br><br>Chroma Hills is a fun RPG texture pack created by the Graphic Artist <a href="http://chromahills.com">SycloneSJS,</a> Chroma Hills has received over 2 million downloads, its also expanded 
                to a gaming server for the fans and others to join and play together. <br><br>For the Chroma Hills website I needed to design in a way that would
                resemble a clean colourful website yet still have a gaming-feel to it, to
                achieve this I used a main trio of colours to give an enhanced mocha look which
                reflected the texture artwork that has base designs such as dirt and grass. 
                I had also created a small icon in both detail and simplistic forms.
              </p>
            </div>
          </div>
          <div class="website"><img src="assets/img/chromahills/website.jpg"></div>
        </div>
        <div class="endItem-wrapper">
          <div class="endItem-container">
            <h4>END</h4>
            <p>Thanks for reading!</p>
            <div class="portfolioClose"><img src="assets/img/close.png" onclick="$('#menu-portfolio').animatescroll({scrollSpeed:0}); $('#test').addClass('current')"></div>
          </div>
        </div>
      </div>
    </div>
    <div id="portfolioItem4" class="portfolioItem container-fluid">
      <div class="portfolioClose"><img src="assets/img/portfolioClose.png" onclick="$('#menu-portfolio').animatescroll({scrollSpeed:0}); $('#test').addClass('current')"></div>
      <div class="portfolioWrapper">
        <div class="portfolioHeader"><img src="assets/img/jrh/logo.png"></div>
        <div class="portfolioContainer4 col-md-12">
          <div class="header"><img src="assets/img/jrh/preview.png"></div>
          <div class="row content">
            <div class="col-md-6 image"><img src="assets/img/jrh/tool.png"></div>
            <div class="col-md-6 text">
              <p><strong>What did I do? </strong><span style="font-style: italic">Logo Design, Business Cards, Website Design</span></p>
              <p>
                JRH is a Civil Engineering company based in the UK. Their focus is on groundworks, maintenance
                and gardening. For there website I used a consistent flow of blue similar to their previous recognised
                brand colour. The design uses little amounts of colour, and visual imagery seems to take dominance over
                text, JRH wanted a website which would give them the ability to advertise what their business is online.
                My design segments each individual service into seperate pages, with overviews on the main menu, this
                idea helps to allow the end user to choose whether they want a quick overview of the services they provide
                and can have the ability to look in more detail into specific services.<br><br>I designed two variations of a new logo as well as a double-sided business card. The variations differentiate
                a lot, the first version uses a modern serif font with a spade which resembles groundworks, a major part of the
                companies services. The second variations takes a more simplistic approach, using a block-serif font which
                shows a more ever-lasting figure with a 90% border outside. The business cards again consist of blue, with the
                mostly using white. The back-side displays all possible services with JRH as well as some extra information and
                contact information.
              </p>
            </div>
          </div>
          <div class="row content2">
            <div class="shape"></div>
            <div class="col-md-6 image1"><img src="assets/img/jrh/front.png"></div>
            <div class="col-md-6 image2"><img src="assets/img/jrh/back.png"></div>
          </div>
          <div class="website"><img src="assets/img/jrh/website.jpg"></div>
        </div>
        <div class="mockups"><img src="assets/img/jrh/mockup1.jpg"></div>
        <div class="endItem-wrapper">
          <div class="endItem-container">
            <h4>END</h4>
            <p>Thanks for reading!</p>
            <div class="portfolioClose"><img src="assets/img/close.png" onclick="$('#menu-portfolio').animatescroll({scrollSpeed:0}); $('#test').addClass('current')"></div>
          </div>
        </div>
      </div>
    </div>
    <div id="portfolioItem5" class="portfolioItem container-fluid">
      <div class="portfolioClose"><img src="assets/img/close.png" onclick="$('#menu-portfolio').animatescroll({scrollSpeed:0}); $('#test').addClass('current')"></div>
      <div class="portfolioWrapper">
        <div class="portfolioHeader"><img src="assets/img/lfcwa/Logo.png"></div>
        <div class="portfolioContainer5 col-md-12">
          <div class="header">
            <div class="image"><img src="assets/img/lfcwa/header.png"><img src="assets/img/lfcwa/headerMobile.png" class="imageMobile"></div>
          </div>
          <div class="row content">
            <div class="col-md-6 image"><img src="assets/img/lfcwa/noInternet.png"></div>
            <div class="col-md-6 text">
              <p><strong>What did I do? </strong><span style="font-style: italic">Logo Design, Icon Design &amp; Mockups</span></p>
              <p>
                LFCWA is an Australian community of Liverpool FC supporters. I have designed them
                two logos, one derived from their original version of a globe with circular text, and the other
                a complete simplistic clean emblem which can be used on the app as well as in promotional material,
                app launch icon etc. The flat icon takes the famous Liverpool logo and manipulates the bird's features
                into a simpler model, I then clipped the whole design in a more rounded shield with less vertices than
                the original to emphasise the simplistic values.<br><br>I then designed a icon for a warning "No Internet!" status, this creative process allowed me freedom to
                design anything relevant to internet, such as hardware wiring, a process or electric of sorts connecting
                to a football to resemble the app as a football-themed website.<br><br>Finally I designed various mockups to be used on the Google Play store, the app can be seen <a href="https://play.google.com/store/apps/details?id=com.designerjuice.lfcwa">here.</a>The mockups consisted of a Galaxy phone containing the designed application and various promotional text
                with my logo design.
              </p>
            </div>
          </div>
          <div class="row content2">
            <div class="image1"><img src="assets/img/lfcwa/mockup.png"></div>
            <div class="image2"><img src="assets/img/lfcwa/globe-logo.png"></div>
          </div>
        </div>
        <div class="endItem-wrapper">
          <div class="endItem-container">
            <h4>END</h4>
            <p>Thanks for reading!</p>
            <div class="portfolioClose"><img src="assets/img/close.png" onclick="$('#menu-portfolio').animatescroll({scrollSpeed:0}); $('#test').addClass('current')"></div>
          </div>
        </div>
      </div>
    </div>
    <div id="portfolioItem6" class="portfolioItem container-fluid">
      <div class="portfolioClose"><img src="assets/img/close.png" onclick="$('#menu-portfolio').animatescroll({scrollSpeed:0}); $('#test').addClass('current')"></div>
      <div class="portfolioWrapper">
        <div class="portfolioHeader"><img src="assets/img/lakecountry/logo.png"></div>
        <div class="portfolioContainer6 col-md-12">
          <div class="header"><img src="assets/img/lakecountry/mobile.png"></div>
          <div class="row content">
            <div class="col-md-6 text">
              <p><strong>What did I do? </strong><span style="font-style: italic">Logo Design &amp; Website Design.</span></p>
              <p>
                Lake Country is a Church community based in America, they needed a website to advertise themselves,
                in which I provided this with a clean &amp; relaxing design with a mixture of gold and green.
                Within this design I aimed to follow a subtle technique called material design by Google, based on
                the flat design with light implementation of thin shadows to add depth to the website. This works
                well, especially within the contact form's input fields.<br><br>The website includes a news feed and a calendar area to add important dates for the community to
                keep updated. I also implemented social networks at the top as well as a dropdown area to list
                contact information. I also designed the logo in a flat gold to match the website with a decorative
                icon.
              </p>
            </div>
            <div class="col-md-6 image"></div>
          </div>
          <div class="website"><img src="assets/img/lakecountry/website.png"></div>
        </div>
        <div class="endItem-wrapper">
          <div class="endItem-container">
            <h4>END</h4>
            <p>Thanks for reading!</p>
            <div class="portfolioClose"><img src="assets/img/close.png" onclick="$('#menu-portfolio').animatescroll({scrollSpeed:0}); $('#test').addClass('current')"></div>
          </div>
        </div>
      </div>
    </div>
    <div id="learning" class="container-fluid">
      <div class="container learning-container">
        <div class="col-md-12 learning-wrapper">
          <div class="row">
            <div class="col-md-12">
              <div class="current-container content">
                <h3>What do I normally use in my projects?</h3>
                <p>
                  I'm always learning new languages and methods to improve
                  my work, but here's what I currently use in my projects:
                </p>
                <div class="skills first">
                  <h2>HTML5</h2>
                  <h2>JADE</h2>
                  <h2>CSS3</h2>
                  <h2>SASS</h2>
                  <h2>JAVASCRIPT</h2>
                  <h2>JQUERY</h2>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="learning-container content">
                <h3>What languages/frameworks am I planning to learn in the future?</h3>
                <p>There's so much to learn in web, on a grander scale I have plans on what I may learn in the future, including:</p>
                <div class="skills">
                  <h2>MYSQL</h2>
                  <h2>NODE.JS</h2>
                  <h2>ANGULAR.JS</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="contact" class="container-fluid">
      <div id="menu-contact"></div>
      <div id="map-canvas" class="gmap"></div>
      <div id="contact-wrapper">
        <div class="container">
          <div class="col-md-12 row">
            <div class="details-mobile">
              <h3>DETAILS</h3>
              <h5>Joe Methven</h5>
              <p>Email: <a href="mailto:contact@joemethven.com">contact@joemethven.com</a></p>
              <p>Website: <a href="http://joemethven.com">joemethven.com</a></p>
              <p class="cv">Enquire for CV</p>
            </div>
            <div class="col-md-9">
              <div class="col-md-12">
                <div id="success"><span>
                    <p><i style="color: #76bf77" class="fa fa-thumbs-up"></i> Your message was sent successfully! I'll be in touch!</p></span></div>
                <div id="error"><span>
                    <p><i style="color: #D9422B" class="fa fa-thumbs-down"></i> Somethings gone wrong, try refreshing and submitting the form again, or email me at <a href="mailto:contact@joemethven.com">contact@joemethven.com</a></p></span></div>
                <form id="contactForm" name="contact" action="php/mail.php" method="POST">
                  <div class="row formRow1">
                    <div class="col-md-6 name-input">
                      <div class="fa-wrapper">
                        <div class="fa-container"><i class="fa fa-user"></i></div>
                      </div>
                      <input type="text" name="name" placeholder="Name" required>
                    </div>
                    <div class="col-md-6 email-input">
                      <div class="fa-wrapper">
                        <div class="fa-container"><i class="fa fa-envelope"></i></div>
                      </div>
                      <input type="email" name="email" placeholder="Email" required>
                    </div>
                  </div>
                  <div class="row formRow2">
                    <div class="col-md-12 subject-input">
                      <div class="fa-wrapper">
                        <div class="fa-container"><i class="fa fa-tag"></i></div>
                      </div>
                      <input type="text" name="subject" placeholder="Subject">
                    </div>
                  </div>
                  <div class="row formRow3">
                    <div class="fa-wrapper message-input"><i class="fa fa-comment"></i></div>
                    <div class="col-md-12">
                      <textarea name="message" cols="30" rows="10" placeholder="Message" required></textarea>
                    </div>
                  </div>
                  <div class="row formRow4">
                    <div class="col-md-3 submit-input">
                      <input name="submit" type="submit" value="Submit">
                    </div>
                  </div>
                </form>
                <script>$("#contactForm").validate();</script>
              </div>
            </div>
            <div class="col-md-3 details">
              <h3>DETAILS</h3>
              <h5>Joe Methven</h5>
              <p>Email: <a href="mailto:contact@joemethven.com">contact@joemethven.com</a></p>
              <p>Website: <a href="http://joemethven.com">joemethven.com</a></p>
              <p>
                Location:  
                Essex
              </p>
              <p class="cv"><a href="mailto:contact@joemethven.com">Enquire for CV</a></p>
            </div>
          </div>
        </div>
      </div>
      <div id="footer-wrapper">
        <div class="left">
          <p>© 2015 Joe Methven. All Rights Reserved.</p>
          <p>For enquiries email <a href="mailto: contact@joemethven.com">contact@joemethven.com</a></p>
        </div>
        <div class="middle"><a href="#home" onclick="$('#start').animatescroll({scrollSpeed:2000,easing:'easeInQuad'});"><img src="assets/img/logo-ext-bold.png"></a></div>
        <div class="right"><a href="https://www.linkedin.com/profile/view?id=374907095&amp;trk" target="_blank"><img src="assets/img/linkedin-white.png"></a><a href="http://twitter.com/joemethven" target="_blank"><img src="assets/img/twitter-white.png"></a><a href="https://github.com/joemethven" target="_blank"><img src="assets/img/github-white.png"></a><a href="http://behance.net/joemethven" target="_blank"><img src="assets/img/behance-white.png"></a></div>
      </div>
    </div>
  </body>
  <footer>
    <!-- Importing jquery.js, bootstrap.js-->
    <script src="//code.jquery.com/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="bower_components/jqueryui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script src="assets/scripts/min/custom-min.js" type="text/javascript"></script>
    <script src="assets/scripts/vendors/animatescroll/animatescroll.min.js" type="text/javascript"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
    <script src="//raw.githubusercontent.com/srobbin/jquery-backstretch/master/jquery.backstretch.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-63050498-1', 'auto');
      ga('send', 'pageview');
    </script>
  </footer>
</html>