<?php
require_once 'src/populateStateDropdown.php';

use PHPUnit\Framework\TestCase;

class populateStateDropdownTest extends TestCase
{
    public function testpopulateStateDropdownSuccess(): void
    {
        $test = [
            [
                'State_name' => 'Alabama',
                'id' => 1
            ],
            [
                'State_name' => 'Arkansas',
                'id' => 2
            ]
        ];

        $expected = "<option value=1>Alabama</option>";
        $expected .= "<option value=2>Arkansas</option>";

        $actual = populateStateDropdown($test);

        $this->assertEquals($expected, $actual);


    }

    public function testpopulateStateDropdownMalformedData(): void
    {
        $states = [
            [
                false => 'Florida',
                '2' => 'Georgia',
            ]
        ];

        $this->expectException(InvalidArgumentException::class);

        populateStateDropdown($states);

    }
}

