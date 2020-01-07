alert("Je suis up");






(function($) {
    alert("Je suis up");
  // Closes the sidebar menu
  $(".menu-toggle").click(function(e) {
    e.preventDefault();
      console.log("clicked");
    $("#sidebar-wrapper").toggleClass("active");
    $(".menu-toggle > .fa-bars, .menu-toggle > .fa-times").toggleClass("fa-bars fa-times");
    $(this).toggleClass("active");
  });

})(jQuery); // End of use strict
