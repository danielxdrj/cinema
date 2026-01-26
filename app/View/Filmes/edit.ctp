<?php
$form = $this->Form->create('Filme');
$form .= $this->Form->hidden('Filme.id');
$form .= $this->Form->input('Filme.nome', array('label'=> 'Nome'));
$form .= $this->Form->input('Filme.ano', array('label'=> 'Ano'));
$form .= $this->Form->input('Filme.duracao', array('label'=> 'Duração'));
$form .= $this->Form->input('Filme.idioma', array('label'=> 'Filme'));
$form .= $this->Form->submit('Gravar');
$form .= $this->Form->end();

echo $this->Html->tag('h1', 'Editar Filme');
echo $form;

?>