<?php
/*
Plugin Name: Corte Laser Online
Plugin URI: https://www.cortelaseronline.es
Description: Personalizador de cortes láser
Version: 1.0
Author: Neil Barazarte
Author URI: https://www.ploshshop.com
License: GPLv2
*/

//Archivos css y js propios del plugin:
//include(plugin_dir_url(__FILE__).'funciones.php');


if( $_SERVER['REQUEST_URI'] == '/rotulosmetalarte/producto/corte-laser/'){
    add_action( 'wp_enqueue_scripts', 'custom_styles_CortesLaser',10 );
    add_action( 'wp_enqueue_scripts', 'custom_scripts_CortesLaser' );
}

// Register Style
function custom_styles_CortesLaser() {

    wp_register_style( 'dv-custom', plugin_dir_url(__FILE__).'css/custom.css', false, '1.0' );
    wp_enqueue_style( 'dv-custom' );

}


// Register Script
function custom_scripts_CortesLaser() {

    wp_register_script( 'main', plugin_dir_url(__FILE__).'js/custom.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'main' );

}




# Agregar informacion predeterminada al activar el plugin
//Este Script se correra en 3 momentos: Al activar por primera vez, al actualizar, al reactivar
register_activation_hook( __FILE__, 'cn_set_default_options_CortesLaser' );

function cn_set_default_options_CortesLaser() {

    // Revisar si ya se habia activado antes

    if ( get_option( 'cn_id_producto_personalizado_CortesLaser' ) === false ) {
        add_option( 'cn_id_producto_personalizado_CortesLaser', '0' );
    }

    //Precio Metales:

    //Acero Inoxidable:
    if ( get_option( 'precio_aceroInoxidable_1mm' ) === false ) {
        add_option( 'precio_aceroInoxidable_1mm', '96.80' );
    }
    if ( get_option( 'preciom2_aceroInoxidable_1mm' ) === false ) {
        add_option( 'preciom2_aceroInoxidable_1mm', '60.00' );
    }

    if ( get_option( 'precio_aceroInoxidable_1_5mm' ) === false ) {
        add_option( 'precio_aceroInoxidable_1_5mm', '143.99' );
    }
    if ( get_option( 'preciom2_aceroInoxidable_1_5mm' ) === false ) {
        add_option( 'preciom2_aceroInoxidable_1_5mm', '90.00' );
    }

    if ( get_option( 'precio_aceroInoxidable_2mm' ) === false ) {
        add_option( 'precio_aceroInoxidable_2mm', '191.18' );
    }
    if ( get_option( 'preciom2_aceroInoxidable_2mm' ) === false ) {
        add_option( 'preciom2_aceroInoxidable_2mm', '199.00' );
    }

    if ( get_option( 'precio_aceroInoxidable_3mm' ) === false ) {
        add_option( 'precio_aceroInoxidable_3mm', '319.44' );
    }
    if ( get_option( 'preciom2_aceroInoxidable_3mm' ) === false ) {
        add_option( 'preciom2_aceroInoxidable_3mm', '198.00' );
    }

    if ( get_option( 'precio_aceroInoxidable_5mm' ) === false ) {
        add_option( 'precio_aceroInoxidable_5mm', '474.32' );
    }
    if ( get_option( 'preciom2_aceroInoxidable_5mm' ) === false ) {
        add_option( 'preciom2_aceroInoxidable_5mm', '294.00' );
    }                  


    //Acero de Carbono:
    if ( get_option( 'precio_aceroCarbono_1mm' ) === false ) {
        add_option( 'precio_aceroCarbono_1mm', '41.00' );
    }
    if ( get_option( 'preciom2_aceroCarbono_1mm' ) === false ) {
        add_option( 'preciom2_aceroCarbono_1mm', '31.00' );
    }

    if ( get_option( 'precio_aceroCarbono_1_5mm' ) === false ) {
        add_option( 'precio_aceroCarbono_1_5mm', '53.00' );
    }
    if ( get_option( 'preciom2_aceroCarbono_1_5mm' ) === false ) {
        add_option( 'preciom2_aceroCarbono_1_5mm', '40.00' );
    }

    if ( get_option( 'precio_aceroCarbono_2mm' ) === false ) {
        add_option( 'precio_aceroCarbono_2mm', '71.00' );
    }
    if ( get_option( 'preciom2_aceroCarbono_2mm' ) === false ) {
        add_option( 'preciom2_aceroCarbono_2mm', '53.25' );
    }          

    if ( get_option( 'precio_aceroCarbono_3mm' ) === false ) {
        add_option( 'precio_aceroCarbono_3mm', '106.00' );
    }
    if ( get_option( 'preciom2_aceroCarbono_3mm' ) === false ) {
        add_option( 'preciom2_aceroCarbono_3mm', '80.00' );
    }

    if ( get_option( 'precio_aceroCarbono_5mm' ) === false ) {
        add_option( 'precio_aceroCarbono_5mm', '177.00' );
    }
    if ( get_option( 'preciom2_aceroCarbono_5mm' ) === false ) {
        add_option( 'preciom2_aceroCarbono_5mm', '132.00' );
    } 

    if ( get_option( 'precio_aceroCarbono_6mm' ) === false ) {
        add_option( 'precio_aceroCarbono_6mm', '211.00' );
    }
    if ( get_option( 'preciom2_aceroCarbono_6mm' ) === false ) {
        add_option( 'preciom2_aceroCarbono_6mm', '158.00' );
    }

    if ( get_option( 'precio_aceroCarbono_8mm' ) === false ) {
        add_option( 'precio_aceroCarbono_8mm', '282.00' );
    }
    if ( get_option( 'preciom2_aceroCarbono_8mm' ) === false ) {
        add_option( 'preciom2_aceroCarbono_8mm', '211.00' );
    }

    if ( get_option( 'precio_aceroCarbono_10mm' ) === false ) {
        add_option( 'precio_aceroCarbono_10mm', '353.00' );
    }
    if ( get_option( 'preciom2_aceroCarbono_10mm' ) === false ) {
        add_option( 'preciom2_aceroCarbono_10mm', '264.00' );
    }

    //Aluminio:
    if ( get_option( 'precio_aluminio_1_5mm' ) === false ) {
        add_option( 'precio_aluminio_1_5mm', '41.02' );
    }
    if ( get_option( 'preciom2_aluminio_1_5mm' ) === false ) {
        add_option( 'preciom2_aluminio_1_5mm', '31.00' );
    }

    if ( get_option( 'precio_aluminio_2mm' ) === false ) {
        add_option( 'precio_aluminio_2mm', '54.63' );
    }
    if ( get_option( 'preciom2_aluminio_2mm' ) === false ) {
        add_option( 'preciom2_aluminio_2mm', '41.00' );
    }    

    if ( get_option( 'precio_aluminio_3mm' ) === false ) {
        add_option( 'precio_aluminio_3mm', '81.95' );
    }
    if ( get_option( 'preciom2_aluminio_3mm' ) === false ) {
        add_option( 'preciom2_aluminio_3mm', '62.00' );
    }

    //Latón:
    if ( get_option( 'precio_laton_0_5mm' ) === false ) {
        add_option( 'precio_laton_0_5mm', '00.00' );
    }
    if ( get_option( 'preciom2_laton_0_5mm' ) === false ) {
        add_option( 'preciom2_laton_0_5mm', '00.00' );
    }

    if ( get_option( 'precio_laton_1_2mm' ) === false ) {
        add_option( 'precio_laton_1_2mm', '00.00' );
    }
    if ( get_option( 'preciom2_laton_1_2mm' ) === false ) {
        add_option( 'preciom2_laton_1_2mm', '00.00' );
    }

    if ( get_option( 'precio_laton_1_5mm' ) === false ) {
        add_option( 'precio_laton_1_5mm', '00.00' );
    }
    if ( get_option( 'preciom2_laton_1_5mm' ) === false ) {
        add_option( 'preciom2_laton_1_5mm', '00.00' );
    }  

    if ( get_option( 'precio_laton_3mm' ) === false ) {
        add_option( 'precio_laton_3mm', '00.00' );
    }
    if ( get_option( 'preciom2_laton_3mm' ) === false ) {
        add_option( 'preciom2_laton_3mm', '00.00' );
    }

    //Cobre:
    if ( get_option( 'precio_cobre_1_2mm' ) === false ) {
        add_option( 'precio_cobre_1_2mm', '00.00' );
    }
    if ( get_option( 'preciom2_cobre_1_2mm' ) === false ) {
        add_option( 'preciom2_cobre_1_2mm', '00.00' );
    }

    if ( get_option( 'precio_cobre_1_5mm' ) === false ) {
        add_option( 'precio_cobre_1_5mm', '00.00' );
    }
    if ( get_option( 'preciom2_cobre_1_5mm' ) === false ) {
        add_option( 'preciom2_cobre_1_5mm', '00.00' );
    }

    if ( get_option( 'precio_cobre_3mm' ) === false ) {
        add_option( 'precio_cobre_3mm', '00.00' );
    }
    if ( get_option( 'preciom2_cobre_3mm' ) === false ) {
        add_option( 'preciom2_cobre_3mm', '00.00' );
    }

    //Acero Galvanizado:
    if ( get_option( 'precio_aceroGalvanizado_1mm' ) === false ) {
        add_option( 'precio_aceroGalvanizado_1mm', '45.00' );
    }
    if ( get_option( 'preciom2_aceroGalvanizado_1mm' ) === false ) {
        add_option( 'preciom2_aceroGalvanizado_1mm', '81.68' );
    }

    if ( get_option( 'precio_aceroGalvanizado_1_5mm' ) === false ) {
        add_option( 'precio_aceroGalvanizado_1_5mm', '67.00' );
    }
    if ( get_option( 'preciom2_aceroGalvanizado_1_5mm' ) === false ) {
        add_option( 'preciom2_aceroGalvanizado_1_5mm', '121.61' );
    }

    if ( get_option( 'precio_aceroGalvanizado_2mm' ) === false ) {
        add_option( 'precio_aceroGalvanizado_2mm', '90.00' );
    }
    if ( get_option( 'preciom2_aceroGalvanizado_2mm' ) === false ) {
        add_option( 'preciom2_aceroGalvanizado_2mm', '163.35' );
    }

    if ( get_option( 'precio_aceroGalvanizado_3mm' ) === false ) {
        add_option( 'precio_aceroGalvanizado_3mm', '128.00' );
    }
    if ( get_option( 'preciom2_aceroGalvanizado_3mm' ) === false ) {
        add_option( 'preciom2_aceroGalvanizado_3mm', '232.32' );
    }

    //Precio no Metales:

    //Metacrilatos Incoloro:
    if ( get_option( 'precio_metacrilatosIncoloro_3mm' ) === false ) {
        add_option( 'precio_metacrilatosIncoloro_3mm', '112.00' );
    }
    if ( get_option( 'preciom2_metacrilatosIncoloro_3mm' ) === false ) {
        add_option( 'preciom2_metacrilatosIncoloro_3mm', '203.28' );
    }

    if ( get_option( 'precio_metacrilatosIncoloro_5mm' ) === false ) {
        add_option( 'precio_metacrilatosIncoloro_5mm', '187.00' );
    }
    if ( get_option( 'preciom2_metacrilatosIncoloro_5mm' ) === false ) {
        add_option( 'preciom2_metacrilatosIncoloro_5mm', '339.41' );
    }

    if ( get_option( 'precio_metacrilatosIncoloro_6mm' ) === false ) {
        add_option( 'precio_metacrilatosIncoloro_6mm', '224.00' );
    }
    if ( get_option( 'preciom2_metacrilatosIncoloro_6mm' ) === false ) {
        add_option( 'preciom2_metacrilatosIncoloro_6mm', '406.56' );
    }

    if ( get_option( 'precio_metacrilatosIncoloro_8mm' ) === false ) {
        add_option( 'precio_metacrilatosIncoloro_8mm', '299.00' );
    }
    if ( get_option( 'preciom2_metacrilatosIncoloro_8mm' ) === false ) {
        add_option( 'preciom2_metacrilatosIncoloro_8mm', '542.69' );
    } 

    if ( get_option( 'precio_metacrilatosIncoloro_10mm' ) === false ) {
        add_option( 'precio_metacrilatosIncoloro_10mm', '373.00' );
    }
    if ( get_option( 'preciom2_metacrilatosIncoloro_10mm' ) === false ) {
        add_option( 'preciom2_metacrilatosIncoloro_10mm', '677.00' );
    } 

    if ( get_option( 'precio_metacrilatosIncoloro_15mm' ) === false ) {
        add_option( 'precio_metacrilatosIncoloro_15mm', '560.00' );
    }
    if ( get_option( 'preciom2_metacrilatosIncoloro_15mm' ) === false ) {
        add_option( 'preciom2_metacrilatosIncoloro_15mm', '1016.40' );
    }

    if ( get_option( 'precio_metacrilatosIncoloro_20mm' ) === false ) {
        add_option( 'precio_metacrilatosIncoloro_20mm', '746.00' );
    }
    if ( get_option( 'preciom2_metacrilatosIncoloro_20mm' ) === false ) {
        add_option( 'preciom2_metacrilatosIncoloro_20mm', '1353.99' );
    } 


    //Metacrilatos Negro:
    if ( get_option( 'precio_metacrilatosNegro_3mm' ) === false ) {
        add_option( 'precio_metacrilatosNegro_3mm', '129.00' );
    }
    if ( get_option( 'preciom2_metacrilatosNegro_3mm' ) === false ) {
        add_option( 'preciom2_metacrilatosNegro_3mm', '234.14' );
    } 

    if ( get_option( 'precio_metacrilatosNegro_5mm' ) === false ) {
        add_option( 'precio_metacrilatosNegro_5mm', '215.00' );
    }
    if ( get_option( 'preciom2_metacrilatosNegro_5mm' ) === false ) {
        add_option( 'preciom2_metacrilatosNegro_5mm', '390.23' );
    }

    if ( get_option( 'precio_metacrilatosNegro_8mm' ) === false ) {
        add_option( 'precio_metacrilatosNegro_8mm', '349.00' );
    }
    if ( get_option( 'preciom2_metacrilatosNegro_8mm' ) === false ) {
        add_option( 'preciom2_metacrilatosNegro_8mm', '633.44' );
    } 

    if ( get_option( 'precio_metacrilatosNegro_10mm' ) === false ) {
        add_option( 'precio_metacrilatosNegro_10mm', '429.00' );
    }
    if ( get_option( 'preciom2_metacrilatosNegro_10mm' ) === false ) {
        add_option( 'preciom2_metacrilatosNegro_10mm', '778.64' );
    } 

    //Metacrilatos Blanco Opal:
    if ( get_option( 'precio_metacrilatosBlancoOpal_3mm' ) === false ) {
        add_option( 'precio_metacrilatosBlancoOpal_3mm', '118.00' );
    }
    if ( get_option( 'preciom2_metacrilatosBlancoOpal_3mm' ) === false ) {
        add_option( 'preciom2_metacrilatosBlancoOpal_3mm', '214.17' );
    } 

    if ( get_option( 'precio_metacrilatosBlancoOpal_5mm' ) === false ) {
        add_option( 'precio_metacrilatosBlancoOpal_5mm', '196.00' );
    }
    if ( get_option( 'preciom2_metacrilatosBlancoOpal_5mm' ) === false ) {
        add_option( 'preciom2_metacrilatosBlancoOpal_5mm', '355.74' );
    }  

    if ( get_option( 'precio_metacrilatosBlancoOpal_8mm' ) === false ) {
        add_option( 'precio_metacrilatosBlancoOpal_8mm', '314.00' );
    }
    if ( get_option( 'preciom2_metacrilatosBlancoOpal_8mm' ) === false ) {
        add_option( 'preciom2_metacrilatosBlancoOpal_8mm', '569.91' );
    } 

    if ( get_option( 'precio_metacrilatosBlancoOpal_10mm' ) === false ) {
        add_option( 'precio_metacrilatosBlancoOpal_10mm', '392.00' );
    }
    if ( get_option( 'preciom2_metacrilatosBlancoOpal_10mm' ) === false ) {
        add_option( 'preciom2_metacrilatosBlancoOpal_10mm', '711.48' );
    } 

    if ( get_option( 'precio_metacrilatosBlancoOpal_15mm' ) === false ) {
        add_option( 'precio_metacrilatosBlancoOpal_15mm', '586.00' );
    }
    if ( get_option( 'preciom2_metacrilatosBlancoOpal_15mm' ) === false ) {
        add_option( 'preciom2_metacrilatosBlancoOpal_15mm', '1063.59' );
    } 

    if ( get_option( 'precio_metacrilatosBlancoOpal_20mm' ) === false ) {
        add_option( 'precio_metacrilatosBlancoOpal_20mm', '784.00' );
    }
    if ( get_option( 'preciom2_metacrilatosBlancoOpal_20mm' ) === false ) {
        add_option( 'preciom2_metacrilatosBlancoOpal_20mm', '1422.96' );
    }  

    //Metacrilatos Blanco:
    if ( get_option( 'precio_metacrilatosBlanco_3mm' ) === false ) {
        add_option( 'precio_metacrilatosBlanco_3mm', '118.00' );
    }
    if ( get_option( 'preciom2_metacrilatosBlanco_3mm' ) === false ) {
        add_option( 'preciom2_metacrilatosBlanco_3mm', '214.17' );
    }

    if ( get_option( 'precio_metacrilatosBlanco_5mm' ) === false ) {
        add_option( 'precio_metacrilatosBlanco_5mm', '196.00' );
    }
    if ( get_option( 'preciom2_metacrilatosBlanco_5mm' ) === false ) {
        add_option( 'preciom2_metacrilatosBlanco_5mm', '355.74' );
    }  

    if ( get_option( 'precio_metacrilatosBlanco_8mm' ) === false ) {
        add_option( 'precio_metacrilatosBlanco_8mm', '314.00' );
    }
    if ( get_option( 'preciom2_metacrilatosBlanco_8mm' ) === false ) {
        add_option( 'preciom2_metacrilatosBlanco_8mm', '569.91' );
    }

    if ( get_option( 'precio_metacrilatosBlanco_10mm' ) === false ) {
        add_option( 'precio_metacrilatosBlanco_10mm', '392.00' );
    }
    if ( get_option( 'preciom2_metacrilatosBlanco_10mm' ) === false ) {
        add_option( 'preciom2_metacrilatosBlanco_10mm', '711.48' );
    }  

    //Metacrilatos Plata Espejo:
    if ( get_option( 'precio_metacrilatosPlataEspejo_3mm' ) === false ) {
        add_option( 'precio_metacrilatosPlataEspejo_3mm', '162.00' );
    }
    if ( get_option( 'preciom2_metacrilatosPlataEspejo_3mm' ) === false ) {
        add_option( 'preciom2_metacrilatosPlataEspejo_3mm', '294.03' );
    } 

    //Metacrilatos Dorado Espejo:
    if ( get_option( 'precio_metacrilatosDoradoEspejo_3mm' ) === false ) {
        add_option( 'precio_metacrilatosDoradoEspejo_3mm', '201.00' );
    }
    if ( get_option( 'preciom2_metacrilatosDoradoEspejo_3mm' ) === false ) {
        add_option( 'preciom2_metacrilatosDoradoEspejo_3mm', '364.82' );
    }  

    //DM:
    if ( get_option( 'precio_metacrilatosDM_3mm' ) === false ) {
        add_option( 'precio_metacrilatosDM_3mm', '15.00' );
    }
    if ( get_option( 'preciom2_metacrilatosDM_3mm' ) === false ) {
        add_option( 'preciom2_metacrilatosDM_3mm', '27.23' );
    } 

    if ( get_option( 'precio_metacrilatosDM_5mm' ) === false ) {
        add_option( 'precio_metacrilatosDM_5mm', '19.00' );
    }
    if ( get_option( 'preciom2_metacrilatosDM_5mm' ) === false ) {
        add_option( 'preciom2_metacrilatosDM_5mm', '34.49' );
    } 

    if ( get_option( 'precio_metacrilatosDM_10mm' ) === false ) {
        add_option( 'precio_metacrilatosDM_10mm', '32.00' );
    }
    if ( get_option( 'preciom2_metacrilatosDM_10mm' ) === false ) {
        add_option( 'preciom2_metacrilatosDM_10mm', '58.08' );
    }  

    if ( get_option( 'precio_metacrilatosDM_16mm' ) === false ) {
        add_option( 'precio_metacrilatosDM_16mm', '40.00' );
    }
    if ( get_option( 'preciom2_metacrilatosDM_16mm' ) === false ) {
        add_option( 'preciom2_metacrilatosDM_16mm', '72.60' );
    }  

    //Contrachapado Abadul:
    if ( get_option( 'precio_contrachapadoAbadul_6mm' ) === false ) {
        add_option( 'precio_contrachapadoAbadul_6mm', '35.00' );
    }
    if ( get_option( 'preciom2_contrachapadoAbadul_6mm' ) === false ) {
        add_option( 'preciom2_contrachapadoAbadul_6mm', '63.53' );
    } 

    if ( get_option( 'precio_contrachapadoAbadul_9mm' ) === false ) {
        add_option( 'precio_contrachapadoAbadul_9mm', '45.00' );
    }
    if ( get_option( 'preciom2_contrachapadoAbadul_9mm' ) === false ) {
        add_option( 'preciom2_contrachapadoAbadul_9mm', '81.68' );
    }                                                                     
    if ( get_option( 'precio_contrachapadoAbadul_12mm' ) === false ) {
        add_option( 'precio_contrachapadoAbadul_12mm', '61.00' );
    }
    if ( get_option( 'preciom2_contrachapadoAbadul_12mm' ) === false ) {
        add_option( 'preciom2_contrachapadoAbadul_12mm', '110.72' );
    } 

    if ( get_option( 'precio_contrachapadoAbadul_15mm' ) === false ) {
        add_option( 'precio_contrachapadoAbadul_15mm', '66.00' );
    }
    if ( get_option( 'preciom2_contrachapadoAbadul_15mm' ) === false ) {
        add_option( 'preciom2_contrachapadoAbadul_15mm', '119.79' );
    }          

}

#Agregar esta condiguración al menu
function cn_menu_ajustes_CortesLaser() {
    add_options_page( 'Corte Láser Online', //Título de la página
                      'Corte Láser Online', //Nombre del menú
                      'manage_options', //Nivel de acceso, solo usuarios
                      'cn-conf-ga-cutlaser', // slug
                      'cn_genera_pagina_CortesLaser' ); //Función que procesará todo
}

add_action( 'admin_menu', 'cn_menu_ajustes_CortesLaser' );

//Generar el codigo de la pagina de actualización
function cn_genera_pagina_CortesLaser() {

  // Conseguir el valor del Precio base de todos los elementos:
  $cn_id_producto_personalizado_CortesLaser   = get_option( 'cn_id_producto_personalizado_CortesLaser' ) ;
  
    //Precio Metales:

    //Acero Inoxidable:
    $precio_aceroInoxidable_1mm                     = get_option( 'precio_aceroInoxidable_1mm' ) ;
    $preciom2_aceroInoxidable_1mm                   = get_option( 'preciom2_aceroInoxidable_1mm' ) ;

    $precio_aceroInoxidable_1_5mm                   = get_option( 'precio_aceroInoxidable_1_5mm' ) ;
    $preciom2_aceroInoxidable_1_5mm                 = get_option( 'preciom2_aceroInoxidable_1_5mm' ) ;

    $precio_aceroInoxidable_2mm                     = get_option( 'precio_aceroInoxidable_2mm' ) ;
    $preciom2_aceroInoxidable_2mm                   = get_option( 'preciom2_aceroInoxidable_2mm' ) ;

    $precio_aceroInoxidable_3mm                     = get_option( 'precio_aceroInoxidable_3mm' ) ;
    $preciom2_aceroInoxidable_3mm                   = get_option( 'preciom2_aceroInoxidable_3mm' ) ;  

    $precio_aceroInoxidable_5mm                     = get_option( 'precio_aceroInoxidable_5mm' ) ;
    $preciom2_aceroInoxidable_5mm                   = get_option( 'preciom2_aceroInoxidable_5mm' ) ;    
      
    //Acero de Carbono:
    $precio_aceroCarbono_1mm                        = get_option( 'precio_aceroCarbono_1mm' ) ;
    $preciom2_aceroCarbono_1mm                      = get_option( 'preciom2_aceroCarbono_1mm' ) ;  

    $precio_aceroCarbono_1_5mm                      = get_option( 'precio_aceroCarbono_1_5mm' ) ;
    $preciom2_aceroCarbono_1_5mm                    = get_option( 'preciom2_aceroCarbono_1_5mm' ) ;   

    $precio_aceroCarbono_2mm                        = get_option( 'precio_aceroCarbono_2mm' ) ;
    $preciom2_aceroCarbono_2mm                      = get_option( 'preciom2_aceroCarbono_2mm' ) ;  

    $precio_aceroCarbono_2mm                        = get_option( 'precio_aceroCarbono_2mm' ) ;
    $preciom2_aceroCarbono_2mm                      = get_option( 'preciom2_aceroCarbono_2mm' ) ;     

    $precio_aceroCarbono_3mm                        = get_option( 'precio_aceroCarbono_3mm' ) ;
    $preciom2_aceroCarbono_3mm                      = get_option( 'preciom2_aceroCarbono_3mm' ) ;  

    $precio_aceroCarbono_5mm                        = get_option( 'precio_aceroCarbono_5mm' ) ;
    $preciom2_aceroCarbono_5mm                      = get_option( 'preciom2_aceroCarbono_5mm' ) ;    

    $precio_aceroCarbono_6mm                        = get_option( 'precio_aceroCarbono_6mm' ) ;
    $preciom2_aceroCarbono_6mm                      = get_option( 'preciom2_aceroCarbono_6mm' ) ;   
      
    $precio_aceroCarbono_8mm                        = get_option( 'precio_aceroCarbono_8mm' ) ;
    $preciom2_aceroCarbono_8mm                      = get_option( 'preciom2_aceroCarbono_8mm' ) ;  
      
    $precio_aceroCarbono_10mm                       = get_option( 'precio_aceroCarbono_10mm' ) ;
    $preciom2_aceroCarbono_10mm                     = get_option( 'preciom2_aceroCarbono_10mm' ) ;   

    //Aluminio:
    $precio_aluminio_1_5mm                          = get_option( 'precio_aluminio_1_5mm' ) ;
    $preciom2_aluminio_1_5mm                        = get_option( 'preciom2_aluminio_1_5mm' ) ;      

    $precio_aluminio_2mm                            = get_option( 'precio_aluminio_2mm' ) ;
    $preciom2_aluminio_2mm                          = get_option( 'preciom2_aluminio_2mm' ) ;

    $precio_aluminio_3mm                            = get_option( 'precio_aluminio_3mm' ) ;
    $preciom2_aluminio_3mm                          = get_option( 'preciom2_aluminio_3mm' ) ; 

    //Latón:   
    $precio_laton_0_5mm                             = get_option( 'precio_laton_0_5mm' ) ;
    $preciom2_laton_0_5mm                           = get_option( 'preciom2_laton_0_5mm' ) ;      

    $precio_laton_1_2mm                             = get_option( 'precio_laton_1_2mm' ) ;
    $preciom2_laton_1_2mm                           = get_option( 'preciom2_laton_1_2mm' ) ;    
    
    $precio_laton_1_5mm                             = get_option( 'precio_laton_1_5mm' ) ;
    $preciom2_laton_1_5mm                           = get_option( 'preciom2_laton_1_5mm' ) ;   
    
    $precio_laton_3mm                               = get_option( 'precio_laton_3mm' ) ;
    $preciom2_laton_3mm                             = get_option( 'preciom2_laton_3mm' ) ;  
    
    //Cobre:   
    $precio_cobre_1_2mm                             = get_option( 'precio_cobre_1_2mm' ) ;
    $preciom2_cobre_1_2mm                           = get_option( 'preciom2_cobre_1_2mm' ) ; 

    $precio_cobre_1_5mm                             = get_option( 'precio_cobre_1_5mm' ) ;
    $preciom2_cobre_1_5mm                           = get_option( 'preciom2_cobre_1_5mm' ) ;     
    
    $precio_cobre_3mm                               = get_option( 'precio_cobre_3mm' ) ;
    $preciom2_cobre_3mm                             = get_option( 'preciom2_cobre_3mm' ) ; 

    //Acero Galvanizado:  
    $precio_aceroGalvanizado_1mm                    = get_option( 'precio_aceroGalvanizado_1mm' ) ;
    $preciom2_aceroGalvanizado_1mm                  = get_option( 'preciom2_aceroGalvanizado_1mm' ) ;      

    $precio_aceroGalvanizado_1_5mm                  = get_option( 'precio_aceroGalvanizado_1_5mm' ) ;
    $preciom2_aceroGalvanizado_1_5mm                = get_option( 'preciom2_aceroGalvanizado_1_5mm' ) ;   
    
    $precio_aceroGalvanizado_2mm                    = get_option( 'precio_aceroGalvanizado_2mm' ) ;
    $preciom2_aceroGalvanizado_2mm                  = get_option( 'preciom2_aceroGalvanizado_2mm' ) ;        

    $precio_aceroGalvanizado_3mm                    = get_option( 'precio_aceroGalvanizado_3mm' ) ;
    $preciom2_aceroGalvanizado_3mm                  = get_option( 'preciom2_aceroGalvanizado_3mm' ) ;     

    //Precio no Metales:

    //Metacrilatos Incoloro: 
    $precio_metacrilatosIncoloro_3mm                = get_option( 'precio_metacrilatosIncoloro_3mm' ) ;
    $preciom2_metacrilatosIncoloro_3mm              = get_option( 'preciom2_metacrilatosIncoloro_3mm' ) ;    
    
    $precio_metacrilatosIncoloro_5mm                = get_option( 'precio_metacrilatosIncoloro_5mm' ) ;
    $preciom2_metacrilatosIncoloro_5mm              = get_option( 'preciom2_metacrilatosIncoloro_5mm' ) ;    

    $precio_metacrilatosIncoloro_6mm                = get_option( 'precio_metacrilatosIncoloro_6mm' ) ;
    $preciom2_metacrilatosIncoloro_6mm              = get_option( 'preciom2_metacrilatosIncoloro_6mm' ) ;     
    
    $precio_metacrilatosIncoloro_8mm                = get_option( 'precio_metacrilatosIncoloro_8mm' ) ;
    $preciom2_metacrilatosIncoloro_8mm              = get_option( 'preciom2_metacrilatosIncoloro_8mm' ) ;     
    
    $precio_metacrilatosIncoloro_10mm               = get_option( 'precio_metacrilatosIncoloro_10mm' ) ;
    $preciom2_metacrilatosIncoloro_10mm             = get_option( 'preciom2_metacrilatosIncoloro_10mm' ) ;      

    $precio_metacrilatosIncoloro_15mm               = get_option( 'precio_metacrilatosIncoloro_15mm' ) ;
    $preciom2_metacrilatosIncoloro_15mm             = get_option( 'preciom2_metacrilatosIncoloro_15mm' ) ;      
    
    $precio_metacrilatosIncoloro_20mm               = get_option( 'precio_metacrilatosIncoloro_20mm' ) ;
    $preciom2_metacrilatosIncoloro_20mm             = get_option( 'preciom2_metacrilatosIncoloro_20mm' ) ; 

    //Metacrilatos Negro:  
    $precio_metacrilatosNegro_3mm                   = get_option( 'precio_metacrilatosNegro_3mm' ) ;
    $preciom2_metacrilatosNegro_3mm                 = get_option( 'preciom2_metacrilatosNegro_3mm' ) ;   

    $precio_metacrilatosNegro_5mm                   = get_option( 'precio_metacrilatosNegro_5mm' ) ;
    $preciom2_metacrilatosNegro_5mm                 = get_option( 'preciom2_metacrilatosNegro_5mm' ) ;      

    $precio_metacrilatosNegro_8mm                   = get_option( 'precio_metacrilatosNegro_8mm' ) ;
    $preciom2_metacrilatosNegro_8mm                 = get_option( 'preciom2_metacrilatosNegro_8mm' ) ;     
    
    $precio_metacrilatosNegro_10mm                  = get_option( 'precio_metacrilatosNegro_10mm' ) ;
    $preciom2_metacrilatosNegro_10mm                = get_option( 'preciom2_metacrilatosNegro_10mm' ) ;

    //Metacrilatos Blanco Opal: 
    $precio_metacrilatosBlancoOpal_3mm              = get_option( 'precio_metacrilatosBlancoOpal_3mm' ) ;
    $preciom2_metacrilatosBlancoOpal_3mm            = get_option( 'preciom2_metacrilatosBlancoOpal_3mm' ) ;

    $precio_metacrilatosBlancoOpal_5mm              = get_option( 'precio_metacrilatosBlancoOpal_5mm' ) ;
    $preciom2_metacrilatosBlancoOpal_5mm            = get_option( 'preciom2_metacrilatosBlancoOpal_5mm' ) ;

    $precio_metacrilatosBlancoOpal_8mm              = get_option( 'precio_metacrilatosBlancoOpal_8mm' ) ;
    $preciom2_metacrilatosBlancoOpal_8mm            = get_option( 'preciom2_metacrilatosBlancoOpal_8mm' ) ;

    $precio_metacrilatosBlancoOpal_10mm             = get_option( 'precio_metacrilatosBlancoOpal_10mm' ) ;
    $preciom2_metacrilatosBlancoOpal_10mm           = get_option( 'preciom2_metacrilatosBlancoOpal_10mm' ) ;

    $precio_metacrilatosBlancoOpal_15mm             = get_option( 'precio_metacrilatosBlancoOpal_15mm' ) ;
    $preciom2_metacrilatosBlancoOpal_15mm           = get_option( 'preciom2_metacrilatosBlancoOpal_15mm' ) ;

    $precio_metacrilatosBlancoOpal_20mm             = get_option( 'precio_metacrilatosBlancoOpal_20mm' ) ;
    $preciom2_metacrilatosBlancoOpal_20mm           = get_option( 'preciom2_metacrilatosBlancoOpal_20mm' ) ;
    
    //Metacrilatos Blanco:                                                                                                
    $precio_metacrilatosBlanco_3mm                  = get_option( 'precio_metacrilatosBlanco_3mm' ) ;
    $preciom2_metacrilatosBlanco_3mm                = get_option( 'preciom2_metacrilatosBlanco_3mm' ) ;  
    
    $precio_metacrilatosBlanco_5mm                  = get_option( 'precio_metacrilatosBlanco_5mm' ) ;
    $preciom2_metacrilatosBlanco_5mm                = get_option( 'preciom2_metacrilatosBlanco_5mm' ) ;  

    $precio_metacrilatosBlanco_8mm                  = get_option( 'precio_metacrilatosBlanco_8mm' ) ;
    $preciom2_metacrilatosBlanco_8mm                = get_option( 'preciom2_metacrilatosBlanco_8mm' ) ;    
    
    $precio_metacrilatosBlanco_10mm                 = get_option( 'precio_metacrilatosBlanco_10mm' ) ;
    $preciom2_metacrilatosBlanco_10mm               = get_option( 'preciom2_metacrilatosBlanco_10mm' ) ;  
    
    //Metacrilatos Plata Espejo:
    $precio_metacrilatosPlataEspejo_3mm             = get_option( 'precio_metacrilatosPlataEspejo_3mm' ) ;
    $preciom2_metacrilatosPlataEspejo_3mm           = get_option( 'preciom2_metacrilatosPlataEspejo_3mm' ) ;                 

    //Metacrilatos Dorado Espejo:
    $precio_metacrilatosDoradoEspejo_3mm            = get_option( 'precio_metacrilatosDoradoEspejo_3mm' ) ;
    $preciom2_metacrilatosDoradoEspejo_3mm          = get_option( 'preciom2_metacrilatosDoradoEspejo_3mm' ) ;   
    
    //DM:  
    $precio_metacrilatosDM_3mm                      = get_option( 'precio_metacrilatosDM_3mm' ) ;
    $preciom2_metacrilatosDM_3mm                    = get_option( 'preciom2_metacrilatosDM_3mm' ) ;  

    $precio_metacrilatosDM_5mm                      = get_option( 'precio_metacrilatosDM_5mm' ) ;
    $preciom2_metacrilatosDM_5mm                    = get_option( 'preciom2_metacrilatosDM_5mm' ) ;  

    $precio_metacrilatosDM_10mm                     = get_option( 'precio_metacrilatosDM_10mm' ) ;
    $preciom2_metacrilatosDM_10mm                   = get_option( 'preciom2_metacrilatosDM_10mm' ) ;     

    $precio_metacrilatosDM_16mm                     = get_option( 'precio_metacrilatosDM_16mm' ) ;
    $preciom2_metacrilatosDM_16mm                   = get_option( 'preciom2_metacrilatosDM_16mm' ) ;    

    //Contrachapado Abadul:
    $precio_contrachapadoAbadul_6mm                 = get_option( 'precio_contrachapadoAbadul_6mm' ) ;
    $preciom2_contrachapadoAbadul_6mm               = get_option( 'preciom2_contrachapadoAbadul_6mm' ) ;    
    
    $precio_contrachapadoAbadul_9mm                 = get_option( 'precio_contrachapadoAbadul_9mm' ) ;
    $preciom2_contrachapadoAbadul_9mm               = get_option( 'preciom2_contrachapadoAbadul_9mm' ) ;  

    $precio_contrachapadoAbadul_12mm                = get_option( 'precio_contrachapadoAbadul_12mm' ) ;
    $preciom2_contrachapadoAbadul_12mm              = get_option( 'preciom2_contrachapadoAbadul_12mm' ) ;    
    
    $precio_contrachapadoAbadul_15mm                = get_option( 'precio_contrachapadoAbadul_15mm' ) ;
    $preciom2_contrachapadoAbadul_15mm              = get_option( 'preciom2_contrachapadoAbadul_15mm' ) ;                       

  require('formularioAdmin/configuracionesForm.php');
}

add_action( 'admin_post_guardar_ga', 'cn_guardar_ga_CortesLaser' );

function cn_guardar_ga_CortesLaser() {
    // Revisar el permiso de autorización
    if ( !current_user_can( 'manage_options' ) ) {
        wp_die( 'Not allowed' );
    }

    // Revisar el token que creamos antes
    check_admin_referer( 'token_ga' );

    //Limpiar valor, para prevenir problemas de seguridad
    $cn_id_producto_personalizado_CortesLaser   = sanitize_text_field( $_POST['cn_id_producto_personalizado_CortesLaser'] );

    //Precio Metales:

    //Acero Inoxidable:
    $precio_aceroInoxidable_1mm                     = sanitize_text_field( $_POST[ 'precio_aceroInoxidable_1mm' ] );
    $preciom2_aceroInoxidable_1mm                   = sanitize_text_field( $_POST[ 'preciom2_aceroInoxidable_1mm' ] );

    $precio_aceroInoxidable_1_5mm                   = sanitize_text_field( $_POST[ 'precio_aceroInoxidable_1_5mm' ] );
    $preciom2_aceroInoxidable_1_5mm                 = sanitize_text_field( $_POST[ 'preciom2_aceroInoxidable_1_5mm' ] );

    $precio_aceroInoxidable_2mm                     = sanitize_text_field( $_POST[ 'precio_aceroInoxidable_2mm' ] );
    $preciom2_aceroInoxidable_2mm                   = sanitize_text_field( $_POST[ 'preciom2_aceroInoxidable_2mm' ] );

    $precio_aceroInoxidable_3mm                     = sanitize_text_field( $_POST[ 'precio_aceroInoxidable_3mm' ] );
    $preciom2_aceroInoxidable_3mm                   = sanitize_text_field( $_POST[ 'preciom2_aceroInoxidable_3mm' ] );  

    $precio_aceroInoxidable_5mm                     = sanitize_text_field( $_POST[ 'precio_aceroInoxidable_5mm' ] );
    $preciom2_aceroInoxidable_5mm                   = sanitize_text_field( $_POST[ 'preciom2_aceroInoxidable_5mm' ] );    
      
    //Acero de Carbono:
    $precio_aceroCarbono_1mm                        = sanitize_text_field( $_POST[ 'precio_aceroCarbono_1mm' ] );
    $preciom2_aceroCarbono_1mm                      = sanitize_text_field( $_POST[ 'preciom2_aceroCarbono_1mm' ] );  

    $precio_aceroCarbono_1_5mm                      = sanitize_text_field( $_POST[ 'precio_aceroCarbono_1_5mm' ] );
    $preciom2_aceroCarbono_1_5mm                    = sanitize_text_field( $_POST[ 'preciom2_aceroCarbono_1_5mm' ] );   

    $precio_aceroCarbono_2mm                        = sanitize_text_field( $_POST[ 'precio_aceroCarbono_2mm' ] );
    $preciom2_aceroCarbono_2mm                      = sanitize_text_field( $_POST[ 'preciom2_aceroCarbono_2mm' ] );  

    $precio_aceroCarbono_2mm                        = sanitize_text_field( $_POST[ 'precio_aceroCarbono_2mm' ] );
    $preciom2_aceroCarbono_2mm                      = sanitize_text_field( $_POST[ 'preciom2_aceroCarbono_2mm' ] );     

    $precio_aceroCarbono_3mm                        = sanitize_text_field( $_POST[ 'precio_aceroCarbono_3mm' ] );
    $preciom2_aceroCarbono_3mm                      = sanitize_text_field( $_POST[ 'preciom2_aceroCarbono_3mm' ] );  

    $precio_aceroCarbono_5mm                        = sanitize_text_field( $_POST[ 'precio_aceroCarbono_5mm' ] );
    $preciom2_aceroCarbono_5mm                      = sanitize_text_field( $_POST[ 'preciom2_aceroCarbono_5mm' ] );    

    $precio_aceroCarbono_6mm                        = sanitize_text_field( $_POST[ 'precio_aceroCarbono_6mm' ] );
    $preciom2_aceroCarbono_6mm                      = sanitize_text_field( $_POST[ 'preciom2_aceroCarbono_6mm' ] );   
      
    $precio_aceroCarbono_8mm                        = sanitize_text_field( $_POST[ 'precio_aceroCarbono_8mm' ] );
    $preciom2_aceroCarbono_8mm                      = sanitize_text_field( $_POST[ 'preciom2_aceroCarbono_8mm' ] );  
      
    $precio_aceroCarbono_10mm                       = sanitize_text_field( $_POST[ 'precio_aceroCarbono_10mm' ] );
    $preciom2_aceroCarbono_10mm                     = sanitize_text_field( $_POST[ 'preciom2_aceroCarbono_10mm' ] );   

    //Aluminio:
    $precio_aluminio_1_5mm                          = sanitize_text_field( $_POST[ 'precio_aluminio_1_5mm' ] );
    $preciom2_aluminio_1_5mm                        = sanitize_text_field( $_POST[ 'preciom2_aluminio_1_5mm' ] );      

    $precio_aluminio_2mm                            = sanitize_text_field( $_POST[ 'precio_aluminio_2mm' ] );
    $preciom2_aluminio_2mm                          = sanitize_text_field( $_POST[ 'preciom2_aluminio_2mm' ] );

    $precio_aluminio_3mm                            = sanitize_text_field( $_POST[ 'precio_aluminio_3mm' ] );
    $preciom2_aluminio_3mm                          = sanitize_text_field( $_POST[ 'preciom2_aluminio_3mm' ] ); 

    //Latón:   
    $precio_laton_0_5mm                             = sanitize_text_field( $_POST[ 'precio_laton_0_5mm' ] );
    $preciom2_laton_0_5mm                           = sanitize_text_field( $_POST[ 'preciom2_laton_0_5mm' ] );      

    $precio_laton_1_2mm                             = sanitize_text_field( $_POST[ 'precio_laton_1_2mm' ] );
    $preciom2_laton_1_2mm                           = sanitize_text_field( $_POST[ 'preciom2_laton_1_2mm' ] );    
    
    $precio_laton_1_5mm                             = sanitize_text_field( $_POST[ 'precio_laton_1_5mm' ] );
    $preciom2_laton_1_5mm                           = sanitize_text_field( $_POST[ 'preciom2_laton_1_5mm' ] );   
    
    $precio_laton_3mm                               = sanitize_text_field( $_POST[ 'precio_laton_3mm' ] );
    $preciom2_laton_3mm                             = sanitize_text_field( $_POST[ 'preciom2_laton_3mm' ] );  
    
    //Cobre:   
    $precio_cobre_1_2mm                             = sanitize_text_field( $_POST[ 'precio_cobre_1_2mm' ] );
    $preciom2_cobre_1_2mm                           = sanitize_text_field( $_POST[ 'preciom2_cobre_1_2mm' ] ); 

    $precio_cobre_1_5mm                             = sanitize_text_field( $_POST[ 'precio_cobre_1_5mm' ] );
    $preciom2_cobre_1_5mm                           = sanitize_text_field( $_POST[ 'preciom2_cobre_1_5mm' ] );     
    
    $precio_cobre_3mm                               = sanitize_text_field( $_POST[ 'precio_cobre_3mm' ] );
    $preciom2_cobre_3mm                             = sanitize_text_field( $_POST[ 'preciom2_cobre_3mm' ] ); 

    //Acero Galvanizado:  
    $precio_aceroGalvanizado_1mm                    = sanitize_text_field( $_POST[ 'precio_aceroGalvanizado_1mm' ] );
    $preciom2_aceroGalvanizado_1mm                  = sanitize_text_field( $_POST[ 'preciom2_aceroGalvanizado_1mm' ] );      

    $precio_aceroGalvanizado_1_5mm                  = sanitize_text_field( $_POST[ 'precio_aceroGalvanizado_1_5mm' ] );
    $preciom2_aceroGalvanizado_1_5mm                = sanitize_text_field( $_POST[ 'preciom2_aceroGalvanizado_1_5mm' ] );   
    
    $precio_aceroGalvanizado_2mm                    = sanitize_text_field( $_POST[ 'precio_aceroGalvanizado_2mm' ] );
    $preciom2_aceroGalvanizado_2mm                  = sanitize_text_field( $_POST[ 'preciom2_aceroGalvanizado_2mm' ] );        

    $precio_aceroGalvanizado_3mm                    = sanitize_text_field( $_POST[ 'precio_aceroGalvanizado_3mm' ] );
    $preciom2_aceroGalvanizado_3mm                  = sanitize_text_field( $_POST[ 'preciom2_aceroGalvanizado_3mm' ] );     

    //Precio no Metales:

    //Metacrilatos Incoloro: 
    $precio_metacrilatosIncoloro_3mm                = sanitize_text_field( $_POST[ 'precio_metacrilatosIncoloro_3mm' ] );
    $preciom2_metacrilatosIncoloro_3mm              = sanitize_text_field( $_POST[ 'preciom2_metacrilatosIncoloro_3mm' ] );    
    
    $precio_metacrilatosIncoloro_5mm                = sanitize_text_field( $_POST[ 'precio_metacrilatosIncoloro_5mm' ] );
    $preciom2_metacrilatosIncoloro_5mm              = sanitize_text_field( $_POST[ 'preciom2_metacrilatosIncoloro_5mm' ] );    

    $precio_metacrilatosIncoloro_6mm                = sanitize_text_field( $_POST[ 'precio_metacrilatosIncoloro_6mm' ] );
    $preciom2_metacrilatosIncoloro_6mm              = sanitize_text_field( $_POST[ 'preciom2_metacrilatosIncoloro_6mm' ] );     
    
    $precio_metacrilatosIncoloro_8mm                = sanitize_text_field( $_POST[ 'precio_metacrilatosIncoloro_8mm' ] );
    $preciom2_metacrilatosIncoloro_8mm              = sanitize_text_field( $_POST[ 'preciom2_metacrilatosIncoloro_8mm' ] );     
    
    $precio_metacrilatosIncoloro_10mm               = sanitize_text_field( $_POST[ 'precio_metacrilatosIncoloro_10mm' ] );
    $preciom2_metacrilatosIncoloro_10mm             = sanitize_text_field( $_POST[ 'preciom2_metacrilatosIncoloro_10mm' ] );      

    $precio_metacrilatosIncoloro_15mm               = sanitize_text_field( $_POST[ 'precio_metacrilatosIncoloro_15mm' ] );
    $preciom2_metacrilatosIncoloro_15mm             = sanitize_text_field( $_POST[ 'preciom2_metacrilatosIncoloro_15mm' ] );      
    
    $precio_metacrilatosIncoloro_20mm               = sanitize_text_field( $_POST[ 'precio_metacrilatosIncoloro_20mm' ] );
    $preciom2_metacrilatosIncoloro_20mm             = sanitize_text_field( $_POST[ 'preciom2_metacrilatosIncoloro_20mm' ] ); 

    //Metacrilatos Negro:  
    $precio_metacrilatosNegro_3mm                   = sanitize_text_field( $_POST[ 'precio_metacrilatosNegro_3mm' ] );
    $preciom2_metacrilatosNegro_3mm                 = sanitize_text_field( $_POST[ 'preciom2_metacrilatosNegro_3mm' ] );   

    $precio_metacrilatosNegro_5mm                   = sanitize_text_field( $_POST[ 'precio_metacrilatosNegro_5mm' ] );
    $preciom2_metacrilatosNegro_5mm                 = sanitize_text_field( $_POST[ 'preciom2_metacrilatosNegro_5mm' ] );      

    $precio_metacrilatosNegro_8mm                   = sanitize_text_field( $_POST[ 'precio_metacrilatosNegro_8mm' ] );
    $preciom2_metacrilatosNegro_8mm                 = sanitize_text_field( $_POST[ 'preciom2_metacrilatosNegro_8mm' ] );     
    
    $precio_metacrilatosNegro_10mm                  = sanitize_text_field( $_POST[ 'precio_metacrilatosNegro_10mm' ] );
    $preciom2_metacrilatosNegro_10mm                = sanitize_text_field( $_POST[ 'preciom2_metacrilatosNegro_10mm' ] );

    //Metacrilatos Blanco Opal: 
    $precio_metacrilatosBlancoOpal_3mm              = sanitize_text_field( $_POST[ 'precio_metacrilatosBlancoOpal_3mm' ] );
    $preciom2_metacrilatosBlancoOpal_3mm            = sanitize_text_field( $_POST[ 'preciom2_metacrilatosBlancoOpal_3mm' ] );

    $precio_metacrilatosBlancoOpal_5mm              = sanitize_text_field( $_POST[ 'precio_metacrilatosBlancoOpal_5mm' ] );
    $preciom2_metacrilatosBlancoOpal_5mm            = sanitize_text_field( $_POST[ 'preciom2_metacrilatosBlancoOpal_5mm' ] );

    $precio_metacrilatosBlancoOpal_8mm              = sanitize_text_field( $_POST[ 'precio_metacrilatosBlancoOpal_8mm' ] );
    $preciom2_metacrilatosBlancoOpal_8mm            = sanitize_text_field( $_POST[ 'preciom2_metacrilatosBlancoOpal_8mm' ] );

    $precio_metacrilatosBlancoOpal_10mm             = sanitize_text_field( $_POST[ 'precio_metacrilatosBlancoOpal_10mm' ] );
    $preciom2_metacrilatosBlancoOpal_10mm           = sanitize_text_field( $_POST[ 'preciom2_metacrilatosBlancoOpal_10mm' ] );

    $precio_metacrilatosBlancoOpal_15mm             = sanitize_text_field( $_POST[ 'precio_metacrilatosBlancoOpal_15mm' ] );
    $preciom2_metacrilatosBlancoOpal_15mm           = sanitize_text_field( $_POST[ 'preciom2_metacrilatosBlancoOpal_15mm' ] );

    $precio_metacrilatosBlancoOpal_20mm             = sanitize_text_field( $_POST[ 'precio_metacrilatosBlancoOpal_20mm' ] );
    $preciom2_metacrilatosBlancoOpal_20mm           = sanitize_text_field( $_POST[ 'preciom2_metacrilatosBlancoOpal_20mm' ] );
    
    //Metacrilatos Blanco:                                                                                                
    $precio_metacrilatosBlanco_3mm                  = sanitize_text_field( $_POST[ 'precio_metacrilatosBlanco_3mm' ] );
    $preciom2_metacrilatosBlanco_3mm                = sanitize_text_field( $_POST[ 'preciom2_metacrilatosBlanco_3mm' ] );  
    
    $precio_metacrilatosBlanco_5mm                  = sanitize_text_field( $_POST[ 'precio_metacrilatosBlanco_5mm' ] );
    $preciom2_metacrilatosBlanco_5mm                = sanitize_text_field( $_POST[ 'preciom2_metacrilatosBlanco_5mm' ] );  

    $precio_metacrilatosBlanco_8mm                  = sanitize_text_field( $_POST[ 'precio_metacrilatosBlanco_8mm' ] );
    $preciom2_metacrilatosBlanco_8mm                = sanitize_text_field( $_POST[ 'preciom2_metacrilatosBlanco_8mm' ] );    
    
    $precio_metacrilatosBlanco_10mm                 = sanitize_text_field( $_POST[ 'precio_metacrilatosBlanco_10mm' ] );
    $preciom2_metacrilatosBlanco_10mm               = sanitize_text_field( $_POST[ 'preciom2_metacrilatosBlanco_10mm' ] );  
    
    //Metacrilatos Plata Espejo:
    $precio_metacrilatosPlataEspejo_3mm             = sanitize_text_field( $_POST[ 'precio_metacrilatosPlataEspejo_3mm' ] );
    $preciom2_metacrilatosPlataEspejo_3mm           = sanitize_text_field( $_POST[ 'preciom2_metacrilatosPlataEspejo_3mm' ] );                 

    //Metacrilatos Dorado Espejo:
    $precio_metacrilatosDoradoEspejo_3mm            = sanitize_text_field( $_POST[ 'precio_metacrilatosDoradoEspejo_3mm' ] );
    $preciom2_metacrilatosDoradoEspejo_3mm          = sanitize_text_field( $_POST[ 'preciom2_metacrilatosDoradoEspejo_3mm' ] );   
    
    //DM:  
    $precio_metacrilatosDM_3mm                      = sanitize_text_field( $_POST[ 'precio_metacrilatosDM_3mm' ] );
    $preciom2_metacrilatosDM_3mm                    = sanitize_text_field( $_POST[ 'preciom2_metacrilatosDM_3mm' ] );  

    $precio_metacrilatosDM_5mm                      = sanitize_text_field( $_POST[ 'precio_metacrilatosDM_5mm' ] );
    $preciom2_metacrilatosDM_5mm                    = sanitize_text_field( $_POST[ 'preciom2_metacrilatosDM_5mm' ] );  

    $precio_metacrilatosDM_10mm                     = sanitize_text_field( $_POST[ 'precio_metacrilatosDM_10mm' ] );
    $preciom2_metacrilatosDM_10mm                   = sanitize_text_field( $_POST[ 'preciom2_metacrilatosDM_10mm' ] );     

    $precio_metacrilatosDM_16mm                     = sanitize_text_field( $_POST[ 'precio_metacrilatosDM_16mm' ] );
    $preciom2_metacrilatosDM_16mm                   = sanitize_text_field( $_POST[ 'preciom2_metacrilatosDM_16mm' ] );    

    //Contrachapado Abadul:
    $precio_contrachapadoAbadul_6mm                 = sanitize_text_field( $_POST[ 'precio_contrachapadoAbadul_6mm' ] );
    $preciom2_contrachapadoAbadul_6mm               = sanitize_text_field( $_POST[ 'preciom2_contrachapadoAbadul_6mm' ] );    
    
    $precio_contrachapadoAbadul_9mm                 = sanitize_text_field( $_POST[ 'precio_contrachapadoAbadul_9mm' ] );
    $preciom2_contrachapadoAbadul_9mm               = sanitize_text_field( $_POST[ 'preciom2_contrachapadoAbadul_9mm' ] );  

    $precio_contrachapadoAbadul_12mm                = sanitize_text_field( $_POST[ 'precio_contrachapadoAbadul_12mm' ] );
    $preciom2_contrachapadoAbadul_12mm              = sanitize_text_field( $_POST[ 'preciom2_contrachapadoAbadul_12mm' ] );    
    
    $precio_contrachapadoAbadul_15mm                = sanitize_text_field( $_POST[ 'precio_contrachapadoAbadul_15mm' ] );
    $preciom2_contrachapadoAbadul_15mm              = sanitize_text_field( $_POST[ 'preciom2_contrachapadoAbadul_15mm' ] );   

    // Guardar en la base de datos
    update_option('cn_id_producto_personalizado_CortesLaser', $cn_id_producto_personalizado_CortesLaser );
    update_option('precio_aceroInoxidable_1mm',$precio_aceroInoxidable_1mm);
    update_option('preciom2_aceroInoxidable_1mm',$preciom2_aceroInoxidable_1mm);
    update_option('precio_aceroInoxidable_1_5mm',$precio_aceroInoxidable_1_5mm);
    update_option('preciom2_aceroInoxidable_1_5mm',$preciom2_aceroInoxidable_1_5mm);
    update_option('precio_aceroInoxidable_2mm',$precio_aceroInoxidable_2mm);
    update_option('preciom2_aceroInoxidable_2mm',$preciom2_aceroInoxidable_2mm);
    update_option('precio_aceroInoxidable_3mm',$precio_aceroInoxidable_3mm);
    update_option('preciom2_aceroInoxidable_3mm',$preciom2_aceroInoxidable_3mm);
    update_option('precio_aceroInoxidable_5mm',$precio_aceroInoxidable_5mm);
    update_option('preciom2_aceroInoxidable_5mm',$preciom2_aceroInoxidable_5mm);
    update_option('precio_aceroCarbono_1mm',$precio_aceroCarbono_1mm);
    update_option('preciom2_aceroCarbono_1mm',$preciom2_aceroCarbono_1mm);
    update_option('precio_aceroCarbono_1_5mm',$precio_aceroCarbono_1_5mm);
    update_option('preciom2_aceroCarbono_1_5mm',$preciom2_aceroCarbono_1_5mm);
    update_option('precio_aceroCarbono_2mm',$precio_aceroCarbono_2mm);
    update_option('preciom2_aceroCarbono_2mm',$preciom2_aceroCarbono_2mm);
    update_option('precio_aceroCarbono_2mm',$precio_aceroCarbono_2mm);
    update_option('preciom2_aceroCarbono_2mm',$preciom2_aceroCarbono_2mm);
    update_option('precio_aceroCarbono_3mm',$precio_aceroCarbono_3mm);
    update_option('preciom2_aceroCarbono_3mm',$preciom2_aceroCarbono_3mm);
    update_option('precio_aceroCarbono_5mm',$precio_aceroCarbono_5mm);
    update_option('preciom2_aceroCarbono_5mm',$preciom2_aceroCarbono_5mm);
    update_option('precio_aceroCarbono_6mm',$precio_aceroCarbono_6mm);
    update_option('preciom2_aceroCarbono_6mm',$preciom2_aceroCarbono_6mm);
    update_option('precio_aceroCarbono_8mm',$precio_aceroCarbono_8mm);
    update_option('preciom2_aceroCarbono_8mm',$preciom2_aceroCarbono_8mm);
    update_option('precio_aceroCarbono_10mm',$precio_aceroCarbono_10mm);
    update_option('preciom2_aceroCarbono_10mm',$preciom2_aceroCarbono_10mm);
    update_option('precio_aluminio_1_5mm',$precio_aluminio_1_5mm);
    update_option('preciom2_aluminio_1_5mm',$preciom2_aluminio_1_5mm);
    update_option('precio_aluminio_2mm',$precio_aluminio_2mm);
    update_option('preciom2_aluminio_2mm',$preciom2_aluminio_2mm);
    update_option('precio_aluminio_3mm',$precio_aluminio_3mm);
    update_option('preciom2_aluminio_3mm',$preciom2_aluminio_3mm);
    update_option('precio_laton_0_5mm',$precio_laton_0_5mm);
    update_option('preciom2_laton_0_5mm',$preciom2_laton_0_5mm);
    update_option('precio_laton_1_2mm',$precio_laton_1_2mm);
    update_option('preciom2_laton_1_2mm',$preciom2_laton_1_2mm);
    update_option('precio_laton_1_5mm',$precio_laton_1_5mm);
    update_option('preciom2_laton_1_5mm',$preciom2_laton_1_5mm);
    update_option('precio_laton_3mm',$precio_laton_3mm);
    update_option('preciom2_laton_3mm',$preciom2_laton_3mm);
    update_option('precio_cobre_1_2mm',$precio_cobre_1_2mm);
    update_option('preciom2_cobre_1_2mm',$preciom2_cobre_1_2mm);
    update_option('precio_cobre_1_5mm',$precio_cobre_1_5mm);
    update_option('preciom2_cobre_1_5mm',$preciom2_cobre_1_5mm);
    update_option('precio_cobre_3mm',$precio_cobre_3mm);
    update_option('preciom2_cobre_3mm',$preciom2_cobre_3mm);
    update_option('precio_aceroGalvanizado_1mm',$precio_aceroGalvanizado_1mm);
    update_option('preciom2_aceroGalvanizado_1mm',$preciom2_aceroGalvanizado_1mm);
    update_option('precio_aceroGalvanizado_1_5mm',$precio_aceroGalvanizado_1_5mm);
    update_option('preciom2_aceroGalvanizado_1_5mm',$preciom2_aceroGalvanizado_1_5mm);
    update_option('precio_aceroGalvanizado_2mm',$precio_aceroGalvanizado_2mm);
    update_option('preciom2_aceroGalvanizado_2mm',$preciom2_aceroGalvanizado_2mm);
    update_option('precio_aceroGalvanizado_3mm',$precio_aceroGalvanizado_3mm);
    update_option('preciom2_aceroGalvanizado_3mm',$preciom2_aceroGalvanizado_3mm);
    update_option('precio_metacrilatosIncoloro_3mm',$precio_metacrilatosIncoloro_3mm);
    update_option('preciom2_metacrilatosIncoloro_3mm',$preciom2_metacrilatosIncoloro_3mm);
    update_option('precio_metacrilatosIncoloro_5mm',$precio_metacrilatosIncoloro_5mm);
    update_option('preciom2_metacrilatosIncoloro_5mm',$preciom2_metacrilatosIncoloro_5mm);
    update_option('precio_metacrilatosIncoloro_6mm',$precio_metacrilatosIncoloro_6mm);
    update_option('preciom2_metacrilatosIncoloro_6mm',$preciom2_metacrilatosIncoloro_6mm);
    update_option('precio_metacrilatosIncoloro_8mm',$precio_metacrilatosIncoloro_8mm);
    update_option('preciom2_metacrilatosIncoloro_8mm',$preciom2_metacrilatosIncoloro_8mm);
    update_option('precio_metacrilatosIncoloro_10mm',$precio_metacrilatosIncoloro_10mm);
    update_option('preciom2_metacrilatosIncoloro_10mm',$preciom2_metacrilatosIncoloro_10mm);
    update_option('precio_metacrilatosIncoloro_15mm',$precio_metacrilatosIncoloro_15mm);
    update_option('preciom2_metacrilatosIncoloro_15mm',$preciom2_metacrilatosIncoloro_15mm);
    update_option('precio_metacrilatosIncoloro_20mm',$precio_metacrilatosIncoloro_20mm);
    update_option('preciom2_metacrilatosIncoloro_20mm',$preciom2_metacrilatosIncoloro_20mm);
    update_option('precio_metacrilatosNegro_3mm',$precio_metacrilatosNegro_3mm);
    update_option('preciom2_metacrilatosNegro_3mm',$preciom2_metacrilatosNegro_3mm);
    update_option('precio_metacrilatosNegro_5mm',$precio_metacrilatosNegro_5mm);
    update_option('preciom2_metacrilatosNegro_5mm',$preciom2_metacrilatosNegro_5mm);
    update_option('precio_metacrilatosNegro_8mm',$precio_metacrilatosNegro_8mm);
    update_option('preciom2_metacrilatosNegro_8mm',$preciom2_metacrilatosNegro_8mm);
    update_option('precio_metacrilatosNegro_10mm',$precio_metacrilatosNegro_10mm);
    update_option('preciom2_metacrilatosNegro_10mm',$preciom2_metacrilatosNegro_10mm);
    update_option('precio_metacrilatosBlancoOpal_3mm',$precio_metacrilatosBlancoOpal_3mm);
    update_option('preciom2_metacrilatosBlancoOpal_3mm',$preciom2_metacrilatosBlancoOpal_3mm);
    update_option('precio_metacrilatosBlancoOpal_5mm',$precio_metacrilatosBlancoOpal_5mm);
    update_option('preciom2_metacrilatosBlancoOpal_5mm',$preciom2_metacrilatosBlancoOpal_5mm);
    update_option('precio_metacrilatosBlancoOpal_8mm',$precio_metacrilatosBlancoOpal_8mm);
    update_option('preciom2_metacrilatosBlancoOpal_8mm',$preciom2_metacrilatosBlancoOpal_8mm);
    update_option('precio_metacrilatosBlancoOpal_10mm',$precio_metacrilatosBlancoOpal_10mm);
    update_option('preciom2_metacrilatosBlancoOpal_10mm',$preciom2_metacrilatosBlancoOpal_10mm);
    update_option('precio_metacrilatosBlancoOpal_15mm',$precio_metacrilatosBlancoOpal_15mm);
    update_option('preciom2_metacrilatosBlancoOpal_15mm',$preciom2_metacrilatosBlancoOpal_15mm);
    update_option('precio_metacrilatosBlancoOpal_20mm',$precio_metacrilatosBlancoOpal_20mm);
    update_option('preciom2_metacrilatosBlancoOpal_20mm',$preciom2_metacrilatosBlancoOpal_20mm);
    update_option('precio_metacrilatosBlanco_3mm',$precio_metacrilatosBlanco_3mm);
    update_option('preciom2_metacrilatosBlanco_3mm',$preciom2_metacrilatosBlanco_3mm);
    update_option('precio_metacrilatosBlanco_5mm',$precio_metacrilatosBlanco_5mm);
    update_option('preciom2_metacrilatosBlanco_5mm',$preciom2_metacrilatosBlanco_5mm);
    update_option('precio_metacrilatosBlanco_8mm',$precio_metacrilatosBlanco_8mm);
    update_option('preciom2_metacrilatosBlanco_8mm',$preciom2_metacrilatosBlanco_8mm);
    update_option('precio_metacrilatosBlanco_10mm',$precio_metacrilatosBlanco_10mm);
    update_option('preciom2_metacrilatosBlanco_10mm',$preciom2_metacrilatosBlanco_10mm);
    update_option('precio_metacrilatosPlataEspejo_3mm',$precio_metacrilatosPlataEspejo_3mm);
    update_option('preciom2_metacrilatosPlataEspejo_3mm',$preciom2_metacrilatosPlataEspejo_3mm);
    update_option('precio_metacrilatosDoradoEspejo_3mm',$precio_metacrilatosDoradoEspejo_3mm);
    update_option('preciom2_metacrilatosDoradoEspejo_3mm',$preciom2_metacrilatosDoradoEspejo_3mm);
    update_option('precio_metacrilatosDM_3mm',$precio_metacrilatosDM_3mm);
    update_option('preciom2_metacrilatosDM_3mm',$preciom2_metacrilatosDM_3mm);
    update_option('precio_metacrilatosDM_5mm',$precio_metacrilatosDM_5mm);
    update_option('preciom2_metacrilatosDM_5mm',$preciom2_metacrilatosDM_5mm);
    update_option('precio_metacrilatosDM_10mm',$precio_metacrilatosDM_10mm);
    update_option('preciom2_metacrilatosDM_10mm',$preciom2_metacrilatosDM_10mm);
    update_option('precio_metacrilatosDM_16mm',$precio_metacrilatosDM_16mm);
    update_option('preciom2_metacrilatosDM_16mm',$preciom2_metacrilatosDM_16mm);
    update_option('precio_contrachapadoAbadul_6mm',$precio_contrachapadoAbadul_6mm);
    update_option('preciom2_contrachapadoAbadul_6mm',$preciom2_contrachapadoAbadul_6mm);
    update_option('precio_contrachapadoAbadul_9mm',$precio_contrachapadoAbadul_9mm);
    update_option('preciom2_contrachapadoAbadul_9mm',$preciom2_contrachapadoAbadul_9mm);
    update_option('precio_contrachapadoAbadul_12mm',$precio_contrachapadoAbadul_12mm);
    update_option('preciom2_contrachapadoAbadul_12mm',$preciom2_contrachapadoAbadul_12mm);
    update_option('precio_contrachapadoAbadul_15mm',$precio_contrachapadoAbadul_15mm);
    update_option('preciom2_contrachapadoAbadul_15mm',$preciom2_contrachapadoAbadul_15mm);

    // Regresamos a la pagina de ajustes
    wp_redirect(

      add_query_arg (
        'page',
        'cn-conf-ga-cutlaser',
        admin_url( 'options-general.php' )
      )
    );
    exit;
}

add_action('wp_ajax_jnjtest', 'jnj_mi_funcion_CortesLaser');
add_action('wp_ajax_nopriv_jnjtest', 'jnj_mi_funcion_CortesLaser');

// Esta función tiene que devolver los resultados al frontend
// en el formato que queramos..
function jnj_mi_funcion_CortesLaser()
{

    $material = $_POST['material'];
    $grosor = $_POST['grosor'];
    $longitud = $_POST['longitud'];
    $precioGrosor = $_POST['precioGrosor'];
    $precioFinal = $_POST['precioFinal'];

    echo '<br>
        <label style="width:600px;height:60px; background-color: #004c80; color: #ffffff;  padding: 3% 0; border-radius: 14px;" >
           '.$longitud.' mm de corte lineal por '.$precioGrosor.' &euro; de '.strtoupper($material).' de '.$grosor.' = &euro; '.$precioFinal.'
        </label>
        <br>';

  wp_die();
}


//Aqui se muestra el formulario de personalización del rotulo de neon:
/**
 * Output engraving field.
 */
function iconic_output_engraving_field_CortesLaser() {

      global $product;

      $cn_id_producto_personalizado_CortesLaser = get_option( 'cn_id_producto_personalizado_CortesLaser' ) ;

      //echo $cn_id_producto_personalizado_CortesLaser; die();

      if ( $product->get_id() != $cn_id_producto_personalizado_CortesLaser ) {
        return;
      }

    // Conseguir el valor del Precio base de todos los elementos:
    $precio_chopo_3mm                           = get_option( 'precio_chopo_3mm' ) ;
    $precio_chopo_4mm                           = get_option( 'precio_chopo_4mm' ) ;
    $precio_chopo_5mm                           = get_option( 'precio_chopo_5mm' ) ;
    $precio_chopo_6mm                           = get_option( 'precio_chopo_6mm' ) ;
    $precio_chopo_8mm                           = get_option( 'precio_chopo_8mm' ) ;
    $precio_chopo_10mm                          = get_option( 'precio_chopo_10mm' ) ;

    $precio_mdf_25mm                            = get_option( 'precio_mdf_25mm' ) ;
    $precio_mdf_3mm                             = get_option( 'precio_mdf_3mm' ) ;
    $precio_mdf_4mm                             = get_option( 'precio_mdf_4mm' ) ;
    $precio_mdf_5mm                             = get_option( 'precio_mdf_5mm' ) ;
    $precio_mdf_7mm                             = get_option( 'precio_mdf_7mm' ) ;

    $precio_mukaly_2mm                          = get_option( 'precio_mukaly_2mm' ) ;

    $precio_metacrilato_2mm                     = get_option( 'precio_metacrilato_2mm' ) ;
    $precio_metacrilato_3mm                     = get_option( 'precio_metacrilato_3mm' ) ;
    $precio_metacrilato_4mm                     = get_option( 'precio_metacrilato_4mm' ) ;
    $precio_metacrilato_5mm                     = get_option( 'precio_metacrilato_5mm' ) ;
    $precio_metacrilato_6mm                     = get_option( 'precio_metacrilato_6mm' ) ;
    $precio_metacrilato_8mm                     = get_option( 'precio_metacrilato_8mm' ) ;
    $precio_metacrilato_10mm                    = get_option( 'precio_metacrilato_10mm' ) ;

    require('formularioCustomizer.php');

}

//add_action( 'woocommerce_before_single_product', 'iconic_output_engraving_field_CortesLaser', 10 );

//woocommerce_single_product_summary
//woocommerce_before_single_product
//add_action( 'woocommerce_before_add_to_cart_button', 'iconic_output_engraving_field_CortesLaser', 10 );


//Aqui se muestran ocultos en el formulario del carrito los campos de personalización del rotulo de neon:
/**
 * Output engraving field.
 */
function campos_ocultos_CortesLaser() {

      global $product;

      $cn_id_producto_personalizado_CortesLaser = get_option( 'cn_id_producto_personalizado_CortesLaser' ) ;

      //echo $cn_id_producto_personalizado_CortesLaser; die();

      if ( $product->get_id() != $cn_id_producto_personalizado_CortesLaser ) {
        return;
      }

    // Conseguir el valor del Precio base de todos los elementos:
    $precio_chopo_3mm                           = get_option( 'precio_chopo_3mm' ) ;
    $precio_chopo_4mm                           = get_option( 'precio_chopo_4mm' ) ;
    $precio_chopo_5mm                           = get_option( 'precio_chopo_5mm' ) ;
    $precio_chopo_6mm                           = get_option( 'precio_chopo_6mm' ) ;
    $precio_chopo_8mm                           = get_option( 'precio_chopo_8mm' ) ;
    $precio_chopo_10mm                          = get_option( 'precio_chopo_10mm' ) ;

    $precio_mdf_25mm                            = get_option( 'precio_mdf_25mm' ) ;
    $precio_mdf_3mm                             = get_option( 'precio_mdf_3mm' ) ;
    $precio_mdf_4mm                             = get_option( 'precio_mdf_4mm' ) ;
    $precio_mdf_5mm                             = get_option( 'precio_mdf_5mm' ) ;
    $precio_mdf_7mm                             = get_option( 'precio_mdf_7mm' ) ;

    $precio_mukaly_2mm                          = get_option( 'precio_mukaly_2mm' ) ;

    $precio_metacrilato_2mm                     = get_option( 'precio_metacrilato_2mm' ) ;
    $precio_metacrilato_3mm                     = get_option( 'precio_metacrilato_3mm' ) ;
    $precio_metacrilato_4mm                     = get_option( 'precio_metacrilato_4mm' ) ;
    $precio_metacrilato_5mm                     = get_option( 'precio_metacrilato_5mm' ) ;
    $precio_metacrilato_6mm                     = get_option( 'precio_metacrilato_6mm' ) ;
    $precio_metacrilato_8mm                     = get_option( 'precio_metacrilato_8mm' ) ;
    $precio_metacrilato_10mm                    = get_option( 'precio_metacrilato_10mm' ) ;

    require('formularioCustomizer.php');

}

//add_action( 'woocommerce_before_single_product_summary', 'iconic_output_engraving_field_CortesLaser', 10 );
add_action( 'woocommerce_before_single_product', 'campos_ocultos_CortesLaser', 10 );



/**
 * Add engraving text to cart item.
 *
 * @param array $cart_item_data
 * @param int   $product_id
 * @param int   $variation_id
 *
 * @return array
 */

function iconic_add_engraving_text_to_cart_item_CortesLaser( $cart_item_data, $product_id, $variation_id ) {

  session_start();

// remove all session variables
session_unset();

// destroy the session
session_destroy();

  $_SESSION['mensajeError'] = '';

  $upload_dir=wp_upload_dir();
  $path=$upload_dir['basedir'].'/myuploads/';  //upload dir.
  if(!is_dir($path)) { mkdir($path); }

  $target_dir = $path;//"uploads/";
  $target_file = $target_dir . time().basename($_FILES["fileToUpload"]["name"]);

  //echo $target_file;die();
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Check if image file is a actual image or fake image
  /*if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "No es un formato válido. <br/>";
      $uploadOk = 0;
    }
  }*/

  // Check if file already exists
  if (file_exists($target_file)) {
    //echo "Disculpe, el archivo ya existe. <br/>";
    $_SESSION['mensajeError'] = 'El nombre del archivo ya existe';
    $uploadOk = 0;
  }

  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 5000000) {
    //echo "Disculpe, el tamaño del archivo es muy grande. <br/>";
    $_SESSION['mensajeError'] = 'El tamaño del archivo es muy grande';
    $uploadOk = 0;    
  }

  // Allow certain file formats
  if($imageFileType != "dxf" && $imageFileType != "dwg" && $imageFileType != "ai" && $imageFileType != "pdf" && $imageFileType != "eps" && $imageFileType != "cdr" && $imageFileType != "zip"  ) {
    //echo "Disculpe, solo los formatos DXF, DWG, AI, PDF, EPS, CDR y ZIP son permitidos. <br/>";
    $_SESSION['mensajeError'] = 'Solo los formatos DXF, DWG, AI, PDF, EPS, CDR y ZIP son permitidos';
    $uploadOk = 0;    
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    //echo "Error, el archivo no se ha subido al servidor. <br/>";
    //$_SESSION['mensajeError'] = 'Error, el archivo no se ha subido al servidor';
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      //echo "El archivo ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " se ha subido con éxito. <br/>";

    } else {
      //echo "Disculpe, ha habido un error subiendo el archivo. <br/>";
      $_SESSION['mensajeError'] = 'Disculpe, ha habido un error subiendo el archivo';
    }
  }


        $to = 'atrellus@gmail.com';
        $subject = 'Corte Láser Online';
        $message = 'Material: '.$_POST['materiales']."\r\n";//miguel@cutlaser.eu
        $message .= 'Grosor: '.$_POST['mmGrosor']."\r\n";
        $message .= 'Altura (mm): '.$_POST['altura']."\r\n";
        $message .= 'Anchura (mm): '.$_POST['ancho']."\r\n";
        $message .= 'Longitud del trazo (mm): '.$_POST['longitud']."\r\n";
        $message .= 'Comentario: '.$_POST['comentario'];
        $headers  = 'From: miguel@cutlaser.eu' . "\r\n";

        $attachments = array(WP_CONTENT_DIR .'/uploads/myuploads/'.$_FILES["fileToUpload"]["name"]);

        wp_mail( $to, $subject, $message,$headers,$attachments );


  $precio_final         = filter_input( INPUT_POST, 'precio_final' );
  $materiales           = filter_input( INPUT_POST, 'materiales' );
  $mmGrosor             = filter_input( INPUT_POST, 'mmGrosor' );
  $ancho                = filter_input( INPUT_POST, 'ancho' );
  $altura               = filter_input( INPUT_POST, 'altura' );
  $longitud             = filter_input( INPUT_POST, 'longitud' );  
  $comentario           = filter_input( INPUT_POST, 'comentario' );  

  if ( empty( $precio_final )) {
    return $cart_item_data;
  }

  $product = wc_get_product( $product_id );
  $price = $product->get_price();
  // extra pack checkbox

  //$cart_item_data['new_price'] = $price + $precio_final;        
  $cart_item_data['new_price']    = $precio_final;       
  $cart_item_data['materiales']   = $materiales;
  $cart_item_data['mmGrosor']     = $mmGrosor;
  $cart_item_data['ancho']        = $ancho;
  $cart_item_data['altura']       = $altura;
  $cart_item_data['longitud']     = $longitud;
  $cart_item_data['comentario']   = $comentario;

  return $cart_item_data;

}

