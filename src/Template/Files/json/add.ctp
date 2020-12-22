<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\File $file
 * @var \App\Model\Entity\Product[] $products
 */
$this->extend('../../Layout/TwitterBootstrap/dashboard');
?>
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
