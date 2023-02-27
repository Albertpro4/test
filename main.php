<? php 


require_once 'src/Models/Trees/FruitTree.php';
require_once 'src/Models/Trees/AppleTree.php';
require_once 'src/Models/Trees/PearTree.php';
require_once 'src/Models/Orchard.php';


$orchard = new Orchard();
for ($i = 1; $i <= 10; $i++) {
    $tree = new AppleTree($i);
    $orchard->addTree($tree);
}
for ($i = 1; $i <= 15; $i++) {
    $tree = new PearTree($i);
    $orchard->addTree($tree);
}

// Сбор урожая
$orchard->harvest();

// Вывод результатов
echo 'Total apples harvested: ' . $orchard->getApples() . "\n";
echo 'Total pears harvested: ' . $orchard->getPears() . "\n";