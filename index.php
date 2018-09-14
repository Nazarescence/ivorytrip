<?php


const CSS_NAME = 'main.css';


var_dump($_POST);

require_once ('views/page_top.php');
require_once ('connexionbdd/conn.php');


?>
		<main>
			<div id="banniere">
				<img src="images/bannniere3.jpg" alt="banniere du site" style="width:75%;">
			</div>
			<div id="submain">
                <form action="connexionbdd" method="post">
                    <fieldset id="coordonnees">
                        <legend>S'inscrire</legend>
                        <ul>
                            <!-- on associe le libelle label au champ de formulaire input grace a l'attribut for qui doit prendre comme valeur la valeur de l'id de l'input. Maniere recommandee-->
                            <li>
                                <label for="nom">Nom</label>
                                <input type="text" id="nom" name="nom"/>
                            </li>

                            <li>
                                <label for="prenom">Prenom</label>
                                <input type="text" id="prenom" name="prenom"/>
                            </li>
                            <li>
                                <label for="age">Age</label>
                                <input type="text" id="age" name="age">
                            </li>
                            <br>
                            <li>
                                <label for="courriel">Courriel</label>
                                <input type="email" id="courriel" name="courriel"/>
                            </li>
                            <li>
                                <label for="password">Mot De Passe</label>
                                <input type="password" id="password" name="psw">
                            </li>
                            <br>
                            <div>
                                <!--bouton de soumission du formulaire-->
                                <input type="submit" value="soumettre" id="submit"/>
                            </div>
                        </ul>
                    </fieldset>
                </form>
                </div>
                    <!-- section formulaire "nous contacter" -->
            <form action="" method="post">
					<fieldset>
						<legend>Se connecter</legend>
                        <li>
                            <label for="email">E-Mail</label>
                            <input type="email" id="email" name="email"  placeholder="abcdef@monmail.com">
                        </li>
                        <br>
                        <li>
                            <label for="password">Mot De Passe</label>
                            <input type="password" id="password" name="password">
                        </li>
                        <br>
						<input type="submit" value="Envoyer"/>
					</fieldset>
				</form>
				
				
			</div>			
		</main>	
		
		<!--footer regroupant les autres destinations proposees-->	
		<?php
require_once ('views/page_bottom.php');
//essai