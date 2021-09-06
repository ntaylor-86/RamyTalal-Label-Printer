<?php

namespace Talal\LabelPrinter\Command;

class Barcode implements CommandInterface
{
    /**
     * @var string
     */
    protected $value;

    protected $types = [
        'CODE39' => '0'
    ];

    /**
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @inheritdoc
     */
    public function read()
    {
        return
            chr(27).                      # ESC
            'it'.$this->types['CODE39'].  # Type
            'r'.chr(49).                  # Characters below
            'e'.chr(48).                  # Parentheses deletion
            'h'.chr(160).chr(0).          # Height
            'w'.chr(52).                  # Width
            'z'.chr(50).                  # Ratio
            'B'.$this->value.             # Barcode data
            chr(92);                      # Backslash
    }
}
