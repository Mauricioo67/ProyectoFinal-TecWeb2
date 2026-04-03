<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['aether.css?v=' . time()]) ?>

    <?php /* <?= $this->Html->css(['normalize.min', 'milligram.min', 'fonts', 'cake']) ?> */ ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <script>
        (function() {
            const theme = localStorage.getItem('aether-theme') || 'dark';
            document.documentElement.setAttribute('data-theme', theme);
        })();
    </script>
</head>
<body>
    <nav class="top-nav">
        <div class="top-nav-title">
            <a href="<?= $this->Url->build('/') ?>"><span>Aether</span> UI</a>
        </div>
        <button id="mobile-menu-toggle" class="mobile-menu-toggle" aria-label="Menu">
            <i class="bi bi-list"></i>
        </button>
        <div class="top-nav-links" id="top-nav-links">
            <?php /* 
            <a target="_blank" rel="noopener" href="https://book.cakephp.org/5/">Documentation</a>
            <a target="_blank" rel="noopener" href="https://api.cakephp.org/">API</a>
            */ ?>
            <?php if ($this->request->getAttribute('identity')): ?>
                <?= $this->Html->link(__('Monedas'), ['controller' => 'Monedas', 'action' => 'index'], ['style' => 'margin-right: 15px; text-decoration: none; font-weight: 500;']) ?>
                <?= $this->Html->link(__('Usuarios'), ['controller' => 'Users', 'action' => 'index'], ['style' => 'margin-right: 15px; text-decoration: none; font-weight: 500;']) ?>
                <span style="color: var(--text-muted); margin-right: 10px;">
                    Hola, <strong><?= h($this->request->getAttribute('identity')->nombre) ?></strong>
                </span>
                <?= $this->Html->link(__('Cerrar Sesión'), ['controller' => 'Users', 'action' => 'logout'], ['class' => 'logout-link']) ?>
            <?php endif; ?>
            <button id="theme-toggle" class="theme-toggle" aria-label="Cambiar tema">
                <i class="bi bi-moon-stars"></i>
            </button>
        </div>
    </nav>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const themeToggle = document.getElementById('theme-toggle');
            const htmlElement = document.documentElement;
            const icon = themeToggle.querySelector('i');

            const applyTheme = (theme) => {
                htmlElement.setAttribute('data-theme', theme);
                icon.className = theme === 'light' ? 'bi bi-sun' : 'bi bi-moon-stars';
                localStorage.setItem('aether-theme', theme);
            };

            // Set initial icon state based on current attribute
            const currentTheme = htmlElement.getAttribute('data-theme');
            applyTheme(currentTheme);

            themeToggle.addEventListener('click', () => {
                const newTheme = htmlElement.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
                applyTheme(newTheme);
            });

            // Mobile Menu Toggle
            const menuToggle = document.getElementById('mobile-menu-toggle');
            const navLinks = document.getElementById('top-nav-links');
            
            if (menuToggle && navLinks) {
                menuToggle.addEventListener('click', () => {
                    navLinks.classList.toggle('active');
                    const iconMenu = menuToggle.querySelector('i');
                    if (navLinks.classList.contains('active')) {
                        iconMenu.className = 'bi bi-x-lg';
                    } else {
                        iconMenu.className = 'bi bi-list';
                    }
                });
            }
        });
    </script>
</body>
</html>
