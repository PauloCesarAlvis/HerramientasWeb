<?
//cambia la configuracion para  mostrar errores
error_reporting(E_all);
ini_set("display_errors", 1);
//importamos el modelo que usaremos en la clase
include_once 'lib/Usuario_Model.php';
//creamos la clase
class Usuario{
	//creamos la funcion index que determinara que metodo llamar
	//basado en la peticion realizada por el usuario
	function index(){
		if (!empty($_POST)) {
			$this->_post();
		}else{
			$this->_get();
		}
	}

	//funcion privada para manejar las peticiones POST a este recurso
	private function _post(){
		//crea una instancia de la clase
		$usuario = new Usuario_Model();
		//obtenemos los parametros  enviados via POST
		$nombre = $_POST["nombre"];
		$edad = $_POST["edad"];
		$username = $_POST["username"];
		//retorna el mensaje codificado en JSON
		echo json_encode($usuario->addUser($nombre, $edad, $username));

	}
}

//similar a un main en java, creamos instancia de la clase 
$class = new Usuario();
//llamamos su metodo principal 
$class->index();

?>