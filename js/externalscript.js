///////////////////////////////////////////////////////////
//           DISCORD.php
///////////////////////////////////////////////////////////
$(document).ready(function(){
    $("#bossing").click(function(){
        $("#runeinfo").fadeOut("slow");
        $("#flipchat").fadeOut("slow", function(){
          $("#bossing-div").fadeIn("slow");
          });
        });
      });

$(document).ready(function(){
    $("#runeinfo").click(function(){
        $("#bossing").fadeOut("slow");
        $("#flipchat").fadeOut("slow", function(){
          $("#runeinfo-div").fadeIn("slow");
          });
        });
      });

$(document).ready(function(){
    $("#flipchat").click(function(){
        $("#bossing").fadeOut("slow");
        $("#runeinfo").fadeOut("slow", function(){
            $("#flipchat-div").fadeIn("slow");
        });
      });
    });

///////////////////////////////////////////////////////////
//          BOSSGUIDES.php
///////////////////////////////////////////////////////////
$(document).ready(function(){
    $("#low").click(function(){
        $("#line").fadeOut("slow");
        $("#gwd1").fadeOut("slow");
        $("#mid").fadeOut("slow");
        $("#gwd2").fadeOut("slow");
        $("#high").fadeOut("slow");
        $("#raids").fadeOut("slow", function(){
          $("#low-bosses").fadeIn("slow");
          });
        });
      });

$(document).ready(function(){
    $("#gwd1").click(function(){
        $("#line").fadeOut("slow");
        $("#low").fadeOut("slow");
        $("#mid").fadeOut("slow");
        $("#gwd2").fadeOut("slow");
        $("#high").fadeOut("slow");
        $("#raids").fadeOut("slow", function(){
          $("#gwd1-bosses").fadeIn("slow");
          });
        });
      });

$(document).ready(function(){
    $("#mid").click(function(){
        $("#line").fadeOut("slow");
        $("#low").fadeOut("slow");
        $("#gwd1").fadeOut("slow");
        $("#gwd2").fadeOut("slow");
        $("#high").fadeOut("slow");
        $("#raids").fadeOut("slow", function(){
          $("#mid-bosses").fadeIn("slow");
          });
        });
      });
$(document).ready(function(){
    $("#gwd2").click(function(){
        $("#line").fadeOut("slow");
        $("#low").fadeOut("slow");
        $("#gwd1").fadeOut("slow");
        $("#mid").fadeOut("slow");
        $("#high").fadeOut("slow");
        $("#raids").fadeOut("slow", function(){
          $("#gwd2-bosses").fadeIn("slow");
          });
        });
      });
$(document).ready(function(){
    $("#high").click(function(){
        $("#line").fadeOut("slow");
        $("#low").fadeOut("slow");
        $("#gwd1").fadeOut("slow");
        $("#mid").fadeOut("slow");
        $("#gwd2").fadeOut("slow");
        $("#raids").fadeOut("slow", function(){
          $("#high-bosses").fadeIn("slow");
          });
        });
      });
$(document).ready(function(){
    $("#raids").click(function(){
        $("#line").fadeOut("slow");
        $("#low").fadeOut("slow");
        $("#gwd1").fadeOut("slow");
        $("#mid").fadeOut("slow");
        $("#gwd2").fadeOut("slow");
        $("#high").fadeOut("slow", function(){
          $("#raids-bosses").fadeIn("slow");
          });
        });
      });


/* takes you to the tip of the page */
$("#Top").click(function(){
   scroll(0,0);
  });
