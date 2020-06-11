<?php
namespace App\test;

class Address
{
    /**
     * @var string
     */
    public $street;
    /**
     * @var string
     */
    public $city;

    public function getGeoCoords()
    {
        return $this->street. $this->city;
    }
}
?>
