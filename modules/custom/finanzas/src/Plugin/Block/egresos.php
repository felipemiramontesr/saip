<?php
namespace Drupal\finanzas\Plugin\Block;
use Drupal\Core\Block\BlockBase;
/**
 * Definición de nuestro bloque
 *
 * @Block(
 *   id = "Egresos Block",
 *   admin_label = @Translation("Egresos Block")
 * )
 */
class egresos extends BlockBase {
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

        // Sacar datos de la base de datos
        $database = \Drupal::database();
    	$query = $database->query("SELECT SUM(field_monto_value) FROM drup_node__field_monto WHERE bundle = 'egreso_de_obras_publicas' OR bundle = 'egreso_de_registro_civil' OR bundle = 'egreso_de_predial' OR bundle = 'egreso_de_tesoreria' OR bundle = 'egreso_de_presidencia'");

    	$result = $query->fetchAssoc(); 
        $total=array_sum($result);
        $t=number_format($total,2);

        $renderable = [
            '#theme' => 'finanzasBlockTemplate',
            '#etiqueta' => 'Egresos',
            '#total' => $t,
        ];

        return $renderable;
    }

    public function getCacheMaxAge() {
        return 0;
    }
}
