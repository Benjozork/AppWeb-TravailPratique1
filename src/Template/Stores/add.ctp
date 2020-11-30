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
        <legend><?= __('Add Store') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('address');
            echo $this->Form->control('products._ids', ['options' => $products]);
            echo $this->Form->control('store_type_id', ['label' => 'store_type_id', 'type' => 'hidden']);
        ?>
        <input id="tags"/>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"/>

    <script>
        const autocompleteUrl = '<?= $this->Url->build('storeTypes/list.json') ?>';

        $('#tags').autocomplete({
            source: autocompleteUrl,
            minLength: 1,
            select: (event, ui) => {
                $('#store-type-id').val(ui.item.id);
                $('#tags').val(ui.item.name);
            }
        }).data("ui-autocomplete")._renderItem = (ul, item) => $("<li>").append("<a>" + item.name + "</a>").appendTo(ul)
    </script>
</div>
