<?php
/*
Template Name: Splash
*/
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
	$(document).ready(function(){
		var enterBtn = document.getElementById("enter_btn")
		var enterBtn$ = $("#enterBtn")
		var quote = document.getElementById("quote")
		var quote$ = $("#quote")

		//Queue keyframe animations on click event via class toggle
		quote$.on('click', function(e) {
			e.preventDefault()
			
			// Fade out Quote
			this.classList.toggle('fade_out')

			// Fade in Enter button
			enterBtn.classList.toggle('fade_in')

		})
	})
</script>

<style>
	html {
  margin: 0;
}

body {
  margin: 0px;
}


@keyframes fade_in {
		0%   {opacity: 0; top: 42%;}
    25%  {opacity: .20; top: 45%;}
    50%  {opacity: .5; top: 49%;}
		100% {opacity: 1; top: 52%;}
}

@keyframes fade_out {
		0%   {opacity: 1; top: 42%;}
    25%  {opacity: .5; top: 39%;}
    50%  {opacity: .25; top: 35%}
    100% {opacity: 0; top: 32%}
}

.fade_out {
	animation-name: fade_out;
	animation-duration: 2s;
	animation-iteration-count: 1;
	animation-direction: normal;
	animation-timing-function: linear;
	animation-fill-mode: forwards;
}

.fade_in {
	animation-name: fade_in;
	animation-duration: 2s;
	animation-iteration-count: 1;
	animation-direction: normal;
	animation-timing-function: linear;
	animation-fill-mode: forwards;
}

#splash_pic {
  height: 100%;
  width: 100%;
  background-image: url("<?php echo THEME_IMG_PATH; ?>/kelly-sikkema-455242-crop.png");
}

.wide_background {
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

#blank {
	background-color: black;

}

#enter_btn {
	position: absolute;
  top: 52%;
  left: 46.5%;
  border-style: solid;
  border-width: 4;
  opacity: 0;
  box-shadow: 3px 4px 1px #78624F;
  color: #FFFAEA;
  border-color: #FFFAEA;
  font-size: 22px;
  font-family: sans-serif;
  letter-spacing: 3px;
	padding: 10px;
}

#quote {
	position: absolute;
	top: 42%;
	left: 46.5%;
	padding-bottom: 30px;
	font-size: 45px;
	font-family: cursive;
	letter-spacing: 3px;
	color: black;
	opacity: .5;
	transition: 500ms;
}

#splash_pic a {
	text-decoration: none;
}

#quote:hover {
	/* text-decoration: unset; */
	opacity: 1;
	text-shadow:0 3px 3px rgba(0,0,0,.7);
	transform: translateY(-3px);
	/* text-shadow: 0 0 30px #F5FEFF; */
}

#quote:active {
	transform: translateY(-1)
	text-shadow:0 5px 5px rgba(0,0,0,.2);
}

#enter_btn:hover {
	opacity: .4;
	background-color: black;
}

</style>

	<div id="splash" class="fullwidth">
		<main id="main" class="site-main" role="main">
			<div id="splash_pic" class="wide_background">
			<div id="blank"></div>
				<a href="<?php echo site_url( '/main' ); ?>">
					<div id="enter_btn" class="invisible">ENTER</div>
					<div id="quote">Shit I'd Never Say Out Loud</div>	
				</a>
							
			</div>
		</main
	</div>
<!-- #primary -->
