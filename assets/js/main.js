/* ---------------------------------------------------------------------
Global Js
Target Browsers: All
------------------------------------------------------------------------ */

var FX = (function(FX, $) {

    if ($('.back-to-top').length) {
    var scrollTrigger = 200, // px
        backToTop = function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('.back-to-top').addClass('back-to-top-show');
            } else {
                $('.back-to-top').removeClass('back-to-top-show');
            }
        };
    backToTop();
    $(window).on('scroll', function () {
        backToTop();
    });
    $('.back-to-top').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
}

    /**
     * Doc Ready
     */

    $(function() {
        FX.General.init(); // For super general or super short scripts
		FX.ImAHuman.init(); // Enable by default
        FX.Affix.init();
        FX.Click.init();
		FX.MobileMenu.init();
        FX.Parallax.init();
        FX.SlickSlider.init();
        FX.Social.init();
		FX.Tabs.init();
    });

    $(window).load(function() {
         FX.SmoothAnchors.init();

    });


    /**
     * Example Code Block - This should be removed
     * @type {Object}
     */
    FX.CodeBlock = {
    	init: function() {

    	}
    };

    /**
	 * General functionality â€” ideal for one-liners or super-duper short code blocks
	 */
	FX.General = {
		init: function() {
			this.bind();
		},

		bind: function() {

			// Selectric
			$('select').selectric({
				arrowButtonMarkup: '<b class="button"></b>'
			});
			
			// IE CSS object-fit support
			//objectFitImages();

			// TODO: Add additional small scripts below

		}
    },
    
    /**
     * Example Code Block - This should be removed
     * @type {Object}
     */
    
    FX.Click = {
    	init: function() {
			$(".top-cross").click(function(){
			$(".top-header").slideToggle();
            })		
            
            $(".search-icon").click(function(){
            $(".search-div").slideToggle();
            })
		}
    };
	
	
	
	/**
     * Slider/Carousel
     * @type {Object}
     */
    FX.SlickSlider = {
        init: function() {
            $(".banner-slider").slick({
                arrows: false,
                dots: true,
                autoplay: false,
				autoplaySpeed: 2000,
			});
			$('.item-slide').slick({
				infinite: true,
				speed: 300,
				centerMode: true,
				slidesToShow: 7,
				centerPadding: '0',
				slidesToScroll: 1,
				autoplay: false,
				dots: false,
				arrows: false,
				autoplaySpeed: 4000,
				responsive: [
				  {
					breakpoint: 1366,
					settings: {
					  slidesToShow: 5,
                      slidesToScroll:1,
                      centerPadding: '10%'
					}
                  },
                  {
					breakpoint: 1199,
					settings: {
					  slidesToShow: 4,
                      slidesToScroll:1,
                      centerPadding: '10%'
					}
                  },
                  
                  {
					breakpoint: 1025,
					settings: {
					  slidesToShow: 3,
                      slidesToScroll:1,
                      centerPadding: '10%'
					}
                  },
                  
                  {
					breakpoint: 768,
					settings: {
					  slidesToShow: 2,
                      slidesToScroll:1,
                      centerPadding: '15%'
					}
				  },

				  {
					breakpoint: 600,
					settings: {
					  slidesToShow: 1,
                      slidesToScroll: 1,
                      centerPadding: '25%'
					}
				  }
			  
				]
              });
              
              $('.related-procuct-slider').slick({
                dots: false,
                infinite: false,
                arrows: false,
                variableWidth: true
              });
              $('.step-list').slick({
                dots: false,
                infinite: true,
                arrows: false,
                variableWidth: true
              });
              
              $('.pattern-slide').slick({
                dots: true,
                infinite: true,
                arrows: false,
                variableWidth: true
              });
              
              $('.client-slider').slick({
                dots: false,
                infinite: true,
                arrows: false,
                variableWidth: true
              });

              $('.mobile-category-slider').slick({
                dots: false,
                infinite: true,
                arrows: false,
                variableWidth: true
              });


            $('.trustpilot-slider').slick({
				infinite: true,
				speed: 300,
				slidesToShow: 2,
				slidesToScroll: 1,
				dots: false,
				arrows: true,
				responsive: [
				  {
					breakpoint: 767,
					settings: {
					  slidesToShow: 1,
					  slidesToScroll: 1,
					  centerPadding: '15%',
					}
				  }
			  
				]
              });
              
              $(".review-slider").slick({
                arrows: true,
                dots: true,
                autoplay: false,
				autoplaySpeed: 2000,
            });
            
            $('.slider-for').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: true,
                fade: true,
                asNavFor: '.slider-nav'
            });
            $('.slider-nav').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                asNavFor: '.slider-for',
                dots: false,
                focusOnSelect: true,
                vertical: true,
            });
        
            $('a[data-slide]').click(function(e) {
                e.preventDefault();
                var slideno = $(this).data('slide');
                $('.slider-nav').slick('slickGoTo', slideno - 1);
            });
			/* Preloader */
			$('.js-slider-has-preloader').on('init', function( event, slick ) {
				$('.js-slider-has-preloader').addClass('js-slider-has-preloader-init');
			});
			
        }
    };
	

    
    

    
    
    /**
     * Mobile menu script for opening/closing menu and sub menus
     * @type {Object}
     */
    FX.MobileMenu = {
		init: function() {
			$('.nav-primary li.menu-item-has-children > a').after('<span class="sub-menu-toggle icon-arrow-down "></span>');

			$('.sub-menu-toggle').click( function() {
				var $this = $(this),
					$parent = $this.closest("li"),
					$wrap = $parent.find("> .sub-menu");
				$wrap.toggleClass("js-toggled");
				$this.toggleClass('js-clicked');
				$this.toggleClass("js-toggled");
			});

			$('.icon-menu').click( function() {
                $(this).toggleClass('icon-close');
                $('.page-header .nav-primary').fadeToggle();
            });

            $('.icon-cross').click( function() {
                $(this).toggleClass('icon-close');
                $('.page-header .nav-primary').fadeToggle();
            });
		}
	};
    

    /**
     * Force External Links to open in new window.
     * @type {Object}
     */
    FX.ExternalLinks = {
        init: function() {
            var siteUrlBase = FX.siteurl.replace(/^https?:\/\/((w){3})?/,'')

            $('a[href*="//"]:not([href*="'+siteUrlBase+'"])')
                .not('.ignore-external') // ignore class for excluding
                .addClass('external')
                .attr('target', '_blank')
                .attr('rel', 'noopener');
        }
    };
    
    
    /**
     * Responsive Tables
     * @type {Object}
     */
    FX.ResponsiveTables = {
        init: function() {
            
            // Add wrappers to table
            // - change ".page-content table" to appropriate class per project
            $( ".page-content table" ).wrap( "<div class='table-wrap-outer' style='position: relative'><div class='table-wrap-inner' style='overflow: auto'></div></div>" );
                                    
            
            // Make table draggable
            var mx = 0;

            $(".table-wrap-inner").on({
                mousemove: function(e) {
                    var mx2 = e.pageX - this.offsetLeft;
                    if(mx) this.scrollLeft = this.sx + mx - mx2;
                },
                mousedown: function(e) {
                    this.sx = this.scrollLeft;
                    mx = e.pageX - this.offsetLeft;
                }
            });

            $(document).on("mouseup", function(){
                mx = 0;
            });
            
            
            // Add class if table is wider than parent
            $('.table-wrap-outer').find('.table-wrap-inner table').each(function() {
                var $table = $(this),
                $table_outer = $table.closest('.table-wrap-outer');
                if ($table.width() > $table_outer.width()) {
                    $table_outer.addClass('js-table-is-overflowing');
                    // - change ".page-content table" to appropriate class per project
                    $( ".page-content table" ).before( "<div class='js-table-fade' style='position: absolute; right: 0; top: 0; height: 100%; width: 40px; background: -moz-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%); background: -webkit-linear-gradient(left, rgba(255,255,255,0) 0%,rgba(255,255,255,1) 100%); background: linear-gradient(to right, rgba(255,255,255,0) 0%,rgba(255,255,255,1) 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00ffffff', endColorstr='#ffffff',GradientType=1; )'></div>" );
                }
            });
            
        }
    };


    /**
     * Custom Social Share icons open windows
     * Generate URLs, place in a tag and use class - example: https://github.com/bradvin/social-share-urls
     * @type {Object}
     */
    FX.Social = {
        init: function() {
            $(".js-social-share").on("click", this.open);
        },

        open: function(event) {
          event.preventDefault();

          FX.Social.windowPopup($(this).attr("href"), 500, 300);
        },

        windowPopup: function (url, width, height) {
            var left = (screen.width / 2) - (width / 2),
                top = (screen.height / 2) - (height / 2);

            window.open(
                url,
                "",
                "menubar=no,toolbar=no,resizable=yes,scrollbars=yes,width=" + width + ",height=" + height + ",top=" + top + ",left=" + left
            );
        }
    };

    /**
     * ImAHuman
     * Hidden Captchas for forms
     * @type {Object}
     */
    FX.ImAHuman = {
        num: "0xFF9481",
        forms: void 0,

        init: function() {
            this.setup();
        },

        setup: function() {
            this.forms = document.getElementsByTagName("form");
            this.bind();
        },

        bind: function() {
            for (var i = 0; this.forms.length > i; i++) {
                $(this.forms[i]).on("focus click", this.markAsHuman);
            }
        },

        markAsHuman: function() {
            $(this).find('.imahuman, [name="imahuman"]').attr("value", parseInt(FX.ImAHuman.num, 16));
        }
    };


    /**
     * Affix
     * Fixes sticky items on scroll
     * @type {Object}
     */
    FX.Affix = {
		init: function() {
            this.windowHeight = $(window).height();
            this.bind();
        },

        bind: function(e) {
            $(window).on('scroll', this.scroll);
            $(window).on('resize', this.updateWindowHeight);
        },
		
		scroll:function(){ 
			var fromTopPx = 200; 
			var scrolledFromtop = $(window).scrollTop(); 
			if(scrolledFromtop > 150){ $('.page-header').addClass('hideheader'); }
			else{ $('.page-header').removeClass('hideheader'); } 
			if(scrolledFromtop > fromTopPx){ $('.page-header').addClass('js-scrolled'); $('.masthead').addClass('scrolled'); $('.masthead-inner').addClass('scrolled'); }
			else{ $('.page-header').removeClass('js-scrolled'); $('.masthead').removeClass('scrolled'); $('.masthead-inner').removeClass('scrolled'); } },
		};



    /**
     * FX.Parallax
     * Parallax effect for images
     * @type {Object}
     */
    FX.Parallax = {
        init: function() {
            this.bind();
        },

        bind: function() {
            $(window).scroll(this.scroll);
        },

        scroll: function(e) {
            $('.js-parallax').each(function(){

                var $this   = $(this),
                    $speed  = $this.data('speed') || 6,
                    $window = $(window),
                    yPos    = -($window.scrollTop() / $speed),
                    coords  = 'center '+ yPos + 'px';

                $this.css({ backgroundPosition: coords });

            });
        }
    };



    /**
     * FX.SmoothAnchors
     * Smoothly Scroll to Anchor ID
     * @type {Object}
     */
    FX.SmoothAnchors = {
        init: function() {
            this.hash = window.location.hash;

            if ( this.hash != '' ) {
                this.scrollToSmooth(this.hash);
            }

            this.bind();
        },

        bind: function() {
            $('#back-to-top a[href^="#"]').on('click', $.proxy(this.onClick, this));
        },

        onClick: function(event) {
            event.preventDefault;

            var target = $(event.currentTarget).attr('href');

            this.scrollToSmooth(target);
        },

        scrollToSmooth: function(target) {
            var $target = $( target );
            $target = ($target.length) ? $target : $( this.hash );

            var headerHeight = 0; // TODO: if using sticky header change 0 to
                                  // $('#page-header').outerHeight(true)

            if ($target.length)
            {
                var targetOffset = $target.offset().top - headerHeight;
                $('html,body').animate({scrollTop: targetOffset}, 600);

                return false;
            }
        }
    };



    /**
     * Tab Content
     * @type {Object}
     */
     
    /* HTML Formatting should follow this basic pattern:
    
    <ul class=“js-tabs”>
	    <li><a href=“#tab-content-1”>Tab</a></li>
	    <li><a href=“#tab-content-2”>Tab</a></li>
	</ul>
	
	<div id="tab-content-1">
	<!-- content -->
	</div>
	
	<div id="tab-content-2">
	<!-- content -->
	</div>
	*/

    FX.Tabs = {
        init: function() {

            $(document).ready(function(){
                $(".accordion h4").eq().addClass("active");
                $(".accordion-content").eq().show();
                $(".accordion h4").click(function(){
                    $(this).next(".accordion-content").slideToggle("fast")
                    .siblings(".accordion-content:visible").slideUp("fast");
                    $(this).toggleClass("active");
                    $(this).siblings("h4").removeClass("active");
                });
            });

            $(document).ready(function() {
                $(".sign-tab-content").hide();
                $(".sign-in li:last").addClass("active").show();
                $(".sign-tab-content:last").show(); 
                $(".sign-in li").click(function() {
                    $(".sign-in li").removeClass("active"); 
                    $(this).addClass("active"); 
                    $(".sign-tab-content").hide(); 
                    var activeTab = $(this).find("a").attr("href"); 
                    $(activeTab).fadeIn(); 
                    return false;
                });
            });

            tabControl();

var resizeTimer;
$(window).on('resize', function(e) {
  clearTimeout(resizeTimer);
  resizeTimer = setTimeout(function() {
    tabControl();
  }, 250);
});


function tabControl() {
  var tabs = $('.tabbed-content').find('.tabs');
  if(tabs.is(':visible')) {
    tabs.find('a').on('click', function(event) {
      event.preventDefault();
      var target = $(this).attr('href'),
          tabs = $(this).parents('.tabs'),
          buttons = tabs.find('a'),
          item = tabs.parents('.tabbed-content').find('.item');
      buttons.removeClass('active');
      item.removeClass('active');
      $(this).addClass('active');
      $(target).addClass('active');
    });
  } else {
    $('.item').on('click', function() {
      var container = $(this).parents('.tabbed-content'),
          currId = $(this).attr('id'),
          items = container.find('.item');
      container.find('.tabs a').removeClass('active');
      items.removeClass('active');
      $(this).addClass('active');
      container.find('.tabs a[href$="#'+ currId +'"]').addClass('active');
    });
  } 
}

            $('.js-tabs').on('click touchstart', 'a', this.switchTab)
        },

        switchTab: function(event) {
            event.preventDefault();

            var $this = $(this),
                $tab  = $($this.attr('href'));

            $this.parent()
                 .addClass('active')
                 .siblings()
                 .removeClass('active');

            $tab.addClass('active')
                .siblings()
                .removeClass('active');
        }

        
    };

    return FX;
}(FX || {}, jQuery));


