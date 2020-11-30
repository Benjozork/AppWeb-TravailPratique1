<?php
/**
 * @var AppView $this
 * @var StoreType[]|CollectionInterface $storeTypes
 */

use App\Model\Entity\StoreType;
use App\View\AppView;
use Cake\Collection\CollectionInterface;

$this->extend('../Layout/TwitterBootstrap/dashboard');
?>
<div class="storeTypes index large-9 medium-8 columns content">
    <h3><?= __('Store Types') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($storeTypes as $storeType): ?>
                <tr>
                    <td><?= $this->Number->format($storeType->id) ?></td>
                    <td><?= h($storeType->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $storeType->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $storeType->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $storeType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $storeType->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
