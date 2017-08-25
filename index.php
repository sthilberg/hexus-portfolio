<!-- 
Andrew Hexus single page portfolio website
Copyright (C) 2017
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software Foundation,
Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301  USA
 -->
<!DOCTYPE html>
<html>
<head>
	<title>Andrew Hexus</title>

	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.14/jquery.scrollify.min.js"></script>
	<script>
		function showVideo() {
	    var x = document.getElementById('toggleVideo');
		    if (x.style.display === 'none') {
		        x.style.display = 'block';
		    } else {
		        x.style.display = 'none';
		    }
		}
	</script>
	<script>
		$(function() {
			$.scrollify({
				section : ".scroll-snap",
			});
		});
	</script>
</head>

<body>
	<header>

		<?php
		$imagesDir = 'img/splash/';
		$images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
		$randomImage = $images[array_rand($images)];
		?>
		<div id="splash" class="scroll-snap">
			<img src="<?php echo $randomImage;?>">
			<video id="toggleVideo" autoplay controls><source src="vid/film.mov" type="video/mp4"></video>
		</div>

		<div class="logo">
			<img src="img/logo-sm.png">
		</div>
		<div class="buttons">
			<ul>
				<noscript>
					<a href="film.php" target="_blank"><li>Film Reel</li></a>
				</noscript>
				<script>
					document.write("<a onclick='showVideo()''><li>Film Reel</li></a>");
				</script>
				<a href="#portraits"><li>Pictures</li></a>
				<a href="#contact"><li>Contact</li></a>
			</ul>	
		</div>
	</header>

	<main>
		<div class="scroll-snap img-section">
		<div class="pictures-section">
		<div id="portraits" class="section">
			<div class="title">
				<h1>Portraits</h1>
			</div>
			<div class="row">
				<?php
				const NUM_IMAGES = 9;
				$imagesDir = 'img/portrait/';
				$images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
				$randomImage = array_rand($images, NUM_IMAGES);
				for($i = 0; $i < NUM_IMAGES; $i++){ ?>

				<a class="thumbnails">

					<img id="a" src="<?php echo $images[$randomImage[$i]];?>" alt="portrait">
					<img id="b" class="hiddenimg" src="<?php echo $images[$randomImage[$i]];?>" alt="portrait">
				</a>			
				<?php
				}
				?>
			</div>
		</div>

		<div id="experiments" class="section">
			<div class="title">
				<h1>Experiments</h1>
			</div>
			<div class="row">

				<?php
				const NUM_IMAGES = 9;
				$imagesDir = 'img/experiment/';
				$images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
				$randomImage = array_rand($images, NUM_IMAGES);
				for($i = 0; $i < NUM_IMAGES; $i++){ ?>

				<div class="thumbnails">

					<img id="a" src="<?php echo $images[$randomImage[$i]];?>" alt="experiment">
					<img id="b" class="hiddenimg" src="<?php echo $images[$randomImage[$i]];?>" alt="experiment">
				</div>			
				<?php
				}
				?>
			</div>
		</div>
	</div> <!-- end pictures-section -->
</div>  <!-- end scroll-snap -->


	<div class="scroll-snap">
		<div id="contact">
			<div class="profile">

				<?php
				$imagesDir = 'img/profile/';
				$images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
				$randomImage = $images[array_rand($images)];
				?>

				<img id="a" src="<?php echo $randomImage;?>">
				<img id="b" class="hiddenimg" src="<?php echo $randomImage;?>">
			</div>

			<div class="bio">
				<p>Words about me
					Here is where my bio will go and text will go here
					some words about me and text right here Here is where my bio will go and text will go here
					some words about me and text right here
					<br/>
					Here is where my bio will go and text will go here
					some words about me and text right here
					<br/>
					
				</p>
				<p class="email">
					<strong>_______________________________________</strong>
				</p>
				<a href="#_" class="show-contact" tabindex="0">Show Contact Info</a>
				<p class="hidden-info" >Email: name@server Phone: 503.123.1234  PayPal link</p>
				
			</div>
		</div>
	</div>  <!-- end scroll-snap -->
	</main>
</body>

</html>