jQuery(document).ready(function($){
	//open/close lateral filter
	$('.cd-filter-trigger').on('click', function(){
		triggerFilter(true);
	});
	$('.cd-filter .cd-close').on('click', function(){
		triggerFilter(false);
	});

	function triggerFilter($bool) {
		var elementsToTrigger = $([$('.cd-filter-trigger'), $('.cd-filter'), $('.gallery_menu'), $('.gallery')]);
		elementsToTrigger.each(function(){
			$(this).toggleClass('filter-is-visible', $bool);
		});
	}

	//mobile version - detect click event on filters tab
	var filter_tab_placeholder = $('.gallery_menu .placeholder a'),
		filter_tab_placeholder_default_value = 'Select',
		filter_tab_placeholder_text = filter_tab_placeholder.text();
	
	$('.gallery_menu li').on('click', function(event){
		//detect which tab filter item was selected
		var selected_filter = $(event.target).data('type');
			
		//check if user has clicked the placeholder item
		if( $(event.target).is(filter_tab_placeholder) ) {
			(filter_tab_placeholder_default_value == filter_tab_placeholder.text()) ? filter_tab_placeholder.text(filter_tab_placeholder_text) : filter_tab_placeholder.text(filter_tab_placeholder_default_value) ;
			$('.gallery_menu').toggleClass('is-open');

		//check if user has clicked a filter already selected 
		} else if( filter_tab_placeholder.data('type') == selected_filter ) {
			filter_tab_placeholder.text($(event.target).text());
			$('.gallery_menu').removeClass('is-open');	

		} else {
			//close the dropdown and change placeholder text/data-type value
			$('.gallery_menu').removeClass('is-open');
			filter_tab_placeholder.text($(event.target).text()).data('type', selected_filter);
			filter_tab_placeholder_text = $(event.target).text();
			
			//add class selected to the selected filter item
			$('.gallery_menu .selected').removeClass('selected');
			$(event.target).addClass('selected');
		}
	});
	
	//close filter dropdown inside lateral .cd-filter 
	$('.cd-filter-block h4').on('click', function(){
		$(this).toggleClass('closed').siblings('.cd-filter-content').slideToggle(300);
	})

	//fix lateral filter and gallery on scrolling
	$(window).on('scroll', function(){
		(!window.requestAnimationFrame) ? fixGallery() : window.requestAnimationFrame(fixGallery);
	});

	function fixGallery() {
		var offsetTop = $('.cd-main-content').offset().top,
			scrollTop = $(window).scrollTop();
		( scrollTop >= offsetTop ) ? $('.cd-main-content').addClass('is-fixed') : $('.cd-main-content').removeClass('is-fixed');
	}

	/************************************
		MitItUp filter settings
		More details: 
		https://mixitup.kunkalabs.com/
		or:
		http://codepen.io/patrickkunka/
	*************************************/

	buttonFilter.init();
	$('.gallery ul').mixItUp({
	    controls: {
	    	enable: false
	    },
	    callbacks: {
	    	onMixStart: function(){
	    		$('.cd-fail-message').fadeOut(200);
	    	},
	      	onMixFail: function(){
	      		$('.cd-fail-message').fadeIn(200);
	    	}
	    }
	});

	//search filtering
	//credits http://codepen.io/edprats/pen/pzAdg
	var inputText;
	var $matching = $();

	var delay = (function(){
		var timer = 0;
		return function(callback, ms){
			clearTimeout (timer);
		    timer = setTimeout(callback, ms);
		};
	})();

	$(".cd-filter-content input[type='search']").keyup(function(){
	  	// Delay function invoked to make sure user stopped typing
	  	delay(function(){
	    	inputText = $(".cd-filter-content input[type='search']").val().toLowerCase();
	   		// Check to see if input field is empty
	    	if ((inputText.length) > 0) {            
	      		$('.mix').each(function() {
		        	var $this = $(this);
		        
		        	// add item to be filtered out if input text matches items inside the title   
		        	if($this.attr('class').toLowerCase().match(inputText)) {
		          		$matching = $matching.add(this);
		        	} else {
		          		// removes any previously matched item
		          		$matching = $matching.not(this);
		        	}
	      		});
	      		$('.gallery ul').mixItUp('filter', $matching);
	    	} else {
	      		// resets the filter to show all item if input is empty
	      		$('.gallery ul').mixItUp('filter', 'all');
	    	}
	  	}, 200 );
	});
});

