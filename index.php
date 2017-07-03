<html lang="en">
<head>
  <title>Clan B5TA</title>
  <link rel="icon" href="https://i1.wp.com/b5ta.com/wp-content/uploads/2015/10/cropped-tnOKdrI.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Clan B5TA is an active social, skilling and bossing Runescape community that knows how to have fun. Founded: September 30, 2014">
  
  <!--Dropdown hover css link-->
  <link rel="stylesheet" type="text/css" href="css/dropdownhover.css">

  <!--bootsrap css-->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

  <!-- JAVASCRIPT files-->
  <script src="js/jquery.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/dropdown.js"></script>

  <style>
    body {
      position: relative;
    }

    .head-format{
      background-color:#ffffff;
      color:#fff;
      height:125px;
    }

    .logo{
      height: 100%;
      width: auto;
      left: 5%;
    }

    /* Remove the navbar's default rounded borders and increase the bottom margin */
    .navbar {
      margin-bottom: 0px;
      border-radius: 0;
    }

    /* Makes navbar opaque on hover*/
    .navbar-inverse {
      z-index: 1;
      opacity: 0.90;
      filter: alpha(opacity=90); /* For IE8 and earlier */
    }
    .navbar-inverse:hover {
      opacity: 1.0;
      filter: alpha(opacity=100); /* For IE8 and earlier */
    }

    /* Removes Carets on dropdown based on resize */
    #caret{
      display: inline-block;
    }

    @media (max-width: 767px) {
      #caret{
          display: none;
      }
      .dropdown:hover .dropdown-menu {
          display: none;
    }}

    .affix {
         top: 0;
         width: 100%;
     }

     .affix + .container-fluid {
         padding-top: 0px;
         margin-top: 50px;
     }

     .container-fluid {
        padding-right: 0px;
        padding-left: 0px;
      }
     ul.nav-pills {
      top: 0px;
      margin-top: 60px;
      }
      #section1 {padding-top:50px;height:600px;color: #fff; background-color: #1E88E5;}
      #section2 {padding-top:50px;height:600px;color: #fff; background-color: #673ab7;}
      #section3 {padding-top:50px;height:600px;color: #fff; background-color: #673ab7;}
      #section4 {padding-top:50px;height:600px;color: #fff; background-color: #673ab7;}
      #section5 {padding-top:50px;height:600px;color: #fff; background-color: #673ab7;}

      @media screen and (max-width: 810px) {
        #section1, #section2, #section3, #section4, #section5  {
            margin-left: 150px;
        }
      }

       /* Add a gray background color and some padding to the footer */
       footer {
         background-color: #f2f2f2;
         padding: 25px;
         margin: 0;
       }
   </style>

  <body data-spy="scroll" data-target="#myScrollspy" data-offset="15">

    <div class="container-fluid head-format">
      <div class="container">
        <a href ="https://htmlpreview.github.io/?https://github.com/b5ta/b5ta-website/blob/master/index.php"><img class="logo" src="images/b5talogo.png" alt"b5talogo"></a>
      </div>
    </div>

    <!--Left side of navbar-->
    <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="125" >
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="myNa  vbar">
          <ul class="nav navbar-nav">

            <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
                          <!--Home Navbar-->
            <li class="active"><a href="https://htmlpreview.github.io/?https://github.com/b5ta/b5ta-website/blob/master/index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>

            <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
                          <!--Discord Navbar-->
            <li><a href="https://htmlpreview.github.io/?https://github.com/b5ta/b5ta-website/blob/master/discord.php"><img src="images/discord.jpg" class="img-circle" height="19px" width="19px"> Discord</a></li>


            <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
                          <!--Guides dropdown-->
            <li class="dropdown"><a class="dropdown-toggle" data-hover="dropdown" href="#"><span class="glyphicon glyphicon-list-alt"></span> Guides<span id="caret" class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="http://runescape.guide/bosses/" target="_blank">Bosses</a></li>
                <li><a href="http://runescape.guide/gear/solo/" target="_blank">Gear</a></li>
                <li><a href="http://runescape.guide/clue-scroll/" target="_blank">Invention Perks</a></li>
                <li><a href="http://runescape.guide/free-runecoins/" target="_blank">Free Runecoins</a></li>
                <li><a href="http://runescape.guide/clue-scroll/" target="_blank">Clue Scrolls</a></li>
              </ul>
            </li>            

            <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
                      <!-- Flip chart navbar-->
            <li><a href="http://runescape.guide/flipping/"><span class="glyphicon glyphicon-usd"></span>Flipping</a></li>

          </ul>



          <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
                    <!--Login Navbar-->
          <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Contact</a></li>
            <li><a href"#"><span class="glyphicon glyphicon-user"></span> Log in</a></li>
          </ul>

        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <!--Side Navbar-->
        <nav class="col-sm-2" id="myScrollspy">
          <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="250" >
            <li><a href="#section1">Clan B5TA</a></li>
            <li><a href="#section2">Bossing</a></li>
            <li><a href="#section3">Skilling</a></li>
            <li><a href="#section4">Flipping</a></li>
            <li><a href="#section5">Join</a></li>
          </ul>
        </nav>

        <div class="col-sm-10">
          <div id="section1">
            <h1>Clan B5TA</h1>
            <p>Try to scroll this section and look at the navigation list while scrolling!</p>
          </div>
          <div id="section2">
            <h1>Bossing</h1>
            <p>Try to scroll this section and look at the navigation list while scrolling!</p>
          </div>
          <div id="section3">
            <h1>Skilling</h1>
            <p>Try to scroll this section and look at the navigation list while scrolling!</p>
          </div>
          <div id="section4">
            <h1>Flipping</h1>
            <p>Try to scroll this section and look at the navigation list while scrolling!</p>
          </div>
          <div id="section5">
            <h1>Join</h1>
            <p>Try to scroll this section and look at the navigation list while scrolling!</p>
          </div>
        </div>

      </div>
    </div>

</body>
