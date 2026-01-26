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

     public function edit($id = null ){
       if(!empty($this->request->data)){
            $this->Filme->create();
           if($this->Filme->save($this->request->data)){
              $this->Flash->set("Filme editado com sucesso");
              $this->Redirect('/Filmes');
              }
        }else{
          $fields = ['Filme.id','Filme.nome', 'Filme.ano','Filme.duracao','Filme.idioma'];    
          $conditions = array('Filme.id' => $id);
          $this->request->data = $this->Filme->find('first', compact('fields','conditions'));
          
        }

     }

}