add_filter( 'woocommerce_add_cart_item_data', 'iconic_add_engraving_text_to_cart_item_CortesLaser', 10, 3 );

/**
 * Display engraving text in the cart.
 *
 * @param array $item_data
 * @param array $cart_item
 *
 * @return array
 */
function iconic_display_engraving_text_cart_CortesLaser( $item_data, $cart_item ) {
  if ( empty( $cart_item['materiales'] ) ) {
    return $item_data;
  }

  $item_data[] = array(
    'key'     => __( 'Material', 'iconic' ),
    'value'   => wc_clean( $cart_item['materiales'] ),
    'display' => '',
  ); 

  $item_data[] = array(
    'key'     => __( 'Grosor', 'iconic' ),
    'value'   => wc_clean( $cart_item['mmGrosor'] ),
    'display' => '',
  );   

  $item_data[] = array(
    'key'     => __( 'Altura (mm)', 'iconic' ),
    'value'   => wc_clean( $cart_item['altura'] ),
    'display' => '',
  );

  $item_data[] = array(
    'key'     => __( 'Anchura (mm)', 'iconic' ),
    'value'   => wc_clean( $cart_item['ancho'] ),
    'display' => '',
  );

  $item_data[] = array(
    'key'     => __( 'Longitud', 'iconic' ),
    'value'   => wc_clean( $cart_item['longitud'] ),
    'display' => '',
  );

  $item_data[] = array(
    'key'     => __( 'Comentario', 'iconic' ),
    'value'   => wc_clean( $cart_item['comentario'] ),
    'display' => '',
  );   

  return $item_data;
}

