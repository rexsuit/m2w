;(function($){
    if (Modernizr.touch) {
        // show the close overlay button
        $(".close-overlay").removeClass("hidden");
        // handle the adding of hover class when clicked
        $(".porfilio-item").click(function (e) {
            if (!$(this).hasClass("hover")) {
                $(this).addClass("hover");
            }
        });
        // handle the closing of the overlay
        $(".close-overlay").click(function (e) {
            e.preventDefault();
            e.stopPropagation();
            if ($(this).closest(".porfilio-item").hasClass("hover")) {
                $(this).closest(".porfilio-item").removeClass("hover");
            }
        });
    } else {
        // handle the mouseenter functionality
        $(".porfilio-item").mouseenter(function () {
            $(this).addClass("hover");
        })
                // handle the mouseleave functionality
                .mouseleave(function () {
                    $(this).removeClass("hover");
                });
    }

    // use for portfolio sotring with masonry

    $portfolio = $('.masonry-items');
    $portfolio_selectors = $('.portfolio-filter > li > a');
    $portfolio_selectors_li = $('.portfolio-filter li');

    hashfilter = "*";
    if(location.hash!=""){
        var temphashfilter = "." + location.hash.substr(1);
        if (temphashfilter==".*")
        {
            temphashfilter="*";
        }

        $portfolio_selectors.each(function(){
                 if ($(this).attr("data-filter") == temphashfilter) {
                    $portfolio_selectors_li.removeClass('active');
                    $portfolio_selectors_li.find('a[data-filter="'+temphashfilter+'"]').parent('li').addClass("active");

                    var autoscrolltoelement = function(){
                        $("html, body").animate({
                         scrollTop: $('.portfolio-filter').parents('section').offset().top-60
                        });
                    };
                    setTimeout(autoscrolltoelement, 500);
                    hashfilter=temphashfilter;
                 }
             });        
    }
    
    

    $portfolio.imagesLoaded(function () {
        $portfolio.isotope({
            filter: hashfilter,
            itemSelector: 'li',
            layoutMode: 'masonry'
        });
    });

    // use for simple masonry ( for example home-photography.html page )

    $masonry_block = $('.masonry-block-items');
    $masonry_block.imagesLoaded(function () {
        $masonry_block.isotope({
            itemSelector: 'li',
            layoutMode: 'masonry'
        });
    });


    $portfolio_selectors.on('click', function () {
        $portfolio_selectors.parent().removeClass('active');
        $(this).parent().addClass('active');
        var selector = $(this).attr('data-filter');
        $portfolio.isotope({filter: selector});
       
        if (selector.substr(1)!="" && selector.substr(1)!="#")
        {
             location.hash = selector.substr(1);     
        }
        else
        {
            location.hash ="*";
        }
        return false;
    });

    $blog = $('.blog-masonry');
    $blog.imagesLoaded(function () {

        //ISOTOPE FUNCTION - FILTER PORTFOLIO FUNCTION
        $blog.isotope({
            itemSelector: '.blog-listing',
            layoutMode: 'masonry'
        });
    });

    $(window).resize(function () {
        setTimeout(function () {
            $portfolio.isotope('layout');
            $blog.isotope('layout');
            $masonry_block.isotope('layout');
        }, 500);
    });
})(jQuery);