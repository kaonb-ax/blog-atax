
$( document ).ready(function() {
    console.log( "ready!" );
//déclaration des variables===============
var month_tab = ["M1", "M2", "M3", "M4",
                 "M5","M6","M7","M8"];
var week_tab = ["S1", "S2", "S3", "S4"];
var current_month;
//fonctions semaines======================
function weekSwitch(clicked, month){
  $('#'+clicked).addClass("active");
  $('.myBody').load( "./includes/month/"+month+"/"+clicked+".php" );
  //suppression de l'element cliqué=======
  var removeItem = clicked;
  week_tab1 = jQuery.grep(week_tab, function(value) {
    return value != removeItem;
  });
  //suppression de la class active sur tous les autres
  for (var i = 0; i < week_tab1.length; i++) {
  $('#'+week_tab1[i]).removeClass("active");
  };
}
//fonctions mois==========================
function monthSwitch(clicked){
  $('#'+clicked).addClass("active");
  var removeItem = clicked;
  month_tab1 = jQuery.grep(month_tab, function(value) {
    return value != removeItem;
  });
  for (var i = 0; i < month_tab1.length; i++) {
  $('#'+month_tab1[i]).removeClass("active");
  };
  $('.myBody').load( "./includes/month/"+clicked+"/S1.php" );
  current_month = clicked;
  console.log("nouveau mois: "+current_month);
}

//lien des 3 onglets principaux===========
$('#accueilLink').click(function() {
  window.location.href = "../index.php";
});
$('#blogLink').click(function() {
  window.location.href = "../blogIndex.php";
});
$('#cvLink').click(function() {
  window.location.href = "../cv.php";
});
//click semaine===========================
$('#S1').click(function() {
  weekSwitch('S1', current_month);
  console.log(current_month);
});
$('#S2').click(function() {
  weekSwitch('S2', current_month);
});
$('#S3').click(function() {
  weekSwitch('S3', current_month);
});
$('#S4').click(function() {
  weekSwitch('S4', current_month);
});
//click mois==============================
$('#M1').click(function() {
  monthSwitch('M1');
});
$('#M2').click(function() {
  monthSwitch('M2');
});
$('#M3').click(function() {
  monthSwitch('M3');
});
$('#M4').click(function() {
  monthSwitch('M4');
});
$('#M5').click(function() {
  monthSwitch('M5');
});
$('#M6').click(function() {
  monthSwitch('M6');
});
$('#M7').click(function() {
  monthSwitch('M7');
});
$('#M8').click(function() {
  monthSwitch('M8');
});
//fin du document ready===================
});
