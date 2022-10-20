<?php
namespace Drupal\finanzas\Controller;

use Drupal;
use Drupal\node\Entity\Node;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Controller\ControllerBase;

class finanzasController extends ControllerBase{
   
/* Método acción content devuelve directamente un contenido en html,
este método será usado en una ruta */
  public function content() {
    return array(
        '#type' => 'markup',
        '#markup' => $this->t('Hola mundo !!'),
    );
  }


// Página 2
  public function getIngresos() {

      // Sacar datos de la base de datos
    $database = \Drupal::database();
		$query = $database->query("SELECT SUM(field_monto_value) FROM node_revision__field_monto WHERE bundle = 'ingreso_de_obras_publicas' OR bundle = 'ingreso_del_registro_civil' OR bundle = 'ingreso_de_predial' OR bundle = 'ingreso_de_tesoreria'");

		$result = $query->fetchAssoc(); 
    $total=array_sum($result);

        return [
    		   '#markup' =>$total,
    	];

   }

//pagina 3
  public function myPage() {
	    return [
	      '#markup' => 'Hello, world',
	    ];
  } 

}
 
?>
