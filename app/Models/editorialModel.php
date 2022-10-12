<?php

namespace App\Models;

use CodeIgniter\Model;

class editorialModel extends Model
{
    protected $table      = 'editorial';
    protected $primaryKey = 'editorialID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['nombreEditorial'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules = [
        'nombreEditorial' => 'required|is_unique[editorial.nombreEditorial]'
    ];

    protected $validationMessages =[
        'nombreEditorial' =>[
            'required'=>'debe ingresar un valor',
            'is_unique'=>'Lo sentimos, pero la editorial ya se encuentra registrada.'
        ]
    ];
    protected $skipValidation     = false;
}