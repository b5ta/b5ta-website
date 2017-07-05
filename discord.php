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

  <!--external css-->
  <link rel="stylesheet" type="text/css" href="css/externalstyle.css">

  <!-- JAVASCRIPT files-->
  <script src="js/jquery.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/dropdown.js"></script>
  <script src="js/externalscript.js"></script>

  <body>

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
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">

            <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
                          <!--Home Navbar-->
            <li><a href="https://htmlpreview.github.io/?https://github.com/b5ta/b5ta-website/blob/master/index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>

            <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
                          <!--Discord Navbar-->
            <li class="active"><a href="https://htmlpreview.github.io/?https://github.com/b5ta/b5ta-website/blob/master/discord.php"><img src="images/discord.jpg" class="img-circle" height="19px" width="19px"> Discord</a></li>


            <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
                          <!--Guides dropdown-->
            <li class="dropdown"><a class="dropdown-toggle" data-hover="dropdown" href="#"><span class="glyphicon glyphicon-list-alt"></span> Guides<span id="caret" class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="https://htmlpreview.github.io/?https://github.com/b5ta/b5ta-website/blob/master/bossguides.php">Bosses</a></li>
                <li><a href="http://runescape.guide/gear/solo/" target="_blank">Gear</a></li>
                <li><a href="http://runescape.guide/clue-scroll/" target="_blank">Invention Perks</a></li>
                <li><a href="https://htmlpreview.github.io/?https://github.com/b5ta/b5ta-website/blob/master/freerunecoins.php">Free Runecoins</a></li>
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
        <div class="col-sm-3" style="padding-top: 15px;">
          <img src="images/discord.jpg" alt="discord">
        </div>

        <div class="col-sm-9">
          <h1 style="text-align:center;">Join our Discord server!</h1>
          <br>
          <br>
          <h3>Download Discord Here: <a href="https://discordapp.com/download" target="_blank">https://discordapp.com/download</a></h3>
          <br>
          <h3>After you download the client, click this invite link to join our clan's Discord server: <a href="https://discord.gg/0qfZioFZLSnmWMs7" target="_blank">https://discord.gg/0qfZioFZLSnmWMs7</a></h3>
        </div>
      </div>
      <br>
      <hr>
      <br>
      <div class="row">
        <h2 style="text-align:center;">What does our Discord server offer?</h2>
      </div>

      <div class="row">

        <!--BOSSING DISCORD INFO-->
        <div class="col-sm-4 discfeature" id="bossing">
          <h4 style="text-align:center;">Bossing</h4>
          <img src="images/Tuz.png" class="img-responsive discfeature-image" alt="Bossing" width="350" height="350">
        </div>

        <div class="col-sm-8" id="bossing-div">
          <button class="back-button" onclick="document.getElementById('runeinfo').style.display='block'; document.getElementById('flipchat').style.display='block'; document.getElementById('bossing-div').style.display='none'">
            <span class="glyphicon glyphicon-chevron-left"></span>Back
          </button>
          <h3 style="text-align:center;">Very active bossing clan</h3>
          <hr>
          <p>We kill all sorts of bosses together including Beastmaster and Nex AOD</p>
          <br>
          <p>We also teach all bosses so don't be afraid to ask any questions!</p>
          <br>
          <p>Low level bosses | Godwars Dungeon 1 | Mid level bosses | Godwars Dungeon 2 | High level bosses | Raids</p>
          <hr>
          <a href="https://discord.gg/0qfZioFZLSnmWMs7" target="_blank">
            <button class="btn btn-lg btn-primary joinbutton">
              Join Now!
            </button>
          </a>
        </div>

        <!--RUNEINFO DISCORD INFO-->
        <div class="col-sm-4 discfeature" id="runeinfo">
          <h4 style="text-align:center;">RuneInfo</h4>
          <img src="images/runeinfo.png" class="img-responsive discfeature-image" alt="RuneInfo" width="350" height="350">
        </div>

        <div class="col-sm-8" id="runeinfo-div">
          <button class="back-button" onclick="document.getElementById('bossing').style.display='block'; document.getElementById('flipchat').style.display='block'; document.getElementById('runeinfo-div').style.display='none'">
            <span class="glyphicon glyphicon-chevron-left"></span>Back
          </button>
          <h3 style="text-align:center;">Cool Discord bot features</h3>
          <hr>
          <p>RuneInfo provides many functions including player gainz tracking and player skill lookup</p>
          <br>
          <p>Our discord has this bot implemented into it. To view the full list of commands <a href="https://runeinfo.xyz/ri/commands" target="_blank">click this link.</a></p>
          <br>
          <p>Warbands timer | High level bosses staples | Portable location tracker | GE price checking</p>
          <hr>
          <a href="https://discord.gg/0qfZioFZLSnmWMs7" target="_blank">
            <button class="btn btn-lg btn-primary joinbutton">
              Join Now!
            </button>
          </a>
        </div>

        <!--FLIPCHAT DISCORD INFO-->
        <div class="col-sm-4 discfeature" id="flipchat">
          <h4 style="text-align:center;">Flipchat</h4>
          <img src="images/coins.png" class="img-responsive discfeature-image" alt="Flipchat" width="350" height="350">
        </div>

        <div class="col-sm-8" id="flipchat-div">
          <button class="back-button" onclick="document.getElementById('bossing').style.display='block'; document.getElementById('runeinfo').style.display='block'; document.getElementById('flipchat-div').style.display='none'">
            <span class="glyphicon glyphicon-chevron-left"></span>Back
          </button>
          <h3 style="text-align:center;">Active daily flip reports</h3>
          <hr>
          <p>Our server has active item flipping members who report there flips exclusively to this Discord server.</p>
          <br>
          <p>We flip high priced items and low priced items so it is available to you even if you have a low cash stack.</p>
          <br>
          <p>Get a jump on gp gainz and join our discord!</p>
          <hr>
          <a href="https://discord.gg/0qfZioFZLSnmWMs7" target="_blank">
            <button class="btn btn-lg btn-primary joinbutton">
              Join Now!
            </button>
          </a>
        </div>


      </div>

    </div>

</body>
