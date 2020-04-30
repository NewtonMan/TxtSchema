<?php
namespace TxtSchema;

class Common {
    
    /*
     * Implement new formats bellow
     */
    private $formats = [
        'HEADER' => [
            'description' => 'REGISTRY HEADER',
        ],
        'DD/MM/YYYY' => [
            'description' => 'Date in the format DD/MM/YYYY',
            'size' => 10,
        ],
        'DDMMYYYY' => [
            'description' => 'Date in the format DDMMYYYY',
            'size' => 8,
        ],
        '99.999.999/9999-99' => [
            'description' => 'CNPJ in the format 99.999.999/9999-99',
            'size' => 18,
        ],
        '999.999.999-99' => [
            'description' => 'CNPJ in the format 999.999.999/9999-99',
            'size' => 19,
        ],
        '99999-999' => [
            'description' => 'CEP in the format 99999-999',
            'size' => 9,
        ],
        '99999999' => [
            'description' => 'CEP in the format 99999999',
            'size' => 8,
        ],
        'DECIMAL' => [
            'description' => 'Decimal number',
        ],
        'STRING' => [
            'description' => 'String',
        ],
    ];
    
    /*
     * This is where to store the defined schema
     */
    public $schema = [];
    
    public function addSchemaField($registry, $name, $format, $size=null) {
        if (!isset($this->schema[$registry])){
            $this->schema[$registry] = [];
        }
        $fields = count($this->schema[$registry]);
        if ($fields == 0 && $name != 'HEADER') {
            throw new Exception('You must define the Header first.');
        } else {
            if (isset($this->formats[$format])){
                if (empty($size) && !isset($this->formats[$format]['size'])) {
                    throw new Exception('You must specify the SIZE for this Format.');
                } elseif (isset($this->formats[$format]['size'])) {
                    $size = $this->formats[$format]['size'];
                }
                $this->schema[$registry][] = [
                    'name' => $name,
                    'format' => $format,
                    'size' => $size,
                ];
            } else {
                throw new Exception('Unsopported/unscpecific format:' . $format);
            }
        }
    }
    
}