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

/* takes you to the tip of the page */
$("#Top").click(function(){
   scroll(0,0);
  });
