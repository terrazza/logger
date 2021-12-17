<?php
namespace Terrazza\Component\Logger\Writer;
use Terrazza\Component\Logger\IWriter;

class HtmlWriter implements IWriter {
    private string $htmlWrap;
    public function __construct(?string $htmlWrap=null, ?bool $addLineBreak=false) {
        $this->htmlWrap     = $htmlWrap ?: "%s";
        if ($addLineBreak) {
            $this->htmlWrap .= "<br>";
        }
    }

    public function write(string $record) : void {
        echo sprintf($this->htmlWrap, $record);
    }
}