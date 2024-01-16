<?php 

try {
  $conn = new PDO('mysql:host=localhost;dbname=php_mysql_todolist','root','');
  //echo "Conexión establecida...";
} catch (PDOException $e) {
  echo "Error de conexión:". $e->getMessage();
}

if(isset($_POST['agregar_tarea'])) {
  $tarea = ($_POST['tarea']);
  $sql = "INSERT INTO tareas (nombre) VALUE(?)";
  $sentencia = $conn->prepare($sql);
  $sentencia->execute([$tarea]);
}

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = 'DELETE FROM tareas WHERE id=?';
  $sentencia = $conn->prepare($sql);  
  $sentencia->execute([$id]);
}

if(isset($_POST['id'])) {
  $id = $_POST['id'];  
  $completado = (isset($_POST['completado']))?1:0;
  $sql = 'UPDATE tareas SET completado = ? WHERE id = ?';
  $sentencia = $conn->prepare($sql);  
  $sentencia->execute([$completado, $id]);  
}

$sql = "SELECT * FROM tareas";
$registros = $conn->query($sql);

?>