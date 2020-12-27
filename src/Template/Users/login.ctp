<?php
/**
 * @var AppView $this
 * @var User $user
 */

use App\Model\Entity\User;
use App\View\AppView;

?>

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>

<h1><?= __("Login") ?></h1>

<?= $this->Form->create() ?>
    <?= $this->Form->control('email') ?>
    <?= $this->Form->control('password', ['type' => 'password']) ?>
    <div id="example1"></div>
    <?= $this->Form->button(__('Login'), ['id' => 'loginButton', 'disabled' => true]) ?>
<?= $this->Form->end() ?>

<script>
    var onloadCallback = function() {
        widgetId1 = grecaptcha.render('example1', {
            'sitekey' : '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI',
            'theme' : 'light',
            callback: () => {
                document.getElementById('loginButton').removeAttribute('disabled');
            }
        });
    };
</script>
