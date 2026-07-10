<?php
/* Contenu du portfolio — modifie librement les tableaux ci-dessous */

/* Convertit un point de code Unicode en UTF-8, sans dépendre de l'extension mbstring.
   Utilisé pour afficher les glyphes de la police d'icônes du jeu (Destiny Symbols / DIM Symbols). */
function glyph(int $codepoint): string {
    if ($codepoint <= 0x7F) {
        return chr($codepoint);
    }
    if ($codepoint <= 0x7FF) {
        return chr(0xC0 | ($codepoint >> 6)) . chr(0x80 | ($codepoint & 0x3F));
    }
    if ($codepoint <= 0xFFFF) {
        return chr(0xE0 | ($codepoint >> 12)) . chr(0x80 | (($codepoint >> 6) & 0x3F)) . chr(0x80 | ($codepoint & 0x3F));
    }
    return chr(0xF0 | ($codepoint >> 18)) . chr(0x80 | (($codepoint >> 12) & 0x3F)) . chr(0x80 | (($codepoint >> 6) & 0x3F)) . chr(0x80 | ($codepoint & 0x3F));
}

/* Points de code des glyphes réels du jeu (extraits du manifest Bungie et des icônes
   maison de Destiny Item Manager, projet open-source MIT — usage local et privé uniquement) */
const ICON_TRAVELER  = 983238; // DIM Symbols — Le Voyageur
const ICON_GHOST     = 983317; // DIM Symbols — Spectre
const ICON_EDZ       = 983161; // DIM Symbols — secteur Terre (European Dead Zone)
const ICON_LUNA      = 983178; // DIM Symbols — la Lune
const ICON_VAULT     = 983266; // DIM Symbols — coffre/arsenal
const ICON_VANGUARD  = 983209; // DIM Symbols — insigne de l'Avant-Garde (la Tour)
const ICON_STASIS    = 57657;  // Destiny Symbols (manifest Bungie) — élément Stase

$profile = [
    'name'  => 'Nicolas SIMON',
    'role'  => 'Développeur Web en formation',
    'bio'   => [
        "Je crois que les meilleurs projets naissent de la rencontre entre une idée claire, une bonne stratégie et une exécution soignée.",
        "J'aime comprendre avant de créer. Chaque projet est l'occasion d'explorer un besoin, de remettre en question les évidences et de concevoir des solutions à la fois utiles, cohérentes et durables.",
        "Curieux de nature, j'apprends en continu et j'aime naviguer entre différents domaines pour faire émerger de nouvelles idées. Cette approche me permet d'aborder chaque défi avec un regard neuf, tout en gardant un objectif simple : créer des expériences qui apportent une réelle valeur.",
        "Aujourd'hui, je mets cette exigence au service des personnes et des entreprises qui souhaitent développer des projets ambitieux, avec une attention particulière portée aux détails, à la qualité et à l'humain.",
    ],
    'stats' => [
        ['label' => 'Classe',     'value' => 'Développeur'],
        ['label' => 'Formation',  'value' => 'Bachelor Informatique — ESGI'],
        ['label' => 'Recherche',  'value' => 'Alternance en informatique'],
        ['label' => 'Anglais',    'value' => '782 TOEIC'],
        ['label' => 'Permis',     'value' => 'B'],
    ],
    'interests' => ['Nouvelles technologies', 'Culture japonaise', 'Sport automobile', 'E-sport'],
];

