<?php

use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

NavBar::begin([
  'brandLabel' => Yii::$app->name,
  'brandUrl' => Yii::$app->homeUrl,
  'options' => ['class' => 'navbar-expand-lg bg-body-tertiary shadow-sm'],
]);

$menuItems = [];

if (Yii::$app->user->isGuest) {
  $menuItems[] = [
    'label' => 'Login',
    'url' => ['/site/login'],
    'linkOptions' => [
      'data-method' => 'post'
    ]
  ];
} else {
  $menuItems[] = [
    'label' => 'Create',
    'url' => ['/site/index'],
    'linkOptions' => [
      'data-method' => 'post'
    ]
  ];
  $menuItems[] = [
    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
    'url' => ['/site/logout'],
    'linkOptions' => [
      'data-method' => 'post'
    ]
  ];
}

echo Nav::widget([
  'options' => ['class' => 'navbar-nav ms-auto'],
  'items' => $menuItems,
]);

NavBar::end();