add_filter( 'woocommerce_get_item_data', 'iconic_display_engraving_text_cart_CortesLaser', 10, 2 );


add_action( 'woocommerce_before_calculate_totals', 'before_calculate_totals_CortesLaser', 10, 1 );
 
function before_calculate_totals_CortesLaser( $cart_obj ) {

  if ( is_admin() && ! defined( 'DOING_AJAX' ) ) {
    return;
  }

  // Iterate through each cart item
  foreach( $cart_obj->get_cart() as $key=>$value ) {

    if( isset( $value['new_price'] ) ) {
      $price = $value['new_price'];
      $value['data']->set_price( ( $price ) );
    }
  }
}

/**
 * Add custom meta to order
 */
function plugin_republic_checkout_create_order_line_item_corteLaser( $item, $cart_item_key, $values, $order ) {

 $item->add_meta_data(
  __( 'Material', 'iconic' ),
  $values['materiales'],
  true
 );

 $item->add_meta_data(
  __( 'Grosor', 'iconic' ),
  $values['mmGrosor'],
  true
 );

 $item->add_meta_data(
  __( 'Altura (mm)', 'iconic' ),
  $values['altura'],
  true
 );
 
 $item->add_meta_data(
  __( 'Anchura (mm)', 'iconic' ),
  $values['ancho'],
  true
 );

 $item->add_meta_data(
  __( 'Longitud', 'iconic' ),
  $values['longitud'],
  true
 );

 $item->add_meta_data(
  __( 'Comentario', 'iconic' ),
  $values['comentario'],
  true
 );

}
add_action( 'woocommerce_checkout_create_order_line_item', 'plugin_republic_checkout_create_order_line_item_corteLaser', 10, 5 );