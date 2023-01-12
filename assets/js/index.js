$(function () {
    // fixed navbar changing collor when scrolled
    $(document).scroll(function () {
        var $nav = $('.navbar-fixed-top');
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });

    // smooth scrolling in href anchors
    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();

        $('html, body').animate(
            {
                scrollTop: $($.attr(this, 'href')).offset().top,
            },
            500
        );
    });
});
$(document).ready(function () {
    console.log('oi')
    // let currentSlide = 1;
    let rastrekSection = false


    // $('#next').click(function () {
    //     nextSlide(currentSlide);
    // });
    // $('#prev').click(function () {
    //     prevSlide(currentSlide);
    // });
    // const interval = setInterval(function () {
    //     nextSlide()
    // }, 5000);


    //  todo: refactor this mess lol
    $('#section-navbar-rastrek').click(function () {

        if (!rastrekSection) {
            setRastrekSection();
            rastrekSection = true
        }
        

    });

    $('#select-section-rastrek').click(function () {

        if (!rastrekSection) {
            setRastrekSection();
            rastrekSection = true
        }
       

    });
    $('#rastrek-logo-white').click(function () {

        if (!rastrekSection) {
            setRastrekSection();
            rastrekSection = true
        }
        

    });




    $('#select-section-licenciamento').click(function () {
        isRastrekActive = $('#select-section-rastrek').hasClass('active');
        if (isRastrekActive) {
            setFinanciamentoSection();
            rastrekSection = false
        }
       

    });
    $('#section-navbar-licenciamento').click(function () {
        isRastrekActive = $('#select-section-rastrek').hasClass('active');
        if (isRastrekActive) {
            setFinanciamentoSection();
            rastrekSection = false
        }
        

    });
    $('#total-logo-white').click(function () {
        isRastrekActive = $('#select-section-rastrek').hasClass('active');
        if (isRastrekActive) {
            setFinanciamentoSection();
            rastrekSection = false
        }
        

    });








    // COMMENTED FOR NEW ONE

    // function nextSlide() {
    //     $('#banner' + currentSlide).removeClass('active');
    //     $('#banner' + currentSlide).addClass('deactive');
    //     console.log(currentSlide);
    //     if (currentSlide >= 3) {
    //         currentSlide = 1;
    //     } else {
    //         currentSlide++;
    //     }
    //     $('#banner' + currentSlide).removeClass('deactive');
    //     $('#banner' + currentSlide).addClass('active');
    // }
    // function prevSlide() {
    //     $('#banner' + currentSlide).removeClass('active');
    //     $('#banner' + currentSlide).addClass('deactive');
    //     if (currentSlide <= 1) {
    //         currentSlide = 3;
    //     } else {
    //         currentSlide--;
    //     }
    //     $('#banner' + currentSlide).removeClass('deactive');
    //     $('#banner' + currentSlide).addClass('active');
    // }

});


function setRastrekSection() {
    // add and remove button classes
    $('#select-section-rastrek').addClass('active');
    $('#section-navbar-rastrek').addClass('active');


    $('#select-section-licenciamento').removeClass('active');
    $('#section-navbar-licenciamento').removeClass('active');



    $("#section-licenciamento").css("display", "none")


    // set to section to visible
    $("#section-rastrek").fadeIn(600);
    // scroll to section
    $('html, body').animate({
        scrollTop: $("#section-rastrek").offset().top
    }, 800);




}
function setFinanciamentoSection() {
    $('#select-section-licenciamento').addClass('active');
    $('#section-navbar-licenciamento').addClass('active');


    $('#select-section-rastrek').removeClass('active');
    $('#section-navbar-rastrek').removeClass('active');

    $("#section-rastrek").css("display", "none")



    // set to section to visible
    $("#section-licenciamento").fadeIn(600);
    // scroll to section
    $('html, body').animate({
        scrollTop: $("#section-licenciamento").offset().top
    }, 800);


}