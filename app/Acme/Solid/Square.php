<?php
/**
 * Created by PhpStorm.
 * User: abdullo
 * Date: 2/5/19
 * Time: 3:55 PM
 */

namespace App\Acme\Solid;


class Square implements Shape
{
    public $width;
    public $height;

    /**
     * Square constructor.
     * @param $width
     * @param $height
     */
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function area()
    {
        return $this->width * $this->height;
    }
}
