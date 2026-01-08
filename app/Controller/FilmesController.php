<?php

App::uses('AppController', 'Controller');

class FilmesController extends AppController {


    public function index() {
    $filmes = array(
        array('Filme' => array('nome' => 'Avengers', 'ano' => '2019', 'duracao' => '2:58:37', 'idioma' => 'Inglês')),
        array('Filme' => array('nome' => 'Spider-Man', 'ano' => '2019', 'duracao' => '2:04:00', 'idioma' => 'Português')),
        array('Filme' => array('nome' => 'Batman v Superman', 'ano' => '2016', 'duracao' => '2:32:00', 'idioma' => 'Inglês')),
        array('Filme' => array('nome' => 'Iron Man 3', 'ano' => '2013', 'duracao' => '2:15:00', 'idioma' => 'Inglês')),
        array('Filme' => array('nome' => 'The Dark Knight', 'ano' => '2008', 'duracao' => '2:32:00', 'idioma' => 'Português')),
        array('Filme' => array('nome' => 'Captain America: The First Avenger', 'ano' => '2011', 'duracao' => '2:04:00', 'idioma' => 'Inglês')),
        array('Filme' => array('nome' => 'Thor', 'ano' => '2011', 'duracao' => '1:54:00', 'idioma' => 'Português'))
    );
    
    $this->set('filmes', $filmes);
    }

}