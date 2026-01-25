<?php

App::uses('AppController', 'Controller');

class FilmesController extends AppController {


    public function index() {

    $fields = ['Filme.nome', 'Filme.ano','Filme.duracao','Filme.idioma'];    
    $order = ['Filme.ano' => 'desc'];     
    $filmes = $this->Filme->find('all', compact('fields','order'));
    
    $this->set('filmes', $filmes);
    }


      public function add()
     {
        if(!empty($this->request->data)){
            $this->Filme->create();
           if($this->Filme->save($this->request->data)){
              $this->Flash->set("Filme gravado com sucesso");
              $this->Redirect('/Filmes');
              }
        }
     }

   

}