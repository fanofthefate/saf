<?php
$arUrlRewrite=array (
  4 => 
  array (
    'CONDITION' => '#^/otzyvy/([a-zA-Z0-9_-]*)/($|index\\.php|\\?.*)#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => '',
    'PATH' => '/otzyvy/detail.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/press/([a-zA-Z0-9_-]*)/($|index\\.php|\\?.*)#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => '',
    'PATH' => '/press/detail.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/news/([a-zA-Z0-9_-]*)/($|index\\.php|\\?.*)#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => '',
    'PATH' => '/news/detail.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/bio/([a-zA-Z0-9_-]*)/($|index\\.php|\\?.*)#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => '',
    'PATH' => '/bio/detail.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^/projects/(.*)/(\\?.*)?#',
    'RULE' => 'ELEMENT_ID=$1',
    'ID' => '',
    'PATH' => '/projects/detail.php',
    'SORT' => 100,
  ),
  2 => 
  array (
    'CONDITION' => '#^/content/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/content/news/index.php',
    'SORT' => 100,
  ),
);
