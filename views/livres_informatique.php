 <?php
    include __DIR__ . '/header.php';
    ?>
 <main id="main">

     <!-- HERO -->
     <section class="section_présentation py-5 text-white ">
         <div class="container ">
             <div class="row align-items-center g-4">
                 <div class="col-lg-8">
                     <h1 class="display-5 fw-bold mb-3">Livres en réseaux & télécommunications</h1>
                     <p class="lead mb-0">
                         Une bibliothèque de ressources pour approfondir les réseaux informatiques,
                         la fibre optique, la 5G, le Wi-Fi, l’IoT et la sécurité des télécommunications.
                     </p>
                 </div>
                 <div class="col-lg-4">
                     <label for="livres-search" class="form-label fw-semibold">
                         Rechercher un livre
                     </label>
                     <div class="input-group">
                         <span class="input-group-text"><i class="bi bi-search"></i></span>
                         <input type="search" id="livres-search" class="form-control"
                             placeholder="Ex : TCP/IP, fibre, 5G, Wi-Fi…">
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <!-- FILTRES -->
     <section class=" section_filter py-3  border-top">
         <div class="container d-flex flex-wrap gap-2 align-items-center">
             <span class="fw-semibold me-2">Filtrer par thème :</span>
             <button class="btn_filter btn btn-sm btn-outline-dark active livre-filter-btn" data-filter="all">
                 Tous
             </button>
             <button class="btn_filter btn btn-sm btn-outline-dark livre-filter-btn" data-filter="bases">
                 Bases réseaux
             </button>
             <button class="btn_filter btn btn-sm btn-outline-dark livre-filter-btn" data-filter="fibre">
                 Fibre optique
             </button>
             <button class="btn_filter btn   btn-sm btn-outline-dark livre-filter-btn" data-filter="5g">
                 5G & mobiles
             </button>
             <button class="btn_filter btn btn-sm btn-outline-dark livre-filter-btn" data-filter="wifi">
                 Wi-Fi & sans fil
             </button>
             <button class="btn_filter btn btn-sm btn-outline-dark livre-filter-btn" data-filter="securite">
                 Sécurité réseau
             </button>
             <button class="btn_filter btn btn-sm btn-outline-dark livre-filter-btn" data-filter="iot">
                 IoT & télécoms avancées
             </button>
         </div>
     </section>

     <!-- LISTE DES LIVRES -->
     <section class=" section_livres py-5  bg-opacity-10">
         <div class="container">

             <div class="row g-4" id="livres-list">

                 <!-- 1. Bases réseaux -->
                 <div class="col-md-6 col-lg-4 livre-card" data-category="bases"
                     data-keywords="reseaux fondamentaux osi tcp ip switch routage">
                     <div class="card shadow-sm border-0 book-card">
                         <img src="/Images/images_livres/OIP.webp" class="card-img-top object-fit-cover book-cover"
                             alt="Réseaux informatiques – Les fondamentaux" style="height: 500px;">
                         <div class="card-body d-flex flex-column">
                             <h3 class="h5 fw-bold">Réseaux informatiques – Les fondamentaux</h3>
                             <p class="text small mb-2">Niveau : débutant à intermédiaire</p>
                             <p class="mb-3">
                                 Un parcours complet pour comprendre le modèle OSI, TCP/IP, les
                                 topologies, le switching et les bases du routage.
                             </p>
                             <a href="livres/reseaux-fondamentaux.pdf"
                                 class=" btn_télécharger btn btn-accent mx-auto w-50" download>
                                 Télécharger
                             </a>
                         </div>
                     </div>
                 </div>

                 <!-- 2. TCP/IP & protocoles -->
                 <div class="col-md-6 col-lg-4 livre-card" data-category="bases"
                     data-keywords="tcp ip protocoles dns http dhcp adressage sous reseaux">
                     <div class="card  shadow-sm border-0 book-card">
                         <img src="/Images/images_livres/OIP (1).webp" class="card-img-top book-cover"
                             alt="TCP/IP en pratique" style="height: 500px;">
                         <div class="card-body d-flex flex-column">
                             <h3 class="h5 fw-bold">TCP/IP en pratique <br> et protocoles</h3>
                             <p class="text small mb-2">Niveau : intermédiaire</p>
                             <p class="mb-3">
                                 Adressage, sous-réseaux, DNS, DHCP, HTTP… un guide concret pour
                                 maîtriser la pile TCP/IP dans les réseaux modernes.
                             </p>
                             <a href="livres/reseaux-fondamentaux.pdf"
                                 class=" btn_télécharger btn btn-accent mx-auto w-50" download>
                                 Télécharger
                             </a>
                         </div>
                     </div>
                 </div>

                 <!-- 3. Routage & commutation -->
                 <div class="col-md-6 col-lg-4 livre-card" data-category="bases"
                     data-keywords="routage switching vlan ospf rip stp">
                     <div class="card h-100 shadow-sm border-0 book-card">
                         <img src="/Images/images_livres/routage & commutation.webp" class="card-img-top book-cover"
                             alt="Routage et commutation Ethernet avancés" style="height: 500px;">
                         <div class="card-body d-flex flex-column">
                             <h3 class="h5 fw-bold">Routage & commutation Ethernet</h3>
                             <p class="text small mb-2">Niveau : intermédiaire</p>
                             <p class="mb-3">
                                 Concepts de VLAN, trunk, Spanning Tree, routage statique et
                                 dynamique avec des exemples de configurations.
                             </p>
                             <a href="livres/reseaux-fondamentaux.pdf"
                                 class=" btn_télécharger btn btn-accent mx-auto w-50" download>
                                 Télécharger
                             </a>
                         </div>
                     </div>
                 </div>

                 <!-- 4. Fibre optique -->
                 <div class="col-md-6 col-lg-4 livre-card" data-category="fibre"
                     data-keywords="fibre optique ftth otdr epissure pon">
                     <div class="card h-100 shadow-sm border-0 book-card">
                         <img src="/Images/images_livres/Optique-guidee.jpg" class="card-img-top book-cover"
                             alt="Guide fibre optique" style="height: 500px;">
                         <div class="card-body d-flex flex-column">
                             <h3 class="h5 fw-bold">Guide pratique de la fibre FTTH</h3>
                             <p class="text small mb-2">Niveau : technicien</p>
                             <p class="mb-3">
                                 Architecture FTTH, soudures, mesures OTDR, PON et bonnes pratiques
                                 d’installation sur le terrain.
                             </p>
                             <a href="Images/acces a la vie hover.png"
                                 class=" btn_télécharger btn btn-accent mx-auto w-50" download>
                                 Télécharger
                             </a>
                         </div>
                     </div>
                 </div>

                 <!-- 5. Transmission optique avancée -->
                 <div class="col-md-6 col-lg-4 livre-card" data-category="fibre"
                     data-keywords="dwdm transmission optique longue distance metro">
                     <div class="card h-100 shadow-sm border-0 book-card">
                         <img src="/Images/images_livres/Transmission optique avancée.webp"
                             class="card-img-top book-cover" alt="Transmission optique avancée" style="height: 500px;">
                         <div class="card-body d-flex flex-column">
                             <h3 class="h5 fw-bold">Transmission optique avancée</h3>
                             <p class="text small mb-2">Niveau : avancé</p>
                             <p class="mb-3">
                                 Multiplexage WDM/DWDM, amplification optique, réseaux métropolitains
                                 et backbone des opérateurs télécoms.
                             </p>
                             <a href="livres/reseaux-fondamentaux.pdf"
                                 class=" btn_télécharger btn btn-accent mx-auto w-50" download>
                                 Télécharger
                             </a>
                         </div>
                     </div>
                 </div>

                 <!-- 6. 5G & réseaux mobiles -->
                 <div class="col-md-6 col-lg-4 livre-card" data-category="5g"
                     data-keywords="5g nr reseaux mobiles lte core beamforming mimo slicing">
                     <div class="card h-100 shadow-sm border-0 book-card">
                         <img src="/Images/images_livres/Introduction aux réseaux 5G.jpg" class="card-img-top book-cover"
                             alt="Introduction aux réseaux 5G" style="height: 500px;">
                         <div class="card-body d-flex flex-column">
                             <h3 class="h5 fw-bold">Introduction aux réseaux 5G</h3>
                             <p class="text small mb-2">Niveau : intermédiaire</p>
                             <p class="mb-3">
                                 De la 4G au 5G Core : architecture, NR, beamforming, MIMO massif
                                 et principaux cas d’usage.
                             </p>
                             <a href="livres/reseaux-fondamentaux.pdf"
                                 class=" btn_télécharger btn btn-accent mx-auto w-50" download>
                                 Télécharger
                             </a>
                         </div>
                     </div>
                 </div>

                 <!-- 7. Planification radio & couverture -->
                 <div class="col-md-6 col-lg-4 livre-card" data-category="5g"
                     data-keywords="radio couverture propagation cellule planning">
                     <div class="card h-100 shadow-sm border-0 book-card">
                         <img src="/Images/images_livres/Planification radio.jpeg" class="card-img-top book-cover"
                             alt="Planification radio" style="height: 500px;">
                         <div class="card-body d-flex flex-column">
                             <h3 class="h5 fw-bold">Planification radio pour réseaux mobiles</h3>
                             <p class="text small mb-2">Niveau : avancé</p>
                             <p class="mb-3">
                                 Bases de propagation radio, dimensionnement de cellules, calcul
                                 de couverture et optimisation de réseau.
                             </p>
                             <a href="livres/reseaux-fondamentaux.pdf"
                                 class=" btn_télécharger btn btn-accent mx-auto w-50" download>
                                 Télécharger
                             </a>
                         </div>
                     </div>
                 </div>

                 <!-- 8. Wi-Fi & réseaux sans fil -->
                 <div class="col-md-6 col-lg-4 livre-card" data-category="wifi"
                     data-keywords="wifi 802.11 wlan wpa3 bornes sans fil">
                     <div class="card h-100 shadow-sm border-0 book-card">
                         <img src="/Images/images_livres/Réseaux Wi-Fi avancés.jpg" class="card-img-top book-cover"
                             alt="Réseaux Wi-Fi avancés" style="height: 500px;">
                         <div class="card-body d-flex flex-column">
                             <h3 class="h5 fw-bold">Réseaux Wi-Fi avancés</h3>
                             <p class="text small mb-2">Niveau : intermédiaire</p>
                             <p class="mb-3">
                                 Conception de réseaux WLAN, roaming, QoS, Wi-Fi 6 et
                                 sécurisation des accès sans fil.
                             </p>
                             <a href="livres/reseaux-fondamentaux.pdf"
                                 class=" btn_télécharger btn btn-accent mx-auto w-50" download>
                                 Télécharger
                             </a>
                         </div>
                     </div>
                 </div>

                 <!-- 9. Sécurité des réseaux télécom -->
                 <div class="col-md-6 col-lg-4 livre-card" data-category="securite"
                     data-keywords="securite firewalls vpn ids ips telecom">
                     <div class="card h-100 shadow-sm border-0 book-card">
                         <img src="/Images/images_livres/Sécurité des réseaux télécoms.webp"
                             class="card-img-top book-cover" alt="Sécurité des réseaux télécoms" style="height: 500px;">
                         <div class="card-body d-flex flex-column">
                             <h3 class="h5 fw-bold">Sécurité des réseaux télécoms</h3>
                             <p class="text small mb-2">Niveau : intermédiaire</p>
                             <p class="mb-3">
                                 Menaces sur les réseaux opérateurs, firewalls, VPN, filtrage,
                                 surveillance et réponses aux incidents.
                             </p>
                             <a href="livres/reseaux-fondamentaux.pdf"
                                 class=" btn_télécharger btn btn-accent mx-auto w-50" download>
                                 Télécharger
                             </a>
                         </div>
                     </div>
                 </div>

                 <!-- 10. VoIP & téléphonie sur IP -->
                 <div class="col-md-6 col-lg-4 livre-card" data-category="iot"
                     data-keywords="voip sip pbx telephonie ip qos">
                     <div class="card h-100 shadow-sm border-0 book-card">
                         <img src="/Images/images_livres/VoIP et téléphonie sur IP.jpg" class="card-img-top book-cover"
                             alt="VoIP et téléphonie sur IP" style="height: 500px;">
                         <div class="card-body d-flex flex-column">
                             <h3 class="h5 fw-bold">VoIP et téléphonie sur IP</h3>
                             <p class="text small mb-2">Niveau : intermédiaire</p>
                             <p class="mb-3">
                                 Protocoles SIP/RTP, IP-PBX, QoS et intégration de la téléphonie
                                 dans les réseaux d’entreprise.
                             </p>
                             <a href="livres/reseaux-fondamentaux.pdf"
                                 class=" btn_télécharger btn btn-accent mx-auto w-50" download>
                                 Télécharger
                             </a>
                         </div>
                     </div>
                 </div>

                 <!-- 11. IoT & réseaux bas débit -->
                 <div class="col-md-6 col-lg-4 livre-card" data-category="iot"
                     data-keywords="iot lora nbiot capteurs reseaux bas debit">
                     <div class="card h-100 shadow-sm border-0 book-card">
                         <img src="/Images/images_livres/IoT-eBook-ipad-planet.png" class="card-img-top book-cover"
                             alt="IoT et réseaux bas débit" style="height: 500px;">
                         <div class="card-body d-flex flex-column">
                             <h3 class="h5 fw-bold">IoT & réseaux <br> bas débit</h3>
                             <p class="text small mb-2">Niveau : intermédiaire</p>
                             <p class="mb-3">
                                 LoRaWAN, NB-IoT, capteurs, plateformes IoT et cas d’usage
                                 dans les télécommunications.
                             </p>
                             <a href="livres/reseaux-fondamentaux.pdf"
                                 class=" btn_télécharger btn btn-accent mx-auto w-50" download>
                                 Télécharger
                             </a>
                         </div>
                     </div>
                 </div>

                 <!-- 12. Administration réseaux opérateurs -->
                 <div class="col-md-6 col-lg-4 livre-card" data-category="bases"
                     data-keywords="administration reseaux operateurs supervision snmp">
                     <div class="card h-100 shadow-sm border-0 book-card">
                         <img src="Images/images_livres/Administration des réseaux opérateurs.jpg"
                             class="card-img-top book-cover" alt="Administration des réseaux opérateurs"
                             style="height: 500px;">
                         <div class="card-body d-flex flex-column">
                             <h3 class="h5 fw-bold">Administration des réseaux opérateurs</h3>
                             <p class="text small mb-2">Niveau : avancé</p>
                             <p class="mb-3">
                                 Supervision, SNMP, NOC, gestion d’incidents et exploitation
                                 des grands réseaux télécoms.
                             </p>
                             <a href="livres/reseaux-fondamentaux.pdf"
                                 class=" btn_télécharger btn btn-accent mx-auto w-50" download>
                                 Télécharger
                             </a>
                         </div>
                     </div>
                 </div>

             </div><!-- /row -->

         </div>
     </section>

 </main>
<?php
    include __DIR__ . '/footer.php';
    ?>