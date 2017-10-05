  <div id="about">

<header id="main-header">
  <div class="container">
    <div class="row header about-header">
    <div class="col-sm-8 col-sm-offset-2">
    <h1 class="text-center about-h1">About Me</h1>
    <h3 class="text-center about-h3"></h3>
    </div>
    </div>
  </div>
</header>

<!-- Tabs inside about -->

<div id="about-tabs-2">
  <ul>
    <li class="treehouse-li"><a class="treehouse-a" href="#treehouse">Team Treehouse</a></li>
    <li class="location-li"><a class="location-a" href="#location">Location</a></li>
  </ul>


  <div class="container">
    <!-- WordPress -->
    <div id="treehouse" class="subject-content">
      <div class="row treehouse-row">
                <div class="span12">
                  <h1 id="treehouse-h1">Team Treehouse Accomplishments</h1>
                    <div class="well clearfix ">
                        <div class="report-card treehouse"></div>
                    </div>
                </div>
            </div>
          </div>

          <div id="udemy" class="subject-content">

      </div>

      <div id="location" class="subject-content">
          <div id="map"></div>
            <script>
              var map;
              function initMap() {
                var myLocation = {lat: 39.1030, lng: -84.237};
                var starBucksEastgate = {lat: 39.0976487, lng: -84.2672894};
                map = new google.maps.Map(document.getElementById('map'), {
                  center: new google.maps.LatLng(41.8781136,-87.6297982),
                  zoom: 8
                });
                var marker = new google.maps.Marker({
                  position: myLocation,
                  map: map,
                  title: 'My location'
                });
                var marker = new google.maps.Marker({
                  position: starBucksEastgate,
                  map: map,
                  title: 'StarBucks Eastgate'
                });
              }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOYwQ8yQ9Xhlbuf1Gx8ZnBtJYXKO0y4KQ&callback=initMap"
            async defer></script>
      </div>
      </div>
  </div>


