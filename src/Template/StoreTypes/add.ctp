<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StoreType $storeType
 */
$this->extend('../Layout/TwitterBootstrap/dashboard');
?>
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
