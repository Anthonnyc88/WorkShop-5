<?php
include 'conexion.php';


class estudiantes{
    public $id = 0;
    public $name = "nombre";
    public $last_name = "apellido";
    public $email = "@gmail.com";
}
    //Metodo Constructor de clase estudiantes
	function __construct($id,$name, $last_name, $email) {
	$this->id = $id;
    $this->name = $name;
    $this->last_Name = $last_name;
    $this->correo = $email;


}

 function to_string() {
     return "{$this->$id}-{$this->name}-{$this->last_name}-{$this->email}";

  }

function add_Information( $id,$name, $last_Name, $email){
	
	try {
		$c= new conectar();
			$conexion=$c->conexion();
			$sql=("INSERT INTO people(ID ,nombre,apellido,correo ) VALUES('$id' , '$name' , '$last_name','$email')");
			return $result=mysqli_query($conexion,$sql);

	}catch (Exception $e) {
		echo "$e" +"Error 404";
  	
  }
  
 function delete_Information($id){
	try{
		$c= new conectar();
		$conexion=$c->conexion();
		$sql=("DELETE FROM people WHERE ID=$id");

		return $result=mysqli_query($conexion,$sql);



	}catch(Exception $e){
		echo "$e";

	}
 
  function update_Information($name, $id, $last_name, $correo){
        try{
			$c= new conectar();
			$conexion=$c->conexion();
			$sql=("UPDATE people SET nombre='$name', apellido='$last_name', correo='$email'WHERE ID=$id");
			
			return $result=mysqli_query($conexion,$sql);

		
		}catch(Exception $errors){
			echo "$errors";
		}


 }
 }
}

	?>