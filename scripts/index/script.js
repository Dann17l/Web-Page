//carousel code de la página de inicio :)

let currentIndex = 0;

const titleEvents = [
    "Bienvenidos a la ruta del saber",
    "Nuestros clubes",
    "Refuerzos de la ruta",
    "Conocenos más a fondo",
    "Calendario de eventos"
];

const eventos = [
    "La Ruta del Saber ofrece a los estudiantes la oportunidad de desarrollar habilidades y conocimientos específicos en su área de interés, al mismo tiempo que se enfocan en mejorar el desempeño institucional en SABER TYT y SABER PRO.",
    "Descubre los clubes que tenemos para ti y únete a el que más te llame la atención.",
    "¿Necesitas ayuda con las materias?, tenemos gente que te ayudará en los diferentes refuerzos que tenemos para ti.",
    "Queremos ayudarte en lo que necesites, nos interesa que progreses como estudiante y persona.",
    "Conoce nuestro calendario de eventos, aqui conocerás a fondo los eventos que tenemos preparados para ti."
];

const buttonEvents = [
    "Test",
    "Test",
    "¿Quienes somos?",
    "Explorar más",
    "Mia"
];

function showSlide(index) {
    const slides = document.querySelectorAll('.carousel-images img');
    const carouselText = document.querySelector('.carousel-text p');
    const title = document.querySelector('#carousel-title');
    const button = document.querySelector('#btn');
    
    if (index >= slides.length) {
        currentIndex = 0;
    } else if (index < 0) {
        currentIndex = slides.length - 1;
    } else {
        currentIndex = index;
    }
    
    const offset = -currentIndex * 100;
    document.querySelector('.carousel-images').style.transform = `translateX(${offset}%)`;

    carouselText.textContent = eventos[currentIndex];
    title.textContent = titleEvents [currentIndex];
    button.textContent = buttonEvents[currentIndex];
}



function nextSlide() {
    showSlide(currentIndex + 1);
}

function prevSlide() {
    showSlide(currentIndex - 1);
}

document.getElementById('prevBtn').addEventListener('click', prevSlide);
document.getElementById('nextBtn').addEventListener('click', nextSlide);

setInterval(nextSlide, 2500);

document.getElementById('btn').addEventListener('click', function() {
    switch (currentIndex) {
        case 0:
            window.location.href = "/rutadelsaber/.html", "_blank";
            break;
        case 1:
            alert("https://www.example.com", "_blank");
            break;
        case 2:
            window.open("https://www.example.com", "_blank");
            break;

        case 3:
            window.open("https://www.example.com", "_blank");
            break;
        case 4:
            window.open("https://www.example.com", "_blank");
            break;
    }
});



//Código del sidebar para aparecer al acercar el mouse

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


// Menú en movil

const menuToggle = document.querySelector('.bt-menu');
const navigation = document.querySelector('.primary-navigation');

menuToggle.addEventListener('click', function(e) {
  e.preventDefault();
  navigation.classList.toggle('open');
});

// Expandir imagenes


document.addEventListener('DOMContentLoaded', function () {
    const memberImage = document.getElementById('member-img');
    const mainCont = document.getElementById('main-cont');
    const usSection = document.getElementById('img-blur');
    const body = document.body;

    memberImage.addEventListener('click', function (event) {
        event.stopPropagation();
        memberImage.classList.toggle('expanded');
        mainCont.classList.toggle('blur');
        usSection.classList.toggle('blur');
    });

    body.addEventListener('click', function (e) {
        if (memberImage.classList.contains('expanded') && !memberImage.contains(e.target)) {
            memberImage.classList.remove('expanded');
            mainCont.classList.remove('blur');
            usSection.classList.remove('blur');
        }
    }, true);
});


document.addEventListener('DOMContentLoaded', function () {
    const testImage = document.getElementById('test-img');
    const mainCont = document.getElementById('main-cont');
    const testSection = document.getElementById('test-blur');
    const memberSection = document.getElementById('us-blur');
    const nosotrosSection = document.getElementById('nosotros');
    const body = document.body;

    testImage.addEventListener('click', function (event) {
        event.stopPropagation();
        testImage.classList.toggle('expanded');
        mainCont.classList.toggle('blur');
        testSection.classList.toggle('blur');
        memberSection.classList.toggle('blur');
        nosotrosSection.classList.toggle('blur');
    });

    body.addEventListener('click', function (e) {
        if (testImage.classList.contains('expanded') && !testImage.contains(e.target)) {
            testImage.classList.remove('expanded');
            mainCont.classList.remove('blur');
            testSection.classList.remove('blur');
            memberSection.classList.remove('blur');
            nosotrosSection.classList.remove('blur');
        }
    }, true);
});