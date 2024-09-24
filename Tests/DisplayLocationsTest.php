<?php
require_once "src/DisplayLocations.php";
use PHPUnit\Framework\TestCase;



class DisplayLocationsTest extends TestCase{
    public function testDisplaylocations():void
{
    $locations = [[
        'location'=>'Florida',
        'sublocation'=>'Tampa',
        'attraction'=>'Ice Hockey']];

    $expected = "<div class='card'><p>The location is Florida</p><p>The sub-location is Tampa</p><p>While I was there I went to Ice Hockey</p></div>";
    $actual = DisplayLocations($locations);

    $this->assertEquals($expected,$actual);
}

}
