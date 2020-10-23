<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('home.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>
<body class="home">

    <div>
        <p>Benjamin Dupont</p>

        <p>420-5b7 MO Applications internet.<br/>Automne 2018, Collège Montmorency.</p>

        <p>
            <em>Créer un compte</em><br/>

            Pour créer un compte, il suffit de cliquer sur le bouton "S'enrigistrer" sur la barre du haut. Il faut ensuite remplir les informations pertinentes pour créer son compte.

            <b>Si vous êtes propriétaire de magasin ou administrateur, un webmestre devra changer votre status dans la base de données.</b>
        </p>

        <p>
            <em>Se connecter</em><br/>

            Pour se connecter, il suffit de cliquer sur le bouton "Se connecter" sur la barre du haut et de fournier la bonne addresse courriel ainsi que le bon mot de passe.
        </p>

        <p>
            <em>Gérer les magasins</em><br/>

            Il est possible de créer, supprimer ou éditer des magasins depuis la barre latérale. Vous devez posséder les accès d'administrateur (type 3) pour pouvoir effectuer ces actions.
        </p>

        <p>
            <em>Gérer les produits</em><br/>

            Il est possible de créer, supprimer ou éditer des produits depuis la barre latérale. Vous devez posséder les accès de propriétaire (type 2 ou plus) pour pouvoir effectuer ces actions.
        </p>

        <p>
            <em>Gérer les images de produits</em><br/>

            Il est possible de téléverser, supprimer ou éditer des images de produits depuis la barre latérale. Vous devez posséder les accès de propriétaire (type 2 ou plus) pour pouvoir effectuer ces actions.
        </p>

        <p>
            <em>Visionner les magasins</em><br/>

            Il est possible de visionner les magasins et leurs produits vendus pour chaque utilisateur.
        </p>

        <p>
            <em>Visionner les produits</em><br/>

            Il est possible de visionner les produits vendus pour chaque utilisateur.

            Il est aussi possible de visionner les images d'un produit (non fonctionnel dans la remise).
        </p>

        <img src="img/diagram.PNG" alt="Diagramme de la base de données.">

    </div>

</body>
</html>
