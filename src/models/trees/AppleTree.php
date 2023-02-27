<? php 

class AppleTree extends FruitTree
{
    public function __construct($id)
    {
        parent::__construct($id, 'apple', 40, 50);
    }
}
