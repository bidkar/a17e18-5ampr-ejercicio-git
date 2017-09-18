<?php
require_once '../src/app/db/mysql.php';
require_once '../src/models/user.php';
use Models\User;

$id = 1;
$usuario = User::FindById($id);
// var_dump($usuario);

if (!$usuario) {
    // imprimir que no lo encontro
    echo 'Usuario con id='.$id.' no encontrado!';
} else {
    // imprimir informacion del usuario
    // table>(thead>tr>th*5)+(tbody>tr>td*5)
?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>FIRSTNAME</th>
                <th>LASTNAME</th>
                <th>EMAIL</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $usuario->id; ?></td>
                <td><?php echo $usuario->name; ?></td>
                <td><?php echo $usuario->firstname; ?></td>
                <td><?php echo $usuario->lastname; ?></td>
                <td><?php echo $usuario->email; ?></td>
            </tr>
        </tbody>
    </table>
<?php
}
?>