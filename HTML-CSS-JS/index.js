// зафиксировала шапку, когда просролена польше чем половина блока full-page
$(document).scroll(function() {
    if ($(document).width() < 1024)
        return false;

    if ($(document).scrollTop() > $('.full-page').height() / 2)
        $("header").addClass("fixed");
        
    else
        $("header").removeClass("fixed");

}); 

// кнопка по нажатию на которую, меня будет переносить вверх, на начало страницы. 
$(".up-btn").on("click", function() {
    $("html, body").animate({
        scrollTop: 0
    }, 'slow');
});


// Функция для открытия меню
function openMenu() {
    // Проверяем ширину экрана
    if (window.innerWidth <= 768) { 
        $("#hidden-menu").css("top", "0");
    } else {
        $("#hidden-menu").animate({
            "right": 0
        }, 500);
    }
}

// Функция для закрытия меню
function closeMenu() {
    // Проверяем ширину экрана
    if (window.innerWidth <= 768) { 
        $("#hidden-menu").css("top", "-100%");
    } else {
        $("#hidden-menu").animate({
            "right": "-300px"
        }, 200);
    }
}

// Бургер меню, открытие
$("#show-menu").on("click", function () {
    openMenu();
});

// Бургер меню, закрытие
$("#hidden-menu .close").on("click", function () {
    closeMenu();
});

// Добавляем обработчик изменения размера экрана для переключения логики открытия/закрытия
$(window).on("resize", function () {
    if (window.innerWidth > 768) { 
        closeMenu(); 
    }
});


// слайдер
$(document).ready(function(){
    
    if (window.innerWidth <= 768) { 
        $("#slider").slick({
            infinite: true,
            slidesToShow: 1, 
            slidesToScroll: 1, 
            prevArrow: '<div class="arrow-prew"> <i class="fa-solid fa-arrow-left"></i></div>',
            nextArrow: '<div class="arrow-next"> <i class="fa-solid fa-arrow-right"></i></div>'
        });
    } else {
        
        $("#slider").slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            prevArrow: '<div class="arrow-prew"> <i class="fa-solid fa-arrow-left"></i></div>',
            nextArrow: '<div class="arrow-next"> <i class="fa-solid fa-arrow-right"></i></div>'
        });
    }
});