/*****************************************************
	MixItUp - Define a single object literal 
	to contain all filter custom functionality
*****************************************************/
var buttonFilter = {
  	// Declare any variables we will need as properties of the object
  	$filters: null,
  	groups: [],
  	outputArray: [],
  	outputString: '',
  
  	// The "init" method will run on document ready and cache any jQuery objects we will need.
  	init: function(){
    	var self = this; // As a best practice, in each method we will asign "this" to the variable "self" so that it remains scope-agnostic. We will use it to refer to the parent "buttonFilter" object so that we can share methods and properties between all parts of the object.
    
    	self.$filters = $('.cd-main-content');
    	self.$container = $('.gallery ul');
    
	    self.$filters.find('.gallery_menu').each(function(){
	      	var $this = $(this);
	      
		    self.groups.push({
		        $inputs: $this.find('.filter'),
		        active: '',
		        tracker: false
		    });
	    });
	    
	    self.bindHandlers();
  	},
  
  	// The "bindHandlers" method will listen for whenever a button is clicked. 
  	bindHandlers: function(){
    	var self = this;

    	self.$filters.on('click', 'a', function(e){
	      	self.parseFilters();
    	});
	    self.$filters.on('change', function(){
	      self.parseFilters();           
	    });
  	},
  
  	parseFilters: function(){
	    var self = this;
	 
	    // loop through each filter group and grap the active filter from each one.
	    for(var i = 0, group; group = self.groups[i]; i++){
	    	group.active = [];
	    	group.$inputs.each(function(){
	    		var $this = $(this);
	    		if($this.is('input[type="radio"]') || $this.is('input[type="checkbox"]')) {
	    			if($this.is(':checked') ) {
	    				group.active.push($this.attr('data-filter'));
	    			}
	    		} else if($this.is('select')){
	    			group.active.push($this.val());
	    		} else if( $this.find('.selected').length > 0 ) {
	    			group.active.push($this.attr('data-filter'));
	    		}
	    	});
	    }
	    self.concatenate();
  	},
  
  	concatenate: function(){
    	var self = this;
    
    	self.outputString = ''; // Reset output string
    
	    for(var i = 0, group; group = self.groups[i]; i++){
	      	self.outputString += group.active;
	    }
    
	    // If the output string is empty, show all rather than none:    
	    !self.outputString.length && (self.outputString = 'all'); 
	
    	// Send the output string to MixItUp via the 'filter' method:    
		if(self.$container.mixItUp('isLoaded')){
	    	self.$container.mixItUp('filter', self.outputString);
		}
  	}
};