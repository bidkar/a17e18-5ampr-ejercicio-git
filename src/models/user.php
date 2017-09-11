<?php
namespace Models;
use App\DB\MySQL;

class User {
    public  $id;
    private $name;
    private $firstname;
    private $lastname;
    private $email;
    private $password;

    function FindById($id) {
        // crear una conexion a MySQL
        $cnn = new MySQL(); // $cnn es un objeto de tipo mysqli con conexion a base de datos bibliotecam

        // definir la consulta
        $sql = sprintf("select * from users where id=%d",$id);

        // ejecutar la consulta
        $rst = $cnn->query($sql);
        /*
         * el metodo query() de la clase mysqli recibe como parametro la
         * consulta a ejecutar, con una conexion abierta, los posibles
         * resultados son: bool(false) para cuando falla la conexion,
         * ejecucion, sintaxis, etc de la consulta, en caso de no fallar
         * si la consulta es SELECT, SHOW, EXPLAIN el resultado seria
         * un objeto de tipo mysqli_result, y en caso de ser INSERT,
         * UPDATE, DELETE retorna bool(true)
         */

        // evaluar los resultados
        if (!$rst) { // pregunta si fallo la conexion, ejecucion
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