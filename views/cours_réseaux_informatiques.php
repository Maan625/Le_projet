<?php
include __DIR__ . '/header.php';
?>
<main class="main_cours_2">

    <div class="présentation_du_cours ">
        <h1 class="titre_cours text-center">Nos cours en réseaux informatiques</h1>
        <p class="para_cours text-center">
            Maîtrisez les bases et l’administration des réseaux : cœur de réseau, routage, sans fil, IoT,
            sécurité et certifications professionnelles. Progressez pas à pas vers un profil d’administrateur
            ou d’ingénieur réseau.
        </p>
    </div>

    <!-- 🟦 BARRE DE FILTRE -->
    <section class="py-3 bg-light border-top mt-2">
        <div class="container d-flex flex-wrap gap-2 justify-content-center">
            <span class="fw-semibold me-2">Filtrer les cours :</span>
            <button class="btn btn-sm btn-outline-dark active cours-filter-btn" data-filter="all">
                Tous
            </button>
            <button class="btn btn-sm btn-outline-dark cours-filter-btn" data-filter="coeur">
                Cœur de réseau & backbone
            </button>
            <button class="btn btn-sm btn-outline-dark cours-filter-btn" data-filter="mobiles">
                Réseaux mobiles & IBS
            </button>
            <button class="btn btn-sm btn-outline-dark cours-filter-btn" data-filter="entreprise">
                Réseaux d’entreprise
            </button>
            <button class="btn btn-sm btn-outline-dark cours-filter-btn" data-filter="certif">
                Certifications (CCNA/CCNP/A+)
            </button>
            <button class="btn btn-sm btn-outline-dark cours-filter-btn" data-filter="outils">
                Outils & administration
            </button>
            <button class="btn btn-sm btn-outline-dark cours-filter-btn" data-filter="iotvoip">
                IoT & VoIP
            </button>
        </div>
    </section>

    <section class="section_accueil mt-4">
        <div class="row mx-md-auto  justify-content-md-around  justify-content-center text-sm-center">

            <!-- 1. Cœur de réseau -->
            <div class="col-auto mb-4 cours-card"
                data-category="coeur"
                data-keywords="coeur reseau backbone telecom core">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_réseaux_informatiques/Cours sur le cœur de réseau.png"
                        class="card-img-top" style="height: 230px;" alt=" Cours sur le cœur de réseau">
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
                            <h5 class="card_2-title"> Cours sur le cœur <br> de réseau</h5>
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
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50" height="50">
                            </div>
                        </div>
                    </div>
                    <button class="button_commence"><a href=""></a>Commence</button>
                </div>
            </div>

            <!-- 2. réseaux mobiles terrain -->
            <div class="col-auto mb-4 cours-card"
                data-category="mobiles"
                data-keywords="reseaux mobiles technicien terrain radio cellule">
                <div class="card_2 mx-auto" style="width: 18rem">
                    <img src="/Images/cours_réseaux_informatiques/Cours aux réseaux mobiles pour technicien de terrain.png"
                        class="card-img-top" alt="  Cours aux réseaux mobiles pour technicien de terrain"
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
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light  "> </i>10
                                licons</span>
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

            <!-- 3. Pathloss -> outils -->
            <div class="col-auto cours-card mb-4"
                data-category="outils"
                data-keywords="pathloss logiciel planification radio micro ondes">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_réseaux_informatiques/Cours au logiciel Pathloss.png"
                        class="card-img-top" style="height: 230px;" alt=" Cours au logiciel Pathloss">
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
                            <h5 class="card_2-title  "> Cours au logiciel <br> Pathloss</h5>
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
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50" height="50">
                            </div>
                        </div>
                    </div>
                    <button class="button_commence"><a href=""></a>Commence</button>
                </div>
            </div>

            <!-- 4. A+ technologies de l'info -> certif -->
            <div class="col-auto mb-4 cours-card"
                data-category="certif"
                data-keywords="a+ technologies information hardware support">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_réseaux_informatiques/Cours A.png" class="card-img-top"
                        style="height: 235px;" alt="Cours  A+ en technologies de l'information">
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
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light  "> </i>196
                                licons</span>
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

            <!-- 5. réseaux d’entreprise avancés -> entreprise -->
            <div class="col-auto mb-4 cours-card"
                data-category="entreprise"
                data-keywords="reseaux entreprise routage commutation serveurs pare feu">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_réseaux_informatiques/Cours sur les réseaux d’entreprise avancés  routage, commutation, serveurs et pare-feu.png"
                        class="card-img-top" style="height: 235px;"
                        alt=" Cours sur les réseaux d’entreprise avancés : routage, commutation, serveurs et pare-feu">
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
                            <h5 class="card_2-title"> Cours sur les réseaux d’entreprise avancés </h5>
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
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50" height="50">
                            </div>
                        </div>
                        <button class="button_commence"><a href=""></a>Commence</button>
                    </div>
                </div>
            </div>

            <!-- 6. IBS -> mobiles -->
            <div class="col-auto mb-4 cours-card"
                data-category="mobiles"
                data-keywords="ibs indoor building solution couverture interieure">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_réseaux_informatiques/Cours sur les systèmes IBS (Indoor Building Solution) – niveaux 1 à 3.png"
                        class="card-img-top"
                        style="height: 235px;" alt=" Cours sur les systèmes IBS (Indoor Building Solution) – niveaux 1 à 3">
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
                            <h5 class="card_2-title"> Cours sur les systèmes IBS (Indoor Building Solution)</h5>
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
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50" height="50">
                            </div>
                        </div>
                    </div>
                    <button class="button_commence"><a href=""></a>Commence</button>
                </div>
            </div>

            <!-- 7. CCNA -> certif -->
            <div class="col-auto mb-4 cours-card"
                data-category="certif"
                data-keywords="ccna fondamentaux reseau cisco certification">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_réseaux_informatiques/Cours complet CCNA  Maîtrisez les fondamentaux du réseau.png"
                        class="card-img-top" alt=" Cours complet CCNA : Maîtrisez les fondamentaux du réseau" height="235">
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
                            <h5 class="card_2-title"> Cours complet CCNA:Maîtrisez les fondamentaux du réseau</h5>
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
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50" height="50">
                            </div>
                        </div>
                        <button class="button_commence"><a href=""></a>Commence</button>
                    </div>
                </div>
            </div>

            <!-- 8. CCNP -> certif -->
            <div class="col-auto mb-4 cours-card"
                data-category="certif"
                data-keywords="ccnp reseaux professionnels cisco certification">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_réseaux_informatiques/Cours complet CCNP – Préparation aux réseaux professionnels Cisco.png"
                        class="card-img-top" alt=" Cours complet CCNP – Préparation aux réseaux professionnels Cisco" height="235">
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
                            <h5 class="card_2-title"> Cours CCNP:Préparation aux réseaux professionnels Cisco</h5>
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
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50" height="50">
                            </div>
                        </div>
                    </div>
                    <button class="button_commence"><a href=""></a>Commence</button>
                </div>
            </div>

            <!-- 9. IoT -->
            <div class="col-auto mb-4 cours-card"
                data-category="iotvoip"
                data-keywords="iot internet des objets transformation digitale">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_réseaux_informatiques/iot.png"
                        class="card-img-top" alt="  Introduction à l’IoT (IdO) et à la transformation digitale" height="235">
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
                            <h5 class="card_2-title"> Introduction à l’IoT (IdO) et à la transformation digitale</h5>
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
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50" height="50">
                            </div>
                        </div>
                    </div>
                    <button class="button_commence"><a href=""></a>Commence</button>
                </div>
            </div>

            <!-- 10. cours avancés réseaux info -> entreprise -->
            <div class="col-auto mb-4 cours-card"
                data-category="entreprise"
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
                            <span class="liçon"><i class="bi bi-file-earmark-play text-light"> </i>5
                                licons</span>
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

            <!-- 11. MikroTik -> outils -->
            <div class="col-auto mb-4 cours-card"
                data-category="outils"
                data-keywords="mikrotik administration routage pratique">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_réseaux_informatiques/Cours MikroTik – Administration et routage pratique.png"
                        class="card-img-top" alt="Cours MikroTik – Administration et routage pratique" height="235">
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
                            <h5 class="card_2-title">Cours MikroTik :Administration et routage pratique</h5>
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
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50" height="50">
                            </div>
                        </div>
                    </div>
                    <button class="button_commence"><a href=""></a>Commence</button>
                </div>
            </div>

            <!-- 12. VoIP -> iotvoip -->
            <div class="col-auto mb-4 cours-card"
                data-category="iotvoip"
                data-keywords="voip telephonie ip sip rtp">
                <div class="card_2 mx-auto" style="width: 18rem;">
                    <img src="/Images/cours_réseaux_informatiques/Cours VoIP – De l’installation à la configuration avancée.png" class="card-img-top"
                        alt=" Cours VoIP – De l’installation à la configuration avancée" height="235">
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
                            <h5 class="card_2-title"> Cours VoIP – De l’installation à la configuration avancée</h5>
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
                                <img class="image_formateur" src="/Images/Adam.avif" alt="adam" width="50" height="50">
                            </div>
                        </div>
                    </div>
                    <button class="button_commence"><a href=""></a>Commence</button>
                </div>
            </div>

        </div>

        <div class="button_voir">
            <a href="Tous_les_cours.html"><button> Toutes les formations</button></a>
        </div>

    </section>
</main>

<?php
include __DIR__ . '/footer.php';
?>