<?php
// guide_utilisation.php
$support_email = 'kingatechservices@gmail.com';

$sections = [
    [
        'icon'      => '📊',
        'color'     => '#2563EB',
        'bg'        => '#DBEAFE',
        'title'     => 'Statistiques',
        'short'     => 'Résumé visuel de toute votre activité',
        'desc'      => "Visualisez en un coup d'œil l'ensemble de votre activité : montants totaux encaissés et envoyés, répartition par réseau mobile (Orange, Moov, Telecel) et par type d'opération (Reçu, Envoyé, Paiement marchand…).\n\nLes filtres vous permettent de restreindre l'affichage à une plage de dates précise. Si vous êtes administrateur, vous pouvez aussi filtrer par utilisateur pour analyser l'activité individuelle.",
        'tip'       => 'Touchez un segment du graphe pour voir le détail de la catégorie.',
        'caption'   => "Graphes en barres par réseau et par type d'opération. Les données se mettent à jour instantanément sans rechargement.",
    ],
    [
        'icon'      => '➕',
        'color'     => '#16A34A',
        'bg'        => '#DCFCE7',
        'title'     => "Enregistrement d'une transaction",
        'short'     => 'Saisissez une opération en quelques secondes',
        'desc'      => "Le formulaire vous guide étape par étape : identité du client, référence CNIB/NIP, réseau mobile, type d'opération et montant. La validation vérifie automatiquement les champs obligatoires avant l'enregistrement.\n\nMode hors-ligne inclus : si vous n'avez pas de connexion, la transaction est sauvegardée localement et synchronisée automatiquement dès le retour du réseau.",
        'tip'       => "Vérifiez deux fois le numéro de téléphone — il sert de référence principale pour retrouver le client.",
        'caption'   => "Formulaire guidé avec validation automatique. Les champs incorrects sont signalés avant l'envoi.",
    ],
    [
        'icon'      => '👥',
        'color'     => '#EA580C',
        'bg'        => '#FFEDD5',
        'title'     => 'Registre des transactions',
        'short'     => 'Historique complet, recherche instantanée',
        'desc'      => "Consultez l'historique complet de toutes vos opérations, triées de la plus récente à la plus ancienne. La barre de recherche filtre en temps réel par nom de client, numéro NIP ou numéro de téléphone.\n\nAppuyez sur une entrée pour ouvrir ses détails : vous pouvez corriger les informations ou supprimer la transaction après une confirmation explicite.",
        'tip'       => 'Un balayage rapide sur une entrée affiche les raccourcis Modifier / Supprimer.',
        'caption'   => 'Liste triée chronologiquement avec barre de recherche en temps réel par nom, NIP ou téléphone.',
    ],
    [
        'icon'      => '🔄',
        'color'     => '#0D9488',
        'bg'        => '#CCFBF1',
        'title'     => 'Synchronisation cloud',
        'short'     => 'Vos données toujours sauvegardées',
        'desc'      => "L'application synchronise vos données avec le cloud (Firestore) pour ne rien perdre. L'icône ⟳ dans la barre du haut déclenche une synchronisation manuelle. Un cercle animé indique qu'une opération est en cours.\n\nReconnexion automatique : toutes les transactions créées hors-ligne sont envoyées au cloud dès que la connexion est rétablie, sans aucune action de votre part.",
        'tip'       => "Évitez de quitter l'application pendant une synchronisation active pour garantir l'intégrité des données.",
        'caption'   => 'Les données circulent entre votre appareil et Firestore. Toute transaction hors-ligne est envoyée à la reconnexion.',
    ],
    [
        'icon'      => '⭐',
        'color'     => '#D97706',
        'bg'        => '#FEF3C7',
        'title'     => "Gestion de l'abonnement",
        'short'     => 'Statut en temps réel, renouvellement simplifié',
        'desc'      => "L'icône étoile dans la barre du haut reflète l'état de votre abonnement en temps réel. Appuyez dessus pour consulter votre plan actif, voir la date d'expiration et souscrire ou renouveler en quelques étapes.\n\nAlertes visuelles : un point rouge signifie que votre abonnement est expiré. Un point jaune indique qu'il reste moins de 5 jours — anticipez le renouvellement pour éviter toute interruption de service.",
        'tip'       => "Renouvelez votre abonnement 2 à 3 jours avant l'expiration pour ne jamais perdre l'accès.",
        'caption'   => "Statut visuel instantané : étoile pleine = actif, point rouge = expiré, point jaune = bientôt expiré.",
    ],
    [
        'icon'      => '🔒',
        'color'     => '#DC2626',
        'bg'        => '#FEE2E2',
        'title'     => 'Déconnexion automatique',
        'short'     => 'Sécurité renforcée après inactivité',
        'desc'      => "Pour protéger vos données, la session se ferme automatiquement après 60 minutes d'inactivité. Toute interaction avec l'écran (tapotement, défilement, saisie) remet le compteur à zéro.\n\nUn avertissement s'affiche 1 minute avant la déconnexion. Appuyez sur « Continuer » pour prolonger votre session. Sans réponse, vous êtes redirigé vers l'écran de connexion.",
        'tip'       => "Si vous vous absentez fréquemment, enregistrez votre travail en cours avant de laisser l'écran inactif.",
        'caption'   => "Le compteur de 60 min se remet à zéro à chaque interaction. Un avertissement apparaît 1 min avant la fin.",
    ],
    [
        'icon'      => '🛡️',
        'color'     => '#7C3AED',
        'bg'        => '#EDE9FE',
        'title'     => "Panneau d'administration",
        'short'     => 'Gestion centralisée (admins uniquement)',
        'desc'      => "Réservé aux comptes autorisés, le panneau admin est accessible via l'icône bouclier dans la barre du haut ou depuis la feuille de profil. Il centralise la gestion des utilisateurs, le suivi des abonnements et la consultation globale du registre.\n\nAccès restreint : seuls les emails figurant dans la liste blanche voient apparaître cette section. Contactez le propriétaire de l'application pour obtenir les droits administrateur.",
        'tip'       => "Les admins peuvent gérer les abonnements de tous les utilisateurs directement depuis ce panneau, sans passer par chaque compte.",
        'caption'   => "Accès centralisé à tous les utilisateurs, leurs abonnements et le registre global.",
    ],
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guide d'utilisation — MM Registre</title>
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      background: #F3F4F6;
      color: #111827;
      min-height: 100vh;
    }

    /* ── AppBar ── */
    .appbar {
      background: #2563EB;
      color: #fff;
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 0 20px;
      height: 56px;
      position: sticky;
      top: 0;
      z-index: 100;
      box-shadow: 0 2px 8px rgba(0,0,0,.15);
    }
    .appbar svg { flex-shrink: 0; }
    .appbar-title { font-size: 18px; font-weight: 700; letter-spacing: .01em; }

    /* ── Layout ── */
    .page { max-width: 680px; margin: 0 auto; padding: 20px 16px 40px; }

    /* ── Header card ── */
    .hero {
      background: linear-gradient(135deg, #1D4ED8 0%, #2563EB 100%);
      border-radius: 16px;
      padding: 20px;
      display: flex;
      align-items: center;
      gap: 16px;
      margin-bottom: 20px;
    }
    .hero-icon {
      width: 56px; height: 56px;
      background: rgba(255,255,255,.2);
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      flex-shrink: 0;
      font-size: 28px;
    }
    .hero h1 { font-size: 20px; font-weight: 800; color: #fff; margin-bottom: 6px; }
    .hero p  { font-size: 13px; color: rgba(255,255,255,.9); line-height: 1.5; }

    /* ── Section cards ── */
    .card {
      background: #fff;
      border: 1px solid rgba(0,0,0,.08);
      border-radius: 14px;
      margin-bottom: 10px;
      box-shadow: 0 2px 6px rgba(0,0,0,.05);
      overflow: hidden;
    }

    .card-header {
      display: flex;
      align-items: center;
      gap: 14px;
      padding: 14px 16px;
      cursor: pointer;
      user-select: none;
      transition: background .15s;
    }
    .card-header:hover { background: #F9FAFB; }

    .card-icon-wrap {
      width: 44px; height: 44px;
      border-radius: 12px;
      display: flex; align-items: center; justify-content: center;
      font-size: 20px;
      flex-shrink: 0;
    }

    .card-titles { flex: 1; min-width: 0; }
    .card-title { font-size: 15px; font-weight: 700; color: #111827; }
    .card-sub   { font-size: 12px; color: #6B7280; margin-top: 2px; }

    .chevron {
      color: #9CA3AF;
      transition: transform .25s ease;
      flex-shrink: 0;
    }
    .chevron.open { transform: rotate(180deg); }

    /* ── Expanded body ── */
    .card-body {
      display: none;
      border-top: 1px solid rgba(0,0,0,.06);
      padding: 16px;
    }
    .card-body.open { display: block; }

    .desc {
      font-size: 13.5px;
      color: #4B5563;
      line-height: 1.7;
      white-space: pre-line;
      margin-bottom: 16px;
    }

    /* illustration + caption box */
    .box {
      display: flex;
      align-items: center;
      gap: 14px;
      padding: 14px;
      border-radius: 12px;
      border: 1px solid rgba(0,0,0,.08);
      margin-bottom: 12px;
    }
    .box-caption {
      font-size: 12.5px;
      color: #4B5563;
      line-height: 1.6;
    }

    /* tip */
    .tip {
      display: flex;
      gap: 8px;
      padding: 10px 14px;
      border-left: 3px solid #ccc;
      border-radius: 0 8px 8px 0;
    }
    .tip-text { font-size: 12.5px; color: #4B5563; line-height: 1.5; }

    /* ── Contact footer ── */
    .contact-card {
      background: #fff;
      border: 1px solid rgba(0,0,0,.08);
      border-radius: 14px;
      padding: 24px 20px;
      text-align: center;
      margin-top: 8px;
      box-shadow: 0 2px 6px rgba(0,0,0,.05);
    }
    .contact-card .contact-icon { font-size: 36px; margin-bottom: 10px; }
    .contact-card h2 { font-size: 17px; font-weight: 700; color: #111827; margin-bottom: 6px; }
    .contact-card p  { font-size: 13px; color: #6B7280; line-height: 1.6; margin-bottom: 16px; }

    .btn-contact {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: #2563EB;
      color: #fff;
      text-decoration: none;
      font-size: 14px;
      font-weight: 600;
      padding: 10px 22px;
      border-radius: 10px;
      transition: background .2s, transform .1s;
    }
    .btn-contact:hover  { background: #1D4ED8; }
    .btn-contact:active { transform: scale(.97); }

    .footer-note {
      margin-top: 24px;
      text-align: center;
      font-size: 12px;
      color: #9CA3AF;
      font-style: italic;
      line-height: 1.6;
    }

    /* ── Responsive ── */
    @media (max-width: 480px) {
      .hero { flex-direction: column; text-align: center; }
      .hero-icon { margin: 0 auto; }
    }
  </style>
</head>
<body>

<!-- AppBar -->
<header class="appbar">
  <svg width="22" height="22" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
    <path stroke-linecap="round" stroke-linejoin="round"
          d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.966 8.966 0 00-6 2.292m0-14.25v14.25"/>
  </svg>
  <span class="appbar-title">Guide d'utilisation</span>
</header>

<main class="page">

  <!-- Hero -->
  <div class="hero">
    <div class="hero-icon">📖</div>
    <div>
      <h1>Bienvenue !</h1>
      <p>Découvrez comment tirer le meilleur parti de l'application en quelques minutes.</p>
    </div>
  </div>

  <!-- Sections -->
  <?php foreach ($sections as $i => $s): ?>
  <?php
    // derive a lighter border color from the section color
    $color = $s['color'];
    $bg    = $s['bg'];
  ?>
  <div class="card">
    <div class="card-header" onclick="toggle(<?= $i ?>)" aria-expanded="false" id="hdr-<?= $i ?>">
      <div class="card-icon-wrap" style="background:<?= htmlspecialchars($bg) ?>">
        <?= $s['icon'] ?>
      </div>
      <div class="card-titles">
        <div class="card-title"><?= htmlspecialchars($s['title']) ?></div>
        <div class="card-sub"><?= htmlspecialchars($s['short']) ?></div>
      </div>
      <svg class="chevron" id="chev-<?= $i ?>" width="20" height="20" fill="none"
           viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
      </svg>
    </div>

    <div class="card-body" id="body-<?= $i ?>">
      <p class="desc"><?= nl2br(htmlspecialchars($s['desc'])) ?></p>

      <!-- Caption box -->
      <div class="box" style="background:<?= htmlspecialchars($bg) ?>; border-color:<?= htmlspecialchars($color) ?>33">
        <span style="font-size:28px;flex-shrink:0"><?= $s['icon'] ?></span>
        <p class="box-caption"><?= htmlspecialchars($s['caption']) ?></p>
      </div>

      <!-- Tip -->
      <div class="tip" style="border-left-color:<?= htmlspecialchars($color) ?>; background:<?= htmlspecialchars($bg) ?>33">
        <span style="font-size:16px;flex-shrink:0">💡</span>
        <p class="tip-text"><?= htmlspecialchars($s['tip']) ?></p>
      </div>
    </div>
  </div>
  <?php endforeach; ?>

  <!-- Contact card -->
  <div class="contact-card">
    <div class="contact-icon">✉️</div>
    <h2>Besoin d'aide ?</h2>
    <p>
      Notre équipe de support est disponible pour toute question concernant votre compte,
      votre abonnement ou l'utilisation de l'application.
    </p>
    <a class="btn-contact" href="mailto:<?= htmlspecialchars($support_email) ?>">
      <svg width="16" height="16" fill="none" viewBox="0 0 24 24"
           stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
      </svg>
      <?= htmlspecialchars($support_email) ?>
    </a>
  </div>

  <p class="footer-note">
    Pour toute assistance, contactez le support.<br>
    Email : <a href="mailto:<?= htmlspecialchars($support_email) ?>"
               style="color:#6B7280"><?= htmlspecialchars($support_email) ?></a>
  </p>

</main>

<script>
function toggle(i) {
  var body  = document.getElementById('body-'  + i);
  var chev  = document.getElementById('chev-'  + i);
  var hdr   = document.getElementById('hdr-'   + i);
  var open  = body.classList.toggle('open');
  chev.classList.toggle('open', open);
  hdr.setAttribute('aria-expanded', open ? 'true' : 'false');
}
</script>

</body>
</html>
