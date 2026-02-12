<?php
$form = $this->Form->create('Filme');
$form .= $this->Form->input('Filme.nome', array('label'=>array('text' => 'Nome')));
$form .= $this->Form->input('Filme.idioma', array(
    'type' => 'select',
    'options' => array('Português' => 'Português', 'Inglês' => 'Inglês',
)));

$form .= $this->Form->input('Filme.duracao', array('label'=> array('text' => 'Duração', 'maxlength' => 12)));
$form .= $this->Form->input('Filme.ano', array('label'=> array('text' => 'Ano', 'maxlength' => 4)));
$form .= $this->Form->input('Filme.genero_id', array(
    'type' => 'select',
    'options' => $generos,
));

$form .= $this->Form->submit('Gravar');
$form .= $this->Form->end();
$voltarLink = $this->Html->link('Voltar','/Filmes');


echo $this->Html->tag('h1', 'Novo Filme');
echo $voltarLink;
echo $form;

?>
