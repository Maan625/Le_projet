<?php
    include __DIR__ . '/../header.php';
    ?>
<main class="py-5">
  <div class="container">
    <button onclick="changerMode()" id="modeButton">🌙</button>

    <!-- TITRE -->
    <h1 class="fw-bold mb-3">
      Introduction au cœur de réseau 5G (5G Core)
    </h1>
    <p class="text-article">
      Publié le 28/08/2025 • Temps de lecture : 8 minutes
    </p>

    <!-- IMAGE PRINCIPALE -->
    <img src="images-les articles/Schéma du cœur de réseau 5G moderne.avif"
      class="img-fluid w-75 rounded-4 shadow mb-4"
      alt="Schéma du cœur de réseau 5G moderne">

    <!-- INTRODUCTION -->
    <p class="lead">
      La 5G ne se limite pas à de nouveaux types d’antennes ou à des débits plus rapides.
      Sa vraie révolution se trouve dans son <strong>cœur de réseau (5GC)</strong>,
      entièrement virtualisé, flexible et intelligent.
      Découvrons ensemble comment il fonctionne et pourquoi il est si innovant.
    </p>

    <hr class="my-4">

    <!-- SECTION 1 -->
    <h2 class="fw-bold mt-4 mb-3">1. Du cœur 4G EPC au 5G Core</h2>
    <p>
      Dans les réseaux 4G, le cœur de réseau est appelé <strong>EPC (Evolved Packet Core)</strong>.
      Il gérait la signalisation, le contrôle et la transmission des données.
      La 5G a complètement repensé cette architecture pour répondre à de nouveaux besoins :
      <em>IoT massif, latence très faible, slicing, edge computing, virtualisation.</em>
    </p>

    <div class="text-center my-4">
      <img src="images-les articles/Comparaison EPC 4G et 5GC 5G.webp" class="img-fluid rounded shadow" style="max-width:650px;"
        alt="Comparaison EPC 4G et 5GC 5G">
    </div>

    <!-- SECTION 2 -->
    <h2 class="fw-bold mt-4 mb-3">2. Architecture générale du 5G Core (5GC)</h2>
    <p>
      Le 5G Core est basé sur une approche <strong>Service-Based Architecture (SBA)</strong>,
      où chaque fonction du réseau est un service indépendant qui communique via des API (REST, HTTP2).
    </p>

    <ul>
      <li><strong>AMF</strong> — Access and Mobility Management Function : gère la signalisation et la mobilité.</li>
      <li><strong>SMF</strong> — Session Management Function : crée et gère les sessions de données.</li>
      <li><strong>UPF</strong> — User Plane Function : achemine les paquets utilisateurs.</li>
      <li><strong>AUSF</strong> — Authentication Server Function : authentifie les abonnés.</li>
      <li><strong>NRF</strong> — Network Repository Function : répertoire central des fonctions réseau.</li>
      <li><strong>PCF</strong> — Policy Control Function : applique les politiques de QoS.</li>
    </ul>

    <div class="text-center my-4">
      <img src="images-les articles/Architecture du cœur de réseau 5G SBA.png" class="img-fluid rounded shadow" style="max-width:750px;"
        alt="Architecture du cœur de réseau 5G SBA">
    </div>

    <!-- SECTION 3 -->
    <h2 class="fw-bold mt-4 mb-3">3. Les innovations clés du 5GC</h2>
    <ul>
      <li><strong>Network Slicing :</strong> permet de créer plusieurs réseaux virtuels indépendants sur la même infrastructure.</li>
      <li><strong>Virtualisation et cloudification :</strong> déploiement des fonctions dans le cloud (NFV).</li>
      <li><strong>MEC (Multi-access Edge Computing) :</strong> rapproche les serveurs des utilisateurs pour réduire la latence.</li>
      <li><strong>Ouverture et API :</strong> les opérateurs peuvent développer de nouveaux services plus rapidement.</li>
    </ul>

    <!-- SECTION 4 -->
    <h2 class="fw-bold mt-4 mb-3">4. Communication entre les couches RAN et Core</h2>
    <p>
      Les antennes 5G (gNodeB) communiquent avec l’AMF du cœur via l’interface <strong>NG</strong>.
      Les paquets de données sont ensuite transférés vers l’UPF, qui achemine le trafic vers Internet ou le cloud.
    </p>

    <div class="text-center my-4">
      <img src="images-les articles/Interfaces RAN et Core dans un réseau 5G.webp" class="img-fluid rounded shadow" style="max-width:700px;"
        alt="Interfaces RAN et Core dans un réseau 5G">
    </div>

    <!-- SECTION 5 -->
    <h2 class="fw-bold mt-4 mb-3">5. Les défis de mise en œuvre</h2>
    <p>
      La mise en œuvre du 5G Core requiert une expertise en :
    </p>
    <ul>
      <li>Virtualisation (VM, conteneurs, Kubernetes)</li>
      <li>Orchestration (MANO, ONAP)</li>
      <li>Sécurité et authentification</li>
      <li>Interopérabilité avec les réseaux 4G existants (EPC/5GC interworking)</li>
    </ul>

    <div class="alert alert-info mt-3">
      💡 <strong>Bon à savoir :</strong> Le 5GC est conçu pour être totalement
      <em>cloud-native</em>, permettant un déploiement agile et évolutif.
    </div>

    <!-- CONCLUSION -->
    <h2 class="fw-bold mt-4 mb-3">Conclusion</h2>
    <p>
      Le cœur de réseau 5G n’est pas qu’une évolution de la 4G : c’est une transformation complète.
      Grâce à son architecture en services, à la virtualisation et à l’edge computing,
      il prépare le terrain pour les innovations de demain : usines connectées, villes intelligentes et véhicules autonomes.
    </p>

    <a href="../Articles_techniques.php" class="btn_lire text-decoration-none   fw-semibold w-50 mx-auto">
      ← Retour aux articles
    </a>

  </div>
</main>
    <?php
        include __DIR__ . '/../footer.php';
        ?>