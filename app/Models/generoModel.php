<?php

namespace App\Models;

use CodeIgniter\Model;

class generoModel extends Model
{
    protected $table      = 'generolibro';
    protected $primaryKey = 'generoLibroID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['nombreGenero'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules = [
        'nombreGenero' => 'required|is_unique[generolibro.nombreGenero]'
    ];

    protected $validationMessages =[
        'nombreGenero' =>[
            'required'=>'debe ingresar un valor',
            'is_unique'=>'Lo sentimos, pero el genero ya se encuentra registrado.'
        ]
    ];
    protected $skipValidation     = false;
}