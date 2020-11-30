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

use App\Model\Entity\User;
use App\View\AppView;

/**
 * @var AppView $this
 * @var User $user
 */

$cakeDescription = 'CakePHP: the rapid development PHP framework';

$this->extend('../Layout/TwitterBootstrap/dashboard');
?>

<div>
    <p>Benjamin Dupont</p>

    <p>420-5b7 MO Applications internet.<br/>Automne 2020, Collège Montmorency.</p>

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

        Il est possible de changer le type de magasin d'un magasin.
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
