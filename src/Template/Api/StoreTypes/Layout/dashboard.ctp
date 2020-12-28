<?php
/* @var $this \Cake\View\View */
use Cake\Core\Configure;

$this->Html->css('BootstrapUI.dashboard', ['block' => true]);
$this->prepend('tb_body_attrs', ' class="' . implode(' ', [$this->request->getParam('controller'), $this->request->getParam('action')]) . '" ');
$this->start('tb_body_start');
?>

<!-- Sidebar -->
<?php $this->start("tb_actions"); ?>
    <!-- Ne pas afficher si pas admin -->
    <?php if ($this->request->getSession()->read("Auth.User.type") == 3): ?>
        <li class="nav-item"><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add', 'prefix' => false], ['class' => 'nav-link']) ?></li>
        <li class="nav-item"><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index', 'prefix' => false], ['class' => 'nav-link']) ?></li>
    <?php endif; ?>

    <li class="nav-item"><?= $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index', 'prefix' => false], ['class' => 'nav-link']) ?></li>
    <li class="nav-item"><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index'], ['class' => 'nav-link']) ?></li>

    <!-- Ne pas afficher si pas propriétaire -->
    <?php if ($this->request->getSession()->read("Auth.User.type") >= 2): ?>
        <li class="nav-item"><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add', 'prefix' => false], ['class' => 'nav-link']) ?></li>
        <li class="nav-item"><?= $this->Html->link(__('New product image'), ['controller' => 'Files',  'action' => 'add', 'prefix' => false], ['class' => 'nav-link']) ?> </li>
        <li class="nav-item"><?= $this->Html->link(__('List Product Images'), ['controller' => 'Files', 'action' => 'index', 'prefix' => false], ['class' => 'nav-link']) ?></li>
    <?php endif; ?>
<?php $this->end(); ?>

<!-- Assign actions to sidebar -->
<?php $this->assign('tb_sidebar',
    '<ul class="nav flex-column">' . $this->fetch('tb_actions') . '</ul>'
); ?>

<body <?= $this->fetch('tb_body_attrs') ?>>
    <nav class="navbar navbar-expand-md navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
        <?= $this->Html->link(Configure::read('App.title'), '/', ['class' => 'navbar-brand col-sm-3 col-md-2 mr-0']) ?>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <?= $this->fetch('tb_sidebar') ?>
                </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <h1 class="page-header"><?= $this->request->controller; ?></h1>
<?php
/**
 * Default `flash` block.
 */
if (!$this->fetch('tb_flash')) {
    $this->start('tb_flash');
    if (isset($this->Flash))
        echo $this->Flash->render();
    $this->end();
}
$this->end();

$this->start('tb_body_end');
echo '</body>';
$this->end();

$this->append('content', '</main></div></div>');
echo $this->fetch('content');
