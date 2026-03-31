<?php
App::uses('AppModel', 'Model');

class Filme extends AppModel{
  public $belongsTo = [
        'Genero' => [
            'className' => 'Genero',
            'foreignKey' => 'genero_id'
        ]
    ];

    public $hasMany = [
        'Critica' => [
            'className' => 'Critica',
            'foreignKey' => 'filme_id'
        ]
    ]; 

    public $validate = [
        'nome' => [
            'rule' => 'notBlank',
            'message' => 'O nome do filme é obrigatório'
        ], 
        'duracao' => [
            'rule' => 'numeric',
            'message' => 'A duração do filme é obrigatória'
        ],
      
    ];
}
