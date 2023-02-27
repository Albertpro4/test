<?php

class FruitTree
{
    protected $id;
    protected $type;
    protected $minFruits;
    protected $maxFruits;
    
    public function __construct($id, $type, $minFruits, $maxFruits)
    {
        $this->id = $id;
        $this->type = $type;
        $this->minFruits = $minFruits;
        $this->maxFruits = $maxFruits;
    }
    
    public function harvest()
    {
        $numFruits = rand($this->minFruits, $this->maxFruits);
        return $numFruits;
    }
    
    public function getType()
    {
        return $this->type;
    }
}

class AppleTree extends FruitTree
{
    public function __construct($id)
    {
        parent::__construct($id, 'apple', 40, 50);
    }
}

class PearTree extends FruitTree
{
    public function __construct($id)
    {
        parent::__construct($id, 'pear', 0, 20);
    }
}

class Orchard
{
    protected $trees = [];
    protected $apples = 0;
    protected $pears = 0;
    
    public function addTree(FruitTree $tree)
    {
        $this->trees[] = $tree;
    }
    
    public function harvest()
    {
        foreach ($this->trees as $tree) {
            $numFruits = $tree->harvest();
            if ($tree instanceof AppleTree) {
                $this->apples += $numFruits;
            } elseif ($tree instanceof PearTree) {
                $this->pears += $numFruits;
            }
        }
    }
    
    public function getApples()
    {
        return $this->apples;
    }
    
    public function getPears()
    {
        return $this->pears;
    }
}



// Инициализация сада
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


