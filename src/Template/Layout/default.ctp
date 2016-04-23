<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Tickets';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('bootstrap-material-design.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <div class="row">
      <div class="navbar navbar-default">
        <div class="container-fluid col-md-offset-1">
          <div class="navbar-header">
            <?= $this->Html->link('Lista de Espera', '/', ['class' => 'navbar-brand']); ?>
          </div>
        </div>
      </div>
    </div>

    <?= $this->Flash->render() ?>
    <div class="row">
      <div class="container">
        <?= $this->fetch('content') ?>
      </div>
    </div>
    <footer>
        <?= $this->Html->script('jquery.js') ?>
        <?= $this->Html->script('bootstrap.js') ?>
        <?= $this->Html->script('material.js') ?>
        <?= $this->Html->script('app.js') ?>
    </footer>
</body>
</html>
