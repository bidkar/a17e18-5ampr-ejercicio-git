<?php
require_once '../src/app/db/mysql.php';
require_once '../src/models/user.php';
use Models\User;

$usuarios = User::all();
// var_dump($usuarios);

if (!$usuarios) {
    // imprimir que no lo encontro
    echo 'La tabla users no tiene registros';
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
            <?php
            foreach ($usuarios as $usuario) {
                echo "<tr>".
                "<td>$usuario->id</td>
                <td>$usuario->name</td>
                <td>$usuario->firstname</td>
                <td>$usuario->lastname</td>
                <td>$usuario->email</td></tr>";
            }
            ?>
        </tbody>
    </table>
<?php
}
?>