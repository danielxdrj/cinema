<?php

App::uses('AppController', 'Controller');

class FilmesController extends AppController {


    public function index() {
    $filmes = array(
        array('filme' => array('Nome' => 'Avengers', 'Ano' => '2019', 'Duração' => '2:58:37', 'Idioma' => 'Inglês')),
        array('filme' => array('Nome' => 'Spider-Man', 'Ano' => '2019', 'Duração' => '2:04:00', 'Idioma' => 'Português')),
        array('filme' => array('Nome' => 'Batman v Superman', 'Ano' => '2016', 'Duração' => '2:32:00', 'Idioma' => 'Inglês')),
        array('filme' => array('Nome' => 'Iron Man 3', 'Ano' => '2013', 'Duração' => '2:15:00', 'Idioma' => 'Inglês')),
        array('filme' => array('Nome' => 'The Dark Knight', 'Ano' => '2008', 'Duração' => '2:32:00', 'Idioma' => 'Português')),
        array('filme' => array('Nome' => 'Captain America: The First Avenger', 'Ano' => '2011', 'Duração' => '2:04:00', 'Idioma' => 'Inglês')),
        array('filme' => array('Nome' => 'Thor', 'Ano' => '2011', 'Duração' => '1:54:00', 'Idioma' => 'Português'))
    );
    
    $this->set('filmes', $filmes);
    }

}