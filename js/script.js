//*Animation Navbar
let open = false;

function mobileToggler() {
    if (open) {
        document.querySelector('#principale ul').style.animation = 'close 0.6s ease-out backwards';
        open = !open;
    } else {
        document.querySelector('#principale ul').style.animation = 'open 0.6s ease-out forwards';
        open = !open;
    }
};

/*************************************************/


//*Ajout placholder dans form
(function form() {
    if (document.querySelector('#nom')) {
        document.querySelector('#nom').setAttribute('placeholder', 'Votre nom');
        document.querySelector('#email').setAttribute('placeholder', 'Votre email');
        document.querySelector('#message').setAttribute('placeholder', 'Votre message');
    }
})();


/***************************************************/

// //*Zoom sur image
let imageContainer;

(function addImageListener() {
    imageContainer = document.querySelectorAll('.wp-block-image');
    if (imageContainer) {
        imageContainer.forEach(container => container.addEventListener('click', zoomImage));
    }
})();

function zoomImage(e) {
    const body = document.querySelector('body');
    const blackContainer = document.createElement('div');
    const img = e.target;
    imageContainer = e.target.parentElement;
    blackContainer.setAttribute('class', 'blackContainer');
    body.prepend(blackContainer);
    blackContainer.prepend(e.target);
    blackContainer.addEventListener('click', unzoomImage);
    img.addEventListener('click', unzoomImage);
};

function unzoomImage() {
    const blackContainer = document.querySelector('.blackContainer');
    const img = document.querySelector('.blackContainer img');
    if (blackContainer) {
        blackContainer.remove();
    }
    if (img) {
        imageContainer.appendChild(img);
    }
};

/***********************************************/


//*Variable scope global
let span;
let spanPosition;
let spanWidth;

//*Ajout surlignage menu principale
function addMenuUnderline(firstSpanPosition, firstSpanWidth) {
    const menu = document.querySelector('#menu-principal');
    if (menu) {
        span = document.createElement('span');
        span.setAttribute('class', 'menu_span');
        menu.parentElement.appendChild(span);
        span.style.left = firstSpanPosition + 'px';
        span.style.width = firstSpanWidth + 'px';
        animSpan();
    }
};



//*Position surlignage menu principale à l'affichage de la page
(function setUnderlinePosition() {
    const menuArray = [];
    const url = window.location.href;
    const urlCut = url.split('/');
    const page = urlCut[urlCut.length - 2];

    //*Get items text without accent and uppercase
    const itemsMenu = document.querySelectorAll('#menu-principal li a');
    itemsMenu.forEach(elem => {
        const string = elem.textContent;
        const stringWithoutAccent = string.normalize('NFD').replace(/[\u0300-\u036f]/g, "");
        const stringInLowercase = stringWithoutAccent.toLocaleLowerCase();
        menuArray.push(stringInLowercase);
    })

    //*Calcul de la position x de l'item correspondant à l'URL
    let childNode;
    const childMenuPosition = menuArray.indexOf(page);
    if (childMenuPosition < 0) {
        childNode = itemsMenu[0];
    } else {
        childNode = itemsMenu[childMenuPosition];
    }
    const childNodeXPosition = childNode.offsetLeft;
    spanPosition = childNodeXPosition;
    spanWidth = childNode.offsetWidth;
    addMenuUnderline(spanPosition, spanWidth);
})();



//*Animation surlignage menu principale
function animSpan() {
    const menu = document.querySelector('#menu-principal')
    const liMenu = document.querySelectorAll('#principale li a');

    liMenu.forEach(elem => {
        elem.addEventListener('mouseenter', () => {
            span.style.left = elem.offsetLeft + 'px';
            span.style.width = (elem.offsetWidth) + 'px';
        })
    });


    menu.addEventListener('mouseleave', () => {
        span.style.left = spanPosition + 'px';
        span.style.width = spanWidth + 'px';
    });
};


/**********************************************/

//*Ajout slide dans single.php
$(document).ready(function () {
    $('.blocks-gallery-grid').slick({
        adaptiveHeight: true,
        slidesToShow: 1,
        adaptiveHeight: true,
        responsive: [
            {
            breakpoint: 1000,
            settings: {
                arrows: false
            }
        }
        ]
    });
});