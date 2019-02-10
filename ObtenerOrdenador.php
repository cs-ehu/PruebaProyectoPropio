<?php
$ruta = "data/Ordenadores.xml";

$xml = simplexml_load_file($ruta);

if(file_exists($ruta)){
	echo '<table class="w3-table-all">';
  echo '<thead>';
  echo '<tr class="w3-light-grey w3-hover-red">';
  echo '<th>Nombre</th>';
  echo '<th>Marca</th>';
   echo'<th>Precio</th>';
   echo'</tr>';
  echo '</thead>';
  echo '<tbody>';

if($_GET['BNombre']!='' && $_GET['BPorMarca']!='' && $_GET['BMin']!='' && $_GET['BMax']!='' ) {

 foreach ($xml->Ordenador as $Ordenadores) :
 	if ($Ordenadores->Nombre == $_GET['BNombre'] && $Ordenadores->Marca == $_GET['BPorMarca'] && $Ordenadores->Precio > $_GET['BMin'] && $Ordenadores->Precio < $_GET['BMax']) {
   echo'<tr class="w3-hover-green">';
    echo'<td>'.$Ordenadores->Nombre.'</td>';
    echo'<td>'.$Ordenadores->Marca.'</td>';
     echo'<td>'.$Ordenadores->Precio.'</td>';
  echo'</tr>';
}
 endforeach; 
 echo'</tbody>';
echo '</table>';
}elseif($_GET['BPorMarca']!='' && $_GET['BMin']!='' && $_GET['BMax']!='' ) {
 foreach ($xml->Ordenador as $Ordenadores) :
 	if ($Ordenadores->Marca == $_GET['BPorMarca'] && $Ordenadores->Precio > $_GET['BMin'] && $Ordenadores->Precio < $_GET['BMax']) {
   echo'<tr class="w3-hover-green">';
    echo'<td>'.$Ordenadores->Nombre.'</td>';
    echo'<td>'.$Ordenadores->Marca.'</td>';
     echo'<td>'.$Ordenadores->Precio.'</td>';
  echo'</tr>';
}
 endforeach; 
 echo' </tbody>';
echo '</table>'; 
}elseif($_GET['BNombre']!='' && $_GET['BMin']!='' && $_GET['BMax']!='') {

 foreach ($xml->Ordenador as $Ordenadores) :
   echo'<tr class="w3-hover-green">';
    echo'<td>'.$Ordenadores->Nombre.'</td>';
    echo'<td>'.$Ordenadores->Marca.'</td>';
     echo'<td>'.$Ordenadores->Precio.'</td>';
  echo'</tr>';
 endforeach; 
 echo'</tbody>';
echo '</table>';
}elseif ($_GET['BPorMarca']!='' && $_GET['BNombre']!='') {

 foreach ($xml->Ordenador as $Ordenadores) :
 	if ($Ordenadores->Marca == $_GET['BPorMarca'] && $Ordenadores->Nombre == $_GET['BNombre']) {
   echo'<tr class="w3-hover-green">';
    echo'<td>'.$Ordenadores->Nombre.'</td>';
    echo'<td>'.$Ordenadores->Marca.'</td>';
     echo'<td>'.$Ordenadores->Precio.'</td>';
  echo'</tr>';
}
 endforeach; 
 echo'</tbody>';
echo '</table>';
}elseif ($_GET['BPorMarca']!='') {

 foreach ($xml->Ordenador as $Ordenadores) :
 	if ($Ordenadores->Marca == $_GET['BPorMarca']) {
   echo'<tr class="w3-hover-green">';
    echo'<td>'.$Ordenadores->Nombre.'</td>';
    echo'<td>'.$Ordenadores->Marca.'</td>';
     echo'<td>'.$Ordenadores->Precio.'</td>';
  echo'</tr>';
}
 endforeach; 
 echo'</tbody>';
echo '</table>';
}elseif ($_GET['BNombre']!='') {

 foreach ($xml->Ordenador as $Ordenadores) :
 	if ($Ordenadores->Nombre == $_GET['BNombre']) {
   echo'<tr class="w3-hover-green">';
    echo'<td>'.$Ordenadores->Nombre.'</td>';
    echo'<td>'.$Ordenadores->Marca.'</td>';
     echo'<td>'.$Ordenadores->Precio.'</td>';
  echo'</tr>';
}
 endforeach; 
 echo' </tbody>';
echo '</table>';
}elseif ($_GET['BMin']!='' && $_GET['BMax']!='') {
 foreach ($xml->Ordenador as $Ordenadores) :
 	if ($Ordenadores->Precio > $_GET['BMin'] && $Ordenadores->Precio < $_GET['BMax']) {
   echo'<tr class="w3-hover-green">';
    echo'<td>'.$Ordenadores->Nombre.'</td>';
    echo'<td>'.$Ordenadores->Marca.'</td>';
     echo'<td>'.$Ordenadores->Precio.'</td>';
  echo'</tr>';
}
 endforeach; 
 echo' </tbody>';
echo '</table>';
}elseif ($_GET['BMin']!='') {
 foreach ($xml->Ordenador as $Ordenadores) :
 	if ($Ordenadores->Precio > $_GET['BMin']) {
   echo'<tr class="w3-hover-green">';
    echo'<td>'.$Ordenadores->Nombre.'</td>';
    echo'<td>'.$Ordenadores->Marca.'</td>';
     echo'<td>'.$Ordenadores->Precio.'</td>';
  echo'</tr>';
}
 endforeach; 
 echo' </tbody>';
echo '</table>';
}elseif ($_GET['BMax']!='') {
 foreach ($xml->Ordenador as $Ordenadores) :
 	if ($Ordenadores->Precio < $_GET['BMax']) {
   echo'<tr class="w3-hover-green">';
    echo'<td>'.$Ordenadores->Nombre.'</td>';
    echo'<td>'.$Ordenadores->Marca.'</td>';
     echo'<td>'.$Ordenadores->Precio.'</td>';
  echo'</tr>';
}
 endforeach; 
 echo' </tbody>';
echo '</table>';
}
}else{
	echo '<p>No se han obtenido resultados</p>';
}
?>

