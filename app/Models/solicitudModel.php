<?php

namespace App\Models;

use CodeIgniter\Model;

class solicitudModel extends Model
{
    protected $table      = 'solicitud';
    protected $primaryKey = 'userID';

    protected $useAutoIncrement = false;

    protected $returnType     = 'array';

    protected $allowedFields = ['userID','libroID','estado','cantidad'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

   
    


    protected $validationRules = [
        'userID' => 'required',
        'libroID'=> 'required'
    ];

    
    protected $skipValidation     = false;
}