<?php
$detalhe = array();

foreach ($filmes as $filme) {
    $detalhe[] = array(
        $filme['Filme']['nome'],
        $filme['Filme']['ano'],
        $filme['Filme']['duracao'],
        $filme['Filme']['idioma']
    );
}



$titulos = array('Nome', 'Ano');
$header  = $this->Html->tableHeaders($titulos);
$body    = $this->Html->tableCells($detalhe);
$novoButton = $this->Html->link('novo','/filmes/add');

echo $this->Html->tag('h1', 'Filmes');
echo $novoButton;
echo $this->Html->tag('table', $header . $body);
?>
