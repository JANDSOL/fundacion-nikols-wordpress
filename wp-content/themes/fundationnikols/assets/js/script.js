// jQuery(document).ready(function ($) {
//   // If a link has a dropdown, add sub menu toggle.
//   $('nav ul li a:not(:only-child)').click(function(e) {
//     $(this).siblings('.sub-menu').toggle();
//     // Close one dropdown when selecting another
//     $('.sub-menu').not($(this).siblings()).hide();
//     e.stopPropagation();
//   });
//   // Clicking away from dropdown will remove the dropdown class
//   $('html').click(function() {
//     $('.sub-menu').hide();
//   });
//   // Toggle open and close nav styles on click
//   $('#nav-toggle').click(function() {
//     $('nav ul').slideToggle();
//   });
//   // Hamburger to X toggle
//   $('#nav-toggle').on('click', function() {
//     this.classList.toggle('active');
//   });

//   // ADITIONAL CODE
//   console.log($(window).width());
//   if ($(window).width() < 799) {
//     $("#menu-menu-principal").addClass("content-mobile");
//     $(".menu").addClass("full-background-menu");
//   } else {
//     if ($("#menu-menu-principal").find(".content-mobile")) {
//       $("#menu-menu-principal").removeClass("content-mobile");
//       $("#menu-menu-principal").removeClass("full-background-menu");
//     }
//   }
// });

(function ($) {
  // Begin jQuery
  $(function () {
    // DOM ready
    // If a link has a dropdown, add sub menu toggle.
    $("nav ul li a:not(:only-child)").click(function (e) {
      $(this).siblings(".sub-menu").toggle();
      // Close one dropdown when selecting another
      $(".sub-menu").not($(this).siblings()).hide();
      e.stopPropagation();
    });
    // Clicking away from dropdown will remove the dropdown class
    $("html").click(function () {
      $(".sub-menu").hide();
    });
    // Toggle open and close nav styles on click
    $("#nav-toggle").click(function () {
      $("nav ul").slideToggle();
    });
    // Hamburger to X toggle
    $("#nav-toggle").on("click", function () {
      this.classList.toggle("active");
    });
    // ADITIONAL CODE
    function addContentMobile($param) {
      $param.addClass("content-mobile");
    }
    function addFullBackgroundMenu($param) {
      $param.addClass("full-background-menu");
    }
    function removeContentMobile($param) {
      $param.removeClass("content-mobile");
    }
    function removeFullBackgroundMenu($param) {
      $param.removeClass("full-background-menu");
    }
    // Scan for first time
    if ($(window).width() < 799) {
      addContentMobile($("#menu-menu-principal"));
      addFullBackgroundMenu($(".menu"));
    } else {
      if ($("#menu-menu-principal").find(".content-mobile")) {
        removeContentMobile($("#menu-menu-principal"));
        removeFullBackgroundMenu($(".menu"));
      }
    }
    // Scan for resize
    $(window).resize(function () {
      if ($(this).width() < 799) {
        addContentMobile($("#menu-menu-principal"));
        addFullBackgroundMenu($(".menu"));
      } else {
        if ($("#menu-menu-principal").find(".content-mobile")) {
          removeContentMobile($("#menu-menu-principal"));
          removeFullBackgroundMenu($(".menu"));
        }
      }
    });
  }); // end DOM ready
})(jQuery); // end jQuery
