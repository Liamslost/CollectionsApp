<?php
require_once "DisplayLocations/DisplayLocations.php";
use PHPUnit\Framework\TestCase;



class DisplayLocationsTest extends TestCase{
    public function testDisplaylocations():void
{
    $locations = [[
        'location'=>'Florida',
        'sublocation'=>'Tampa',
        'attraction'=>'Ice Hockey']];

    $expected = "The location is Florida <br> The sub-location is Tampa <br>  While I was there I went to Ice Hockey <br><br>";
    $actual = DisplayLocations($locations);

    $this->assertEquals($expected,$actual);
}

}
