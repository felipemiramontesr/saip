<?php
namespace Drupal\finanzas\Plugin\Block;

use Drupal\Core\Block\BlockBase;
/**
 * Definición de nuestro bloque
 *
 * @Block(
 *   id = "Balance Block",
 *   admin_label = @Translation("Balance Block")
 * )
 */
class balance extends BlockBase {
    /**
     * {@inheritdoc}
     */
    public function defaultConfiguration() {
        return ['label_display' => FALSE];
    }
     /**
     * {@inheritdoc}
     */
    public function build() {

        // Sacar datos de la base de datos (ingresos)
        $database = \Drupal::database();
        $query_1 = $database->query("SELECT SUM(field_monto_value) FROM drup_node__field_monto WHERE bundle = 'ingreso_de_obras_publicas' OR bundle = 'ingreso_de_registro_civil' OR bundle = 'ingreso_de_predial'");
        $result_1 = $query_1->fetchAssoc(); 
        $total_ingresos=array_sum($result_1);   

        // Sacar datos de la base de datos (egresos)
        $database = \Drupal::database();
        $query_2 = $database->query("SELECT SUM(field_monto_value) FROM drup_node__field_monto WHERE bundle = 'egreso_de_obras_publicas' OR bundle = 'egreso_de_registro_civil' OR bundle = 'egreso_de_predial' OR bundle = 'egreso_de_tesoreria' OR bundle = 'egreso_de_presidencia'");
    	$result_2 = $query_2->fetchAssoc(); 
        $total_egresos=array_sum($result_2);

        $total= $total_ingresos - $total_egresos;
        $t=number_format($total,2);

        $renderable = [
            '#theme' => 'finanzasBlockTemplate',
            '#etiqueta' => 'Balance',
            '#total' => $t,
        ];

        return $renderable;
    }

    public function getCacheMaxAge() {
        return 0;
    }
}
