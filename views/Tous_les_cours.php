 <?php
    include __DIR__ . '/header.php';
    ?>
    <main class="main_cours_2">

    <div class="présentation_du_cours ">
        <h1 class="titre_cours text-center">Tous les cours </h1>
        <p class="para_cours text-center">
            Parcourez tous nos cours en réseaux, télécommunications, 5G, fibre optique, IoT et VoIP.
            Utilisez le filtre ou la recherche pour trouver rapidement la formation qui vous correspond.
        </p>
    </div>

    <!-- 🔍 FILTRE + RECHERCHE -->
    <section class="py-3 bg-light border-top mt-2">
        <div class="container">
            <div class="row g-3 align-items-center">
                <div class="col-lg-8">
                    <div class="d-flex flex-wrap gap-2 align-items-center">
                        <span class="fw-semibold me-2">Filtrer par thème :</span>
                        <button class="btn btn-sm btn-outline-dark active tous-cours-filter-btn" data-filter="all">
                            Tous
                        </button>
                        <button class="btn btn-sm btn-outline-dark tous-cours-filter-btn" data-filter="coeur5g">
                            5G & cœur de réseau
                        </button>
                        <button class="btn btn-sm btn-outline-dark tous-cours-filter-btn" data-filter="mobiles">
                            Réseaux mobiles & sans fil
                        </button>
                        <button class="btn btn-sm btn-outline-dark tous-cours-filter-btn" data-filter="fibre">
                            Fibre & câbles
                        </button>
                        <button class="btn btn-sm btn-outline-dark tous-cours-filter-btn" data-filter="satellite">
                            Satellites
                        </button>
                        <button class="btn btn-sm btn-outline-dark tous-cours-filter-btn" data-filter="reseaux">
                            Réseaux d’entreprise
                        </button>
                        <button class="btn btn-sm btn-outline-dark tous-cours-filter-btn" data-filter="certif">
                            Certifications
                        </button>
                        <button class="btn btn-sm btn-outline-dark tous-cours-filter-btn" data-filter="iotvoip">
                            IoT & VoIP
                        </button>
                        <button class="btn btn-sm btn-outline-dark tous-cours-filter-btn" data-filter="outils">
                            Outils & logiciels
                        </button>
                    </div>
                </div>
                <div class="col-lg-4">
                    <label for="tous-cours-search" class="form-label fw-semibold mb-1">
                        Rechercher un cours
                    </label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-search"></i></span>
                        <input type="search" id="tous-cours-search" class="form-control"
                               placeholder="Ex : 5G, fibre, CCNA, IoT…">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 🟦 LISTE DE TOUS LES COURS -->
    <section class="section_tous_accueil mt-4">
        <div class="row mx-md-auto justify-content-md-around justify-content-center text-sm-center">

            <!-- 1. Cœur 5G -->
            <div class="col-auto mb-4 tous-cours-card"
                 data-category="coeur5g"
                 data-keywords="coeur 5g architecture protocoles noyau reseau mobile">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_communication/Cours Cœur 5G  Architecture, Protocoles et Déploiement.png"
                         class="card-img-top" alt="Cours Cœur 5G | Architecture, Protocoles et Déploiement"
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
                            <h5 class="card_2-title">Cours Cœur 5G | Architecture, Protocoles et Déploiement</h5>
                        </a>
                        <div class="line_2_time">
                            <span class="time"><i class="bi bi-clock text-light"></i> 2h</span>
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light"> </i>5 licons</span>
                        </div>
                        <div class="line_2_price">
                            <span class="price fw-bold">100€</span>
                            <div class="formateur">
                                <span class="name">John Doe</span>
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50" height="50">
                            </div>
                        </div>
                    </div>
                    <button class="button_commence"><a href=""></a>Commence</button>
                </div>
            </div>

            <!-- 2. Satellites -->
            <div class="col-auto mb-4 tous-cours-card"
                 data-category="satellite"
                 data-keywords="communications satellitaires satellite liaison reseaux">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_communication/Cours en communications satellitaires.png"
                         class="card-img-top" alt="Cours en communications satellitaires"
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
                            <h5 class="card_2-title">Cours en communications satellitaires</h5>
                        </a>
                        <div class="line_2_time">
                            <span class="time"><i class="bi bi-clock text-light"></i> 2h</span>
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light"> </i>5 licons</span>
                        </div>
                        <div class="line_2_price">
                            <span class="price fw-bold">100€</span>
                            <div class="formateur">
                                <span class="name">John Doe</span>
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50" height="50">
                            </div>
                        </div>
                    </div>
                    <button class="button_commence"><a href=""></a>Commence</button>
                </div>
            </div>

            <!-- 3. 5G complète -->
            <div class="col-auto mb-4 tous-cours-card"
                 data-category="coeur5g"
                 data-keywords="5g complete de a a z reseaux mobiles">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_communication/Cours 5G complète  de A à Z.png"
                         class="card-img-top" alt="Cours 5G complète de A à Z"
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
                            <h5 class="card_2-title">Cours 5G complète <br> de A à Z</h5>
                        </a>
                        <div class="line_2_time">
                            <span class="time"><i class="bi bi-clock text-light"></i> 2h</span>
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light"> </i>5 licons</span>
                        </div>
                        <div class="line_2_price">
                            <span class="price fw-bold">100€</span>
                            <div class="formateur">
                                <span class="name">John Doe</span>
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50" height="50">
                            </div>
                        </div>
                    </div>
                    <button class="button_commence"><a href=""></a>Commence</button>
                </div>
            </div>

            <!-- 4. cœur de réseau -->
            <div class="col-auto mb-4 tous-cours-card"
                 data-category="coeur5g"
                 data-keywords="coeur reseau backbone telecom core">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_réseaux_informatiques/Cours sur le cœur de réseau.png"
                         class="card-img-top" style="height: 230px;" alt="Cours sur le cœur de réseau">
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
                            <h5 class="card_2-title">Cours sur le cœur <br> de réseau</h5>
                        </a>
                        <div class="line_2_time">
                            <span class="time"><i class="bi bi-clock text-light  "></i> 6h</span>
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light  "> </i>3 licons</span>
                        </div>
                        <div class="line_2_price">
                            <span class="price fw-bold">90€</span>
                            <div class="formateur">
                                <span class="name">John Doe</span>
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50" height="50">
                            </div>
                        </div>
                    </div>
                    <button class="button_commence"><a href=""></a>Commence</button>
                </div>
            </div>

            <!-- 5. réseaux mobiles technicien -->
            <div class="col-auto mb-4 tous-cours-card"
                 data-category="mobiles"
                 data-keywords="reseaux mobiles technicien terrain radio cellule">
                <div class="card_2 mx-auto" style="width: 18rem">
                    <img src="/Images/cours_réseaux_informatiques/Cours aux réseaux mobiles pour technicien de terrain.png"
                         class="card-img-top" alt="Cours aux réseaux mobiles pour technicien de terrain"
                         height="230">
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
                            <h5 class="card_2-title">Cours aux réseaux mobiles pour technicien de terrain</h5>
                        </a>
                        <div class="line_2_time">
                            <span class="time"><i class="bi bi-clock text-light  "></i> 20h</span>
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light  "> </i>10 licons</span>
                        </div>
                        <div class="line_2_price">
                            <span class="price fw-bold">149€</span>
                            <div class="formateur">
                                <span class="name">John Doe</span>
                                <img class="image_formateur" src="/Images/télécharger.jpeg" alt="adam" width="50" height="50">
                            </div>
                        </div>
                    </div>
                    <button class="button_commence"><a href=""></a>Commence</button>
                </div>
            </div>

            <!-- 6. Pathloss -> outils -->
            <div class="col-auto tous-cours-card mb-4"
                 data-category="outils"
                 data-keywords="pathloss logiciel planification radio micro ondes">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_réseaux_informatiques/Cours au logiciel Pathloss.png"
                         class="card-img-top" style="height: 230px;" alt="Cours au logiciel Pathloss">
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
                            <h5 class="card_2-title">Cours au logiciel <br> Pathloss</h5>
                        </a>
                        <div class="line_2_time">
                            <span class="time"><i class="bi bi-clock text-light  "></i> 180h</span>
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light  "> </i>96 licons</span>
                        </div>
                        <div class="line_2_price">
                            <span class="price fw-bold">299€</span>
                            <div class="formateur">
                                <span class="name">John Doe</span>
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50" height="50">
                            </div>
                        </div>
                    </div>
                    <button class="button_commence"><a href=""></a>Commence</button>
                </div>
            </div>

            <!-- 7. communications intégrées -> reseaux -->
            <div class="col-auto mb-4 tous-cours-card"
                 data-category="reseaux"
                 data-keywords="communications integrees reseaux telecom entreprise">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_communication/Cours des communications intégrées.png"
                         class="card-img-top" alt="Cours des communications intégrées" height="235">
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
                            <h5 class="card_2-title">Cours des communications intégrées</h5>
                        </a>
                        <div class="line_2_time">
                            <span class="time"><i class="bi bi-clock text-light"></i> 300h</span>
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light"> </i>130 licons</span>
                        </div>
                        <div class="line_2_price">
                            <span class="price fw-bold">499€</span>
                            <div class="formateur">
                                <span class="name">John Doe</span>
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50" height="50">
                            </div>
                        </div>
                        <button class="button_commence"><a href=""></a>Commence</button>
                    </div>
                </div>
            </div>

            <!-- 8. sans fil forfait mobile -> mobiles -->
            <div class="col-auto mb-4 tous-cours-card"
                 data-category="mobiles"
                 data-keywords="sans fil forfait mobile bout a bout reseaux mobiles">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_communication/Cours sans fil (forfait mobile) BOUT à BOUT.png"
                         class="card-img-top" alt="Cours sans fil (forfait mobile) BOUT à BOUT"
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
                            <h5 class="card_2-title">Cours sans fil (forfait mobile) BOUT à BOUT</h5>
                        </a>
                        <div class="line_2_time">
                            <span class="time"><i class="bi bi-clock text-light"></i> 2h</span>
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light"> </i>5 licons</span>
                        </div>
                        <div class="line_2_price">
                            <span class="price fw-bold">100€</span>
                            <div class="formateur">
                                <span class="name">John Doe</span>
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50" height="50">
                            </div>
                        </div>
                    </div>
                    <button class="button_commence"><a href=""></a>Commence</button>
                </div>
            </div>

            <!-- 9. transmission fibre optique -> fibre -->
            <div class="col-auto mb-4 tous-cours-card"
                 data-category="fibre"
                 data-keywords="transmission fibre optique reseaux optiques">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_communication/Cours de transmission par fibre optique.png"
                         class="card-img-top" alt="Cours de transmission par fibre optique"
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
                            <h5 class="card_2-title">Cours de transmission par fibre optique</h5>
                        </a>
                        <div class="line_2_time">
                            <span class="time"><i class="bi bi-clock text-light"></i> 2h</span>
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light"> </i>5 licons</span>
                        </div>
                        <div class="line_2_price">
                            <span class="price fw-bold">100€</span>
                            <div class="formateur">
                                <span class="name">John Doe</span>
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50" height="50">
                            </div>
                        </div>
                    </div>
                    <button class="button_commence"><a href=""></a>Commence</button>
                </div>
            </div>

            <!-- 10. simulation sans fil -> mobiles -->
            <div class="col-auto mb-4 tous-cours-card"
                 data-category="mobiles"
                 data-keywords="simulation systemes sans fil radio reseaux mobiles">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_communication/Cours en simulation de systèmes sans fil.png"
                         class="card-img-top" style="height: 235px;" alt="Cours en simulation de systèmes sans fil">
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
                            <h5 class="card_2-title">Cours en simulation de systèmes sans fil</h5>
                        </a>
                        <div class="line_2_time">
                            <span class="time"><i class="bi bi-clock text-light  "></i> 400h</span>
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light  "> </i>196 licons</span>
                        </div>
                        <div class="line_2_price">
                            <span class="price fw-bold">399€</span>
                            <div class="formateur">
                                <span class="name">John Doe</span>
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50" height="50">
                            </div>
                        </div>
                        <button class="button_commence"><a href=""></a>Commence</button>
                    </div>
                </div>
            </div>

            <!-- 11. Introduction fibre débutants -> fibre -->
            <div class="col-auto mb-4 tous-cours-card"
                 data-category="fibre"
                 data-keywords="introduction fibre optique debutants ftth">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_communication/Cours  Introduction à la fibre optique pour débutants.png"
                         class="card-img-top" style="height: 235px;"
                         alt="Cours : Introduction à la fibre optique pour débutants">
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
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light  "> </i>450 licons</span>
                        </div>
                        <div class="line_2_price">
                            <span class="price fw-bold">1199€</span>
                            <div class="formateur">
                                <span class="name">John Doe</span>
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50" height="50">
                            </div>
                        </div>
                        <button class="button_commence"><a href=""></a>Commence</button>
                    </div>
                </div>
            </div>

            <!-- 12. câbles sous-marins -> fibre -->
            <div class="col-auto mb-4 tous-cours-card"
                 data-category="fibre"
                 data-keywords="cables sous marins fibre internationale backbone">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_communication/Cours sur les câbles sous-marins.png"
                         class="card-img-top" style="height: 235px;" alt="Cours sur les câbles sous-marins">
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
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light  "> </i>150 licons</span>
                        </div>
                        <div class="line_2_price">
                            <span class="price fw-bold">399€</span>
                            <div class="formateur">
                                <span class="name">John Doe</span>
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50" height="50">
                            </div>
                        </div>
                    </div>
                    <button class="button_commence"><a href=""></a>Commence</button>
                </div>
            </div>

            <!-- 13. A+ -> certif -->
            <div class="col-auto mb-4 tous-cours-card"
                 data-category="certif"
                 data-keywords="a+ technologies information hardware support certification">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_réseaux_informatiques/Cours A.png"
                         class="card-img-top" style="height: 235px;" alt="Cours A+ en technologies de l'information">
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
                            <h5 class="card_2-title">Cours A+ en technologies de l'information</h5>
                        </a>
                        <div class="line_2_time">
                            <span class="time"><i class="bi bi-clock text-light  "></i> 400h</span>
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light  "> </i>196 licons</span>
                        </div>
                        <div class="line_2_price">
                            <span class="price fw-bold">399€</span>
                            <div class="formateur">
                                <span class="name">John Doe</span>
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50" height="50">
                            </div>
                        </div>
                        <button class="button_commence"><a href=""></a>Commence</button>
                    </div>
                </div>
            </div>

            <!-- 14. réseaux entreprise avancés -> reseaux -->
            <div class="col-auto mb-4 tous-cours-card"
                 data-category="reseaux"
                 data-keywords="reseaux entreprise avancés routage commutation serveurs pare feu">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_réseaux_informatiques/Cours sur les réseaux d’entreprise avancés  routage, commutation, serveurs et pare-feu.png"
                         class="card-img-top" style="height: 235px;"
                         alt="Cours sur les réseaux d’entreprise avancés : routage, commutation, serveurs et pare-feu">
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
                            <h5 class="card_2-title">Cours sur les réseaux d’entreprise avancés</h5>
                        </a>
                        <div class="line_2_time">
                            <span class="time"><i class="bi bi-clock text-light "></i> 920h</span>
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light  "> </i>450 licons</span>
                        </div>
                        <div class="line_2_price">
                            <span class="price fw-bold">1199€</span>
                            <div class="formateur">
                                <span class="name">John Doe</span>
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50" height="50">
                            </div>
                        </div>
                        <button class="button_commence"><a href=""></a>Commence</button>
                    </div>
                </div>
            </div>

            <!-- 15. IBS -> mobiles -->
            <div class="col-auto mb-4 tous-cours-card"
                 data-category="mobiles"
                 data-keywords="ibs indoor building solution couverture interieure reseaux mobiles">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_réseaux_informatiques/Cours sur les systèmes IBS (Indoor Building Solution) – niveaux 1 à 3.png"
                         class="card-img-top" style="height: 235px;"
                         alt="Cours sur les systèmes IBS (Indoor Building Solution) – niveaux 1 à 3">
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
                            <h5 class="card_2-title">Cours sur les systèmes IBS (Indoor Building Solution)</h5>
                        </a>
                        <div class="line_2_time">
                            <span class="time"><i class="bi bi-clock text-light  "></i> 400h</span>
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light  "> </i>150 licons</span>
                        </div>
                        <div class="line_2_price">
                            <span class="price fw-bold">399€</span>
                            <div class="formateur">
                                <span class="name">John Doe</span>
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50" height="50">
                            </div>
                        </div>
                        <button class="button_commence"><a href=""></a>Commence</button>
                    </div>
                </div>
            </div>

            <!-- 16. accès mobile coeur réseau -> mobiles -->
            <div class="col-auto mb-4 tous-cours-card"
                 data-category="mobiles"
                 data-keywords="acces mobile coeur reseau 4g 5g telecom">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_communication/Cours de l'accès mobile au cœur du réseau.png"
                         class="card-img-top" style="height: 230px;"
                         alt="Cours de l'accès mobile au cœur du réseau">
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
                            <h5 class="card_2-title">Cours de l'accès mobile <br>au cœur du réseau</h5>
                        </a>
                        <div class="line_2_time">
                            <span class="time"><i class="bi bi-clock text-light  "></i> 6h</span>
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light  "> </i>3 licons</span>
                        </div>
                        <div class="line_2_price">
                            <span class="price fw-bold">90€</span>
                            <div class="formateur">
                                <span class="name">John Doe</span>
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50" height="50">
                            </div>
                        </div>
                    </div>
                    <button class="button_commence"><a href=""></a>Commence</button>
                </div>
            </div>

            <!-- 17. micro-ondes -> mobiles -->
            <div class="col-auto mb-4 tous-cours-card"
                 data-category="mobiles"
                 data-keywords="micro ondes faisceaux hertziens transmission bout a bout">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_communication/Cours de transmission micro-ondes (BOUT à BOUT).png"
                         class="card-img-top" alt="Cours de transmission micro-ondes (BOUT à BOUT)"
                         height="230">
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
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light  "> </i>10 licons</span>
                        </div>
                        <div class="line_2_price">
                            <span class="price fw-bold">149€</span>
                            <div class="formateur">
                                <span class="name">John Doe</span>
                                <img class="image_formateur" src="/Images/télécharger.jpeg" alt="adam" width="50" height="50">
                            </div>
                        </div>
                    </div>
                    <button class="button_commence"><a href=""></a>Commence</button>
                </div>
            </div>

            <!-- 18. modulation & codage -> mobiles -->
            <div class="col-auto tous-cours-card mb-4"
                 data-category="mobiles"
                 data-keywords="modulation codage numerique analogique communications">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_communication/Cours en techniques de modulation et de codage.png"
                         class="card-img-top" style="height: 230px;" alt="Cours en techniques de modulation et de codage">
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
                            <h5 class="card_2-title">Cours en techniques de modulation et de codage</h5>
                        </a>
                        <div class="line_2_time">
                            <span class="time"><i class="bi bi-clock text-light  "></i> 180h</span>
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light  "> </i>96 licons</span>
                        </div>
                        <div class="line_2_price">
                            <span class="price fw-bold">299€</span>
                            <div class="formateur">
                                <span class="name">John Doe</span>
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50" height="50">
                            </div>
                        </div>
                    </div>
                    <button class="button_commence"><a href=""></a>Commence</button>
                </div>
            </div>

            <!-- 19. CCNA -> certif -->
            <div class="col-auto mb-4 tous-cours-card"
                 data-category="certif"
                 data-keywords="ccna fondamentaux reseau cisco certification">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_réseaux_informatiques/Cours complet CCNA  Maîtrisez les fondamentaux du réseau.png"
                         class="card-img-top" alt="Cours complet CCNA : Maîtrisez les fondamentaux du réseau"
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
                            <h5 class="card_2-title">Cours complet CCNA : Maîtrisez les fondamentaux du réseau</h5>
                        </a>
                        <div class="line_2_time">
                            <span class="time"><i class="bi bi-clock text-light"></i> 300h</span>
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light"> </i>130 licons</span>
                        </div>
                        <div class="line_2_price">
                            <span class="price fw-bold">499€</span>
                            <div class="formateur">
                                <span class="name">John Doe</span>
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50" height="50">
                            </div>
                        </div>
                        <button class="button_commence"><a href=""></a>Commence</button>
                    </div>
                </div>
            </div>

            <!-- 20. CCNP -> certif -->
            <div class="col-auto mb-4 tous-cours-card"
                 data-category="certif"
                 data-keywords="ccnp reseaux professionnels cisco certification">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_réseaux_informatiques/Cours complet CCNP – Préparation aux réseaux professionnels Cisco.png"
                         class="card-img-top" alt="Cours complet CCNP – Préparation aux réseaux professionnels Cisco"
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
                            <h5 class="card_2-title">Cours CCNP : Préparation aux réseaux professionnels Cisco</h5>
                        </a>
                        <div class="line_2_time">
                            <span class="time"><i class="bi bi-clock text-light"></i> 2h</span>
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light"> </i>5 licons</span>
                        </div>
                        <div class="line_2_price">
                            <span class="price fw-bold">100€</span>
                            <div class="formateur">
                                <span class="name">John Doe</span>
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50" height="50">
                            </div>
                        </div>
                        <button class="button_commence"><a href=""></a>Commence</button>
                    </div>
                </div>
            </div>

            <!-- 21. IoT -> iotvoip -->
            <div class="col-auto mb-4 tous-cours-card"
                 data-category="iotvoip"
                 data-keywords="iot internet des objets transformation digitale">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_réseaux_informatiques/iot.png"
                         class="card-img-top" alt="Introduction à l’IoT (IdO) et à la transformation digitale"
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
                            <h5 class="card_2-title">Introduction à l’IoT (IdO) et à la transformation digitale</h5>
                        </a>
                        <div class="line_2_time">
                            <span class="time"><i class="bi bi-clock text-light"></i> 2h</span>
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light"> </i>5 licons</span>
                        </div>
                        <div class="line_2_price">
                            <span class="price fw-bold">100€</span>
                            <div class="formateur">
                                <span class="name">John Doe</span>
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50" height="50">
                            </div>
                        </div>
                    </div>
                    <button class="button_commence"><a href=""></a>Commence</button>
                </div>
            </div>

            <!-- 22. avancée réseaux info -> reseaux -->
            <div class="col-auto mb-4 tous-cours-card"
                 data-category="reseaux"
                 data-keywords="cours avance reseaux informatiques switching routage">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_réseaux_informatiques/Cours avencée en réseaux informatiques.png"
                         class="card-img-top" alt="Cours avancée en réseaux informatiques"
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
                            <h5 class="card_2-title">Cours avancée en réseaux informatiques</h5>
                        </a>
                        <div class="line_2_time">
                            <span class="time"><i class="bi bi-clock text-light"></i> 2h</span>
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light"> </i>5 licons</span>
                        </div>
                        <div class="line_2_price">
                            <span class="price fw-bold">100€</span>
                            <div class="formateur">
                                <span class="name">John Doe</span>
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50" height="50">
                            </div>
                        </div>
                    </div>
                    <button class="button_commence"><a href=""></a>Commence</button>
                </div>
            </div>

            <!-- 23. MikroTik -> outils -->
            <div class="col-auto mb-4 tous-cours-card"
                 data-category="outils"
                 data-keywords="mikrotik administration routage pratique">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_réseaux_informatiques/Cours MikroTik – Administration et routage pratique.png"
                         class="card-img-top" alt="Cours MikroTik – Administration et routage pratique"
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
                            <h5 class="card_2-title">Cours MikroTik : Administration et routage pratique</h5>
                        </a>
                        <div class="line_2_time">
                            <span class="time"><i class="bi bi-clock text-light"></i> 2h</span>
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light"> </i>5 licons</span>
                        </div>
                        <div class="line_2_price">
                            <span class="price fw-bold">100€</span>
                            <div class="formateur">
                                <span class="name">John Doe</span>
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50" height="50">
                            </div>
                        </div>
                    </div>
                    <button class="button_commence"><a href=""></a>Commence</button>
                </div>
            </div>

            <!-- 24. VoIP -> iotvoip -->
            <div class="col-auto mb-4 tous-cours-card"
                 data-category="iotvoip"
                 data-keywords="voip telephonie ip sip rtp">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_réseaux_informatiques/Cours VoIP – De l’installation à la configuration avancée.png"
                         class="card-img-top" alt="Cours VoIP – De l’installation à la configuration avancée"
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
                            <h5 class="card_2-title">Cours VoIP – De l’installation à la configuration avancée</h5>
                        </a>
                        <div class="line_2_time">
                            <span class="time"><i class="bi bi-clock text-light"></i> 2h</span>
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light"> </i>5 licons</span>
                        </div>
                        <div class="line_2_price">
                            <span class="price fw-bold">100€</span>
                            <div class="formateur">
                                <span class="name">John Doe</span>
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50" height="50">
                            </div>
                        </div>
                    </div>
                    <button class="button_commence"><a href=""></a>Commence</button>
                </div>
            </div>

        </div>
    </section>
</main>
<?php
   include __DIR__ . '/footer.php';
   ?>