/* Parcours : formation + expériences, ordre ante-chronologique (le plus récent en premier) */
$timeline = [
    ['date' => 'En cours', 'title' => 'Chargé des systèmes et réseaux', 'org' => 'ELSIMCO', 'type' => 'exp',
     'desc' => "Prise en charge des demandes et incidents de premier niveau, diagnostic et résolution. Mise à jour et entretien de plusieurs sites internet. Création de solutions d'automatisation pour la génération de documents."],
    ['date' => 'Présent', 'title' => 'Bachelor Informatique', 'org' => 'ESGI', 'type' => 'formation',
     'desc' => "Développement : modélisation de bases de données, SQL, algorithmique et structures de données, langage C. Systèmes &amp; réseaux : architecture des réseaux, circuits logiques, virtualisation, Linux avancé, administration Windows. Technologies du Web : architectures web, HTML/CSS/PHP, JavaScript, XML, API Fetch."],
    ['date' => 'Fév. 2023 — Juil. 2025', 'title' => 'Responsable Grands Comptes', 'org' => 'Hilti France', 'type' => 'exp',
     'desc' => "Gestion complète des ventes sur le département 78. Rédaction des devis, suivi des commandes et livraisons clients. Gestion des litiges."],
    ['date' => 'Août 2021 — Déc. 2022', 'title' => "Chargé d'affaires / Recruteur", 'org' => 'Privilium', 'type' => 'exp',
     'desc' => "Sourcing de candidats sur jobboards et candidathèques. Gestion d'un back-office. Création de pages professionnelles LinkedIn et Facebook. Refonte du site web."],
    ['date' => '2020', 'title' => 'Licence Marketing Digital (alternance)', 'org' => 'ITIS', 'type' => 'formation', 'desc' => ''],
    ['date' => 'Oct. 2020 — Mars 2022', 'title' => 'Micro-entrepreneur', 'org' => 'Digissimo', 'type' => 'exp',
     'desc' => "Création de pages professionnelles pour des PME sur les réseaux sociaux. Refonte de sites web et retouche vidéo."],
    ['date' => '2019', 'title' => 'BTS NRC — Négociation et relation client (alternance)', 'org' => 'ITIS', 'type' => 'formation', 'desc' => ''],
    ['date' => 'Oct. 2019 — Août 2020', 'title' => 'Alternant commercial et web-marketing', 'org' => 'ELSIMCO', 'type' => 'exp',
     'desc' => "Création d'une page professionnelle LinkedIn et Facebook. Refonte du site web. Rédaction de dossiers de compétences et de contrats."],
    ['date' => '2017', 'title' => 'BAC STI2D — spécialité ITEC', 'org' => 'Lycée Edmond Michelet', 'type' => 'formation', 'desc' => ''],
];

$skills = [
    'Développement' => ['HTML', 'CSS', 'PHP', 'JavaScript', 'SQL', 'Langage C', 'Python', 'VBA Excel', 'Algorithmique'],
    'Réseau &amp; systèmes' => ['Administration réseau', 'Cisco', 'MySQL', 'Linux', 'Windows', 'Virtualisation'],
];

$badges = [
    'Cybersécurité — TryHackMe',
    "Initiation à l'IA — OpenClassrooms",
    'Masterclass cybercriminalité — Banque Populaire',
    'Python — Amazon Future Engineer',
];

$projects = [
    ['name' => 'The Howling Tavern', 'tag' => 'JDR · Application Web',
     'desc' => "Création de fiches de personnage et de tables de jeu pour le JDR. Projet de fin d'année.",
     'status' => 'online', 'link' => 'https://github.com/Nasuko27'],
    ['name' => 'Portfolio Pokémon', 'tag' => 'Portfolio · Front-end',
     'desc' => "Portfolio sur le thème Pokémon en full scroll, animations et navigation immersive.",
     'status' => 'online', 'link' => 'https://github.com/Nasuko27'],
    ['name' => 'Refonte ELSIMCO', 'tag' => 'Full-stack · PHP',
     'desc' => "Refonte complète du site et du back-end pour la gestion des offres de l'entreprise.",
     'status' => 'private', 'link' => null],
];

$contact = [
    'email'    => 'gunblack91@gmail.com',
    'github'   => 'https://github.com/Nasuko27',
    'linkedin' => 'https://www.linkedin.com/in/nicolas-simon-045062150/',
];

