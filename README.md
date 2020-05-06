# TxtSchema
Uma biblioteca para facilitar o trabalho de leitura e escrita de integrações com layouts TXT

Exemplo para Leitura de Layouts TXT
```
$leituraRegistro = new TxtSchema\Reader();
// DEFINE LAYOUT REGISTRO 6
$leituraRegistro->addSchemaField(6, 'HEADER', 'HEADER', 1);
$leituraRegistro->addSchemaField(6, 'CODIGOINTERNO', 'STRING', 20);
$leituraRegistro->addSchemaField(6, 'NUMPEDIDO', 'STRING', 20);
$leituraRegistro->addSchemaField(6, 'CNPJ_DEPOSITANTE', 'STRING', 20);
$leituraRegistro->addSchemaField(6, 'CNPJ_EMITENTE', 'STRING', 20);
$leituraRegistro->addSchemaField(6, 'SEQUENCIA', 'STRING', 20);
$leituraRegistro->addSchemaField(6, 'TIPO', 'STRING', 1);
$leituraRegistro->addSchemaField(6, 'STATUS', 'STRING', 1);
$leituraRegistro->addSchemaField(6, 'O', 'STRING', 1);
$leituraRegistro->addSchemaField(6, 'MOTIVOCANCELAMENTO', 'STRING', 100);
$leituraRegistro->addSchemaField(6, 'C', 'STRING', 1);
$leituraRegistro->addSchemaField(6, 'IDMOVIMENTO', 'STRING', 12);
$leituraRegistro->addSchemaField(6, 'IDNOTAFISCAL', 'STRING', 12);
$leituraRegistro->addSchemaField(6, 'NPALET', 'STRING', 40);
$leituraRegistro->addSchemaField(6, 'SEQ_ENTREGA', 'STRING', 20);
$leituraRegistro->addSchemaField(6, 'PAGINAGEOMAPA', 'STRING', 10);
$leituraRegistro->addSchemaField(6, 'DESCRROMANEIO', 'STRING', 80);
$leituraRegistro->addSchemaField(6, 'PLACA', 'STRING', 10);
$leituraRegistro->addSchemaField(6, 'MOTORISTA', 'STRING', 80);
$leituraRegistro->addSchemaField(6, 'CNPJ_MOTORISTA', 'STRING', 20);
$leituraRegistro->addSchemaField(6, 'DATAEMISSAO', 'STRING', 10);
$leituraRegistro->addSchemaField(6, 'QTDEVOLUME', 'STRING', 12);
$leituraRegistro->addSchemaField(6, 'TOTALPESOVOLUME', 'STRING', 12);
$leituraRegistro->addSchemaField(6, 'CNPJ_DEST', 'STRING', 20);
$leituraRegistro->addSchemaField(6, 'IDENTIFICADORPEDIDO', 'STRING', 12);
$leituraRegistro->addSchemaField(6, 'F', 'STRING', 1);
// DEFINE LAYOUT REGISTRO 7
$leituraRegistro->addSchemaField(7, 'HEADER', 'HEADER', 1);
$leituraRegistro->addSchemaField(7, 'CODIGOINTERNO', 'STRING', 20);
$leituraRegistro->addSchemaField(7, 'NUMPEDIDO', 'STRING', 20);
$leituraRegistro->addSchemaField(7, 'CNPJ_DEPOSITANTE', 'STRING', 20);
$leituraRegistro->addSchemaField(7, 'CNPJ_EMITENTE', 'STRING', 20);
$leituraRegistro->addSchemaField(7, 'SEQUENCIA', 'STRING', 20);
$leituraRegistro->addSchemaField(7, 'TIPO', 'STRING', 1);
$leituraRegistro->addSchemaField(7, 'IDSEQ', 'STRING', 12);
$leituraRegistro->addSchemaField(7, 'BARRA', 'STRING', 20);
$leituraRegistro->addSchemaField(7, 'QTDE', 'STRING', 12);
$leituraRegistro->addSchemaField(7, 'QTDEATENDIDA', 'STRING', 12);
$leituraRegistro->addSchemaField(7, 'IDNOTAFISCAL', 'STRING', 12);
$leituraRegistro->addSchemaField(7, 'CODIGOPRODUTO', 'STRING', 20);
$leituraRegistro->addSchemaField(7, 'NUMSERIE', 'STRING', 20);
$leituraRegistro->addSchemaField(7, 'IDENFICADORPEDIDO', 'STRING', 12);
$leituraRegistro->addSchemaField(7, 'QTDECORTEFISICO', 'STRING', 12);
$leituraRegistro->addSchemaField(7, 'VOLUMES', 'STRING', 200);
$leituraRegistro->addSchemaField(7, 'CODPRODUTO', 'STRING', 60);
$leituraRegistro->addSchemaField(7, 'F', 'STRING', 1);
$leituraRegistro->open($filename);
$leituraRegistro->parse();
// OBTEM ARRAY COM REGISTRO E CAMPOS ASSOCIADOS COMO INDICE
$arquivoEstruturado = $$leituraRegistro->getData();
print_r($arquivoEstruturado);
```

