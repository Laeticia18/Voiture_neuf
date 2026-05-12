<?php
require_once 'config.php';

$stmt = $pdo->query("SELECT * FROM voitures ORDER BY id ASC");
$voitures = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nos Voitures — Voiti Nèf</title>
  <link href="style.css" rel="stylesheet">
  <script src="script.js" defer></script>
</head>
<body>


  <div id="navbar"></div>


  <header class="page-header">
    <h1>Nos Voitures</h1>
    <p>Tous nos modèles disponibles à la vente</p>
  </header>


  <section class="section">
    <div class="cars-grid cars-grid--voitures">

      <?php foreach ($voitures as $v): ?>
      <article class="car-card">
        <div class="car-img-wrap">
          <img src="voiture/<?= htmlspecialchars($v['image']) ?>" alt="<?= htmlspecialchars($v['alt']) ?>">
        </div>
        <div class="car-body">
          <p class="car-brand"><?= htmlspecialchars($v['marque']) ?></p>
          <h2 class="car-name"><?= htmlspecialchars($v['modele']) ?></h2>
          <ul class="car-specs">
            <li>Année&nbsp;<span><?= htmlspecialchars($v['annee']) ?></span></li>
            <li>Cylindrée&nbsp;<span><?= htmlspecialchars($v['cylindree']) ?></span></li>
            <li>Puissance&nbsp;<span><?= htmlspecialchars($v['puissance']) ?></span></li>
            <li>Carburant&nbsp;<span><?= htmlspecialchars($v['carburant']) ?></span></li>
          </ul>
          <div class="car-footer">
            <span class="car-price"><?= number_format($v['prix'], 0, ',', ' ') ?> €</span>
          </div>
        </div>
      </article>
      <?php endforeach; ?>

    </div>
  </section>

  <section class="cta-section">
    <p class="section-eyebrow">Un projet ?</p>
    <h2 class="section-title">Vous ne trouvez pas votre bonheur ?</h2>
    <p class="section-subtitle">Contactez-nous, nous trouverons le véhicule qui correspond à vos besoins et à votre budget.</p>
    <a href="tel:0590123456" class="btn-outline">0590 123 456</a>
  </section>

  <footer>
    <div class="footer-inner">
      <div>
        <div class="footer-brand">Voiti Nèf</div>
        <div class="footer-address">On koté en gwadeloupe, 97100 Basse-Terre</div>
      </div>
      <div class="footer-legal">
        <a href="Conditions d'Utilisation.txt">Conditions d'utilisation</a>
      </div>
      <div class="footer-socials">
        <a href="https://twitter.com/" aria-label="Twitter / X" title="Twitter / X">&#120143;</a>
        <a href="https://www.instagram.com/" aria-label="Instagram" title="Instagram">&#9432;</a>
        <a href="https://www.facebook.com/" aria-label="Facebook" title="Facebook">f</a>
      </div>
    </div>
    <div class="footer-bottom">
      &copy; 2025 Voiti Nèf &mdash; Tous droits réservés
    </div>
  </footer>

</body>
</html>
