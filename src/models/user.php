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
        $cnn->close();
        
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

    public static function All() {
        $cnn = new MySQL();
        $sql = "SELECT id,name,firstname,lastname,email FROM users";
        $rst = $cnn->query($sql);
        $cnn->close();
        
        if (!$rst) {
            die('Error en la consulta');
        } elseif ($rst->num_rows > 0) {
            $users = array();
            while ($u = $rst->fetch_assoc()) {
                $user = new User();
                $user->id = $u['id'];
                $user->name = $u['name'];
                $user->firstname = $u['firstname'];
                $user->lastname = $u['lastname'];
                $user->email = $u['email'];
                array_push($users, $user);
            }
            return $users;
        } else {
            return false;
        }
    }

    // CRUD - Create Read Update Delete
    public static function Create($name,$firstname,$lastname,$email,$passwd) {
        if (!User::ValidateExistingUser($name,$email)) {
            $cnn = new MySQL();
            $sql = "INSERT INTO users (name,firstname,lastname,email,password) ";
            $sql.= sprintf("values ('%s','%s','%s','%s','%s')",$name,$firstname,$lastname,$email,$passwd);
            $rst = $cnn->query($sql);
            
            if (!$rst) {
                die('Error en la consulta');
            } else {
                $user = new User();
                $user->id = $cnn->insert_id;
                $user->name = $name;
                $user->firstname = $firstname;
                $user->lastname = $lastname;
                $user->email = $email;
                $cnn->close();
                return $user;
            }
        } else {
            return false;
        }
    }

    private static function ValidateExistingUser($name,$email) {
        $cnn = new MySQL();
        $sql = sprintf("SELECT id FROM users WHERE name='%s' OR email='%s'",$name,$email);
        $rst = $cnn->query($sql);
        $cnn->close();

        if (!$rst) {
            die('Error en la consulta');
        } elseif ($rst->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public static function Login($name, $passwd) {
        $cnn = new MySQL();
        $sql = sprintf("SELECT id,firstname,lastname,email FROM users WHERE name='%s' AND password='%s'",$name,$passwd);
        $rst = $cnn->query($sql);
        $cnn->close();

        if (!$rst) {
            die('Error en la consulta');
        } elseif ($rst->num_rows == 1) {
            $u = $rst->fetch_assoc();
            $user = new User();
            $user->id = $u['id'];
            $user->name = $name;
            $user->firstname = $u['firstname'];
            $user->lastname = $u['lastname'];
            $user->email = $u['email'];
            return $user;
        } else {
            return false;
        }
    }
}