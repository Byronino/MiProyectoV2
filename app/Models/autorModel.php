<?php

namespace App\Models;

use CodeIgniter\Model;

class autorModel extends Model
{
    protected $table      = 'autor';
    protected $primaryKey = 'autorID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['nombreAutor'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

   
    


    protected $validationRules = [
        'nombreAutor' => 'required|is_unique[autor.nombreAutor]'
    ];

    protected $validationMessages =[
        'nombreAutor' =>[
            'required'=>'debe ingresar un valor',
            'is_unique'=>'Lo sentimos, pero el autor ya se encuentra registrado.'
        ]
    ];
    protected $skipValidation     = false;
}