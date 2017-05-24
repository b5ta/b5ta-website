<html lang="en">
<head>
  <title>B5TA | Home</title>
  <link rel="icon" href="Images/NGfavicon1.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--Dropdown hover css link-->
  <link rel="stylesheet" type="text/css" href="css/dropdownhover.css">

  <!--jumbotronslideshow-->
  <link rel="stylesheet" type="text/css" href="css/half-slider.css" >

  <!--bootsrap css-->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

  <!-- JAVASCRIPT files-->
  <script src="js/jquery.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/dropdown.js"></script>

  <script src="js/jquery-idleTimeout.js"></script>
  <script type="text/javascript" charset="utf-8">
		  $(document).ready(function(){
		   $(document).idleTimeout();
		  });
	</script>

  <style>
    .head-format{
      background-color:#0066ff;
      color:#fff;
      height:250px;
    }

    .logo{
      height: 100%;
      width: auto;
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

    /* Creates the scrollspy effect on the navbar*/
    .affix {
         top: 0;
         width: 100%;
     }

     .affix + .container-fluid {
         padding-top: 70px;
         margin-top: 50px;
     }

     /* Add a gray background color and some padding to the footer */
     footer {
       background-color: #f2f2f2;
       padding: 25px;
       margin: 0;
     }
   </style>

  <body data-spy="scroll" data-target=".navbar" data-offset="50">

    <div class="container-fluid head-format">
      <div class="container text-center">
        <img class="logo" src="images/b5talogo.png" alt"b5talogo">
      </div>
    </div>

    <!--Left side of navbar-->
    <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="250" >
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">

            <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
                          <!--Home Navbar-->
            <li class="active"><a href="home.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>

            <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
                          <!--Discord Navbar-->
            <li><a href="#"><img src="images/discord.jpg" class="img-circle" height="19px" width="19px"> Discord</a></li>


            <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
                          <!--Guides dropdown-->
            <li class="dropdown"><a class="dropdown-toggle" data-hover="dropdown" href="#"><span class="glyphicon glyphicon-list-alt"></span> Guides<span id="caret" class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Bossing</a></li>
                <li><a href="#">Money Making</a></li>
                <li><a href="#">Quests</a></li>
                <li><a href="#">Skilling</a></li>
              </ul>
            </li>

            <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
                      <!-- Flip chart navbar-->
            <li><a href="#"><span class="glyphicon glyphicon-usd"></span> Flip Chart</a></li>

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
