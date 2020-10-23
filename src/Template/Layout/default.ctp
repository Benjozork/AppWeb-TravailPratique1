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
                    <li><?= $this->Html->link('Register', ['controller' => "Users", 'action' => "add"]) ?></li>
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
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
