<?php
require_once  '../vendor/autoload.php'; // Autoload files using Composer autoload

use App\Wcs\Hello;
use HelloWorld\SayHello;

// routing

$page = 'index';
if (isset($_GET['p'])) {
    $page = $_GET['p'];
}

/*$hello = new App\Wcs\Hello();
$Sayhello = new SayHello();
echo $Sayhello->world();
echo $hello->talk();*/


$products = ['product1', 'product2', 'product3', 'product4', 'product5'];
$loader = new Twig_Loader_Filesystem('../src/View');
$twig = new Twig_Environment($loader, [
    'cache '=> false //_DIR_. '/tmp'
]);


    echo $twig->render(
        'index.html.twig',
        ['tabs' => $products ]
    );

    







/*$t = new MyView();
$t->friends = array(
    'Rachel', 'Monica', 'Phoebe', 'Chandler', 'Joey', 'Ross'
);
echo $t->render('base.html.twig');*/
