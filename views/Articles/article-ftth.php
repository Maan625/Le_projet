<?php
    include __DIR__ . '/../header.php';
    ?>
<main class="py-5">
    <div class="container">
    <button onclick="changerMode()" id="modeButton">🌙</button>

        <!-- TITRE -->
        <h1 class="fw-bold mb-3">
            Les bases de la fibre FTTH sur le terrain
        </h1>
        <p class="text-article">
            Publié le 15/09/2025 • Temps de lecture : 6 minutes
        </p>

        <!-- IMAGE PRINCIPALE -->
        <img src="images-les articles/1675838992376-Fiber to the Home (FTTH).png" class="img-fluid w-75 rounded-4 shadow mb-4"
            alt="Installation de la fibre optique FTTH">

        <!-- INTRODUCTION -->
        <p class="lead">
            La fibre optique FTTH (<em>Fiber To The Home</em>) est aujourd’hui la technologie
            la plus utilisée pour offrir un Internet très haut débit aux particuliers.
            Dans cet article, découvrons comment elle est déployée et comment elle fonctionne concrètement.
        </p>

        <hr class="my-4">

        <!-- SECTION 1 -->
        <h2 class="fw-bold mt-4 mb-3">1. Qu’est-ce que le FTTH ?</h2>
        <p>
            Le FTTH signifie <strong>Fiber To The Home</strong>, c’est-à-dire que la fibre optique arrive
            directement jusqu’à l’abonné. Contrairement au FTTB ou au VDSL, il n’y a pas de câble en cuivre :
            le signal lumineux est transporté du NRO (Nœud de Raccordement Optique) jusqu’à la prise PTO du logement.
        </p>

        <div class="text-center my-4">
            <img src="images-les articles/Schéma de l’architecture FTTH.webp" class="img-fluid rounded shadow" style="max-width:650px;"
                alt="Schéma de l’architecture FTTH">
        </div>

        <!-- SECTION 2 -->
        <h2 class="fw-bold mt-4 mb-3">2. Les principaux éléments du réseau FTTH</h2>

        <ul>
            <li><strong>NRO</strong> — Point de départ du réseau optique, où les équipements actifs sont installés.</li>
            <li><strong>SRO</strong> — Sous-répartiteur optique : répartit les fibres vers les zones desservies.</li>
            <li><strong>PBO</strong> — Point de Branchement Optique : situé souvent en façade ou en chambre.</li>
            <li><strong>PTO</strong> — Prise Terminale Optique à l’intérieur du logement.</li>
        </ul>

        <div class="text-center my-4">
            <img src="images-les articles/Éléments physiques d’un réseau FTTH.webp" class="img-fluid rounded shadow" style="max-width:700px;"
                alt="Éléments physiques d’un réseau FTTH">
        </div>

        <!-- SECTION 3 -->
        <h2 class="fw-bold mt-4 mb-3">3. Comment se déroule une installation ?</h2>

        <ol>
            <li>Repérage du parcours entre le PBO et le logement.</li>
            <li>Tirage du câble optique (souvent en façade ou en gaine technique).</li>
            <li>Pose de la PTO (prise optique intérieure).</li>
            <li>Raccordement par soudure (fusion des fibres).</li>
            <li>Mesure OTDR et vérification du signal.</li>
        </ol>

        <p>
            Chaque étape est réalisée avec précision pour éviter toute perte de signal ou micro-courbure de la fibre.
        </p>

        <!-- SECTION 4 -->
        <h2 class="fw-bold mt-4 mb-3">4. Sécurité et bonnes pratiques</h2>
        <p>
            La fibre optique transporte un signal lumineux invisible à l’œil nu.
            Il est donc essentiel de <strong>ne jamais regarder directement</strong> dans une fibre active.
            De plus, il faut toujours manipuler la fibre avec soin et utiliser un laser rouge (<em>VFL</em>)
            pour vérifier la continuité sans danger.
        </p>

        <div class="alert alert-warning mt-3">
            ⚠️ <strong>Attention :</strong> le verre de la fibre est extrêmement fin et fragile.
            Une fibre cassée ou pliée provoque une perte de signal importante.
        </div>

        <!-- SECTION 5 -->
        <h2 class="fw-bold mt-4 mb-3">5. Les outils de mesure : OTDR et power meter</h2>
        <p>
            Après l’installation, le technicien utilise un <strong>réflectomètre optique (OTDR)</strong>
            pour vérifier la qualité du signal et localiser d’éventuelles pertes.
            Un <em>power meter</em> mesure la puissance lumineuse reçue.
        </p>

        <div class="text-center my-4">
            <img src="images-les articles/Test OTDR sur un câble fibre optique.jpg" class="img-fluid rounded shadow" style="max-width:550px;"
                alt="Test OTDR sur un câble fibre optique">
        </div>

        <!-- CONCLUSION -->
        <h2 class="fw-bold mt-4 mb-3">Conclusion</h2>
        <p>
            Le FTTH permet d’offrir un accès Internet rapide et stable, avec un débit pouvant atteindre plusieurs
            gigabits.
            La maîtrise des étapes d’installation, des règles de sécurité et des outils de mesure est essentielle
            pour tout technicien fibre optique.
        </p>

       <a href="../Articles_techniques.php" class="btn_lire text-decoration-none   fw-semibold w-50 mx-auto">
                        ← Retour aux articles
        </a>

    </div>
</main>


    <?php
        include __DIR__ . '/../footer.php';
        ?>