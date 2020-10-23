<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\File $file
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Html->link(__('About'), ['controller' => 'Pages', 'action' => 'display', 'about']) ?></li>

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
    <?= $this->Form->create($file, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add File') ?></legend>
        <?php
            echo $this->Form->input('file', ['type' => 'file', 'class' => 'form-control']);
            echo $this->Form->control('products._ids', ['options' => $products]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Upload File'), ['type'=>'submit', 'class' => 'form-controlbtn btn-default']) ?>
    <?= $this->Form->end() ?>
</div>
