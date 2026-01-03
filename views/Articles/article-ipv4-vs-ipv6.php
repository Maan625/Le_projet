<?php
    include __DIR__ . '/../header.php';
    ?>
   <main class="py-5">
    <div class="container">
    <button onclick="changerMode()" id="modeButton">🌙</button>

      <!-- TITRE -->
      <h1 class="fw-bold mb-3">
        IPv4 vs IPv6 : comprendre la transition
      </h1>
      <p class="text-article">
        Publié le 03/12/2025 • Temps de lecture : 6 minutes
      </p>

      <!-- IMAGE PRINCIPALE -->
      <img src="images-les articles/Comparaison IPv4 et IPv6.png"
           class="img-fluid w-75 rounded-4 shadow mb-4"
           alt="Comparaison IPv4 et IPv6">

      <!-- INTRODUCTION -->
      <p class="lead">
        L’adresse IP est au cœur du fonctionnement d’Internet.  
        Avec l’épuisement des adresses IPv4, une nouvelle version — <strong>IPv6</strong> — a été introduite pour répondre
        aux besoins croissants de connectivité.  
        Mais quelles sont les différences entre les deux standards ?
      </p>

      <hr class="my-4">

      <!-- SECTION 1 -->
      <h2 class="fw-bold mt-4 mb-3">1. Qu’est-ce qu’une adresse IP ?</h2>
      <p>
        Une adresse IP (<em>Internet Protocol</em>) identifie un appareil sur un réseau.
        C’est l’équivalent d’une adresse postale pour Internet.
      </p>

      <!-- SECTION 2 -->
      <h2 class="fw-bold mt-4 mb-3">2. IPv4 : la première version déployée massivement</h2>
      <p>
        IPv4 utilise un format d’adresse sur <strong>32 bits</strong>, soit environ 4,3 milliards d’adresses possibles.
      </p>

      <div class="text-center my-3">
        <img src="images-les articles/Format d’une adresse IPv4.png" class="img-fluid w-75 rounded shadow" style="max-width:650px;"
             alt="Format d’une adresse IPv4">
      </div>

      <ul>
        <li>Format : <code>192.168.1.10</code></li>
        <li>4 octets séparés par des points</li>
        <li>Très répandu mais presque épuisé</li>
      </ul>

      <!-- SECTION 3 -->
      <h2 class="fw-bold mt-4 mb-3">3. IPv6 : la nouvelle génération</h2>
      <p>
        IPv6 utilise un format sur <strong>128 bits</strong>, offrant un nombre quasi illimité d’adresses :
      </p>

      <div class="alert alert-info">
        🔢 <strong>Nombre d’adresses IPv6 :</strong>  
        340 282 366 920 938 463 463 374 607 431 768 211 456 (3,4 × 10³⁸)
      </div>
      
      <p>Exemple d’adresse :</p>

      <pre class="bg-light p-3 rounded">2001:0db8:85a3:0000:0000:8a2e:0370:7334</pre>
 
      <div class="text-center my-3">
        <img src="images-les articles/Format d’une adresse IPv6.png" class="img-fluid w-75 rounded shadow" style="max-width:680px;"
             alt="Format d’une adresse IPv6">
      </div>


      <!-- SECTION 4 -->
      <h2 class="fw-bold mt-4 mb-3">4. IPv4 vs IPv6 : les différences majeures</h2>
      <table class="table table-bordered text-center">
        <thead class="table-light">
          <tr>
            <th>Critère</th>
            <th>IPv4</th>
            <th>IPv6</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>Taille</td><td>32 bits</td><td>128 bits</td></tr>
          <tr><td>Format</td><td>Décimal (0–255)</td><td>Hexadécimal (0–FFFF)</td></tr>
          <tr><td>Nombre d’adresses</td><td>4,3 milliards</td><td>3,4 × 10³⁸</td></tr>
          <tr><td>NAT</td><td>Nécessaire</td><td>Inutile (adresse publique unique)</td></tr>
          <tr><td>Sécurité</td><td>Optionnelle</td><td>IPSec intégré</td></tr>
          <tr><td>Configuration</td><td>DHCP ou manuel</td><td>Auto-configuration (SLAAC)</td></tr>
        </tbody>
      </table>

      <!-- SECTION 5 -->
      <h2 class="fw-bold mt-4 mb-3">5. Pourquoi la transition vers IPv6 est-elle nécessaire ?</h2>
      <ul>
        <li>Explosion du nombre d’appareils connectés (IoT)</li>
        <li>Limites d’IPv4 et épuisement des adresses</li>
        <li>Besoin d’améliorer la sécurité native</li>
        <li>Meilleures performances grâce à un routage simplifié</li>
      </ul>

      <!-- SECTION 6 -->
      <h2 class="fw-bold mt-4 mb-3">6. Migration : un passage progressif</h2>
      <p>
        La transition ne se fait pas du jour au lendemain.
        Aujourd’hui, la plupart des réseaux fonctionnent en <strong>double pile (Dual Stack)</strong> :
      </p>

      <ul>
        <li>IPv4 + IPv6 en parallèle</li>
        <li>Compatibilité totale avec les anciens équipements</li>
        <li>Transition douce pour les opérateurs et entreprises</li>
      </ul>

      <div class="text-center my-4">
        <img src="images-les articles/1.jpg" class="img-fluid w-75 rounded shadow" style="max-width:650px;"
             alt="Architecture Dual Stack IPv4/IPv6">
      </div>

      <!-- CONCLUSION -->
      <h2 class="fw-bold mt-4 mb-3">Conclusion</h2>
      <p>
        IPv6 n’est pas seulement une évolution : c’est une nécessité pour soutenir la croissance d’Internet.
        Grâce à son énorme capacité d’adressage et sa sécurité intégrée,
        il représente le futur des réseaux modernes.
      </p>

       <a href="../Articles_techniques.php" class="btn_lire text-decoration-none   fw-semibold w-50 mx-auto">
            ← Retour aux articles
        </a>

    </div>
  </main>
    <?php
        include __DIR__ . '/../footer.php';
        ?>