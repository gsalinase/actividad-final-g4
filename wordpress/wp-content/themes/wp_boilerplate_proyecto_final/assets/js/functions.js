
var map;

function initMap() {
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -33.4289661, lng: -70.6060014},
          zoom: 15
        });
      }


$(document).ready(function(){

    
    var url = window.location; 
    var element = $('ul.sidebar-menu a').filter(function() {
    return this.href == url || url.href.indexOf(this.href) == 0; }).parent().addClass('active');
    if (element.is('li')) { 
         element.addClass('active').parent().parent('li').addClass('active');
     }
    
   
    // Portfolio & filter

    $(".filter-button").click(function(){

        var value = $(this).attr('data-filter');
        
        if(value == "all") {

            $('.filter').show('2000');

        }

        else {

            $(".filter").not('.'+value).hide('3000');

            $('.filter').filter('.'+value).show('3000'); 
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
        
        $(this).removeClass("active");
    }

    $(this).addClass("active");


    // Client Testimonial  

    $('#quote-carousel').carousel({

        pause: true, interval: 10000,
    });

     // Logo Slider

    $('#logo_slide').carousel({
        interval: 5000
    });



    

});