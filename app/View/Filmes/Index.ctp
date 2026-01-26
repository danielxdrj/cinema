<?php
$detalhe = array();

foreach ($filmes as $filme) {
    $editLink = $this->Html->link('Editar', '/filmes/edit/' . $filme['Filme']['id']);
    $viewLink = $this->Html->link($filme['Filme']['nome'], '/filmes/view/' . $filme['Filme']['id']);
    $deleteLink = $this->Html->link('Excluir', '/filmes/delete/' . $filme['Filme']['id']);
    $detalhe[] = array(
        $viewLink,
        $filme['Filme']['ano'],
        $filme['Filme']['duracao'],
        $filme['Filme']['idioma'],
        $editLink . ' ' . $deleteLink
    );
}



$titulos = array('Nome', 'Ano', 'Duração', 'Idioma', 'Ações');
$header  = $this->Html->tableHeaders($titulos);
$body    = $this->Html->tableCells($detalhe);
$novoButton = $this->Html->link('Novo','/filmes/add');
echo $this->Html->tag('h1', 'Filmes');
echo $novoButton;
echo $this->Html->tag('table', $header . $body);
?>
