<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class UserModel extends Model{
    protected $table = 'users';
    
    protected $allowedFields = [
        'name',
        'email',
        'password',
        'created_at',
        'type',
        'photo',
    ];

    public function dataLibro($id){
        $builder = $this->table('users');
        $builder->select('*');
        $builder->join('solicitud', 'users.id = solicitud.userID');
        $builder->join('libro', 'solicitud.libroID= libro.libroID');
        $builder->where('users.id',$id);
        $query = $builder->findAll();
        return $query;
    }
}