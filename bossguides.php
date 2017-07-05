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

  <style>
  h2{
    font-size: 20px;
  }
  .well-style:hover{
    background-color: #ccc;
  }
  table {
  border-collapse: separate;
  border-spacing: 50px 0;
  }

  td {
    padding: 10px 10px;
    text-align: center;
  }
  td:hover{
    background-color: #ddd;
  }
  </style>

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
            <li><a href="https://htmlpreview.github.io/?https://github.com/b5ta/b5ta-website/blob/master/discord.php"><img src="images/discord.jpg" class="img-circle" height="19px" width="19px"> Discord</a></li>


            <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
                          <!--Guides dropdown-->
            <li class="dropdown active"><a class="dropdown-toggle" data-hover="dropdown" href="#"><span class="glyphicon glyphicon-list-alt"></span> Guides<span id="caret" class="caret"></span></a>
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

    <div class="container" style="padding-top: 50px">
      <div class="row">
        <h1 style="text-align: center">Bossing Guides</h1>
        <br>
        <p>These bossing guides fully cover everything you need to know to effienctly and effectivly kill every boss in the game.
          The guides go over your gear, inventory, boss mechanics, and more so you can easily learn all bosses.
        </p>
      </div>
      <hr>
      <div class="row">

        <!--  LOW_LEVEL_BOSSES  -->
        <div class="col-sm-4" id="low">
          <div class="well well-lg clickable well-style">
            <h3 class="clickable" style="text-align:center">Low-Level Bosses</h3>
          </div>
        </div>

        <div style="col-sm-8" id="low-bosses">
          <button class="back-button" onclick="document.getElementById('line').style.display='block'; document.getElementById('gwd1').style.display='block'; document.getElementById('mid').style.display='block'; document.getElementById('gwd2').style.display='block'; document.getElementById('high').style.display='block'; document.getElementById('raids').style.display='block'; document.getElementById('low-bosses').style.display='none'">
            <span class="glyphicon glyphicon-chevron-left"></span>Back
          </button>
          <table>
            <tr>
              <td class="clickable">Chaos Elemental</td>
              <td class="clickable">Dagannoth Kings</td>
            </tr>
            <tr>
              <td class="clickable">Giant Mole</td>
              <td class="clickable">Kalphite Queen</td>
            </tr>
            <tr>
              <td class="clickable">Exiled Kalphite Queen</td>
              <td class="clickable">King Black Dragon</td>
            </tr>
            <tr>
              <td class="clickable">The Barrows Brothers</td>
              <td class="clickable">TzTok-Jad</td>
            </tr>
          </table>
        </div>

        <!--   GODWARS DUNGEON 1   -->
        <div class="col-sm-4" id="gwd1">
          <div class="well well-lg clickable well-style">
            <h3 class="clickable" style="text-align:center">Godwars Dungeon 1</h3>
          </div>
        </div>

        <div class="col-sm-8" id="gwd1-bosses">
          <button class="back-button" onclick="document.getElementById('line').style.display='block'; document.getElementById('low').style.display='block'; document.getElementById('mid').style.display='block'; document.getElementById('gwd2').style.display='block'; document.getElementById('high').style.display='block'; document.getElementById('raids').style.display='block'; document.getElementById('gwd1-bosses').style.display='none'">
            <span class="glyphicon glyphicon-chevron-left"></span>Back
          </button>
          <table>
            <tr>
              <td class="clickable">K'ril Tsutsaroth</td>
              <td class="clickable">Kree'arra</td>
            </tr>
            <tr>
              <td class="clickable">Commander Zilyana</td>
              <td class="clickable">General Graardor</td>
            </tr>
            <tr>
              <td class="clickable">Nex</td>
              <td class="clickable">Nex Angel of Death</td>
            </tr>
          </table>
        </div>

        <!--   MID_LEVEL_BOSSES    -->
        <div class="col-sm-4" id="mid">
          <div class="well well-lg clickable well-style">
            <h3 class="clickable" style="text-align:center">Mid-Level Bosses</h3>
          </div>
        </div>

        <div class="col-sm-8" id="mid-bosses">
          <button class="back-button" onclick="document.getElementById('line').style.display='block'; document.getElementById('gwd1').style.display='block'; document.getElementById('low').style.display='block'; document.getElementById('gwd2').style.display='block'; document.getElementById('high').style.display='block'; document.getElementById('raids').style.display='block'; document.getElementById('mid-bosses').style.display='none'">
            <span class="glyphicon glyphicon-chevron-left"></span>Back
          </button>
          <table>
            <tr>
              <td class="clickable">Corporeal Beast</td>
              <td class="clickable">Har-aken</td>
            </tr>
            <tr>
              <td class="clickable">Legiones</td>
              <td class="clickable">Queen Black Dragon</td>
            </tr>
            <tr>
              <td class="clickable">Kalphite King</td>
            </tr>
          </table>
        </div>

      </div>
      <!------------------------------>
      <hr id="line">
      <!------------------------------>
      <div class="row">

        <!--   GODWARS DUNGEON 2    -->
        <div class="col-sm-4" id="gwd2">
          <div class="well well-lg clickable well-style">
            <h3 class="clickable" style="text-align:center">Godwars Dungeon 2</h3>
          </div>
        </div>

        <div class="col-sm-8" id="gwd2-bosses">
          <button class="back-button" onclick="document.getElementById('line').style.display='block'; document.getElementById('gwd1').style.display='block'; document.getElementById('mid').style.display='block'; document.getElementById('low').style.display='block'; document.getElementById('high').style.display='block'; document.getElementById('raids').style.display='block'; document.getElementById('gwd2-bosses').style.display='none'">
            <span class="glyphicon glyphicon-chevron-left"></span>Back
          </button>
          <table>
            <tr>
              <td class="clickable">Gregorovic (Sliske)</td>
              <td class="clickable">Helwyr (Seren)</td>
            </tr>
            <tr>
              <td class="clickable">Twin Furies (Zamorak)</td>
              <td class="clickable">Vindicta &amp; Gorvek (Zaros)</td>
            </tr>
          </table>
        </div>

        <!--   HIGH_LEVEL_BOSSES    -->
        <div class="col-sm-4" id="high">
          <div class="well well-lg clickable well-style">
            <h3 class="clickable" style="text-align:center">High-Level Bosses</h3>
          </div>
        </div>

        <div class="col-sm-8" id="high-bosses">
          <button class="back-button" onclick="document.getElementById('line').style.display='block'; document.getElementById('gwd1').style.display='block'; document.getElementById('mid').style.display='block'; document.getElementById('gwd2').style.display='block'; document.getElementById('low').style.display='block'; document.getElementById('raids').style.display='block'; document.getElementById('high-bosses').style.display='none'">
            <span class="glyphicon glyphicon-chevron-left"></span>Back
          </button>
          <table>
            <tr>
              <td class="clickable">Araxxor</td>
              <td class="clickable">Barrows, Rise of the Six</td>
            </tr>
            <tr>
              <td class="clickable">Telos</td>
              <td class="clickable">Vorago</td>
            </tr>
          </table>
        </div>

        <!--   RAIDS    -->
        <div class="col-sm-4" id="raids">
          <div class="well well-lg clickable well-style">
            <h3 class="clickable" style="text-align:center">Raids</h3>
          </div>
        </div>

        <div class="col-sm-8" id="raids-bosses">
          <button class="back-button" onclick="document.getElementById('line').style.display='block'; document.getElementById('gwd1').style.display='block'; document.getElementById('mid').style.display='block'; document.getElementById('gwd2').style.display='block'; document.getElementById('high').style.display='block'; document.getElementById('low').style.display='block'; document.getElementById('raids-bosses').style.display='none'">
            <span class="glyphicon glyphicon-chevron-left"></span>Back
          </button>
          <table>
            <tr>
              <td class="clickable">Beastmaster</td>
              <td class="clickable">Yakamaru</td>
            </tr>
          </table>
        </div>

      </div>
    </div>

  </body>
