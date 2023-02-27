<? php 

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
