<?php
$form = $this->Form->create('Filme');
$form .= $this->Form->input('Filme.nome', array('label'=>array('text' => 'Nome')));
$form .= $this->Form->input('Filme.ano', array('label'=> array('text' => 'Ano', 'maxlength' => 12)));
$form .= $this->Form->input('Filme.duracao', array('label'=> array('text' => 'Duração', 'maxlength' => 12)));
$form .= $this->Form->input('Filme.idioma', array('label'=> array('text' => 'Idioma')));
$form .= $this->Form->submit('Gravar');
$form .= $this->Form->end();

echo $this->Html->tag('h1', 'Novo Filme');
echo $form;

?>
