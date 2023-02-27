<? php 

class PearTree extends FruitTree
{
    public function __construct($id)
    {
        parent::__construct($id, 'pear', 0, 20);
    }
}