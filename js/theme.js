// js Document

// Created on   : 01/01/2024.
// Theme Name   : Homy-Real Estate HTML5 Template & Dashboard
// Version      : 1.0.
// Developed by : (me@heloshape.com) / (www.me.heloshape.com)


(function($) {
    "use strict";

      //-------------- Click event to scroll to top
      $(window).on('scroll', function (){
        if ($(this).scrollTop() > 200) {
          $('.scroll-top').fadeIn();
        } else {
          $('.scroll-top').fadeOut();
        }
      });
      $('.scroll-top').on('click', function() {
        $('html, body').animate({scrollTop : 0});
        return false;
      });

      // --------------------- Add .active class to current navigation based on URL
      var pgurl = window.location.href.substr(window.location.href.lastIndexOf("https://html.creativegigstf.com/")+1);
      $(".navbar-nav > li  a").each(function(){
      if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
      $(this).addClass("active");
      // $(this).parent("li").addClass("active");
      })

      // ----------------------------- Select Function
      if($(".nice-select").length) {
        $('.nice-select').niceSelect();
      }

      
      // ----------------------------- Lazy Load
        if($(".lazy-img").length) {
          $('.lazy-img').Lazy({
            effect: 'fadeIn',
            threshold: 300
          });
        }


        // ----------------------------- Counter Function
        var timer = $('.counter');
        if(timer.length) {
          $('.counter').counterUp({
            delay: 10,
            time: 1200,
          });
        }

        // ------------------------ Navigation Scroll
        $(window).on('scroll', function (){   
          var sticky = $('.sticky-menu'),
          scroll = $(window).scrollTop();
          if (scroll >= 180) sticky.addClass('fixed');
          else sticky.removeClass('fixed');

        });


      // -------------------- Remove Placeholder When Focus Or Click
        $("input,textarea").each( function(){
            $(this).data('holder',$(this).attr('placeholder'));
            $(this).on('focusin', function() {
                $(this).attr('placeholder','');
            });
            $(this).on('focusout', function() {
                $(this).attr('placeholder',$(this).data('holder'));
            });     
        });

        // ---------------------- Filter More Review Button
        if($(".load-more-review").length) { 
          $(".load-more-review").on("click", function() {
            let $more = $(this).siblings('.review-wrapper').toggleClass("show");
            
            if ($more.hasClass('show')) {
              $(this).html('SHow less <i class="bi bi-arrow-up-right"></i>');
            } else {
              $(this).html('VIEW ALL 120 REVIEWS <i class="bi bi-arrow-up-right"></i>');
            }
          });
        }



        // ------------------------ Hero Slider One
        if($(".hero-slider-one").length) {
          $('.hero-slider-one').slick({
              dots: false,
              arrows: false,
              lazyLoad: 'ondemand',
              centerPadding: '0px',
              slidesToShow: 1,
              slidesToScroll: 1,
              autoplay: true,
              fade: true,
              autoplaySpeed: 7000,
            });
        }



        // ------------------------ Feedback Slider One
        if($(".feedback-slider-one").length) {
          $('.feedback-slider-one').slick({
              dots: true,
              arrows: false,
              lazyLoad: 'ondemand',
              centerPadding: '0px',
              slidesToShow: 1,
              slidesToScroll: 1,
              fade: true,
              autoplay: true,
              autoplaySpeed: 300000
            });
        }

        // ------------------------ Feedback Slider Two
        if($(".feedback-slider-two").length) {
          $('.feedback-slider-two').slick({
              dots: false,
              arrows: true,
              prevArrow: $('.prev_c'),
              nextArrow: $('.next_c'),
              lazyLoad: 'ondemand',
              centerPadding: '0px',
              slidesToShow: 3,
              slidesToScroll: 1,
              centerMode: true,
              autoplay: true,
              autoplaySpeed: 3000,
              responsive: [
                {
                  breakpoint: 1200,
                  settings: {
                    slidesToShow: 2
                  }
                },
                {
                  breakpoint: 768,
                  settings: {
                    slidesToShow: 1
                  }
                }
              ]
            });
        }


        // ------------------------ Feedback Slider Three
        if($(".feedback-slider-three").length) {
          $('.feedback-slider-three').slick({
              dots: true,
              arrows: false,
              lazyLoad: 'ondemand',
              centerPadding: '0px',
              slidesToShow: 2,
              slidesToScroll: 1,
              centerMode: true,
              autoplay: true,
              autoplaySpeed: 3000,
              responsive: [
                {
                  breakpoint: 992,
                  settings: {
                    slidesToShow: 1
                  }
                }
              ]
            });
        }
        


        // ------------------------ Location Slider
        if($(".property-location-slider-one").length) {
          $('.property-location-slider-one').slick({
              dots: false,
              arrows: true,
              prevArrow: $('.prev_a'),
              nextArrow: $('.next_a'),
              lazyLoad: 'ondemand',
              centerPadding: '0px',
              slidesToShow: 4,
              slidesToScroll: 1,
              centerMode: true,
              autoplay: true,
              autoplaySpeed: 3000,
              responsive: [
                {
                  breakpoint: 1200,
                  settings: {
                    slidesToShow: 3
                  }
                },
                {
                  breakpoint: 992,
                  settings: {
                    slidesToShow: 2
                  }
                },
                {
                  breakpoint: 500,
                  settings: {
                    slidesToShow: 1
                  }
                }
              ]
            });
        }


        // ------------------------ Listing Slider
        if($(".listing-slider-one").length) {
          $('.listing-slider-one').slick({
              dots: false,
              arrows: true,
              prevArrow: $('.prev_b'),
              nextArrow: $('.next_b'),
              lazyLoad: 'ondemand',
              centerPadding: '0px',
              slidesToShow: 4,
              slidesToScroll: 4,
              autoplay: true,
              autoplaySpeed: 3000,
              responsive: [
                {
                  breakpoint: 1400,
                  settings: {
                    slidesToShow: 3
                  }
                },
                {
                  breakpoint: 992,
                  settings: {
                    slidesToShow: 2
                  }
                },
                {
                  breakpoint: 768,
                  settings: {
                    slidesToShow: 1
                  }
                }
              ]
            });
        }

        // ------------------------ Listing Details Page Slider
        if($(".media-slider-two").length) {
          $('.media-slider-two').slick({
              dots: false,
              arrows: true,
              prevArrow: $('.prev_c'),
              nextArrow: $('.next_c'),
              lazyLoad: 'ondemand',
              centerPadding: '0px',
              slidesToShow: 1,
              slidesToScroll: 1,
              centerMode:true,
              autoplay: true,
              autoplaySpeed: 3000,
            });
        }

        // ------------------------ Listing Slider
        if($(".similar-listing-slider-one").length) {
          $('.similar-listing-slider-one').slick({
              dots: true,
              arrows: false,
              lazyLoad: 'ondemand',
              centerPadding: '0px',
              slidesToShow: 3,
              slidesToScroll: 2,
              autoplay: true,
              autoplaySpeed: 3000,
              responsive: [
                {
                  breakpoint: 1400,
                  settings: {
                    slidesToShow: 2
                  }
                },
                {
                  breakpoint: 1200,
                  settings: {
                    slidesToShow: 3
                  }
                },
                {
                  breakpoint: 992,
                  settings: {
                    slidesToShow: 2
                  }
                },{
                  breakpoint: 768,
                  settings: {
                    slidesToShow: 1
                  }
                }
              ]
            });
        }

        // ------------------------ Listing Slider
        if($(".similar-listing-slider-two").length) {
          $('.similar-listing-slider-two').slick({
              dots: true,
              arrows: false,
              lazyLoad: 'ondemand',
              centerPadding: '0px',
              slidesToShow: 2,
              slidesToScroll: 2,
              autoplay: true,
              autoplaySpeed: 3000,
              responsive: [
                {
                  breakpoint: 768,
                  settings: {
                    slidesToShow: 1
                  }
                }
              ]
            });
        }


        // ------------------------ Agent Slider One
        if($(".agent-slider-one").length) {
          $('.agent-slider-one').slick({
              dots: true,
              arrows: false,
              lazyLoad: 'ondemand',
              centerPadding: '0px',
              slidesToShow: 4,
              slidesToScroll: 2,
              autoplay: true,
              autoplaySpeed: 3000,
              responsive: [
                {
                  breakpoint: 1200,
                  settings: {
                    slidesToShow: 3
                  }
                },
                {
                  breakpoint: 768,
                  settings: {
                    slidesToShow: 2
                  }
                },
                {
                  breakpoint: 576,
                  settings: {
                    slidesToShow: 1
                  }
                }
              ]
            });
        }


        // ------------------------ Partner Slider One
        if($(".partner-logo-one").length) {
          $('.partner-logo-one').slick({
              dots: false,
              arrows: false,
              lazyLoad: 'ondemand',
              centerPadding: '0px',
              slidesToShow: 6,
              slidesToScroll: 1,
              autoplay: true,
              autoplaySpeed: 3500,
              responsive: [
                {
                  breakpoint: 1200,
                  settings: {
                    slidesToShow: 4
                  }
                },
                {
                  breakpoint: 768,
                  settings: {
                    slidesToShow: 3
                  }
                },
                {
                  breakpoint: 576,
                  settings: {
                    slidesToShow: 2
                  }
                }
              ]
            });
        }

        // ------------------------ Partner Slider Two
        if($(".partner-logo-two").length) {
          $('.partner-logo-two').slick({
              dots: false,
              arrows: false,
              lazyLoad: 'ondemand',
              centerPadding: '0px',
              slidesToShow: 5,
              slidesToScroll: 1,
              autoplay: true,
              autoplaySpeed: 3500,
              responsive: [
                {
                  breakpoint: 1400,
                  settings: {
                    slidesToShow: 4
                  }
                },
                {
                  breakpoint: 768,
                  settings: {
                    slidesToShow: 3
                  }
                },
                {
                  breakpoint: 576,
                  settings: {
                    slidesToShow: 2
                  }
                }
              ]
            });
        }






        // --------------------------------- Contact Form
          // init the validator
          // validator files are included in the download package
          // otherwise download from http://1000hz.github.io/bootstrap-validator

          if($("#contact-form").length) {
            $('#contact-form').validator();
            // when the form is submitted
            $('#contact-form').on('submit', function (e) {

                // if the validator does not prevent form submit
                if (!e.isDefaultPrevented()) {
                    var url = "inc/contact.html";

                    // POST values in the background the the script URL
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: $(this).serialize(),
                        success: function (data)
                        {
                            // data = JSON object that contact.php returns

                            // we recieve the type of the message: success x danger and apply it to the
                            var messageAlert = 'alert-' + data.type;
                            var messageText = data.message;

                            // let's compose Bootstrap alert box HTML
                            var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';

                            // If we have messageAlert and messageText
                            if (messageAlert && messageText) {
                                // inject the alert to .messages div in our form
                                $('#contact-form').find('.messages').html(alertBox);
                                // empty the form
                                $('#contact-form')[0].reset();
                            }
                        }
                    });
                    return false;
                }
            });
          }

          // ------------------------ Password Toggler
          if($(".user-data-form").length) {
            $(".passVicon").on('click', function() {
              $(".passVicon").toggleClass("eye-slash");
              var input = $(".pass_log_id");
              if (input.attr("type") === "password") {
                input.attr("type", "text");
              } else {
                input.attr("type", "password");
              }

            });
          }

          // ----------------------- Active Tooltip
          var toolTip = $ ("[data-bs-toggle='tooltip']");
          if(toolTip.length) {
            toolTip.each(function() {
              new bootstrap.Tooltip(this);
            });
          }

          // -------------------------- Dashboard Mobile Sidebar
          if($(".dash-mobile-nav-toggler").length) {
            $('.dash-mobile-nav-toggler').on('click', function(){
              $(".dash-aside-navbar").addClass("show");
            });
            $('.dash-aside-navbar .close-btn').on('click', function(){
              $(".dash-aside-navbar").removeClass("show");
            });
          }
      

    
