<?php
echo $this->Html->tag('h1', 'Detalhes do Filme');
echo $this->Html->tableHeaders(array('Nome', 'Ano', 'Duração', 'Idioma'));
echo $this->Html->tableCells(array(
    $this->request->data['Filme']['nome'],
    $this->request->data['Filme']['ano'],
    $this->request->data['Filme']['duracao'],
    $this->request->data['Filme']['idioma']
));
echo $this->Html->link('Voltar', '/filmes');
?>