<?php
/**
 * @var AppView $this
 * @var User $user
 */

use App\Model\Entity\User;
use App\View\AppView;

?>

<h1><?= __("Login") ?></h1>

<?= $this->Form->create() ?>
    <?= $this->Form->control('email') ?>
    <?= $this->Form->control('password', ['type' => 'password']) ?>
    <?= $this->Form->button(__('Login')) ?>
<?= $this->Form->end() ?>
