$('.owl-carousel-service').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        775:{
        	items:3
        },
        1000:{
            items:3
        }
    }
})



$(document).ready(function(){'use strict';
    var $portfolio_selectors = $('.portfolio-filter >li>a');
    var $portfolio = $('.portfolio-items');
    $portfolio.isotope({
        filter: '.4',
        itemSelector : '.portfolio-item',
        layoutMode : 'masonry',
        percentPosition: true,
        masonry: {
	    	//columnWidth: '.grid-sizer'

  		}
    });
    
    $portfolio_selectors.on('click', function(){
        $portfolio_selectors.removeClass('active');
        $(this).addClass('active');
        var selector = $(this).attr('data-filter');
        $portfolio.isotope({ filter: selector });
        return false;
    });
});


$('.owl-carousel-testi').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})


// var canvas = document.getElementById('canvas')
// 	var ctx = canvas.getContext('2d')
// 	canvas.width = innerWidth
// 	canvas.height = innerHeight

// 	var party = smokemachine(ctx, [14, 6.8,8.2])
// 	party.start() // start animating

// 	onmousemove = function (e) {
// 		var x = e.clientX
// 		var y = e.clientY
// 		var n = .5
// 		var t = Math.floor(Math.random() * 50) + 3800
// 		party.addsmoke(x, y, n, t)
// 	}

// 	setInterval(function(){
// 		party.addsmoke(innerWidth/2, innerHeight, 1)
// 	}, 100)

$('.owl-carousel-outlet').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:2
        }
    }
})

$(document).ready(function(){
        $("#testimonial-slider").owlCarousel({
            items:1,
            itemsDesktop:[1000,1],
            itemsDesktopSmall:[979,1],
            itemsTablet:[768,5],
            pagination:true,
            navigation:true,
            autoplay:true,
            autoplayHoverPause:true,
            slideSpeed:1000,
            singleItem:false,
            navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],

        });

    });


$(".modal").iziModal({
    closeButton:true,
    padding: 15,
    headerColor: '#b11403',
     width: 800,
});


$( function() {
    $( ".datepicker" ).datepicker();
} );



$(document).ready(function(){
     $("#myCarousel").carousel();
});