<? php 

 abstract class FruitTree
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