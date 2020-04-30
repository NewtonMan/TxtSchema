<?php
namespace TxtSchema;

class Reader extends Common {
    
    public $file_contents = '';
    
    public $data = [];
    
    public function __construct($filename=null, $use_include_path=false, $context=null, $offset=0, $maxlen=null) {
        if (!empty($filename)){
            $this->open($filename);
        }
    }
    
    public function open($filename) {
        $this->file_contents = file_get_contents($filename);
    }
    
    public function parseLine() {
        $lines = explode("\n", $this->file_contents);
        foreach ($lines as $x => $line){
            $this->parseLineColumns($x, $line);
        }
    }
    
    public function parseLineColumns($line_number, $line) {
        foreach ($this->schema as $registry => $schema){
            $header = substr($line, 0, $schema[0]['size']);
            if ($header==$registry){
                $pos = 0;
                foreach ($schema as $field){
                    if (isset($this->data[$registry][$line_number][$field['name']])){
                        throw new Exception('Campo re-informado/linha: ' . $field['name'].'/'.$line_number);
                    }
                    $this->data[$registry][$line_number][$field['name']] = substr($line, $pos, $field['size']);
                    $pos += $field['size'];
                }
            }
        }
    }
    
    public function parse() {
        $this->parseLine();
    }
    
    public function getData(){
        return $this->data;
    }
    
}