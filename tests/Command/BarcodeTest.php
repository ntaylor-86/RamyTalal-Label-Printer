<?php

use Talal\LabelPrinter\Command;

class BarcodeTest extends PHPUnit_Framework_TestCase
{
    public function testBarcodeValid()
    {
        $command = new Command\Barcode('12345');
        
        $hex = '1b6974307231653068a00077347a324231323334355c';
        $this->assertEquals($hex, bin2hex($command->read()));
    }
}
