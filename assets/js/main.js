(function () {
    'use strict';

    var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    /* ---------------------------------------------------------------------
       Boot screen (scan du Spectre)
       ------------------------------------------------------------------- */
    var bootScreen = document.getElementById('boot-screen');
    var bootLines = document.getElementById('boot-lines');
    var bootBarFill = document.getElementById('boot-bar-fill');
    var bootSkip = document.getElementById('boot-skip');

    var bootScript = [
        'SPECTRE EN LIGNE...',
        'SCAN DU GARDIEN NICOLAS SIMON',
        'BACHELOR INFORMATIQUE — ESGI [OK]',
        'COMPÉTENCES WEB / RÉSEAUX / SYSTÈMES [OK]',
        'CONNEXION AU DIRECTEUR...'
    ];

    function hideBoot() {
        if (!bootScreen) return;
        bootScreen.classList.add('hidden');
        window.setTimeout(function () {
            if (bootScreen && bootScreen.parentNode) bootScreen.parentNode.removeChild(bootScreen);
        }, 700);
    }

    function runBoot() {
        if (!bootScreen || !bootLines) return;
        if (sessionStorage.getItem('bootDone') === '1' || reduceMotion) {
            hideBoot();
            return;
        }
        sessionStorage.setItem('bootDone', '1');

        var lineIndex = 0;
        function typeLine() {
            if (lineIndex >= bootScript.length) {
                window.setTimeout(hideBoot, 400);
                return;
            }
            var line = bootScript[lineIndex];
            var div = document.createElement('div');
            div.textContent = line;
            if (line.indexOf('[OK]') !== -1) div.classList.add('ok');
            bootLines.appendChild(div);
            lineIndex++;
            bootBarFill.style.width = Math.round((lineIndex / bootScript.length) * 100) + '%';
            window.setTimeout(typeLine, 420);
        }
        typeLine();
    }

    if (bootSkip) bootSkip.addEventListener('click', hideBoot);
    runBoot();

    /* ---------------------------------------------------------------------
       Navigation hub <-> panneaux (avec transition "warp")
       ------------------------------------------------------------------- */
    var warpFlash = document.getElementById('warp-flash');
    var panels = Array.prototype.slice.call(document.querySelectorAll('.panel'));
    var openTargets = document.querySelectorAll('[data-target]');
    var backButtons = document.querySelectorAll('[data-back]');
    var director = document.getElementById('director');

    function playWarp(callback) {
        if (reduceMotion || !warpFlash) {
            callback();
            return;
        }
        warpFlash.classList.add('active');
        window.setTimeout(callback, 220);
        window.setTimeout(function () {
            warpFlash.classList.remove('active');
        }, 560);
    }

    function openPanel(id) {
        var target = document.getElementById(id);
        if (!target) return;
        playWarp(function () {
            panels.forEach(function (p) { p.classList.remove('is-active'); });
            target.classList.add('is-active');
            document.body.classList.add('panel-open');
        });
    }

    function closePanels() {
        playWarp(function () {
            panels.forEach(function (p) { p.classList.remove('is-active'); });
            document.body.classList.remove('panel-open');
        });
    }

    openTargets.forEach(function (el) {
        el.addEventListener('click', function () {
            openPanel(el.getAttribute('data-target'));
        });
    });

    /* ---------------------------------------------------------------------
       Déploiement du réseau depuis le Voyageur (façon poupée russe)
       ------------------------------------------------------------------- */
    var traveler = document.getElementById('traveler');
    var hubHint = document.getElementById('hub-hint');

    function expandHub() {
        if (!director || director.classList.contains('is-expanded')) return;
        playWarp(function () {
            director.classList.add('is-expanded');
            if (hubHint) hubHint.textContent = 'Sélectionne une destination';
        });
    }

    if (traveler) {
        traveler.addEventListener('click', expandHub);
        traveler.addEventListener('keydown', function (e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                expandHub();
            }
        });
    }

    backButtons.forEach(function (btn) {
        btn.addEventListener('click', closePanels);
    });

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') closePanels();
    });

    /* ---------------------------------------------------------------------
       Copier l'email
       ------------------------------------------------------------------- */
    var copyBtn = document.getElementById('copy-email');
    var toast = document.getElementById('copy-toast');
    if (copyBtn && toast) {
        copyBtn.addEventListener('click', function () {
            var email = copyBtn.getAttribute('data-email');
            var done = function () {
                toast.classList.add('show');
                window.setTimeout(function () { toast.classList.remove('show'); }, 2000);
            };
            if (navigator.clipboard && navigator.clipboard.writeText) {
                navigator.clipboard.writeText(email).then(done).catch(function () {
                    window.location.href = 'mailto:' + email;
                });
            } else {
                window.location.href = 'mailto:' + email;
            }
        });
    }
})();
