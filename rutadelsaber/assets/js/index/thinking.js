document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.querySelector('.sidebar');
    const sidebarToggle = document.querySelector('.sidebar-toggle');

    function expandSidebar() {
        sidebar.classList.add('expanded');
    }

    function collapseSidebar() {
        sidebar.classList.remove('expanded');
    }

    sidebarToggle.addEventListener('mouseenter', expandSidebar);
    sidebar.addEventListener('mouseenter', expandSidebar);


    sidebar.addEventListener('mouseleave', collapseSidebar);
    sidebarToggle.addEventListener('mouseleave', collapseSidebar);
});

//mobile

const menuToggle = document.querySelector('.bt-menu');
const navigation = document.querySelector('.primary-navigation');

menuToggle.addEventListener('click', function(e) {
  e.preventDefault();
  navigation.classList.toggle('open');
});


//carusel
$(document).ready(function() {
  $('.owl-carousel').owlCarousel({
      center: true,
      items: 1,
      loop: true,
      margin: 10,
      nav: true,
      navText: ['<span class="fa fa-chevron-left"></span>', '<span class="fa fa-chevron-right"></span>'],
      responsive: {
          600: {
              items: 1
          }
      },
      autoplay: true,
      autoplayTimeout: 10000,
      autoplayHoverPause: true,
      mouseDrag: true
  });

  $('.play').on('click', function() {
      $('.owl-carousel').trigger('play.owl.autoplay', [10000]);
  });
  
  $('.stop').on('click', function() {
      $('.owl-carousel').trigger('stop.owl.autoplay');
  });
});



// acordeon para info de thinking

var coll = document.getElementsByClassName("acordeon");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}