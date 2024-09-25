<?php
require_once "src/DisplayLocations.php";
use PHPUnit\Framework\TestCase;



class DisplayLocationsTest extends TestCase{
    public function testDisplaylocations():void
{
    $locations = [[
        'location'=>'Florida',
        'sublocation'=>'Tampa',
        'attraction'=>'Ice Hockey',
        'photo' => 'photo'
    ]];

    $expected = "<div class='itemcard'>
            <div class='imageplaceholder'><img class='imagesizing' src='photo' alt='Tampa'><p class='imagetext'>Tampa,Florida</p></div>
            <div class='textcard'>
            <p>Ice Hockey</p>
            </div>
            </div>";
    $actual = DisplayLocations($locations);

    $this->assertEquals($expected,$actual);
}
public function testDisplaylocationstype ():void
{
    $this->expectException(TypeError::class);

    DisplayLocations('This is not an array');


}


}
