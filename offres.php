<?php
const CSS_NAME = 'offres.css';

require_once ('views/page_top.php');
require_once ('connexionbdd/conn.php');

?>

		<main>
			<section id="safari">
                <?php while ($donnees = $produit->fetch()) {?>
                <article>
                    <a href="produit.php" title="Voir les détails">
                        <div class="image-site"><img src="<?=$donnees['image1']?>" alt="photo"></div>
                        <div class="mini-detail">
                            <h2><?=$donnees['nom']?></h2>
                            <p><?=$donnees['desc']?></p>
                        </div>
                    </a>
                </article>
                <?php } ?>

			</section>
		</main>
		
		<!--footer regroupant les autres destinations proposees-->	
		<?php
require_once ('views/page_bottom.php');