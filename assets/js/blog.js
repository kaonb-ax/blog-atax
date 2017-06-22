
$( document ).ready(function() {
    console.log( "ready!" );

    $('#accueilLink').click(function() {
      window.location.href = "../index.php";
    });
    $('#blogLink').click(function() {
      window.location.href = "../blog.php";
    });
    $('#cvLink').click(function() {
      window.location.href = "../cv.php";
    });
    // SEMAINE============================================
    $('#S2').click(function() {
      $.ajax({ url: "./includes/week2.php",
              cache: false
            }).done(function( page ) {
              $( ".myBody" ).html(page);
            });
      $('#S2').addClass("active");
      $('#S1').removeClass("active");
      $('#S3').removeClass("active");
      $('#S4').removeClass("active");

    });
});
