<?php
    include __DIR__ . '/../header.php';
    ?>
<main class="py-5">
    <div class="container">
    <button onclick="changerMode()" id="modeButton">🌙</button>

        <!-- TITRE -->
        <h1 class="fw-bold mb-3">
            Zigbee vs WiFi 6 : quel protocole pour la maison connectée ?
        </h1>
        <p class="text-article">
            Publié le 12/11/2025 • Temps de lecture : 7 minutes
        </p>

        <!-- IMAGE PRINCIPALE -->
        <img src="images-les articles/Maison connectée utilisant Zigbee et WiFi 6.webp" class="img-fluid w-75 rounded-4 shadow mb-4"
            alt="Maison connectée utilisant Zigbee et WiFi 6">

        <!-- INTRODUCTION -->
        <p class="lead">
            Entre ampoules connectées, capteurs de présence et assistants vocaux,
            la maison connectée devient une réalité.
            Mais faut-il utiliser <strong>Zigbee</strong> ou <strong>WiFi 6</strong> pour connecter ces objets ?
            Comparons ces deux technologies.
        </p>

        <hr class="my-4">

        <!-- SECTION 1 -->
        <h2 class="fw-bold mt-4 mb-3">1. Rappels sur la maison connectée</h2>
        <p>
            Une maison connectée repose sur plusieurs types d’objets :
        </p>
        <ul>
            <li>capteurs (température, ouverture de porte, fumée)</li>
            <li>actionneurs (prises, ampoules, volets)</li>
            <li>box Internet, routeur, passerelle domotique</li>
        </ul>
        <p>
            Ces équipements doivent communiquer via un ou plusieurs protocoles sans fil.
        </p>

        <!-- SECTION 2 -->
        <h2 class="fw-bold mt-4 mb-3">2. Zigbee : un réseau maillé basse consommation</h2>
        <p>
            <strong>Zigbee</strong> est un protocole sans fil basse consommation, conçu pour l’IoT
            et la domotique.
        </p>

        <div class="text-center my-4">
            <img src="images-les articles/Réseau maillé Zigbee dans une maison.png" class="img-fluid w-75 rounded shadow" style="max-width:650px;"
                alt="Réseau maillé Zigbee dans une maison">
        </div>

        <ul>
            <li>Fonctionne en <strong>réseau maillé</strong> (mesh) : chaque appareil peut relayer le signal.</li>
            <li>Très faible consommation : idéal pour les capteurs sur pile.</li>
            <li>Utilisé par de nombreuses marques (Philips Hue, IKEA, etc.).</li>
            <li>Nécessite souvent une <strong>passerelle Zigbee</strong> reliée au réseau local.</li>
        </ul>

        <!-- SECTION 3 -->
        <h2 class="fw-bold mt-4 mb-3">3. WiFi 6 : le WiFi nouvelle génération</h2>
        <p>
            <strong>WiFi 6 (802.11ax)</strong> est la dernière évolution du WiFi,
            offrant plus de débit, de stabilité et une meilleure gestion de nombreux appareils.
        </p>

        <div class="text-center my-4">
            <img src="images-les articles/Routeur WiFi 6 moderne dans une maison.jpg" class="img-fluid w-75 rounded shadow" style="max-width:650px;"
                alt="Routeur WiFi 6 moderne dans une maison">
        </div>

        <ul>
            <li>Débit théorique très élevé (plusieurs Gb/s).</li>
            <li>Technologies OFDMA et MU-MIMO pour mieux gérer plusieurs appareils.</li>
            <li>Pas besoin de passerelle spécifique : la box Internet joue le rôle de point d’accès.</li>
            <li>Consommation énergétique plus élevée que Zigbee (moins idéal pour petits capteurs sur pile).</li>
        </ul>

        <!-- SECTION 4 -->
        <h2 class="fw-bold mt-4 mb-3">4. Comparaison Zigbee vs WiFi 6</h2>
        <table class="table table-bordered text-center">
            <thead class="table-light">
                <tr>
                    <th>Critère</th>
                    <th>Zigbee</th>
                    <th>WiFi 6</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Consommation</td>
                    <td>Très faible</td>
                    <td>Plus élevée</td>
                </tr>
                <tr>
                    <td>Portée</td>
                    <td>Courte, mais maillage</td>
                    <td>Bonne portée, dépend du routeur</td>
                </tr>
                <tr>
                    <td>Débit</td>
                    <td>Faible (capteurs)</td>
                    <td>Très élevé (vidéo, data)</td>
                </tr>
                <tr>
                    <td>Infrastructure</td>
                    <td>Passerelle dédiée</td>
                    <td>Box/routeur WiFi</td>
                </tr>
                <tr>
                    <td>Usage idéal</td>
                    <td>Capteurs, ampoules, domotique</td>
                    <td>Smart TV, PC, smartphone</td>
                </tr>
            </tbody>
        </table>

        <!-- SECTION 5 -->
        <h2 class="fw-bold mt-4 mb-3">5. Quel protocole choisir ?</h2>
        <p>
            En pratique, la plupart des maisons connectées utilisent les deux :
        </p>
        <ul>
            <li>Zigbee pour les <strong>capteurs basse consommation</strong> et la domotique.</li>
            <li>WiFi 6 pour les <strong>équipements gourmands</strong> (PC, TV, caméras, consoles).</li>
        </ul>

        <div class="alert alert-success">
            ✅ <strong>Conseil :</strong> privilégiez Zigbee pour les petits objets sur batterie,
            et gardez le WiFi 6 pour les appareils multimédias.
        </div>

        <!-- CONCLUSION -->
        <h2 class="fw-bold mt-4 mb-3">Conclusion</h2>
        <p>
            Zigbee et WiFi 6 ne sont pas en concurrence directe : ils se complètent.
            Bien choisir leur rôle dans votre installation permet d’avoir une maison connectée
            à la fois performante et économe en énergie.
        </p>


        <a href="../Articles_techniques.php" class="btn_lire text-decoration-none   fw-semibold w-50 mx-auto">
            ← Retour aux articles
        </a>

    </div>
</main>

    <?php
        include __DIR__ . '/../footer.php';
        ?>