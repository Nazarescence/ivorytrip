<?php
require_once ('views/page_top.php');
?>

		<main>
			<!-- Catégorie parcs -->
			<section id="safari">


                <ul>
                    <?php for ($i=0;$i<10;$i++){ ?>
                        <article>
                            <a href="produit.php" title="Voir les détails">
                                <div class="image-site"><img src="images/sites/parc-de-taimini.jpg" alt="photo"></div>
                                <div class="mini-detail">
                                    <h2>Parc National de Taï</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut...</p>
                                </div>
                            </a>
                        </article>
                    <?php } ?>
                </ul>
                <!--				<article>-->
<!--					<a href="produit.php" title="Voir les détails">-->
<!--						<div class="image-site"><img src="images/sites/parc-de-taimini.jpg" alt="photo"></div>-->
<!--						<div class="mini-detail">-->
<!--							<h2>Parc National de Taï</h2>-->
<!--							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut...</p>-->
<!--						</div>-->
<!--					</a>-->
<!--				</article>			-->
<!--				<article>-->
<!--					<a href="produit.php" title="Voir les détails">-->
<!--						<div class="image-site"><img src="images/sites/lionmini.jpg" alt="photo"></div>-->
<!--						<div class="mini-detail">-->
<!--							<h2>Zoo d'Abidjan</h2>-->
<!--							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut...</p>-->
<!--						</div>-->
<!--					</a>-->
<!--				</article>				-->
<!--				<article>-->
<!--					<a href="produit.php" title="Voir les détails">-->
<!--						<div class="image-site"><img src="images/sites/parc-de-la-comoemini.jpg" alt="photo"></div>-->
<!--						<div class="mini-detail">-->
<!--							<h2>Parc de la Comoé</h2>-->
<!--							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut...</p>-->
<!--						</div>-->
<!--					</a>-->
<!--				</article>-->
<!--			</section>-->
<!--			-->
<!--			<!-- Catégorie Bord de mer -->-->
<!--			<section id="bord-de-mer">-->
<!--				<article>-->
<!--					<a href="produit.php" title="Voir les détails">-->
<!--						<div class="image-site"><img src="images/sites/assinie.jpg" alt="photo"></div>-->
<!--						<div class="mini-detail">-->
<!--							<h2>Plages d'Assinie</h2>-->
<!--							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut...</p>-->
<!--						</div>-->
<!--					</a>	-->
<!--				</article>-->
<!--				<article>-->
<!--					<a href="produit.php" title="Voir les détails">-->
<!--						<div class="image-site"><img src="images/sites/monogaga.jpg" alt="photo"></div>-->
<!--						<div class="mini-detail">-->
<!--							<h2>Monogaga</h2>-->
<!--							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut...</p>-->
<!--						</div>-->
<!--					</a>	-->
<!--					</article>-->
<!--				<article>-->
<!--					<a href="produit.php" title="Voir les détails">-->
<!--						<div class="image-site"><img src="images/sites/sassandramini.jpg" alt="photo"></div>-->
<!--						<div class="mini-detail">-->
<!--							<h2>Sassandra</h2>-->
<!--							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut...</p>-->
<!--						</div>-->
<!--					</a>	-->
<!--				</article>-->
<!--			</section>-->
<!--			-->
<!--			<!-- Catégorie Villes et villages -->	-->
<!--			<section id="monuments">-->
<!--				<article>-->
<!--					<a href="produit.php" title="Voir les détails">-->
<!--						<div class="image-site"><img src="images/yakro2.jpg" alt="photo"></div>-->
<!--						<div class="mini-detail">-->
<!--							<h2>Basilique Notre Dame de la Paix</h2>-->
<!--							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut...</p>-->
<!--						</div>-->
<!--					</a>-->
<!--				</article>-->
<!--				<article>-->
<!--					<a href="produit.php" title="Voir les détails">-->
<!--						<div class="image-site"><img src="images/sites/echassiersmini.jpg" alt="photo"></div>-->
<!--						<div class="mini-detail">-->
<!--							<h2>Echassiers de Man</h2>-->
<!--							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut...</p>-->
<!--						</div>-->
<!--					</a>-->
<!--				</article>-->
<!--				<article>-->
<!--					<a href="produit.php" title="Voir les détails">-->
<!--						<div class="image-site"><img src="images/sites/mosquee-de-kongmini.jpg" alt="photo"></div>-->
<!--						<div class="mini-detail">-->
<!--							<h2>Vieille Mosquée de Kong</h2>-->
<!--							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut...</p>-->
<!--						</div>-->
<!--					</a>-->
<!--				</article>-->
			</section>
		</main>
		
		<!--footer regroupant les autres destinations proposees-->	
		<?php
require_once ('views/page_bottom.php');