<div id="about-tabs">
  <ul>
    <li class="wordpress-li"><a class="wordpress-a" href="#wordpress">WordPress</a></li>
    <li class="php-li"><a class="php-a" href="#php">PHP</a></li>
    <li class="javascript-li"><a class="javascript-a" href="#javascript">JavaScript</a></li>
    <li class="jquery-li"><a class="jquery-a" href="#jquery">jQuery</a></li>
    <li class="bootstrap-li"><a class="bootstrap-a" href="#bootstrap">Bootstrap</a></li>
    <li class="css-li"><a class="css-a" href="#css">CSS</a></li>
    <li class="jquery-ui-li"><a class="jquery-ui-a" href="#jquery-ui">jQuery-UI</a></li>
  </ul>




  <div class="container">
    <!-- WordPress -->
    <div id="wordpress" class="subject-content">
      <h3 class="text-center subject-title">WordPress</h3>
      <p class="lead"><b>WordPress</b> is becoming more popular as the Internet gets older.  WordPress makes it possible for the owner of the site to make changes without contacting the developer.  It is a great software to use for company websites. Below is a list on what I specialize within WordPress.</p>
      <ul class="wordpress-list text-left">
        <li>Custom themes</li>
        <li>Advanced styling</li>
        <li>A great portion of the site will be able to edit by the user</li>
        <li>Landing pages</li>
        <li>Frequent updates and maintenance</li>
        <li>E-commerce using Woo-commerce</li>
        <li>Blog creating and customization</li>
      </ul>
    </div>
    <!-- End of WordPress -->
    <!-- PHP -->
    <div id="php" class="subject-content">
      <h3 class="text-center subject-title">PHP</h3>
      <p class="lead"><b>PHP</b> is used in nearly all web applications.  PHP is used with sites like Facebook and others that involve storing information on a database.  It is very useful when starting your own blog, and you would not always need a software like WordPress to perform all of the back-end services.</p>
      <ul class="php-list text-left">
        <li>Building a CMS</li>
        <li>Having a non WordPress admin section</li>
        <li>Making a non WordPress e-commerce website</li>
        <li>Starting a blog</li>
        <li>Anything that involves storing information and uses a database</li>
      </ul>
    </div>
    <!-- End of PHP -->
    <!-- JavaScript -->
      <div id="javascript" class="subject-content">
        <h3 class="text-center subject-title">JavaScript</h3>
        <p class="lead"><b>JavaScript</b> is still popular as ever.  Most sites would not run correctly without JavaScript.  Using it provides you site with a neat look, and provides more functionality to the site, more so than any other language.  It can be used for almost every aspect of the web page.</p>
        <ul class="javascript-list text-left">
          <li>Form validation(credit card, contact forms, making sure the data is correct before being sent in)</li>
          <li>Adding conditions to display items when another action happens</li>
          <li>Adding effects to the page, to give a better user experience</li>
          <li>Making a small game</li>
          <li>Create charts without having to purchase expensive ones.  Chartjs is an excellent way to display important information</li>
        </ul>
      </div>
      <!-- End JavaScript -->
      <!-- jQuery -->
      <div id="jquery" class="subject-content">
        <h3 class="text-center subject-title">jQuery and jQuery-UI</h3>
        <p class="lead"><b>jQuery</b> is an excellent addition to JavaScript.  Being able to select items with jQuery is made so much easier compared to JavaScript.  jQuery is great for adding effects or cool functionality to the page.  You can find jQuery plugins everywhere that will give your site a new feel.  jQuery-UI is focused on giving the best user interface possible to the site views.  Some items from jQuery-UI would be a great addition to any site.<br>
        This site is made on jQuery-UI tabs.  When the web page loads the site, it only loads the whole site once.  While traveling on the site it will not have to load again going from page to page.  I would have to say this is similar to AngularJS, which is used to make single page apps that have lightning speeds.  So if you decide on speed jQuery-UI tabs are the way to go.</p>
        <ul class="jquery-list text-left">
          <li>Adding effects</li>
          <li>Form validation</li>
          <li>Adding a great user interface to all your viewers</li>
          <li>Having other content changed when another action happens</li>
          <li>Front end functionality that is quicker than server side languages</li>
        </ul>
      </div>
      <!-- End jQuery -->
      <!-- Bootstrap HTML CSS -->
      <div id="bootstrap" class="subject-content">
        <h3 class="text-center subject-title">Bootstrap</h3>
        <p class="lead"><b>Bootstrap</b> is hands down the most important framework to add into any site.  Bootstrap speeds up development time, and requires little change to the site when viewing a mobile device.  I provides responsive, clean, and powerful web pages. If you give me and idea I will always be able to style it.</p>
        <ul class="bootstrap text-left">
          <li>Responsive site, mobile ready</li>
          <li>Organized code</li>
          <li>Clean look to your site</li>
          <li></li>
        </ul>
      </div>
      <!-- End of Bootstrap -->

       <!-- Bootstrap HTML CSS -->
      <div id="css" class="subject-content">
        <h3 class="text-center subject-title">CSS</h3>
        <p class="lead">You can give anything visible within the document a specific property, which is stored in style.css. From linear-gradients to adding elements to the page itself.  What would be the perfect site to the customer?  A site with advanced styling, or proper link tags speeding the load times for all the CSS files, or both! I will create your perfect site.</p>
        <ul class="css-list text-left text-white">
          <li>Responsive site, mobile ready</li>
          <li>Advanced styling, everything with CSS can be used</li>
          <li>Clean look to your site</li>
          <li>Mobile will carry over all aspects of the normal site</li>
          <li>Possibilities are endless for what you can turn your site into with CSS</li>
          <li></li>
        </ul>
      </div>
      <!-- End of Bootstrap -->

      <div id="jquery-ui" class="subject-content">
        <h3 class="text-center subject-title text-white">jQuery-UI</h3>
        <p class="lead"></p>
        <ul class="jquery-ui-list text-left text-white">
          <li><b>jQuery-UI Tabs -</b> using tabs will decrease your sites load time to less than a second.  If you make a website with tabs I am sure that you could add an E-commerce website.  The site would have all the standard pages for an E-commerce site should have.  Using jQuery-UI tabs, will be able to hold an E-commerce store on one single web page.  The page loads one time and then there is no load times when navigating through the site.</li>
          <li><b>jQuery-UI Accordion -</b> With the accordion you can store a whole website on there also, with lightening fast speeds. You are able to add effects to the accordion, different variations of speed and fluidity.</li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </div>


    </div><!-- End Container -->
  </div><!-- End #about-tabs -->


<!-- End Bootstrap HTML CSS -->

<!-- Footer -->
    <footer>
      <div class="container">
        <div class="row footer-row">
          <div class="col-sm-6">
            <p class="kevin">&copy; Kevin Stradtman</p>
            <a class=".fa-fa-fa" href="https://github.com/stradtkt"><i class="fa fa-github" aria-hidden="true"></i></a>
            <a class=".fa-fa-fa" href="https://www.facebook.com/kevin.stradtman.1"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a class=".fa-fa-fa" href="https://www.linkedin.com/in/kevin-stradtman-96b289146/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </div>
          <div class="col-sm-6">
            <p class="my-number">Work Number: +1(513)-335-4304</p>
            <p class="my-email">Email: stradtkt22@gmail.com</p>
          </div>
        </div>
      </div>
    </footer>
	<!-- End Footer -->
  </div><!-- End About -->
