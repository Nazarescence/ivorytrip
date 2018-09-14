<?php
const CSS_NAME = 'reservation.css';

require_once ('views/page_top.php');


?>
		<main>
			<div id="voyage">
				<h1>Formulaire de réservation</h1>
				<form action="process.php" method="post">
					<fieldset id="coordonnees">
						<legend>Informations personnelles</legend>
						<ul>
							<!-- on associe le libelle label au champ de formulaire input grace a l'attribut for qui doit prendre comme valeur la valeur de l'id de l'input. Maniere recommandee-->
							<li>
								<label for="nom">Nom</label>
								<input type="text" id="nom" name="nom" 
								placeholder="Ex.Sane"/>
							</li>
							
							<li>
								<label for="prenom">Prenom</label>
								<input type="text" id="prenom" name="prenom"/>
							</li>
							
							<li>
								<label for="adresse">Adresse</label>
								<input type="text" id="adresse" name="adresse"/>
							</li>
							<!--nouveau en html5 champ de saisie d1 adresse mail-->
							<li>
								<label for="code-postal">Code postal</label>
								<input type="text" id="code-postal" name="code-postal"/>
							</li>
							<li>
								<label for="province-etat">Province/Etat</label>
								<input type="text" id="province-etat" name="province-etat"/>
							</li>
							<li>
								<label for="pays">Pays</label>
								<input type="text" id="pays" name="pays"/>
							</li>
							<li>
								<label for="telephone">Telephone</label>
								<input type="text" id="telephone" name="telephone"/>
							</li>
							<li>
								<label for="email">Courriel</label>
								<input type="email" id="email" name="email"/>
							</li>
							
						</ul>
					</fieldset>
					<fieldset id="hebergement">
						<ul>
							<li>
								<span>Type d'hebergement</span>
								<select>
									<option selected>Pension complète</option>
									<option>Demi-pension</option>
									<option>Petit-déjeuner</option>
								</select>
							</li>
							<li>
								<span>Type de vacances:</span>
									<input type="radio"  id="r-naturelles" name="vacances" value="r-naturelles" checked />
									<label for="r-naturelles">Réserves naturelles</label>
                                <a href="panier.php?action=ajout&amp;l=libelleProduit&amp;q=qteProduit&amp;p=prixProduit" onclick="window.open(this.href, '',
'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">Ajouter au panier</a>
									<input type="radio" id="bord-de-mer" name="vacances" value="bord-de-mer"/>
									<label for="bord-de-mer">Bord de mer</label>
                                <a href="panier.php?action=ajout&amp;l=libelleProduit&amp;q=qteProduit&amp;p=prixProduit" onclick="window.open(this.href, '',
'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">Ajouter au panier</a>
									<input type="radio" id="ville" name="vacances" value="ville"/>
									<label for="ville">Villes et villages</label>
                                <a href="panier.php?action=ajout&amp;l=libelleProduit&amp;q=qteProduit&amp;p=prixProduit" onclick="window.open(this.href, '',
'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">Ajouter au panier</a>
								</li>
								</ul>
							</fieldset>
							<fieldset id="voscommentaires">
								<input type="checkbox" id="offres" name="offres" value="offres" checked />
								<span>Je souhaite recevoir les offres promotionnelles</span>

								<div id="textarea">
									<label for="message">Questions et commentaires:</label>
									<textarea id="message" name="message" placeholder="votre message ici">
									</textarea>
								</div>
							</fieldset>

							<div>
								<!--bouton de soumission du formulaire-->
								<input type="submit" value="soumettre" id="submit"/>
							</div>
						</form>
					</div>
				</main> 
				
				<!--footer regroupant les autres destinations proposees-->	
				<?php
require_once ('views/page_bottom.php');