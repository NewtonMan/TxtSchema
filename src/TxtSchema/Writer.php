<?php
namespace TxtSchema;

class Writer extends Common {
    
    public $filename = '';
    
    public $output = '';
    
    public $data = [];
    
    public function __construct($filename=null) {
        if (!empty($filename)){
            $this->filename = $filename;
        }
    }
    
    public function getSchemaByHeader($header) {
        foreach ($this->schema[$header] as $i){
            echo "\$data['{$i['name']}'] = '';\n";
        }
    }
    
    public function setRow($header, $fields) {
        $this->data[$header][] = $fields;
    }
    
    public function dataStringFiller($str, $size) {
        if (strlen($str)>$size){
            $str = substr($str, 0, $size);
        } else if (strlen($str)<$size){
            $str = $str . str_repeat(' ', ($size - strlen($str)));
        }
        return $str;
    }
    
    public function getOutput() {
        $this->output = '';
        foreach ($this->schema as $header => $layout) {
            foreach ($this->data[$header] as $pos => $data) {
                $line = $header;
                foreach ($layout as $field) {
                    if ($field['name']=='HEADER') continue;
                    $line .= $this->dataStringFiller($data[$field['name']], $field['size']);
                }
                $this->output .= "$line\n";
            }
        }
        return $this->output;
    }
    
}