$(window).on ('load', function (){ // makes sure the whole site is loaded

// -------------------- Site Preloader
        $('#ctn-preloader').fadeOut(); // will first fade out the loading animation
        $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
        $('body').delay(350).css({'overflow':'visible'});



// ------------------------------- Scroll Animation
          var wow = new WOW(
            {
              boxClass:     'wow',      // animated element css class (default is wow)
              animateClass: 'animated', // animation css class (default is animated)
              offset:       0,          // distance to the element when triggering the animation (default is 0)
              mobile:       true,       // trigger animations on mobile devices (default is true)
              live:         true,       // act on asynchronously loaded content (default is true)
            }
          );
          wow.init();
        
// ------------------------------------- Fancybox
        var fancy = $ ("[data-fancybox]");
        if(fancy.length) {
          Fancybox.bind("[data-fancybox]", {
            // Your custom options
          });
        }




// ----------------------------- isotop gallery
        if ($("#isotop-gallery-wrapper").length) {
            var $grid = $('#isotop-gallery-wrapper').isotope({
              // options
              itemSelector: '.isotop-item',
              percentPosition: true,
              masonry: {
                // use element for option
                columnWidth: '.grid-sizer'
              }

            });

            // filter items on button click
            $('.isotop-menu-wrapper').on( 'click', 'li', function() {
              var filterValue = $(this).attr('data-filter');
              $grid.isotope({ filter: filterValue });
            });

            // change is-checked class on buttons
            $('.isotop-menu-wrapper').each( function( i, buttonGroup ) {
                var $buttonGroup = $( buttonGroup );
                $buttonGroup.on( 'click', 'li', function() {
                  $buttonGroup.find('.is-checked').removeClass('is-checked');
                  $( this ).addClass('is-checked');
                });
            });
        }

// ------------------------------------- Chart
      var chartP = $ ("#property-chart");
      if(chartP.length) {
        new Chart(chartP, {
          type: 'bar',
          data: {
            labels: ['Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
            datasets: [{
              label: 'Total View',
              data: [20000, 12000, 6000, 16000, 10000, 5000, 11000],
              backgroundColor: [
                'rgba(255, 102, 37, 1)',
                'rgba(245, 236, 229, 1)',
                'rgba(255, 102, 37, 1)',
                'rgba(245, 236, 229, 1)',
                'rgba(255, 102, 37, 1)',
                'rgba(245, 236, 229, 1)',
                'rgba(255, 102, 37, 1)',
                'rgba(245, 236, 229, 1)'
              ],
              borderWidth: 1,
              borderRadius:30,
              barThickness:15
            }]
          },
          options: {
            animation: false,
            scales: {
              y: {
                beginAtZero: true,
                grid: {
                  display: false
                }
              },
              x: {
                grid: {
                  display: false
                }
              }
            }
          }
        });
      }


    });  //End On Load Function


    // Range Slider
    if($(".price-ranger").length) {
      const rangeInput = document.querySelectorAll(".range-input input"),
        priceInput = document.querySelectorAll(".price-input input"),
        range = document.querySelector(".slider .progress");
      let priceGap = 30;

      priceInput.forEach((input) => {
        input.addEventListener("input", (e) => {
          let minPrice = parseInt(priceInput[0].value),
            maxPrice = parseInt(priceInput[1].value);

          if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
            if (e.target.className === "input-min") {
              rangeInput[0].value = minPrice;
              range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
            } else {
              rangeInput[1].value = maxPrice;
              range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
            }
          }
        });
      });

      rangeInput.forEach((input) => {
        input.addEventListener("input", (e) => {
          let minVal = parseInt(rangeInput[0].value),
            maxVal = parseInt(rangeInput[1].value);

          if (maxVal - minVal < priceGap) {
            if (e.target.className === "range-min") {
              rangeInput[0].value = maxVal - priceGap;
            } else {
              rangeInput[1].value = minVal + priceGap;
            }
          } else {
            priceInput[0].value = minVal;
            priceInput[1].value = maxVal;
            range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
            range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
          }
        });
      });
    }

})(jQuery);