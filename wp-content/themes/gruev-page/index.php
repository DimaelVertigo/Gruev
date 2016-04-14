<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gruev_page
 */

get_header(); ?>
	<svg style="position: absolute; width: 0; height: 0;" width="0" height="0" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
	  <defs>
	    <symbol id="icon-facebook" viewBox="0 0 1024 1024">
	      <title>facebook</title>
	      <path class="path1" d="M575.87 1024h-191.87v-512h-128v-176.45l128-0.058-0.208-103.952c0-143.952 39.034-231.54 208.598-231.54h141.176v176.484h-88.23c-66.032 0-69.206 24.656-69.206 70.684l-0.262 88.324h158.69l-18.704 176.45-139.854 0.058-0.13 512z"></path>
	    </symbol>
	    <symbol id="icon-dribbble" viewBox="0 0 1024 1024">
	      <title>dribbble</title>
	      <path class="path1" d="M512.002 1024c-282.32 0-512.002-229.682-512.002-512s229.682-512 512.002-512c282.322 0 511.998 229.682 511.998 512s-229.676 512-511.998 512zM943.798 582.086c-14.962-4.72-135.364-40.632-272.41-18.698 57.204 157.186 80.478 285.208 84.958 311.808 98.114-66.336 167.958-171.426 187.452-293.11zM682.832 915.238c-6.506-38.37-31.898-172.090-93.298-331.64-0.96 0.328-1.922 0.64-2.88 0.972-246.67 85.958-335.216 257.016-343.086 273.104 74.15 57.824 167.336 92.32 268.436 92.32 60.58 0 118.318-12.39 170.828-34.756zM187.098 805.078c9.908-16.96 129.93-215.684 355.476-288.594 5.704-1.84 11.448-3.57 17.236-5.2-10.98-24.844-22.94-49.714-35.456-74.216-218.398 65.36-430.324 62.63-449.46 62.236-0.132 4.442-0.222 8.89-0.222 13.366 0 112.32 42.58 214.874 112.426 292.408zM83.912 423.096c19.558 0.26 199.736 1.042 404.302-53.282-72.46-128.812-150.612-237.11-162.142-252.92-122.348 57.708-213.802 170.496-242.16 306.202zM409.518 87.5c12.088 16.184 91.518 124.348 163.18 256.014 155.508-58.284 221.34-146.77 229.208-157.974-77.23-68.518-178.782-110.2-289.902-110.2-35.29 0-69.6 4.232-102.486 12.16zM850.522 236.112c-9.216 12.474-82.504 106.418-244.202 172.434 10.178 20.832 19.934 42.018 29.016 63.344 3.216 7.56 6.354 15.084 9.418 22.57 145.518-18.298 290.104 11.028 304.526 14.078-0.968-103.224-37.85-198.010-98.758-272.426z"></path>
	    </symbol>
	    <symbol id="icon-linkedin" viewBox="0 0 1024 1024">
	      <title>linkedin</title>
	      <path class="path1" d="M259.891 156.16c0 54.426-40.192 98.509-106.291 98.509-62.208 0-102.4-44.083-102.4-98.509 0-55.706 41.523-98.509 105.011-98.509s102.4 42.803 103.68 98.509zM56.422 966.349v-633.856h197.018v633.856h-197.018zM371.354 534.682c0-79.053-2.611-145.152-5.222-202.189h171.11l9.114 88.166h3.891c25.907-41.523 89.446-102.4 195.738-102.4 129.587 0 226.816 86.835 226.816 273.51v374.63h-197.018v-351.283c0-81.664-28.57-137.421-99.84-137.421-54.426 0-86.784 37.581-101.069 73.882-5.222 12.954-6.502 31.078-6.502 49.254v365.568h-197.018v-431.718z"></path>
	    </symbol>
	  </defs>
	</svg>
	
	<div class="container">
	  
	  <div class="header">
	    <?php the_widget('qTranslateXWidget', array('type' => 'text', 'hide-title' => true)); ?>
	    <ul class="lang-nav">
	      <li class="lang-en">En</li>
	      <li>|</li>
	      <li class="lang-ru">Ru</li>
	    </ul>


	    <h1>
	    	<span class="h1-hl"><?php _e("
			    <!--:en-->He<!--:-->
			    <!--:ru-->Пр<!--:-->"); 
			    ?></span><?php _e("
		    <!--:en-->llo there!<!--:-->
		    <!--:ru-->ивет всем<!--:-->"); 
		    ?>
	    </h1>
	    <h3><?php _e("
				<!--:en-->My name is Vladimir,<!--:-->
				<!--:ru-->Меня зовут Владимир,<!--:-->"); 
				?><br><?php _e("
				<!--:en-->I’m Web Designer<!--:-->
				<!--:ru-->Я веб-дизайнер<!--:-->"); 
				?>  <span class="h3-hl"><?php _e("
				<!--:en-->and i make shapes<!--:-->
				<!--:ru-->и я создаю образы<!--:-->"); 
				?></span>
			</h3>

	  </div>


	  <h2>
	  <?php _e("
			<!--:en-->About<!--:-->
			<!--:ru-->About<!--:-->"); 
		?>
		</h2>
	  <p><?php _e("
			<!--:en-->I was burn and live in south Odessa. Love technologies, music, coffe, beach and relax with my freands in a countrysize. I like my work. Iike make web little better. My goal - create beautiful design witch will be maximum simple and usability frendly. Everyday I research and test new features in the IT&Desing trends and I’m trying use them in my projects.<!--:-->
			<!--:ru-->I was burn and live in south Odessa. Love technologies, music, coffe, beach and relax with my freands in a countrysize. I like my work. Iike make web little better. My goal - create beautiful design witch will be maximum simple and usability frendly. Everyday I research and test new features in the IT&Desing trends and I’m trying use them in my projects.<!--:-->"); 
			?></p>

	  <h2>
	  <?php _e("
			<!--:en-->Skills<!--:-->
			<!--:ru-->Skills<!--:-->"); 
		?>
		</h2>
	  <ul class="list">
	    <li><?php _e("
			<!--:en-->— strong foundation Photoshop, Sketch<!--:-->
			<!--:ru-->— strong foundation Photoshop, Sketch<!--:-->"); 
		?></li>
	    <li><?php _e("
			<!--:en-->— strong foundation HTML, CSS3, Media Queries<!--:-->
			<!--:ru-->— strong foundation HTML, CSS3, Media Queries<!--:-->"); 
		?></li>
	    <li><?php _e("
			<!--:en-->— familiar with JavaScript, jQuery<!--:-->
			<!--:ru-->— familiar with JavaScript, jQuery<!--:-->"); 
		?></li>
	    <li><?php _e("
			<!--:en-->— preprocessors SASS, Jade<!--:-->
			<!--:ru-->— preprocessors SASS, Jade<!--:-->"); 
		?></li>
	    <li><?php _e("
			<!--:en-->— SVG animation<!--:-->
			<!--:ru-->— SVG animation<!--:-->"); 
		?></li>
	    <li><?php _e("
			<!--:en-->— build system gulpjs<!--:-->
			<!--:ru-->— build system gulpjs<!--:-->"); 
		?></li>
	  </ul>
	  
	  <h2>
	  	<?php _e("
				<!--:en-->Contacts<!--:-->
				<!--:ru-->Contacts<!--:-->"); 
			?>
		</h2>
	  <p><a class="cont-connect" href="<?php bloginfo('template_url') ?>/popups/_contact-form.html"><span class="link"><?php _e("
			<!--:en-->Connect <!--:-->
			<!--:ru-->Connect <!--:-->"); 
		?></span>
		</a><?php _e("
			<!--:en--> with me and say hello.<!--:-->
			<!--:ru--> with me and say hello.<!--:-->"); 
		?></p>

	  <ul class="social">
	    <li><a class="soc-dr" target="_blank" href="https://dribbble.com/gruev">
	      <svg class="icon-dribbble"><use xlink:href="#icon-dribbble"></use></svg>
	    </a></li>
	    <li><a class="soc-in" target="_blank" href="https://www.facebook.com/profile.php?id=1254937647">
	      <svg class="icon-facebook"><use xlink:href="#icon-facebook"></use></svg>
	    </a></li>
	    <li><a class="soc-fb" target="_blank" href="https://www.linkedin.com/profile/view?id=AAIAAAyD740BcGmvsJQh6GUl06KQ8hSrw4xaU4E&trk=nav_responsive_tab_profile_pic">
	      <svg class="icon-linkedin"><use xlink:href="#icon-linkedin"></use></svg>
	    </a></li>
	  </ul>

	</div>

<?php get_footer(); ?>
