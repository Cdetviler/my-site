<!DOCTYPE html>
<html>
 <head>
   <meta charset="UTF-8">
   <title>Charlie Detviler</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- drawer.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.0/css/drawer.min.css">
    <!-- iScroll -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
    <!-- drawer.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.0/js/drawer.min.js"></script>
    <!-- My Style Sheet -->
    <link rel="stylesheet" type="text/css" href="stylesheets/screen.css">
<link href='https://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,900' rel='stylesheet' type='text/css'>
    <!-- My javascript -->
    <script src="javascripts/main_script.js"></script>

    <script src="https://use.fontawesome.com/5245f2b44a.js"></script>
    <link rel="stylesheet" type="text/css" href="stylesheets/font-mfizz/font-mfizz.css" />
 </head>
 <body class="drawer drawer--right">

   <?php //header
   include 'header.php';
   ?>
   <div class="wrapper">
     <article id="top" class="home-splash-image">
       <section class="floating-text-box">
         <h1>Charlie Detviler</h1>
         <h2>Object Oriented. Communication Oriented. Human Oriented.</h2>
         <a role="button" href="#about-me">About</a><a role="button" href="#contact">Contact</a>
       </section>
     </article>
     <!--
    ABOUT ME SECTION
     -->
     <article id="about-me" class="site-divider">
       <section class="row">
         <h1> About Charlie </h1>
         <div class="column column-5">
           <figure>
            <img class="profile-pic circle-image" src="images/me-1.jpg" alt="picture of charlie" />
           </figure>
           <ul class="profile-contact">
             <li class="social-media-li">
               <a title="Git Hub" href="https://github.com/Cdetviler"><i class="fa fa-2x fa-github-square" aria-hidden="true"></i></a>
               <a title="Linked In" href="https://www.linkedin.com/in/charliedetviler"><i class="fa fa-2x fa-linkedin-square" aria-hidden="true"></i></a>
               <a title="Facebook" href=""><i class="fa fa-2x fa-facebook-square" aria-hidden="true"></i></a>
               <a title="twitter" href=""><i class="fa fa-2x fa-twitter-square" aria-hidden="true"></i></a>
            </li>
            <li class="email-link">
              <a title="Email Link" href="mailto:charlie.detviler@gmail.com">E-Mail Me</a>
            </li>
           </ul>
         </div>
         <div class="column column-7">
           <h2>How I Got Here</h2>
           <p>
             As a kid, I played with Legos quite a bit. I would build space ships and show them to my father. My father, a soon-to-be QA tester, would always test the strength of my Lego creations. My lego creations would invariably shatter in the most horrific, fantastic ways leaving my 5-year-old self in tears (much like many starting developers). Over time, I sought to make Lego creations that could withstand the hand strength of my father. It's because of this that I have a very determined personality and a strong set of problem-solving skills.
           </p>
           <p>
             Fast-forward 21 years and a college degree, and I am in a field that tests my nettle every single day. And I love it. There is nothing more satisfying than creating a usable, robust and fashionable project that makes every-day life easier for someone out there.
           </p>
           <div class="resume-button">
             <a  title="Resume Download" href="Documents/resume.pdf" download="Charlie_Deviler_Resume.pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Resume </a>
           </div>
         </div>
       </section>
       <!--
      PROJECTS SECTION
       -->
     </article>
     <article id="my-projects" class="site-divider">
       <h1> Projects </h1>
      <section class="vert-space row project-row">

        <div class="vert-align column column-5">
          <h2>WS Web Display</h2>

         <img class="project project-image" src="images/wsWebDisplay-1.jpg" alt="picture of charlie"/>
        </div>
        <div class="vert-align column column-7">
          <p>
            ws Web Display is one of the larger projects that I have worked on. I developed a front-end that communicated with a node.js based server in order to display live data from sensors and pi-cameras around the world. Using the wonderful <a href="https://jqueryui.com/"> JQuery UI Library</a>, I created an interface that allows the user to construct the page to their liking.
          </p>
        </div>
      </section>
    <section class="vert-space row project-row">

       <div class="vert-align project column column-5">
         <h2>APRS World Site</h2>

         <img class="project-image" src="images/aprsWorldSite-1.jpg" alt="picture of charlie"/>


       </div>
       <div class="vert-align column column-7">
         <p>
           As a developer at APRS World I tackled many projects. The first project that I worked on was converting the APRS World Website from a non-responsive table-based layout to a completely responsive fluid design. It was not an easy transition, as one could imagine, but it turned out to be a much more engaging, adaptive website that can be viewed on any screen.
         </p>

      </div>
    </section>
    <section class="vert-space row project-row">

       <div class="vert-align project column column-5">
         <h2>Breakout Boards USA</h2>

         <img class="project-image" src="images/breakout-boards-1.jpg" alt="picture of charlie"/>


       </div>
       <div class="vert-align column column-7">
        <p>
          As the APRS World website grew, it became clear to the owner of the site that micro sites would need to be constructed for the various product lines that APRS World produced. <a href="http://www.breakoutboards-usa.com" title="Breakout Boards website"> Breakoutboards-usa.com</a> is the fruition of the realization. Due to the wide variety of breakout-boards, it was decided that we would need a way for customers to easily find different boards at a glance. I ended up adapting a parametric search library to fulfill this need.
        </p>
      </div>
    </section>
   </article>
   <article id="skill-set" class="site-divider">
     <h1> Skill Set </h1>

     <section class="vert-space row">
       <div class="row">
         <h2>Web Development</h2>
         <div class="column column-4 min-width-250">

           <dl class="inline-block font-135 ">
             <dd class="language-entry"><i class="green icon-javascript-alt"></i> Javascript</dd>
             <dd class="language-entry"><i class="blue fa fa-css3" aria-hidden="true"></i> CSS3</dd>
             <dd class="language-entry"><i class="orange fa fa-html5" aria-hidden="true"></i> HTML5</dd>
           </dl>
          </div>
          <div class="column column-8 margin-auto">

          <p>
            I have developed and maintained a number of applications and websites for the web. I have had extensive use of Javascript with a focus on AJAX communication using the JSON format. I have used frameworks and libraries such as JQuery, JQueryUI, UIKit, underscore.js, lodash.js.
          </p>
          </div>
       </div>
       <div class="row">
         <h2>Application Development</h2>
         <div class="column column-4 min-width-250">

           <dl class="inline-block font-135">
              <dd class="language-entry"><i class="dkgrey icon-java-bold"></i> Java</dd>
              <dd class="language-entry"><i class="green fa fa-android"></i> Android</dd>
              <dd class="language-entry"><i class="purple icon-python"></i> Python</dd>
              <dd class="language-entry"></dd>
            </dl>
          </div>
          <div class="column column-8 margin-auto">

            <p>
               At APRS World I improved and maintained a number of java applications, an Android Application and even an LCD interface written with Python. I fixed bugs, implemented feature requests, and improves the user experience on all applications.
            </p>
          </div>
       </div>
       <div class="row">
         <h2>Back-end Programming</h2>

         <div class="column column-4 min-width-250">

           <dl class="inline-block font-135">
              <dd class="language-entry"><i class="purple icon-php-alt"></i> PHP</dd>
              <dd class="language-entry"><i class="green icon-nodejs"></i> Node.js</dd>
              <dd class="language-entry"><i class="orange icon-mysql-alt"></i> MySQL</dd>
            </dl>
          </div>
          <div class="column column-8 margin-auto">

            <p>
               I have experience with developing server-side applications in addition to my front-end focus. I constructed queries for the company database. I also breifly used node.js in order to develop an in-house Amazon Alexa skill.
            </p>
          </div>
       </div>
        <div class="row">
          <h2> Tools </h2>

          <div class="column column-4 min-width-250">
            <dl class="inline-block font-135">
               <dd class="language-entry"><i class="red icon-ubuntu"></i> Ubuntu </dd>
               <dd class="language-entry"><i class="dkgrey icon-shell"></i> Linux Shell </dd>
               <dd class="language-entry"><i class="brown fa fa-git-square" aria-hidden="true"></i> Git</dd>
             </dl>
           </div>
           <div class="column column-8 margin-auto">

             <p>
               I work primarily in a linux-based environment. Because of this knowledge, I am able to use git version control via the command line.
             </p>
           </div>
        </div>
     </section>
   </article>
   <article id="contact" class="site-divider">
     <h1> Contact Me </h1>


   </article>
   </div>


 </body>
</html>
