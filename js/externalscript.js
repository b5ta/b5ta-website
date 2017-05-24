$(document).ready(function(){
    $(".tutorials-div").click(function(){
        $(".review-div").fadeOut("slow");
        $(".impression-div").fadeOut("slow", function(){
          $("#tutorialsinfo").fadeIn("slow");
          });
        });
      });

$(document).ready(function(){
    $(".review-div").click(function(){
        $(".tutorials-div").fadeOut("slow");
        $(".impression-div").fadeOut("slow", function(){
          $("#reviewinfo").fadeIn("slow");
          });
        });
      });

$(document).ready(function(){
    $(".impression-div").click(function(){
        $(".review-div").fadeOut("slow");
        $(".tutorials-div").fadeOut("slow", function(){
            $("#impressioninfo").fadeIn("slow");
        });
      });
    });

/* takes you to the tip of the page */
$("#Top").click(function(){
   scroll(0,0);
  });
