<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\File $file
 */
?>
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

        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $file->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $file->id)]
            )
        ?></li>

        <!-- Ne pas afficher si pas admin -->
        <?php if ($this->request->getSession()->read("Auth.User.type") == 3): ?>
            <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('New Store'), ['action' => 'add']) ?></li>
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
<div class="files form large-9 medium-8 columns content">
    <?= $this->Form->create($file) ?>
    <fieldset>
        <legend><?= __('Edit File') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('path');
            echo $this->Form->control('status');
            echo $this->Form->control('products._ids', ['options' => $products]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>