/******************************************* Owl Carousel **************************************/
$('.news .owl-carousel').owlCarousel({
    rtl:true,
    loop:true,
    margin:20,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        800:{
            items:2,
            nav:false
        },
        1000:{
            items:3,
            nav:true,
            loop:false
        }
    }
})
$('.team .owl-carousel').owlCarousel({
    rtl:true,
    items:1,
    loop:true,
    margin:20,
    nav:true,
    responsiveClass:true,
})
$('.services_details_page .owl-carousel').owlCarousel({
    rtl:true,
    loop:true,
    margin:20,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:false
        },
        800:{
            items:3,
            nav:false
        },
        1000:{
            items:4,
            nav:true,
            loop:false
        }
    }
})
$('[aria-label="Next"]').html('<i class="fas fa-arrow-left"></i>');
$('[aria-label="Previous"]').html('<i class="fas fa-arrow-right"></i>');
/******************************************* controlling sidenav *******************************/ 
$("#open-nav").click(function(){
    $("#background_overlay").fadeIn(200);
    $('#background_overlay').addClass('activeBG');
    $("#sidenavResponsive").css("right", "0px");
});
$('#sidenavResponsive').find('#close').on('click',function(){
    $('#sidenavResponsive').css('right', '-300px');
    $('#background_overlay').fadeOut(500);
    $('#background_overlay').removeClass('activeBG');
    $('#logo').css('display', 'block');
    $('#close').css('display', 'block');
});
// close modal on click outside at anywhere

$(document).on('click',function(e){
        if( !(($(e.target).closest("#sidenavResponsive").length > 0 ) || ($(e.target).closest("#open-nav").length > 0))){
            $('#sidenavResponsive').css('right', '-300px');
            $('#background_overlay').removeClass('activeBG');
            $('#background_overlay').fadeOut(500);
        }
});
/******************************************* Search Filter *************************************/
$(document).ready(function() {
    $('#searchButton').on('click', function() {
        var searchQuery = $('#search_input').val().toLowerCase();
        
        $('.content').children('div').each(function() {
            var search_title = $(this).find('.search_title').text().toLowerCase();
            if (search_title.indexOf(searchQuery) !== -1) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });
});
/******************************************* Slice Paragraph ***********************************/
$(document).ready(function() {
    var paragraph_content = $('.paragraph_content');
    var originalText = paragraph_content.text();
    var wordsToShow = 27; 
    function showWords(text, numWords) {
        var words = text.split(' ');
        var truncatedText = words.slice(0, numWords).join(' ');
        return truncatedText;
    }
    paragraph_content.text(showWords(originalText, wordsToShow));
    $('#hideButton').hide();

    $('#hideButton').on('click', function() {
        paragraph_content.text(showWords(originalText, wordsToShow));
        $('#showButton').show();
        $('#hideButton').hide();
    });
    
    $('#showButton').on('click', function() {
        paragraph_content.text(originalText);
        $('#hideButton').show();
        $('#showButton').hide();
    });
});


