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
    <?= $this->Form->control(__('email')) ?>
    <?= $this->Form->control(__('password')) ?>
    <?= $this->Form->button(__('Login')) ?>
<?= $this->Form->end() ?>
