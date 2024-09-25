<?php
require_once "src/DisplayLocations.php";
use PHPUnit\Framework\TestCase;



class DisplayLocationsTest extends TestCase{
    public function testDisplaylocations_success():void
{
    $locations = [[
        'location'=>'Florida',
        'sublocation'=>'Tampa',
        'attraction'=>'Ice Hockey',
        'photo' => 'photo'
    ]];

    $expected ="<div class='itemcard'>";
    $expected .="<div class='imageplaceholder'>";
    $expected .="<img class='imagesizing' src='photo' alt='Tampa'>";
    $expected .="<p class='imagetext'>Tampa,Florida</p>";
    $expected .="</div>";
    $expected .="<div class='textcard'>";
    $expected .="<p>Ice Hockey</p>";
    $expected .="</div>";
    $expected .="</div>";

    $actual = DisplayLocations($locations);

    $this->assertEquals($expected,$actual);
}
public function testDisplaylocationstype_failure ():void
{
    $this->expectException(TypeError::class);

    DisplayLocations('This is not an array');
}

public function testDisplaylocationsMalformedtest ():void
{
    $locations = [
        [
        'location'=>'Florida',
        'sublocation'=>'Tampa',
        'attraction'=>'Ice Hockey',
    ]];

    $this->expectException(InvalidArgumentException::class);

    DisplayLocations($locations);

    }

}
