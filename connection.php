<?php
/**
* 
*/
class Connection
{
	

	public static function connect()
	{
		$server = "localhost";
		$login = "root";
		$senha = "";
		$banco = "FW";

		$conn = mysql_connect($server,$login,$senha);

		if($conn != null){
			$bd = mysql_select_db($banco);
			if($bd != null){
				//nothing
			}
			else{
				throw new Exception('Erro na conexao.');
			}
		}else{
			throw new Exception('Erro na conexao.');
		}
	}
}


?>