<?php

/**
 * Provinces of Panama
 * List of 10 Provinces and 3 Comarcas of Panama
 * 
 * Sources:
 * - English: https://en.wikipedia.org/wiki/Provinces_of_Panama
 * - Spanish: https://es.wikipedia.org/wiki/Anexo:Provincias_y_comarcas_ind%C3%ADgenas_de_Panam%C3%A1
 */


if ( ! function_exists('pdpw_pa_provinces' )) {
  
  function pdpw_pa_provinces($states) {
    $states['PA'] = array(
      'PAN-1' => 'Provincia de Bocas del Toro',
      'PAN-2' => 'Provincia de Coclé',
      'PAN-3' => 'Provincia de Colón',
      'PAN-4' => 'Provincia de Chiriquí',
      'PAN-5' => 'Provincia del Darién',
      'PAN-6' => 'Provincia de Herrera',
      'PAN-7' => 'Provincia de Los Santos',
      'PAN-8' => 'Provincia de Panamá',
      'PAN-9' => 'Provincia de Panamá Oeste',
      'PAN-10' => 'Provincia de Veraguas',
      'PAN-EW' => 'Comarca Emberá-Wounaan',
      'PAN-KY' => 'Comarca Guna Yala',
      'PAN-NB' => 'Comarca Ngäbe-Buglé'
    );

  return $states;
  }

}