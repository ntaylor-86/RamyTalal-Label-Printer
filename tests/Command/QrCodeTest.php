<?php

use Talal\LabelPrinter\Command;

class QrCodeTest extends PHPUnit_Framework_TestCase
{
    public function testQrCodeValid()
    {
        $command = new Command\QrCode('RamyTalal');
        
        $text = '52616d7954616c616c';
        $hex = '1b 69 51 38 32 30 30 30 30 32 30'.$text.'5c 5c 5c';
        
        $this->assertEquals(
            str_replace(" ", "", $hex), bin2hex($command->read())
        );
    }
}

