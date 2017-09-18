<?php
namespace Models;
use App\DB\MySQL;

class User {
    private $data =
        ['id'=>'',
        'name'=>'',
        'firstname'=>'',
        'lastname'=>'',
        'email'=>''];

    public function __get($var) {
        return $this->data[$var];
    }

    public function __set($var, $value) {
        if (array_key_exists($var, $this->data))
            $this->data[$var] = $value;
    }

    public static function FindById($id) {
        $cnn = new MySQL();
        $sql = sprintf("select * from users where id=%d",$id);
        $rst = $cnn->query($sql);
        
        if (!$rst) {
            die('Error en la consulta');
        } elseif ($rst->num_rows == 1) {
            $u = $rst->fetch_assoc();
            $user = new User();
            $user->id = $id;
            $user->name = $u['name'];
            $user->firstname = $u['firstname'];
            $user->lastname = $u['lastname'];
            $user->email = $u['email'];
            return $user;
        } else {
            return false;
        }
    }
}