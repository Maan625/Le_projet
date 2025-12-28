<?php
include __DIR__ . '/header.php';
?>
<main class="main_cours">


    <div class="présentation_du_cours mb-4">
        <h1 class="titre_cours text-center">Nos cours en communication</h1>
        <p class="para_cours text-center">Apprenez la communication professionnelle à travers des modules courts,
            des
            exercices
            appliqués et des retours d’experts. Orale, écrite, digitale ou interculturelle : choisissez votre
            parcours,
            obtenez des compétences certifiantes et avancez vers vos objectifs avec confiance.</p>
    </div>

    <!-- 🟦 BARRE DE FILTRE -->
    <section class=" py-3 bg-light  border-top ">
        <div class="container d-flex flex-wrap gap-2 justify-content-center ">
            <span class="fw-semibold me-2">Filtrer les cours :</span>
            <button class="btn btn-sm btn-outline-dark active cours-filter-btn" data-filter="all">
                Tous
            </button>
            <button class="btn btn-sm btn-outline-dark cours-filter-btn" data-filter="mobile">
                Réseaux mobiles & sans fil
            </button>
            <button class="btn btn-sm btn-outline-dark cours-filter-btn" data-filter="fibre">
                Fibre optique & câbles
            </button>
            <button class="btn btn-sm btn-outline-dark cours-filter-btn" data-filter="radio">
                Radio, micro-ondes & satellite
            </button>
            <button class="btn btn-sm btn-outline-dark cours-filter-btn" data-filter="coeur5g">
                Cœur de réseau & 5G
            </button>
        </div>
    </section>

    <section class="section_communication_accueil mt-4">
        <div class="row mx-md-auto  justify-content-md-around  justify-content-center text-sm-center">

            <!-- 1. accès mobile au cœur du réseau -> catégorie mobile -->
            <div class="col-auto mb-4 cours-card" data-category="mobile"
                data-keywords="acces mobile coeur reseau 4g 5g telecom">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_communication/Cours de l'accès mobile au cœur du réseau.png"
                        class="card-img-top" style="height: 230px;"
                        alt="image  Cours de l'accès mobile au cœur du réseau">
                    <div class="card-body">
                        <div class="line_star">
                            <span>(15)</span>
                            <div class="star_rating">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-half text-warning"></i>
                            </div>
                            <span>4.5</span>
                        </div>
                        <a href="">
                            <h5 class="card_2-title"> Cours de l'accès mobile <br>au cœur du réseau</h5>
                        </a>
                        <div class="line_2_time">
                            <span class="time"><i class="bi bi-clock text-light  "></i> 6h</span>
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light  "> </i>3
                                licons</span>
                        </div>
                        <div class="line_2_price">
                            <span class="price fw-bold">90€</span>
                            <div class="formateur">
                                <span class="name">John Doe</span>
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50"
                                    height="50">
                            </div>
                        </div>
                    </div>
                    <button class="button_commence"><a href=""></a>Commence</button>
                </div>
            </div>

            <!-- 2. transmission micro-ondes -> radio -->
            <div class="col-auto mb-4 cours-card" data-category="radio"
                data-keywords="micro ondes faisceaux hertziens transmission bout a bout">
                <div class="card_2 mx-auto" style="width: 18rem">
                    <img src="/Images/cours_communication/Cours de transmission micro-ondes (BOUT à BOUT).png"
                        class="card-img-top" alt="  Cours de transmission micro-ondes (BOUT à BOUT)" height="230">
                    <div class="card-body">
                        <div class="line_star">
                            <span>(15)</span>
                            <div class="star_rating">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-half text-warning"></i>
                            </div>
                            <span>4.5</span>
                        </div>
                        <a href="">
                            <h5 class="card_2-title">Cours de transmission micro-ondes (BOUT à BOUT)</h5>
                        </a>
                        <div class="line_2_time">
                            <span class="time"><i class="bi bi-clock text-light  "></i> 20h</span>
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light  "> </i>10
                                licons</span>
                        </div>
                        <div class="line_2_price">
                            <span class="price fw-bold">149€</span>
                            <div class="formateur">
                                <span class="name">John Doe</span>
                                <img class="image_formateur" src="/Images/télécharger.jpeg" alt="adam" width="50"
                                    height="50">
                            </div>
                        </div>
                    </div>
                    <button class="button_commence"><a href=""></a>Commence</button>
                </div>
            </div>

            <!-- 3. modulation et codage -> radio -->
            <div class="col-auto cours-card mb-4" data-category="radio"
                data-keywords="modulation codage numerique analogique">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_communication/Cours en techniques de modulation et de codage.png"
                        class="card-img-top" style="height: 230px;"
                        alt=" Cours en techniques de modulation et de codage">
                    <div class="card-body">
                        <div class="line_star">
                            <span>(15)</span>
                            <div class="star_rating">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-half text-warning"></i>
                            </div>
                            <span>4.5</span>
                        </div>
                        <a href="">
                            <h5 class="card_2-title"> Cours en techniques de modulation et de codage</h5>
                        </a>
                        <div class="line_2_time">
                            <span class="time"><i class="bi bi-clock text-light  "></i> 180h</span>
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light  "> </i>96
                                licons</span>
                        </div>
                        <div class="line_2_price">
                            <span class="price fw-bold">299€</span>
                            <div class="formateur">
                                <span class="name">John Doe</span>
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50"
                                    height="50">
                            </div>
                        </div>
                    </div>
                    <button class="button_commence"><a href=""></a>Commence</button>
                </div>
            </div>

            <!-- 4. simulation systèmes sans fil -> radio -->
            <div class="col-auto mb-4 cours-card" data-category="radio"
                data-keywords="simulation systemes sans fil radio">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_communication/Cours en simulation de systèmes sans fil.png"
                        class="card-img-top" style="height: 235px;"
                        alt="  Cours en simulation de systèmes sans fil">
                    <div class="card-body">
                        <div class="line_star">
                            <span>(15)</span>
                            <div class="star_rating">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-half text-warning"></i>
                            </div>
                            <span>4.5</span>
                        </div>
                        <a href="">
                            <h5 class="card_2-title"> Cours en simulation de systèmes sans fil</h5>
                        </a>
                        <div class="line_2_time">
                            <span class="time"><i class="bi bi-clock text-light  "></i> 400h</span>
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light  "> </i>196
                                licons</span>
                        </div>
                        <div class="line_2_price">
                            <span class="price fw-bold">399€</span>
                            <div class="formateur">
                                <span class="name">John Doe</span>
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50"
                                    height="50">
                            </div>
                        </div>
                        <button class="button_commence"><a href=""></a>Commence</button>
                    </div>
                </div>
            </div>

            <!-- 5. Intro fibre -> fibre -->
            <div class="col-auto mb-4 cours-card" data-category="fibre"
                data-keywords="introduction fibre optique debutant ftth">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_communication/Cours  Introduction à la fibre optique pour débutants.png"
                        class="card-img-top" style="height: 235px;"
                        alt=" Cours : Introduction à la fibre optique pour débutants">
                    <div class="card-body">
                        <div class="line_star">
                            <span>(15)</span>
                            <div class="star_rating">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-half text-warning"></i>
                            </div>
                            <span>4.5</span>
                        </div>
                        <a href="">
                            <h5 class="card_2-title">Cours : Introduction à la fibre optique pour débutants</h5>
                        </a>
                        <div class="line_2_time">
                            <span class="time"><i class="bi bi-clock text-light "></i> 920h</span>
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light  "> </i>450
                                licons</span>
                        </div>
                        <div class="line_2_price">
                            <span class="price fw-bold">1199€</span>
                            <div class="formateur">
                                <span class="name">John Doe</span>
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50"
                                    height="50">
                            </div>
                        </div>
                        <button class="button_commence"><a href=""></a>Commence</button>
                    </div>
                </div>
            </div>

            <!-- 6. câbles sous-marins -> fibre -->
            <div class="col-auto mb-4 cours-card" data-category="fibre"
                data-keywords="cables sous marins fibre internationale">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_communication/Cours sur les câbles sous-marins.png" class="card-img-top"
                        style="height: 235px;" alt="   Cours sur les câbles sous-marins">
                    <div class="card-body">
                        <div class="line_star">
                            <span>(15)</span>
                            <div class="star_rating">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-half text-warning"></i>
                            </div>
                            <span>4.5</span>
                        </div>
                        <a href="">
                            <h5 class="card_2-title">Cours sur les câbles sous-marins</h5>
                        </a>
                        <div class="line_2_time">
                            <span class="time"><i class="bi bi-clock text-light  "></i> 400h</span>
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light  "> </i>150
                                licons</span>
                        </div>
                        <div class="line_2_price">
                            <span class="price fw-bold">399€</span>
                            <div class="formateur">
                                <span class="name">John Doe</span>
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50"
                                    height="50">
                            </div>
                        </div>
                    </div>
                    <button class="button_commence"><a href=""></a>Commence</button>
                </div>
            </div>

            <!-- 7. communications intégrées -> mobile (ou général, لكن نضعها mobile/telecom) -->
            <div class="col-auto mb-4 cours-card" data-category="mobile"
                data-keywords="communications integrees reseaux telecom">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_communication/Cours des communications intégrées.png"
                        class="card-img-top" alt=" Cours des communications intégrées" height="235">
                    <div class="card-body">
                        <div class="line_star">
                            <span>(15)</span>
                            <div class="star_rating">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-half text-warning"></i>
                            </div>
                            <span>4.5</span>
                        </div>
                        <a href="">
                            <h5 class="card_2-title"> Cours des communications intégrées</h5>
                        </a>
                        <div class="line_2_time">
                            <span class="time"><i class="bi bi-clock text-light"></i> 300h</span>
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light"> </i>130
                                licons</span>
                        </div>
                        <div class="line_2_price">
                            <span class="price fw-bold">499€</span>
                            <div class="formateur">
                                <span class="name">John Doe</span>
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50"
                                    height="50">
                            </div>
                        </div>
                        <button class="button_commence"><a href=""></a>Commence</button>
                    </div>
                </div>
            </div>

            <!-- 8. sans fil forfait mobile -> mobile -->
            <div class="col-auto mb-4 cours-card" data-category="mobile"
                data-keywords="sans fil forfait mobile bout a bout">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_communication/Cours sans fil (forfait mobile) BOUT à BOUT.png"
                        class="card-img-top" alt=" Cours sans fil (forfait mobile) BOUT à BOUT" height="235">
                    <div class="card-body">
                        <div class="line_star">
                            <span>(15)</span>
                            <div class="star_rating">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-half text-warning"></i>
                            </div>
                            <span>4.5</span>
                        </div>
                        <a href="">
                            <h5 class="card_2-title"> Cours sans fil (forfait mobile) BOUT à BOUT</h5>
                        </a>
                        <div class="line_2_time">
                            <span class="time"><i class="bi bi-clock text-light"></i> 2h</span>
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light"> </i>5
                                licons</span>
                        </div>
                        <div class="line_2_price">
                            <span class="price fw-bold">100€</span>
                            <div class="formateur">
                                <span class="name">John Doe</span>
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50"
                                    height="50">
                            </div>
                        </div>
                    </div>
                    <button class="button_commence"><a href=""></a>Commence</button>
                </div>
            </div>

            <!-- 9. transmission par fibre optique -> fibre -->
            <div class="col-auto mb-4 cours-card" data-category="fibre" data-keywords="transmission fibre optique">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_communication/Cours de transmission par fibre optique.png"
                        class="card-img-top" alt="  Cours de transmission par fibre optique" height="235">
                    <div class="card-body">
                        <div class="line_star">
                            <span>(15)</span>
                            <div class="star_rating">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-half text-warning"></i>
                            </div>
                            <span>4.5</span>
                        </div>
                        <a href="">
                            <h5 class="card_2-title"> Cours de transmission par fibre optique</h5>
                        </a>
                        <div class="line_2_time">
                            <span class="time"><i class="bi bi-clock text-light"></i> 2h</span>
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light"> </i>5
                                licons</span>
                        </div>
                        <div class="line_2_price">
                            <span class="price fw-bold">100€</span>
                            <div class="formateur">
                                <span class="name">John Doe</span>
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50"
                                    height="50">
                            </div>
                        </div>
                    </div>
                    <button class="button_commence"><a href=""></a>Commence</button>
                </div>
            </div>

            <!-- 10. Cœur 5G -> coeur5g -->
            <div class="col-auto mb-4 cours-card" data-category="coeur5g"
                data-keywords="coeur 5g architecture protocoles">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_communication/Cours Cœur 5G  Architecture, Protocoles et Déploiement.png"
                        class="card-img-top" alt="  Cours Cœur 5G | Architecture, Protocoles et Déploiement"
                        height="235">
                    <div class="card-body">
                        <div class="line_star">
                            <span>(15)</span>
                            <div class="star_rating">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-half text-warning"></i>
                            </div>
                            <span>4.5</span>
                        </div>
                        <a href="">
                            <h5 class="card_2-title"> Cours Cœur 5G | Architecture, Protocoles et Déploiement</h5>
                        </a>
                        <div class="line_2_time">
                            <span class="time"><i class="bi bi-clock text-light"></i> 2h</span>
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light"> </i>5
                                licons</span>
                        </div>
                        <div class="line_2_price">
                            <span class="price fw-bold">100€</span>
                            <div class="formateur">
                                <span class="name">John Doe</span>
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50"
                                    height="50">
                            </div>
                        </div>
                    </div>
                    <button class="button_commence"><a href=""></a>Commence</button>
                </div>
            </div>

            <!-- 11. communications satellitaires -> radio -->
            <div class="col-auto mb-4 cours-card" data-category="radio"
                data-keywords="communications satellitaires satellite liaisons">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_communication/Cours en communications satellitaires.png"
                        class="card-img-top" alt="  Cours en communications satellitaires" height="235">
                    <div class="card-body">
                        <div class="line_star">
                            <span>(15)</span>
                            <div class="star_rating">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-half text-warning"></i>
                            </div>
                            <span>4.5</span>
                        </div>
                        <a href="">
                            <h5 class="card_2-title"> Cours en communications satellitaires</h5>
                        </a>
                        <div class="line_2_time">
                            <span class="time"><i class="bi bi-clock text-light"></i> 2h</span>
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light"> </i>5
                                licons</span>
                        </div>
                        <div class="line_2_price">
                            <span class="price fw-bold">100€</span>
                            <div class="formateur">
                                <span class="name">John Doe</span>
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50"
                                    height="50">
                            </div>
                        </div>
                    </div>
                    <button class="button_commence"><a href=""></a>Commence</button>
                </div>
            </div>

            <!-- 12. Cours 5G complète -> coeur5g -->
            <div class="col-auto mb-4 cours-card" data-category="coeur5g"
                data-keywords="5g complete de a a z reseaux mobiles">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_communication/Cours 5G complète  de A à Z.png" class="card-img-top"
                        alt=" Cours 5G complète  de A à Z" height="235">
                    <div class="card-body">
                        <div class="line_star">
                            <span>(15)</span>
                            <div class="star_rating">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-half text-warning"></i>
                            </div>
                            <span>4.5</span>
                        </div>
                        <a href="">
                            <h5 class="card_2-title">Cours 5G complète <br> de A à Z</h5>
                        </a>
                        <div class="line_2_time">
                            <span class="time"><i class="bi bi-clock text-light"></i> 2h</span>
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light"> </i>5
                                licons</span>
                        </div>
                        <div class="line_2_price">
                            <span class="price fw-bold">100€</span>
                            <div class="formateur">
                                <span class="name">John Doe</span>
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50"
                                    height="50">
                            </div>
                        </div>
                    </div>
                    <button class="button_commence"><a href=""></a>Commence</button>
                </div>
            </div>

        </div>

        <div class="button_voir">
            <a href="#"><button> Toutes les formations</button></a>
        </div>
    </section>

</main>
<?php
include __DIR__ . '/footer.php';
?>