<?php  
/**
* @Project Metodo de paginacion PHP-MYSQL
* @copyright (c) 2016
* @author David Fernando Ramirez Gonzalez <david.f.r91@hotmail.com>
* @license GNU-GPL  http://www.gnu.org/licenses/ http://es.wikipedia.org/wiki/GNU_General_Public_License
* @since Version 1.0
*/

// la conexion a la base de datos con el nuevo metodo PDO para mysql.

$opciones = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
); 
		$conexion = new PDO('mysql:host=localhost;dbname=agenda', 'root','',$opciones );
	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT); 				



 
//establecemos condiciones de paginacion
$registros = 6;
 
$pagina = @$_GET ['pagina'];

if (!isset($pagina))
{
$pagina = 1;
$inicio = 0;
}
else 
{
$inicio = ($pagina-1) * $registros;
}

//realizamos la busqueda en la base de datos
$pegar = "SELECT * FROM clientes 
          ORDER BY id ASC LIMIT $inicio,$registros";
$cad = $conexion->query($pegar) or die ( 'error al listar, $pegar'  . PDOStatement::errorInfo() );
 
//calculamos las paginas a mostrar
 
$contar = "SELECT * FROM clientes";
$contarok = $conexion->query($contar);
$total_registros = $contarok->rowCount();
$total_paginas = ($total_registros / $registros);
 
//imprimiendo los resultados

             echo '<table align="center">';
			 echo '<tr><th width="100 align="center">ID</th>';
			 echo '<th width="200" align="center">NOMBRE</th>'; 
			 echo '<th width="200" align="center">DIRECCION</th>';
			 echo '<th width="200" align="center">TELEFONO</th>'; 
			 echo '<th width="200" align="center">EDAD</th> </tr>';
			

   while ($array = $cad->fetch(PDO::FETCH_LAZY) )
	
	{  
             
			 echo '<tr>';
			 echo '<td  width="100" align="center">'.$array['id']. '</td>';
			 echo '<td  width="200" align="center">'.$array['nombre']. '</td>';
			 echo '<td  <width="200" align="center">'.$array['direccion']. '</td>';
			 echo '<td  width="200" align="center">'.$array['telefono']. '</td>';
		     echo '<td  width="200" align="center">'.$array['edad']. '</td>';
			  echo '</tr>';
		
			 
	}  
	
	/* ==============================================*/

	
//creando los enlaces de paginacion de resultados
 
echo "<center><p>";

if($total_registros>$registros){
if(($pagina - 1) > 0) {
echo "<span class='pactiva'><a href='?pagina=".($pagina-1)."'>&laquo; Anterior</a></span> ";
}
// Numero de paginas a mostrar
$num_paginas=10;
//limitando las paginas mostradas
$pagina_intervalo=ceil($num_paginas/2)-1;
 
// Calculamos desde que numero de pagina se mostrara
$pagina_desde=$pagina-$pagina_intervalo;
$pagina_hasta=$pagina+$pagina_intervalo;
 
// Verificar que pagina_desde sea negativo
if($pagina_desde<1){ // le sumamos la cantidad sobrante para mantener el numero de enlaces mostrados $pagina_hasta-=($pagina_desde-1); $pagina_desde=1; } // Verificar que pagina_hasta no sea mayor que paginas_totales if($pagina_hasta>$total_paginas){
$pagina_desde-=($pagina_hasta-$total_paginas);
$pagina_hasta=$total_paginas;
if($pagina_desde<1){
$pagina_desde=1;
}
}
 
for ($i=$pagina_desde; $i<=$pagina_hasta; $i++){ 
if ($pagina == $i){
echo "<span class='pnumero'>".$pagina."</span> "; 
}else{
echo "<span class='pactiva'><a href='?pagina=$i'>$i</a></span> "; 
} 
}
 
if(($pagina + 1)<=$total_paginas) {
echo " <span class='pactiva'><a href='?pagina=".($pagina+1)."'>Siguiente &raquo;</a></span>";
}
}








echo "</p></center>";
	
	
	
?>

