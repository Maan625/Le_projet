<?php
    include __DIR__ . '/../header.php';
    ?>
    <main class="py-5">
    <div class="container">
    <button onclick="changerMode()" id="modeButton">🌙</button>

      <!-- TITRE -->
      <h1 class="fw-bold mb-3">
        Comment lire un test OTDR en fibre optique
      </h1>
      <p class="text-article">
        Publié le 17/10/2025 • Temps de lecture : 6 minutes
      </p>

      <!-- IMAGE PRINCIPALE -->
      <img src="images-les articles/Test OTDR_1 sur un câble fibre optique.jpg"
           class="img-fluid w-50 rounded-4 shadow mb-4"
           alt="Test OTDR sur un câble fibre optique">

      <!-- INTRODUCTION -->
      <p class="lead">
        L’OTDR (<em>Optical Time Domain Reflectometer</em>) est un outil essentiel pour mesurer et diagnostiquer
        les réseaux de fibre optique.  
        Savoir lire et interpréter une courbe OTDR est une compétence indispensable pour tout technicien fibre.
      </p>

      <hr class="my-4">

      <!-- SECTION 1 -->
      <h2 class="fw-bold mt-4 mb-3">1. Qu’est-ce qu’un OTDR ?</h2>
      <p>
        Un <strong>OTDR</strong> envoie une impulsion lumineuse dans la fibre et mesure la lumière réfléchie.
        En analysant ces retours, il peut déterminer la <strong>distance, les pertes et les défauts</strong>
        sur la ligne optique.
      </p>

      <div class="text-center my-4">
        <img src="Images/otdr-diagram.png" class="img-fluid rounded shadow" style="max-width:650px;"
             alt="Schéma du fonctionnement d’un OTDR">
      </div>

      <ul>
        <li>Permet de mesurer la <strong>longueur totale</strong> de la fibre.</li>
        <li>Détecte les <strong>épissures, connecteurs et ruptures</strong>.</li>
        <li>Affiche la <strong>courbe de réflexion</strong> pour identifier chaque événement.</li>
      </ul>

      <!-- SECTION 2 -->
      <h2 class="fw-bold mt-4 mb-3">2. Structure d’une courbe OTDR</h2>
      <p>
        La courbe affichée sur un OTDR représente la puissance optique réfléchie (en dB) en fonction de la distance.
        Chaque événement visible correspond à un point de perte ou de réflexion.
      </p>

      <div class="text-center my-4">
        <img src="images-les articles/Courbe OTDR typique avec événements de perte.jpg" class="img-fluid w-75 rounded shadow" style="max-width:700px;"
             alt="Courbe OTDR typique avec événements de perte">
      </div>

      <ul>
        <li>Le <strong>pic initial</strong> représente le connecteur de départ.</li>
        <li>Les <strong>petites marches</strong> indiquent les soudures (épissures).</li>
        <li>Les <strong>pics réfléchis</strong> signalent des connecteurs ou ruptures.</li>
        <li>La <strong>fin de la courbe</strong> indique la fin du câble.</li>
      </ul>

      <div class="alert alert-info mt-3">
        💡 <strong>Astuce :</strong> Les pertes supérieures à 0,1 dB par épissure doivent attirer votre attention.
      </div>

      <!-- SECTION 3 -->
      <h2 class="fw-bold mt-4 mb-3">3. Types d’événements détectés</h2>
      <table class="table table-bordered text-center">
        <thead class="table-light">
          <tr>
            <th>Type d’événement</th>
            <th>Symbole sur la courbe</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Connecteur</td>
            <td>Pic de réflexion fort</td>
            <td>Transition entre deux fibres (interfaces optiques)</td>
          </tr>
          <tr>
            <td>Épissure</td>
            <td>Chute légère sans réflexion</td>
            <td>Jonction par fusion de deux fibres</td>
          </tr>
          <tr>
            <td>Rupture</td>
            <td>Pic final ou chute brutale</td>
            <td>Fin de fibre ou câble coupé</td>
          </tr>
        </tbody>
      </table>

      <!-- SECTION 4 -->
      <h2 class="fw-bold mt-4 mb-3">4. Exemple d’interprétation</h2>
      <p>
        Imaginons une fibre de 2 km testée avec un OTDR :
      </p>
      <ul>
        <li>0 m : pic initial (connecteur de départ)</li>
        <li>350 m : épissure (perte 0,08 dB)</li>
        <li>920 m : connecteur intermédiaire</li>
        <li>1980 m : fin de fibre (perte totale 0,42 dB)</li>
      </ul>

      <div class="text-center my-4">
        <img src="images-les articles/Exemple d’analyse d’une courbe OTDR.png" class="img-fluid w-75 rounded shadow" style="max-width:700px;"
             alt="Exemple d’analyse d’une courbe OTDR">
      </div>

      <!-- SECTION 5 -->
      <h2 class="fw-bold mt-4 mb-3">5. Conseils pratiques</h2>
      <ul>
        <li>Toujours nettoyer les connecteurs avant la mesure.</li>
        <li>Utiliser un câble de lancement (Launch Fiber) pour visualiser le premier connecteur.</li>
        <li>Comparer la mesure avec les valeurs de référence fournies par le constructeur.</li>
        <li>Archiver les résultats OTDR pour le suivi de maintenance.</li>
      </ul>

      <div class="alert alert-success">
        ✅ <strong>Bon à savoir :</strong> Un bon test OTDR permet de certifier la qualité d’une installation FTTH.
      </div>

      <!-- CONCLUSION -->
      <h2 class="fw-bold mt-4 mb-3">Conclusion</h2>
      <p>
        L’interprétation d’un test OTDR est une étape clé dans le contrôle de qualité des installations fibre.
        Savoir reconnaître les signatures de pertes, de connecteurs et de ruptures permet d’intervenir efficacement
        et d’assurer la conformité du réseau.
      </p>

     <a href="../Articles_techniques.php" class="btn_lire text-decoration-none   fw-semibold w-50 mx-auto">
            ← Retour aux articles
        </a>

    </div>
  </main>
    <?php
        include __DIR__ . '/../footer.php';
        ?>