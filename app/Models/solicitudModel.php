<?php

namespace App\Models;

use CodeIgniter\Model;

class solicitudModel extends Model
{
    protected $table      = 'solicitud';
    protected $primaryKey = 'userID';

    protected $useAutoIncrement = false;

    protected $returnType     = 'array';

    protected $allowedFields = ['userID','libroID','estado','cantidad','numero'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

   
    


    protected $validationRules = [
        'userID' => 'required',
        'libroID'=> 'required'
    ];

    
    protected $skipValidation     = false;

    public function cant1(){
        // $con = new mysqli('localhost','root','','biblioteca');
         $query = $this->query("
                         SELECT NVL(MAX(numero),1) FROM solicitud
                         ");
         return $query;
    }
    public function cant(){
        $builder = $this->table('solicitud');
        $builder->select('NVL(MAX(numero),1)');
        $query = $builder->findAll();
        return $query;
    }

    public function numerito($id,$lid){
        $builder = $this->table('solicitud');
        $builder->select('NVL(MAX(numero),1)');
        $builder->where('solicitud.libroiD',$lid);
        $builder->where('solicitud.userID',$id);
        $builder->where('solicitud.estado','1');
        $query = $builder->findAll();
        return $query;
    }
}