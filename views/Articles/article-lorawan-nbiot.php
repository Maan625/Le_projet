<?php
    include __DIR__ . '/../header.php';
    ?>
<main class="py-5">
  <div class="container">
  <button onclick="changerMode()" id="modeButton">🌙</button>

    <!-- TITRE -->
    <h1 class="fw-bold mb-3">
      LoRaWAN vs NB-IoT : quel réseau pour vos capteurs connectés ?
    </h1>
    <p class="text-article">
      Publié le 05/10/2025 • Temps de lecture : 7 minutes
    </p>

    <!-- IMAGE PRINCIPALE -->
    <img src="images-les articles/Capteurs IoT utilisant LoRaWAN et NB-IoT.webp"
      class="img-fluid w-75 rounded-4 shadow mb-4" alt="Capteurs IoT utilisant LoRaWAN et NB-IoT">

    <!-- INTRODUCTION -->
    <p class="lead">
      Les réseaux IoT à bas débit jouent un rôle central dans la transformation numérique.
      Parmi eux, <strong>LoRaWAN</strong> et <strong>NB-IoT</strong> sont les deux technologies les plus répandues.
      Mais laquelle choisir selon vos besoins ? Voyons ensemble leurs différences.
    </p>

    <hr class="my-4">

    <!-- SECTION 1 -->
    <h2 class="fw-bold mt-4 mb-3">1. Comprendre les réseaux LPWAN</h2>
    <p>
      LPWAN (<em>Low Power Wide Area Network</em>) désigne des réseaux conçus pour transmettre de petites quantités de
      données sur de longues distances avec une très faible consommation énergétique.
      Ces réseaux sont parfaits pour les capteurs, compteurs connectés, ou objets industriels.
    </p>

    <div class="text-center my-4">
      <img src="images-les articles/Illustration d’un réseau LPWAN IoT.png" class="img-fluid rounded shadow"
        style="max-width:650px;" alt="Illustration d’un réseau LPWAN IoT">
    </div>

    <!-- SECTION 2 -->
    <h2 class="fw-bold mt-4 mb-3">2. LoRaWAN : une solution ouverte et communautaire</h2>
    <p>
      <strong>LoRaWAN</strong> utilise la modulation LoRa (Long Range) dans les bandes ISM non licenciées.
      Elle permet de déployer son propre réseau privé, idéal pour les collectivités ou les entreprises industrielles.
    </p>
    <ul>
      <li>Portée : jusqu’à 15 km en zone rurale</li>
      <li>Débit : très faible (quelques kbit/s)</li>
      <li>Autonomie des capteurs : 5 à 10 ans</li>
      <li>Pas besoin d’abonnement opérateur</li>
    </ul>
    <p>
      LoRaWAN est géré par <strong>The LoRa Alliance</strong>, et de nombreux réseaux publics comme
      <em>The Things Network</em> sont gratuits.
    </p>

    <div class="text-center my-4">
      <img src="images-les articles/Passerelle LoRaWAN et capteurs connectés.png" class="img-fluid rounded shadow"
        style="max-width:600px;" alt="Passerelle LoRaWAN et capteurs connectés">
    </div>

    <!-- SECTION 3 -->
    <h2 class="fw-bold mt-4 mb-3">3. NB-IoT : une technologie opérateur basée sur la 4G/5G</h2>
    <p>
      <strong>NB-IoT (NarrowBand IoT)</strong> est une norme 3GPP intégrée aux réseaux LTE et 5G.
      Elle utilise les fréquences opérateurs, offrant une meilleure fiabilité et sécurité.
    </p>
    <ul>
      <li>Portée : 10 à 15 km</li>
      <li>Consommation : optimisée grâce au mode PSM (Power Saving Mode)</li>
      <li>Connexion via carte SIM M2M</li>
      <li>Idéal pour les applications industrielles ou critiques</li>
    </ul>

    <div class="text-center my-4">
      <img src="images-les articles/Architecture du réseau NB-IoT.png" class="img-fluid rounded shadow"
        style="max-width:650px;" alt="Architecture du réseau NB-IoT">
    </div>

    <!-- SECTION 4 -->
    <h2 class="fw-bold mt-4 mb-3">4. Comparaison technique</h2>
    <table class="table table-bordered text-center">
      <thead class="table-light">
        <tr>
          <th>Critère</th>
          <th>LoRaWAN</th>
          <th>NB-IoT</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Type de réseau</td>
          <td>Non licencié</td>
          <td>Licencié (opérateurs)</td>
        </tr>
        <tr>
          <td>Portée</td>
          <td>Jusqu’à 15 km</td>
          <td>Jusqu’à 10 km</td>
        </tr>
        <tr>
          <td>Débit</td>
          <td>0,3 à 50 kbit/s</td>
          <td>20 à 200 kbit/s</td>
        </tr>
        <tr>
          <td>Latence</td>
          <td>~1 à 10 s</td>
          <td>~1 s</td>
        </tr>
        <tr>
          <td>Autonomie</td>
          <td>5–10 ans</td>
          <td>3–5 ans</td>
        </tr>
        <tr>
          <td>Coût d’abonnement</td>
          <td>Gratuit / privé</td>
          <td>Payant</td>
        </tr>
      </tbody>
    </table>

    <!-- SECTION 5 -->
    <h2 class="fw-bold mt-4 mb-3">5. Cas d’usage typiques</h2>
    <div class="row g-3">
      <div class="col-md-6">
        <div class="p-3 bg-dark text-light rounded shadow-sm h-100">
          <h5 class="fw-bold">LoRaWAN</h5>
          <ul class="mb-0">
            <li>Surveillance environnementale</li>
            <li>Suivi de conteneurs</li>
            <li>Mesure de niveau d’eau</li>
            <li>Smart agriculture</li>
          </ul>
        </div>
      </div>
      <div class="col-md-6">
        <div class="p-3 bg-dark text-light rounded shadow-sm h-100">
          <h5 class="fw-bold">NB-IoT</h5>
          <ul class="mb-0">
            <li>Comptage intelligent (eau, gaz, électricité)</li>
            <li>Parking connecté</li>
            <li>Villes intelligentes</li>
            <li>Maintenance prédictive</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- CONCLUSION -->
    <h2 class="fw-bold mt-5 mb-3">Conclusion</h2>
    <p>
      LoRaWAN et NB-IoT ne s’opposent pas, ils se complètent.
      LoRaWAN convient mieux aux projets indépendants, ouverts et à faible coût.
      NB-IoT s’adresse aux environnements nécessitant fiabilité et intégration opérateur.
      Le choix dépend donc du contexte, du budget et du besoin de couverture.
    </p>

    <a href="../Articles_techniques.php" class="btn_lire text-decoration-none   fw-semibold w-50 mx-auto">
      ← Retour aux articles
    </a>

  </div>
</main>
    <?php
        include __DIR__ . '/../footer.php';
        ?>