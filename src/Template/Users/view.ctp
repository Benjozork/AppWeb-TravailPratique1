<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
$this->extend('../Layout/TwitterBootstrap/dashboard');
?>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->username) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= $this->Number->format($user->type) == 1 ? "Propriétaire" : "Utilisatuer régulier" ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Owned stores') ?></h4>
        <?php if (!empty($user->stores)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->stores as $stores): ?>
            <tr>
                <td><?= h($stores->id) ?></td>
                <td><?= h($stores->name) ?></td>
                <td><?= h($stores->description) ?></td>
                <td><?= h($stores->user_id) ?></td>
                <td><?= h($stores->address) ?></td>
                <td><?= h($stores->created) ?></td>
                <td><?= h($stores->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Stores', 'action' => 'view', $stores->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Stores', 'action' => 'edit', $stores->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Stores', 'action' => 'delete', $stores->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stores->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php else: ?>
            <center><h5><?= __("No owned stores") ?></h5></center>
        <?php endif; ?>
    </div>
</div>
