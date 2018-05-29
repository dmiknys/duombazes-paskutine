<?php
require_once 'bootstrap.php';

$admin = $em->getRepository("Administratorius")->findAll();
// $vadovas = $em->getRepository("Vadovas")->findAll();

var_dump($admin);

$data=[
    'admin'=>$admin,
];

echo $twig->render('loginData.twig', $data);
