<?php
include __DIR__ . '/../header.php';
?>
<main class="py-5">
  <div class="container">
    <button onclick="changerMode()" id="modeButton">🌙</button>

    <!-- TITRE -->
    <h1 class="fw-bold mb-3">
      Sécurité réseau : 5 bonnes pratiques essentielles
    </h1>
    <p class="text-article">
      Publié le 20/10/2025 • Temps de lecture : 6 minutes
    </p>

    <!-- IMAGE PRINCIPALE -->
    <img src="images-les articles/Illustration de la sécurité réseau avec pare-feu et chiffrement.webp"
      class="img-fluid rounded-4 shadow mb-4"
      alt="Illustration de la sécurité réseau avec pare-feu et chiffrement">

    <!-- INTRODUCTION -->
    <p class="lead">
      Les réseaux d’entreprise sont constamment exposés aux attaques.
      Pour protéger ses données et assurer la continuité du service,
      il est indispensable d’appliquer de bonnes pratiques de sécurité.
      Voici les cinq règles essentielles à connaître.
    </p>

    <hr class="my-4">

    <!-- SECTION 1 -->
    <h2 class="fw-bold mt-4 mb-3">1. Segmenter le réseau</h2>
    <p>
      La première étape d’une sécurité efficace est la <strong>segmentation du réseau</strong>.
      Plutôt que d’avoir un grand réseau plat, on divise en plusieurs zones (VLAN, DMZ, LAN, WiFi invité).
      Cela limite la propagation d’une attaque et permet une meilleure visibilité du trafic.
    </p>

    <div class="text-center my-4">
      <img src="images-les articles/Schéma de segmentation réseau par VLAN.avif" class="img-fluid rounded shadow" style="max-width:650px;"
        alt="Schéma de segmentation réseau par VLAN">
    </div>

    <!-- SECTION 2 -->
    <h2 class="fw-bold mt-4 mb-3">2. Utiliser des pare-feu et filtrer le trafic</h2>
    <p>
      Le pare-feu (<em>firewall</em>) contrôle les flux entrants et sortants du réseau.
      Il faut configurer des règles strictes : autoriser uniquement ce qui est nécessaire
      et bloquer le reste.
    </p>
    <p>
      Pour les grandes infrastructures, on utilise également des <strong>pare-feu de nouvelle génération (NGFW)</strong>
      capables d’inspecter les paquets jusqu’à la couche application.
    </p>

    <div class="text-center my-4">
      <img src="images-les articles/Schéma d’un pare-feu filtrant le trafic réseau.jpg" class="img-fluid rounded shadow" style="max-width:650px;"
        alt="Schéma d’un pare-feu filtrant le trafic réseau">
    </div>

    <!-- SECTION 3 -->
    <h2 class="fw-bold mt-4 mb-3">3. Mettre à jour régulièrement les équipements</h2>
    <p>
      Un grand nombre d’attaques exploitent des vulnérabilités déjà connues.
      Il est donc essentiel de maintenir à jour les systèmes, routeurs, points d’accès
      et serveurs pour bénéficier des derniers correctifs de sécurité.
    </p>

    <div class="alert alert-warning">
      ⚠️ <strong>Attention :</strong> un routeur non mis à jour peut être compromis en quelques minutes
      s’il est accessible depuis Internet.
    </div>

    <!-- SECTION 4 -->
    <h2 class="fw-bold mt-4 mb-3">4. Sécuriser le Wi-Fi</h2>
    <p>
      Le Wi-Fi est souvent la porte d’entrée la plus vulnérable.
      Utilisez le protocole <strong>WPA3</strong>, changez régulièrement les mots de passe,
      et désactivez le WPS.
      Il est aussi recommandé de séparer le Wi-Fi invité du réseau interne.
    </p>

    <div class="text-center my-4">
      <img src="images-les articles/Sécurité du Wi-Fi avec chiffrement WPA3.webp" class="img-fluid rounded shadow" style="max-width:600px;"
        alt="Sécurité du Wi-Fi avec chiffrement WPA3">
    </div>

    <!-- SECTION 5 -->
    <h2 class="fw-bold mt-4 mb-3">5. Sauvegarder et surveiller en continu</h2>
    <p>
      Aucune sécurité n’est infaillible. Il faut donc :
    </p>
    <ul>
      <li>Effectuer des <strong>sauvegardes régulières</strong> (backup) des données critiques.</li>
      <li>Installer des systèmes de <strong>détection d’intrusion (IDS/IPS)</strong>.</li>
      <li>Analyser les journaux (logs) pour repérer les anomalies.</li>
    </ul>
    <p>
      Les outils comme <em>Wireshark</em>, <em>Snort</em> ou <em>Suricata</em> permettent de détecter
      les activités suspectes sur le réseau.
    </p>

    <!-- CONCLUSION -->
    <h2 class="fw-bold mt-4 mb-3">Conclusion</h2>
    <p>
      La sécurité réseau repose avant tout sur une approche proactive.
      En combinant la segmentation, la mise à jour des équipements et la surveillance,
      il est possible de limiter considérablement les risques d’intrusion.
    </p>

    <a href="../Articles_techniques.php" class="btn_lire text-decoration-none   fw-semibold w-50 mx-auto">
      ← Retour aux articles
    </a>

  </div>
</main>
<?php
include __DIR__ . '/../footer.php';
?>