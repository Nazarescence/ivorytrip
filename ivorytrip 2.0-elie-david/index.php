<?php

require_once ('views/page_top.php');
?>


		<main>
			<div id="banniere">
				<img src="images/bannniere3.jpg" alt="banniere du site" style="width:75%;">
			</div>
			<div id="submain">								
				
				<section>
					<article>
						<h2>Bon a savoir</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>					
					</article>
					<article>
						<h2>Astuces</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>					
					</article>
				</section>
				
				<!-- section formulaire "nous contacter" -->	
				<form action="process.php" method="post">
					<fieldset>
						<legend>Vos information personnelles</legend>				
						<label for="email">E-Mail: </label>
						<input type="email" id="email" name="email"  placeholder="abcdef@monmail.com">
						
						<div id="textarea">
							<textarea rows="5" cols="30" id="message" name="message" placeholder="votre message ici"></textarea>
						</div>
						<input type="submit" value="Envoyer"/>
						
						<div id="map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2794.2996041425918!2d-73.64285294944264!3d45.54429823601447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc918e0c061b07f%3A0x49f7a7eab082269a!2s255+Boul+Cr%C3%A9mazie+E%2C+Montr%C3%A9al%2C+QC+H2M!5e0!3m2!1sfr!2sca!4v1508435958291"  frameborder="2" style="border:solid" allowfullscreen></iframe>
						</div>
					</fieldset>
				</form>
				
				
			</div>			
		</main>	
		
		<!--footer regroupant les autres destinations proposees-->	
		<?php
require_once ('views/page_bottom.php');