/* Destinations du Directeur : nom en jeu, sous-titre réel, sous-classe (couleur), glyphe réel */
$destinations = [
    ['id' => 'terre',   'name' => 'TERRE',        'subtitle' => 'À propos',      'class' => 'arc',    'icon' => ICON_EDZ],
    ['id' => 'lune',    'name' => 'LA LUNE',      'subtitle' => 'Parcours',       'class' => 'void',   'icon' => ICON_LUNA],
    ['id' => 'europa',  'name' => 'EUROPA',       'subtitle' => 'Compétences',    'class' => 'stasis', 'icon' => ICON_STASIS],
    ['id' => 'arsenal', 'name' => "L'ARSENAL",    'subtitle' => 'Projets',        'class' => 'solar',  'icon' => ICON_VAULT],
    ['id' => 'tour',    'name' => 'LA TOUR',      'subtitle' => 'Contact',        'class' => 'light',  'icon' => ICON_VANGUARD],
];

$radius = 250;
$center = 310;
$n = count($destinations);
foreach ($destinations as $i => &$d) {
    $angleDeg = -90 + $i * (360 / $n);
    $angleRad = deg2rad($angleDeg);
    $d['angle'] = round($angleDeg, 2);
    $d['dx'] = round($radius * cos($angleRad), 1);
    $d['dy'] = round($radius * sin($angleRad), 1);

    /* Point de contrôle décalé pour une route courbe façon carte du Directeur */
    $ctrlAngleDeg = $angleDeg + ($i % 2 === 0 ? -18 : 18);
    $ctrlRad = deg2rad($ctrlAngleDeg);
    $ctrlR = $radius * 0.55;
    $d['ctrlx'] = $center + round($ctrlR * cos($ctrlRad), 1);
    $d['ctrly'] = $center + round($ctrlR * sin($ctrlRad), 1);
    $d['x'] = $center + $d['dx'];
    $d['y'] = $center + $d['dy'];
}
unset($d);

