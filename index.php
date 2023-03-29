<?php
class Car
{
    public $name;
    public $model;
    function __construct($name,$model)
    {
        $this->name = $name;
        $this->model = $model;
    }
    public function get_details()
    {
        echo "the details are as follows {$this->name} and {$this->model}";
    }
 
}
class  Van extends Car
{
    public $age=25;
   public function get_msg()
   {
       echo "the message of the foll";
       echo $this->age;
   }
}
$van = new Van('audi','audi001');
echo $van->get_details();

echo $van->get_msg();

?>
