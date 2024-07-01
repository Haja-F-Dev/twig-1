<?php 

// Initialisation du tableau de produits
$products = ['guitare', 'bass', 'banjo', 'mandoline', 'violon', 'violoncelle', 'alto', 'contrebasse'];

// Inclusion de l'autoloader de Twig
require_once '../vendor/autoload.php';

// Création de l'environnement Twig
$loader = new \Twig\Loader\FilesystemLoader('../src/View');
$twig = new \Twig\Environment($loader, [
    'debug' => true,
]);

$twig->addExtension(new \Twig\Extension\DebugExtension());

// Rendu du template et passage du tablea de produits
echo $twig->render('products.html.twig', ['products' => $products]);