/* Champ d'étoiles généré côté serveur */
mt_srand(2077);
$stars = [];
for ($i = 0; $i < 140; $i++) {
    $stars[] = [
        'top'   => round(mt_rand(0, 1000) / 10, 1),
        'left'  => round(mt_rand(0, 1000) / 10, 1),
        'size'  => round(mt_rand(10, 30) / 10, 1),
        'delay' => round(mt_rand(0, 400) / 100, 2),
    ];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($profile['name']) ?> — Directeur</title>
<meta name="description" content="Portfolio de <?= htmlspecialchars($profile['name']) ?>, <?= htmlspecialchars($profile['role']) ?>, façon interface Directeur de Destiny 2.">
<link rel="icon" type="image/svg+xml" href="assets/img/favicon.svg">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- BOOT / GHOST SCAN -->
<div id="boot-screen">
    <div id="ghost-icon" class="symbol"><?= glyph(ICON_GHOST) ?></div>
    <div id="boot-lines"></div>
    <div id="boot-bar"><div id="boot-bar-fill"></div></div>
    <button id="boot-skip" type="button">PASSER &gt;&gt;</button>
</div>

<!-- FX -->
<div class="nebula" aria-hidden="true"></div>
<div class="hex-grid" aria-hidden="true"></div>
<div class="vignette" aria-hidden="true"></div>
<div class="warp-flash" id="warp-flash" aria-hidden="true"></div>
<div class="starfield" aria-hidden="true">
    <?php foreach ($stars as $s): ?>
    <span class="star" style="top:<?= $s['top'] ?>%; left:<?= $s['left'] ?>%; width:<?= $s['size'] ?>px; height:<?= $s['size'] ?>px; animation-delay:<?= $s['delay'] ?>s;"></span>
    <?php endforeach; ?>
</div>

<!-- TOPBAR -->
<header id="topbar">
    <span class="topbar-name"><?= htmlspecialchars($profile['name']) ?></span>
    <span class="topbar-role"><?= htmlspecialchars($profile['role']) ?></span>
</header>

<!-- DIRECTOR HUB -->
<main id="director">
    <div class="orbit-wrap">
        <div class="decor-ring" aria-hidden="true"></div>
        <svg class="orbit-ring" viewBox="0 0 620 620" aria-hidden="true">
            <circle cx="<?= $center ?>" cy="<?= $center ?>" r="<?= $radius ?>" fill="none" stroke="rgba(255,255,255,0.08)" stroke-width="1" stroke-dasharray="2 10"/>
            <?php foreach ($destinations as $i => $d): $path = "M{$center},{$center} Q{$d['ctrlx']},{$d['ctrly']} {$d['x']},{$d['y']}"; ?>
            <path d="<?= $path ?>" class="route is-<?= $d['class'] ?>" fill="none" stroke="currentColor" stroke-width="1.2"/>
            <circle r="3" class="route-pulse is-<?= $d['class'] ?>" fill="currentColor">
                <animateMotion dur="<?= 5 + $i ?>s" repeatCount="indefinite" path="<?= $path ?>"/>
            </circle>
            <?php endforeach; ?>
        </svg>

        <div class="traveler" id="traveler" tabindex="0" role="button" aria-label="Activer le Voyageur pour déployer les destinations">
            <span class="traveler-glow" aria-hidden="true"></span>
            <span class="traveler-glyph symbol"><?= glyph(ICON_TRAVELER) ?></span>
        </div>

        <?php foreach ($destinations as $i => $d): ?>
        <button class="destination-node is-<?= $d['class'] ?>" style="--dx:<?= $d['dx'] ?>px; --dy:<?= $d['dy'] ?>px; --reveal-delay:<?= $i * 70 ?>ms;" data-target="panel-<?= $d['id'] ?>">
            <span class="node-ring"></span>
            <span class="node-icon symbol"><?= glyph($d['icon']) ?></span>
            <span class="node-label"><?= htmlspecialchars($d['name']) ?></span>
            <span class="node-tooltip"><?= htmlspecialchars($d['subtitle']) ?></span>
        </button>
        <?php endforeach; ?>
    </div>
    <p class="hub-hint" id="hub-hint">Active le Voyageur pour déployer le réseau</p>

    <nav class="mobile-nav" aria-label="Navigation simplifiée">
        <?php foreach ($destinations as $d): ?>
        <button class="mobile-nav-link is-<?= $d['class'] ?>" data-target="panel-<?= $d['id'] ?>">
            <?= htmlspecialchars($d['name']) ?> <span><?= htmlspecialchars($d['subtitle']) ?></span>
        </button>
        <?php endforeach; ?>
    </nav>
</main>

<!-- PANEL: TERRE / A PROPOS -->
<section class="panel is-arc" id="panel-terre" data-panel>
    <div class="panel-frame">
        <button class="panel-back" data-back>&larr; RETOUR AU DIRECTEUR</button>
        <p class="panel-eyebrow">TERRE // À PROPOS</p>
        <h2 class="panel-title">Fiche de Gardien</h2>
        <div class="panel-scroll">
            <div class="about-grid">
                <div class="id-card">
                    <ul class="id-stats">
                        <?php foreach ($profile['stats'] as $stat): ?>
                        <li><span class="id-label"><?= htmlspecialchars($stat['label']) ?></span><span class="id-value"><?= htmlspecialchars($stat['value']) ?></span></li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="id-interests">
                        <?php foreach ($profile['interests'] as $interest): ?>
                        <span class="chip"><?= htmlspecialchars($interest) ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="bio">
                    <?php foreach ($profile['bio'] as $i => $p): ?>
                    <p<?= $i === 0 ? ' class="bio-lead"' : '' ?>><?= $p ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PANEL: LUNE / PARCOURS -->
<section class="panel is-void" id="panel-lune" data-panel>
    <div class="panel-frame">
        <button class="panel-back" data-back>&larr; RETOUR AU DIRECTEUR</button>
        <p class="panel-eyebrow">LA LUNE // PARCOURS</p>
        <h2 class="panel-title">Journal d'Archives</h2>
        <div class="panel-scroll">
            <div class="log-list">
                <?php foreach ($timeline as $item): ?>
                <div class="log-entry">
                    <span class="log-date"><?= htmlspecialchars($item['date']) ?></span>
                    <span class="log-kind"><?= $item['type'] === 'formation' ? 'FORMATION' : 'EXPÉRIENCE' ?></span>
                    <h3><?= htmlspecialchars($item['title']) ?></h3>
                    <p class="log-org"><?= htmlspecialchars($item['org']) ?></p>
                    <?php if ($item['desc']): ?><p class="log-desc"><?= $item['desc'] ?></p><?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- PANEL: EUROPA / COMPETENCES -->
<section class="panel is-stasis" id="panel-europa" data-panel>
    <div class="panel-frame">
        <button class="panel-back" data-back>&larr; RETOUR AU DIRECTEUR</button>
        <p class="panel-eyebrow">EUROPA // COMPÉTENCES</p>
        <h2 class="panel-title">Registre Clovis Bray</h2>
        <div class="panel-scroll">
            <div class="skills-grid">
                <?php foreach ($skills as $group => $items): ?>
                <div class="skill-group">
                    <h3><?= $group ?></h3>
                    <div class="chip-row">
                        <?php foreach ($items as $skill): ?>
                        <span class="chip chip-skill"><?= htmlspecialchars($skill) ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <h3 class="badges-title">Auto-formation &amp; certifications</h3>
            <div class="badges-row">
                <?php foreach ($badges as $badge): ?>
                <span class="badge-att"><?= htmlspecialchars($badge) ?></span>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- PANEL: ARSENAL / PROJETS -->
<section class="panel is-solar" id="panel-arsenal" data-panel>
    <div class="panel-frame">
        <button class="panel-back" data-back>&larr; RETOUR AU DIRECTEUR</button>
        <p class="panel-eyebrow">L'ARSENAL // PROJETS</p>
        <h2 class="panel-title">Coffre d'équipement</h2>
        <div class="panel-scroll">
            <div class="projects-grid">
                <?php foreach ($projects as $project): ?>
                <div class="weapon-card">
                    <div class="weapon-banner">
                        <span class="weapon-status <?= $project['status'] ?>"><?= $project['status'] === 'online' ? 'ÉQUIPÉ' : 'VERROUILLÉ' ?></span>
                    </div>
                    <span class="weapon-tag"><?= htmlspecialchars($project['tag']) ?></span>
                    <h3><?= htmlspecialchars($project['name']) ?></h3>
                    <p><?= htmlspecialchars($project['desc']) ?></p>
                    <?php if ($project['link']): ?>
                    <a href="<?= htmlspecialchars($project['link']) ?>" class="weapon-link" target="_blank" rel="noopener">Voir sur GitHub →</a>
                    <?php else: ?>
                    <span class="weapon-locked">Accès restreint — non publié</span>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- PANEL: TOUR / CONTACT -->
<section class="panel is-light" id="panel-tour" data-panel>
    <div class="panel-frame">
        <button class="panel-back" data-back>&larr; RETOUR AU DIRECTEUR</button>
        <p class="panel-eyebrow">LA TOUR // CONTACT</p>
        <h2 class="panel-title">Canal de communication</h2>
        <div class="panel-scroll">
            <div class="comms">
                <p><span class="prompt">&gt;</span> Requête d'alliance envoyée à <?= htmlspecialchars($profile['name']) ?></p>
                <p class="comms-out">Canal chiffré établi... <span class="ok">OK</span></p>
                <p><span class="prompt">&gt;</span> Disponible pour une alternance en informatique</p>
                <div class="comms-buttons">
                    <button id="copy-email" class="comms-btn primary" type="button" data-email="<?= htmlspecialchars($contact['email']) ?>">
                        <?= htmlspecialchars($contact['email']) ?>
                    </button>
                    <a href="<?= htmlspecialchars($contact['github']) ?>" class="comms-btn" target="_blank" rel="noopener">GitHub</a>
                    <a href="<?= htmlspecialchars($contact['linkedin']) ?>" class="comms-btn" target="_blank" rel="noopener">LinkedIn</a>
                </div>
                <span id="copy-toast">Email copié dans le presse-papiers</span>
            </div>
        </div>
    </div>
</section>

<footer id="site-footer">
    <span class="status-dot"></span> SYSTÈME EN LIGNE — © <?= date('Y') ?> <?= htmlspecialchars($profile['name']) ?>
</footer>

<script src="assets/js/main.js"></script>
</body>
</html>
