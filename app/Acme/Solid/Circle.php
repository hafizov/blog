<?php
/**
 * Created by PhpStorm.
 * User: abdullo
 * Date: 2/5/19
 * Time: 4:05 PM
 */
namespace App\Acme\Solid;

class Circle implements Shape
{
    public $radius;

    /**
     * Circle constructor.
     * @param $radius
     */
    public function  __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return $this->radius * $this->radius * pi();
    }
}
