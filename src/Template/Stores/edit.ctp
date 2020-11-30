<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Store $store
 */

$this->extend('../Layout/TwitterBootstrap/dashboard');
?>
<div class="stores form large-9 medium-8 columns content">
    <?= $this->Form->create($store) ?>
    <fieldset>
        <legend><?= __('Edit Store') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('address');
            echo $this->Form->control('products._ids', ['options' => $products]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
