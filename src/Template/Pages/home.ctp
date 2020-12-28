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

    <a href="https://github.com/Benjozork/AppWeb-TravailPratique1">
        <b>https://github.com/Benjozork/AppWeb-TravailPratique1</b>
    </a>

    <p>
        <em>Créer un compte</em><br/>

        Pour créer un compte, il suffit de cliquer sur le bouton "S'enrigistrer" sur la barre du haut. Il faut ensuite remplir les informations pertinentes pour créer son compte.<br/>

        <b>Si vous êtes propriétaire de magasin ou administrateur, un webmestre devra changer votre status dans la base de données.</b>
    </p>

    <p>
        <em>Se connecter</em><br/>

        Pour se connecter, il suffit de cliquer sur le bouton "Se connecter" sur la barre du haut et de fournier la bonne addresse courriel ainsi que le bon mot de passe.
    </p>

    <p>
        <em>Gérer les magasins</em><br/>

        Il est possible de créer, supprimer ou éditer des magasins depuis la barre latérale. Vous devez posséder les accès d'administrateur (type 3) pour pouvoir effectuer ces actions.<br/>

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
        <em>Gérer les images de produits en glisser déposer</em><br/>

        Il est possible de téléverser, supprimer ou éditer des images de produits depuis l'index en glisser-déposer. Vous devez posséder les accès de propriétaire (type 2 ou plus) pour pouvoir effectuer ces actions.<br/>

        Simplement glisser une image sur la zone située au haut de la page "index".
    </p>

    <p>
        <em>Visionner les magasins</em><br/>

        Il est possible de visionner les magasins et leurs produits vendus pour chaque utilisateur.
    </p>

    <p>
        <em>Visionner les produits</em><br/>

        Il est possible de visionner les produits vendus pour chaque utilisateur.<br/>

        Il est aussi possible de visionner les images d'un produit (non fonctionnel dans la remise).
    </p>

    <p>
        <em>Visionner les types de magasins</em><br/>

        Il est possible de visionner les types de magasins existants si l'on est administrateur.
    </p>

    <p>
        <em>Utiliser l'application CRUD des types de magasin</em><br/>

        L'application CRUD des types de magasins permet les opérations suivantes:<br/>

        * Visionner les types de magasin<br/>
          * Voir le tableau présent<br/>
        * Supprimer un magasin (connexion require)<br/>
          * Cliquer sur le lien "Supprimer" à côté du type de magasin<br/>
        * Renommer un type de magasin (connexion require)<br/>
          * Cliquer sur le lien "modifier" à côté du magasin<br/>
        * Changer son mot de passe (connexion require)<br/>
         * Cliquer sur le bouton "Changer" dans la section "Changer son mot de passe"<br/>
    </p>

    <img src="img/diagram.PNG" alt="Diagramme de la base de données.">
