<?php
App::uses('AppModel', 'Model');

class Filme extends AppModel{
  public $belongsTo = [
        'Genero' => [
            'className' => 'Genero',
            'foreignKey' => 'genero_id'
        ]
    ];
}