Exemplo para Gravação de Layouts TXT
```
$gravaRegistro = new TxtSchema\Writer();
// DEFINE LAYOUT REGISTRO 6
$gravaRegistro->addSchemaField(6, 'HEADER', 'HEADER', 1);
$gravaRegistro->addSchemaField(6, 'CODIGOINTERNO', 'STRING', 20);
$gravaRegistro->addSchemaField(6, 'NUMPEDIDO', 'STRING', 20);
$gravaRegistro->addSchemaField(6, 'CNPJ_DEPOSITANTE', 'STRING', 20);
$gravaRegistro->addSchemaField(6, 'CNPJ_EMITENTE', 'STRING', 20);
$gravaRegistro->addSchemaField(6, 'SEQUENCIA', 'STRING', 20);
$gravaRegistro->addSchemaField(6, 'TIPO', 'STRING', 1);
$gravaRegistro->addSchemaField(6, 'STATUS', 'STRING', 1);
$gravaRegistro->addSchemaField(6, 'O', 'STRING', 1);
$gravaRegistro->addSchemaField(6, 'MOTIVOCANCELAMENTO', 'STRING', 100);
$gravaRegistro->addSchemaField(6, 'C', 'STRING', 1);
$gravaRegistro->addSchemaField(6, 'IDMOVIMENTO', 'STRING', 12);
$gravaRegistro->addSchemaField(6, 'IDNOTAFISCAL', 'STRING', 12);
$gravaRegistro->addSchemaField(6, 'NPALET', 'STRING', 40);
$gravaRegistro->addSchemaField(6, 'SEQ_ENTREGA', 'STRING', 20);
$gravaRegistro->addSchemaField(6, 'PAGINAGEOMAPA', 'STRING', 10);
$gravaRegistro->addSchemaField(6, 'DESCRROMANEIO', 'STRING', 80);
$gravaRegistro->addSchemaField(6, 'PLACA', 'STRING', 10);
$gravaRegistro->addSchemaField(6, 'MOTORISTA', 'STRING', 80);
$gravaRegistro->addSchemaField(6, 'CNPJ_MOTORISTA', 'STRING', 20);
$gravaRegistro->addSchemaField(6, 'DATAEMISSAO', 'STRING', 10);
$gravaRegistro->addSchemaField(6, 'QTDEVOLUME', 'STRING', 12);
$gravaRegistro->addSchemaField(6, 'TOTALPESOVOLUME', 'STRING', 12);
$gravaRegistro->addSchemaField(6, 'CNPJ_DEST', 'STRING', 20);
$gravaRegistro->addSchemaField(6, 'IDENTIFICADORPEDIDO', 'STRING', 12);
$gravaRegistro->addSchemaField(6, 'F', 'STRING', 1);
// DEFINE LAYOUT REGISTRO 7
$gravaRegistro->addSchemaField(7, 'HEADER', 'HEADER', 1);
$gravaRegistro->addSchemaField(7, 'CODIGOINTERNO', 'STRING', 20);
$gravaRegistro->addSchemaField(7, 'NUMPEDIDO', 'STRING', 20);
$gravaRegistro->addSchemaField(7, 'CNPJ_DEPOSITANTE', 'STRING', 20);
$gravaRegistro->addSchemaField(7, 'CNPJ_EMITENTE', 'STRING', 20);
$gravaRegistro->addSchemaField(7, 'SEQUENCIA', 'STRING', 20);
$gravaRegistro->addSchemaField(7, 'TIPO', 'STRING', 1);
$gravaRegistro->addSchemaField(7, 'IDSEQ', 'STRING', 12);
$gravaRegistro->addSchemaField(7, 'BARRA', 'STRING', 20);
$gravaRegistro->addSchemaField(7, 'QTDE', 'STRING', 12);
$gravaRegistro->addSchemaField(7, 'QTDEATENDIDA', 'STRING', 12);
$gravaRegistro->addSchemaField(7, 'IDNOTAFISCAL', 'STRING', 12);
$gravaRegistro->addSchemaField(7, 'CODIGOPRODUTO', 'STRING', 20);
$gravaRegistro->addSchemaField(7, 'NUMSERIE', 'STRING', 20);
$gravaRegistro->addSchemaField(7, 'IDENFICADORPEDIDO', 'STRING', 12);
$gravaRegistro->addSchemaField(7, 'QTDECORTEFISICO', 'STRING', 12);
$gravaRegistro->addSchemaField(7, 'VOLUMES', 'STRING', 200);
$gravaRegistro->addSchemaField(7, 'CODPRODUTO', 'STRING', 60);
$gravaRegistro->addSchemaField(7, 'F', 'STRING', 1);
// INSERE LINHA REGISTRO 6
$gravaRegistro->addRow(6, $camposRegistro6);
// INSERE LINHA REGISTRO 7
$gravaRegistro->addRow(7, $camposRegistro7);
$arquivoTxt = $gravaRegistro->getOutput();
```