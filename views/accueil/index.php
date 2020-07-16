<?php require('views/templates/header.php');?>

            <!-- Carousel -->
            <section class="carousel-container">
                <div class="glide">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            <li class="glide__slide">
                                <img src="<?php echo SITE_DIR;?>assets/img/hotel.jpg" width="100%" />
                            </li>
                            <li class="glide__slide">
                                <img src="<?php echo SITE_DIR;?>assets/img/resort.jpg" width="100%" />
                            </li>
                            <li class="glide__slide">
                                <img src="<?php echo SITE_DIR;?>assets/img/breakfast.jpg" width="100%" />
                            </li>
                        </ul>
                    </div>
                    <div class="glide__arrows" data-glide-el="controls">
                        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">&lt;</button>
                        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">&gt;</button>
                    </div>
                </div>
            </section>

            <h1>Accueil</h1>

            <!-- Content -->
            <section class="row">
                <div class="block-content large-block color-sky">
                    <p>
                        La Riviera française ? Vous pensez immédiatement aux superbes stations balnéaires du 19ème siècle où se côtoyaient riches familles industrielles et aristocratie européenne, venues là pour échapper à la froidure hivernale. Un lieu mythique qui se déploie de Nice à Menton.  Séjournez à Nice et retrouvez le goût de cette époque.
                    </p>
                    <p>
                        Offrez vous un moment de répit et venez vous ressourcer dans une superbe bâtisse typique de la région, à deux pas tant bien du centre de Nice que de la mer, dans laquelle le chant des cigales et des mouettes est seul à troubler le silence.
                    </p>
                    <p>
                        Entre les repas méditerranéens cuisinés à base des produits choisis venant de circuits courts, et l&apos;aspect cocon de nos chambres, vous entrerez dans une bulle chaleureuse et confortable.
                    </p>
                    <p>
                        Notre équipe sera là, à votre écoute, et l&apos;ambiance familiale, simple et efficace de l&apos;hôtel vous offrira le repos dont vous aurez besoin, que ce soit après un rendez vous professionnel ou une longue journée de vacance sous le soleil doux de la côte.
                    </p>
                </div>
                <div class="block-content medium-block">
                    <img src="<?php echo SITE_DIR;?>assets/img/facade.jpg" alt="facade de l'hotel"/>
                </div>
            </section>

            <section class="row reverse">
                <div class="block-content large-block color-sky">
                    <h2>
                        Les Incontournables
                    </h2>
                    <p>
                        Promenade des Anglais, Négresco, jardins et parcs fleuris, plage sur mer chaude, façades colorées du centre-ville… Autant de lieux à parcourir et à découvrir sous le soleil azuréen.   
                    </p>
                    <ul> 
                        <li>
                            La Promenade des Anglais
                        </li>
                        <li>
                            Le cours Saleya
                        </li>
                        <li>
                            La place Masséna
                        </li>
                        <li>
                            Musée Matisse
                        </li>
                        <li>
                            Mamac (Musée d&apos;Art Moderne et d&apos;Art Contemporain)
                        </li>
                        <li>
                            Musée National Chagall
                        </li>
                        <li>
                            Le Port de Nice
                        </li>
                    </ul>
                </div>
                <div class="block-content medium-block">
                    <img src="<?php echo SITE_DIR;?>assets/img/promenade.jpg" alt="promenade de nice"/>
                </div>
            </section>

            <!-- Tarifs -->
            <section class="row">
                <div class="block-content small-block centered color-ocean">
                    <h3>Chambre simple :</h3>
                    <ul class="ul-no-bullet">
                        <li>
                            Novembre-Mars : 69 €/nuit
                        </li>
                        <li>
                            Avril-Octobre : 93 €/nuit
                        </li>
                        <li>
                            Juillet-Août : 120 €/nuit
                        </li>
                    </ul>
                </div>
                <div class="block-content small-block centered color-ocean">
                    <h3>Chambre double :</h3>
                    <ul class="ul-no-bullet">
                        <li>
                            Novembre-Mars : 71 €/nuit
                        </li>
                        <li>
                            Avril-Octobre : 105 €/nuit
                        </li>
                        <li>
                            Juillet-Août : 144 €/nuit
                        </li>
                    </ul>
                </div>
                <div class="block-content small-block centered color-ocean">
                    <h3>Chambre double avec cuisine :</h3>
                    <ul class="ul-no-bullet">
                        <li>
                            Novembre-Mars : 93 €/nuit
                        </li>
                        <li>
                            Avril-Octobre : 122 €/nuit
                        </li>
                        <li>
                            Juillet-Août : 152 €/nuit
                        </li>
                    </ul>
                </div>
                <div class="block-content small-block centered color-ocean">
                    <h3>Chambre familiale :</h3>
                    <ul class="ul-no-bullet">
                        <li>
                            Novembre-Mars : 159 €/nuit
                        </li>
                        <li>
                            Avril-Octobre : 224 €/nuit
                        </li>
                        <li>
                            Juin-Août : 304 €/nuit
                        </li>
                    </ul>
                </div>
            </section>
			<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
			<script>
				let carousel = new Glide(".glide", {
					type: "carousel",
					startAt: 0,
					autoplay: 5000
				});
				carousel.mount();
			</script>
<?php require('views/templates/footer.php');?>