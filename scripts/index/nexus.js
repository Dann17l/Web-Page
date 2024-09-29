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
