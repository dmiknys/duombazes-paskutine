<?php
require_once 'bootstrap.php';

$admin = $em->getRepository("Administratorius")->findAll();
// $vadovas = $em->getRepository("Vadovas")->findAll();

$data=[
    'admin'=>$admin,
];

echo $twig->render('loginData.twig', $data);
