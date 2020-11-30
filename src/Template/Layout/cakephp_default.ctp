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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><a target="_blank" href="https://book.cakephp.org/3/">Documentation</a></li>
                <li><a target="_blank" href="https://api.cakephp.org/3.0/">API</a></li>

                <?php if (is_null($this->request->getSession()->read("Auth.User.username"))): ?>
                    <li><?= $this->Html->link(__('Login'), ['controller' => "Users", 'action' => "login"]) ?></li>
                    <li><?= $this->Html->link(__('Register'), ['controller' => "Users", 'action' => "add"]) ?></li>
                <?php else: ?>
                    <li><?= $this->Html->link(__('Logout'), ['controller' => "Users", 'action' => "logout"]) ?></li>
                <?php endif; ?>

                <?php if ($this->Session->read('Config.language') == 'en' || is_null($this->Session->read('Config.language'))): ?>
                    <li><?= $this->Html->link('Français', ['action' => 'changeLang', 'fr'], ['escape' => false]) ?></li>
                <?php elseif ($this->Session->read('Config.language') == 'fr'):; ?>
                    <li><?= $this->Html->link('Español', ['action' => 'changeLang', 'es'], ['escape' => false]) ?></li>
                <?php elseif ($this->Session->read('Config.language') == 'es'):; ?>
                   <li><?= $this->Html->link('English', ['action' => 'changeLang', 'en'], ['escape' => false]) ?></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>

    <nav class="large-3 medium-4 columns" id="actions-sidebar">
        <ul class="side-nav">
            <li class="heading"><?= __('Actions') ?></li>

            <span class="user-type">
            <?php if ($this->request->getSession()->read("Auth.User.type") == 1):
                echo __('You are a regular user');
            elseif ($this->request->getSession()->read("Auth.User.type") == 2):
                echo __('You are a store manager');
            elseif ($this->request->getSession()->read("Auth.User.type") == 3):
                echo __('You are an admin');
            endif; ?>
        </span>

            <!-- Ne pas afficher si pas admin -->
            <?php if ($this->request->getSession()->read("Auth.User.type") == 3): ?>
                <li><?= $this->Html->link(__('New Store'), ['action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
            <?php endif; ?>

            <li><?= $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>

            <!-- Ne pas afficher si pas propriétaire -->
            <?php if ($this->request->getSession()->read("Auth.User.type") >= 2): ?>
                <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('New product image'), ['controller' => 'Files',  'action' => 'add']) ?> </li>
                <li><?= $this->Html->link(__('List Product Images'), ['controller' => 'Files', 'action' => 'index']) ?></li>
            <?php endif; ?>
        </ul>
    </nav>

    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
