<?php
    include __DIR__ . '/../header.php';
    ?>
<main class="py-5">
    <div class="container">
    <button onclick="changerMode()" id="modeButton">🌙</button>

        <!-- TITRE -->
        <h1 class="fw-bold mb-3">
            Comprendre le modèle OSI et TCP/IP
        </h1>
        <p class="text-article">
            Publié le 02/10/2025 • Temps de lecture : 7 minutes
        </p>

        <!-- IMAGE PRINCIPALE -->
        <img src="images-les articles/what-is-osi-fi.webp" class="img-fluid w-50  shadow mb-4"
            alt="Schéma du modèle OSI et TCP/IP">

        <!-- INTRO -->
        <p class="lead">
            Le modèle OSI et le modèle TCP/IP sont deux fondations essentielles
            pour comprendre le fonctionnement des réseaux informatiques.
            Dans cet article, nous allons les expliquer simplement avec des exemples concrets.
        </p>

        <hr class="my-4">

        <!-- SECTION 1 -->
        <h2 class="fw-bold mt-4 mb-3">1. Pourquoi des modèles réseau ?</h2>
        <p>
            Lorsqu’un appareil envoie des données (message WhatsApp, email, appel vidéo…),
            plusieurs opérations doivent être réalisées : découpage, encapsulation, transport,
            routage, vérification.
            Les ingénieurs ont donc défini des <strong>modèles en couches</strong>
            pour organiser ces processus.
        </p>

        <!-- SECTION 2 -->
        <h2 class="fw-bold mt-4 mb-3">2. Le modèle OSI : 7 couches</h2>

        <p>Le modèle OSI est un modèle théorique composé de 7 couches :</p>

        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Couche</th>
                    <th>Nom</th>
                    <th>Rôle principal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>7</td>
                    <td>Application</td>
                    <td>Interaction avec l'utilisateur</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Présentation</td>
                    <td>Encodage, cryptage, compression</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Session</td>
                    <td>Ouverture et gestion des sessions</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Transport</td>
                    <td>Fiabilité (TCP) et vitesse (UDP)</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Réseau</td>
                    <td>Adressage IP, routage</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Liaison</td>
                    <td>MAC, commutation Ethernet</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Physique</td>
                    <td>Câbles, fibre optique, signaux</td>
                </tr>
            </tbody>
        </table>

        <div class="text-center my-4">
            <img src="images-les articles/osi layers.jpg" class="img-fluid w-50 rounded shadow" style="max-width:600px;"
                alt="Illustration des couches OSI">
        </div>

        <!-- SECTION 3 -->
        <h2 class="fw-bold mt-4 mb-3">3. Le modèle TCP/IP : 4 couches</h2>
        <p>
            Contrairement au modèle OSI, TCP/IP est un modèle plus simple
            et réellement utilisé dans Internet.
        </p>

        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Modèle TCP/IP</th>
                    <th>Correspondance OSI</th>
                    <th>Fonction</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Application</td>
                    <td>5, 6, 7</td>
                    <td>HTTP, DNS, FTP, SMTP...</td>
                </tr>
                <tr>
                    <td>Transport</td>
                    <td>4</td>
                    <td>TCP, UDP</td>
                </tr>
                <tr>
                    <td>Internet</td>
                    <td>3</td>
                    <td>IP, ICMP, routage</td>
                </tr>
                <tr>
                    <td>Accès réseau</td>
                    <td>1 & 2</td>
                    <td>Ethernet, WiFi, Fibre</td>
                </tr>
            </tbody>
        </table>

        <div class="text-center my-4">
            <img src="images-les articles/OSI-Model-vs-TCPIP-Model.png" class="img-fluid w-50 shadow"
                style="max-width:700px;" alt="Illustration du modèle TCP/IP">
        </div>

        <!-- SECTION 4 -->
        <h2 class="fw-bold mt-4 mb-3">4. OSI vs TCP/IP : quelle différence ?</h2>
        <ul>
            <li>Le modèle OSI est <strong>théorique</strong> (pour apprendre).</li>
            <li>Le modèle TCP/IP est <strong>pratique</strong> (utilisé dans Internet).</li>
            <li>Les deux sont complémentaires.</li>
            <li>TCP/IP fusionne plusieurs couches OSI.</li>
        </ul>

        <!-- SECTION 5 -->
        <h2 class="fw-bold mt-4 mb-3">5. Exemple concret : envoyer un message</h2>
        <p>
            Lorsque tu envoies un message sur WhatsApp :
        </p>

        <ul>
            <li>Couche 7 : l’application envoie le message.</li>
            <li>Couche 4 : TCP assure la fiabilité.</li>
            <li>Couche 3 : IP choisit le chemin.</li>
            <li>Couche 2 : la carte réseau transmet.</li>
            <li>Couche 1 : les bits voyagent dans les câbles / ondes.</li>
        </ul>

        <!-- CONCLUSION -->
        <h2 class="fw-bold mt-4 mb-3">Conclusion</h2>
        <p>
            Le modèle OSI aide à comprendre et analyser un réseau.
            Le modèle TCP/IP est celui réellement utilisé aujourd’hui.
            Maîtriser ces deux modèles est indispensable pour tout technicien ou ingénieur réseau.
        </p>

        </p>
        <a href="../Articles_techniques.php" class="btn_lire text-decoration-none   fw-semibold w-50 mx-auto">
            ← Retour aux articles
        </a>

    </div>
</main>


    <?php
        include __DIR__ . '/../footer.php';
        ?>