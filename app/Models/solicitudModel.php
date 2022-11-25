<?php

namespace App\Models;

use CodeIgniter\Model;

class solicitudModel extends Model
{
    protected $table      = 'solicitud';
    protected $primaryKey = 'userID';

    protected $useAutoIncrement = false;

    protected $returnType     = 'array';

    protected $allowedFields = ['userID','libroID'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

   
    


    protected $validationRules = [
        'autorID' => 'required',
        'libroID'=> 'required'
    ];

    protected $validationMessages =[
        'nombreAutor' =>[
            'required'=>'debe ingresar un valor',

        ]
    ];
    protected $skipValidation     = false;
}