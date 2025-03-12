<?php
//naam: joaquim

require_once 'vendor/autoload.php';
require_once 'src/Product.php';
require_once 'src/Music.php';
require_once 'src/Movie.php';
require_once 'src/Game.php';
require_once 'src/Productlist.php';

use Products\Music;
use Products\Movie;
use Products\Game;
use Products\ProductList;

$music1 = new Music ('Fortnite lobby music', 5.00, 9, 1.50, 'blablabla'); 
$music1->setArtist('Artiest 3');
$music1->addNumber('number 12');
$music1->addNumber ('number 13');

$music2 = new Music ('Tunak tun', 10.00, 21, 2.50, 'burp');
$music2->setArtist ('Artiest 1'); 
$music2->addNumber ('number 1');
$music2->addNumber ('number 2');

$movie1 = new Movie ('Fight club', 10.00, 21, 2.50, 'filmpje 1'); 
$movie1->setQuality('DVD');
$movie2 = new Movie ('John wick 3', 15.00, 21, 3.50, 'filmpje 2'); 
$movie2->setQuality('Blueray');

$game1 = new Game ('2k25', 5.00, 21, 1.50, 'Het begin');
$game1->setGenre ('SPORT');
$game1->addRequirements ('8gb geheugen'); 
$game1->addRequirements ('970 GTX');

$game2 = new Game ('Delta force', 10.00, 21, 1.50, 'en daarna....'); 
$game2->setGenre('FPS');
$game2->addRequirements ('16gb geheugen');
$game2->addRequirements ('2070 RTX');

$list1 = new ProductList();
$list1->addProduct($music1);
$list1->addProduct($music2);
$list1->addProduct($movie1);
$list1->addProduct ($movie2); 
$list1->addProduct($game1); 
$list1->addProduct($game2);

print "<table border-1>
    <tr>
        <th> Category</th>
        <tr>naam product</th>
        <thoVerkoopprijs</th> 
        <th>Info</th>
    </tr>";
Foreach($list1->getProducts() as $product)
{
    print "<tr>
            <td>".$product->getCategory()."</td> 
            <td>".$product->getName()."</td> 
            <td>".$product->getSalesPrice()."</td> 
            <td>".$product->printInfo()."</td>
           </tr>";
}
print "</table>";