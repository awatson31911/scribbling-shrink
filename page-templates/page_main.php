<?php
/*
Template Name: Main
 */
get_header() ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
// ----- Variables ----- //
	var topBtn = $(".top_btn")

	// ----- "Back to Top" Button logic ----- //

	//Button should appear once user attempts to scroll to top
	topBtn.on('click', function(e) {
			console.log(this.hash)
      e.preventDefault();
  
      $('html, body').animate({
        scrollTop: $('html').offset().top
      }, 500, function(){

        window.location.hash = '#';
      });
  
	});
	
	$(window).on('scroll', function () {
		if (document.body.scrollTop > 766 || document.documentElement.scrollTop > 766) {
			topBtn.css("display", "block")
		}
		if (document.documentElement.scrollTop <= 440) {
			topBtn.css("display", "none")
		}
		
	})



	// ----- Add smooth scrolling to all links ----- //
  $("a").on('click', function(e) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();
			
      // Store hash
      var hash = this.hash;
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1600, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>


<style>
	html {
		margin: 0 !important;
	}

	body{
		margin: 0px !important;
	}

	.container, .container-fluid {
		width: 100%;
  	margin: 0 !important;
		padding: 0px !important;
		scroll-behavior: smooth;
	}

	#masthead {
		opacity: .88;
	}

	#love_pic {
		background: url('<?php echo THEME_IMG_PATH; ?>/abstract-art-board-889839.jpg');
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
		position: absolute;
		top: 0%
	}

	#life_pic {
		background: url('<?php echo THEME_IMG_PATH; ?>/abstract-art-blur-544917.jpg');
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
		position: absolute;
		top: 100%
	}

	#inbetween_pic {
		background: url('<?php echo THEME_IMG_PATH; ?>/dariusz-sankowski-56725-unsplash.jpg');
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
		position: absolute;
		top: 200%
	}

	.wide_background {
		height: 100%;
		width: 100%;
	}

	.section_btn {
		height: 269px;
		position: absolute;
    top: 64%;
    left: 3%;
		overflow: hidden;
    color: white;
    font-size: 200px;
		font-weight: 600;
		font-family: sans-serif;
		opacity: .3;
	}

	.top_btn {
		position: fixed;
		display: none;
		bottom: 21%;
    right: 2%;
		font-size: 20px;
		font-weight: bold;
		color: white;
		opacity: .5;
	}

	.light_pic a {
		color: black;
		opacity: .8;
	}

</style>


<div class="wide_background fullwidth">
	<main id="main" class="site-main" role="main">

		<div id="love_pic" class="wide_background light_pic">
			<a href="<?php echo site_url( '/category/love' ); ?>" 
				class="section_btn">love</a>
		</div>


		<div id="life_pic" class="wide_background">
			<a href="<?php echo site_url( '/category/life' ); ?>"
				class="section_btn">life</a>
		</div>
		

		<div id="inbetween_pic" class="wide_background">
			<a href="<?php echo site_url( '/category/in-between' ); ?>" 
				class="section_btn">in between</a>
			<a href="/main/#" 
				class="top_btn">BACK TO TOP</a>
		</div>

	</main><!-- #main -->
</div><!-- #primary -->
