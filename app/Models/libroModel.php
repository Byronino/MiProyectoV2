<?php

namespace App\Models;

use CodeIgniter\Model;

class libroModel extends Model
{
    protected $table      = 'libro';
    protected $primaryKey = 'libroID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['nombreLibro','autorID','generoLibroID','editorialID','importancia','total','pedidos'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules = [
        'nombreLibro' => 'required|is_unique[libro.nombreLibro]',
        'importancia'=> 'required|less_than_equal_to[10]'
    ];

    protected $validationMessages =[
        'nombreLibro' =>[
            'required'=>'debe ingresar un valor al nombre del libro',
            'is_unique'=>'Lo sentimos, pero el libro ya se encuentra registrado.'
        ],
        'importancia'=>[
            'required'=>'debe ingresar un valor a la importancia del libro',
            'less_than_equal_to'=>'debe ingresar un valor menor o igual a 10'
        ]
    ];
    protected $skipValidation     = false;

    public function grafico5(){
       // $con = new mysqli('localhost','root','','biblioteca');
        $query = $this->query("
                        SELECT nombreAutor,sum(libro.importancia) AS contadorLibro
                        FROM autor LEFT JOIN libro  ON  libro.autorID = autor.autorID
                        GROUP BY nombreAutor;
                        ");
        return $query;
    }
}