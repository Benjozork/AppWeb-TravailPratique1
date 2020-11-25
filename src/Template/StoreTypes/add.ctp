<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StoreType $storeType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Store Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="storeTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($storeType) ?>
    <fieldset>
        <legend><?= __('Add Store Type') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('stores._ids', ['options' => $stores]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
