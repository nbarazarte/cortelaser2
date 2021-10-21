<!-- Bootstrap CSS -->
<!--
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
-->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/3be368b9d8.js" crossorigin="anonymous"></script>

<div class="col-12 text-center">

<br/>
<h5 class="card-title">Configuración de Corte Láser Online</h5>

<form method="post" action="admin-post.php">

  <input type="hidden" name="action"  value="guardar_ga" />

  <!-- mejorar la seguridad -->
  <?php wp_nonce_field('token_ga'); ?>

    <div class="row">

      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">

            <h5 class="card-title">ID del Producto Personalizado</h5>

              <div class="mb-3">
                <label for="cn_pagina" class="form-label">Valor:</label>
                <!--
                  <input type="text" class="form-control" id="cn_pagina" name="cn_pagina" value="<?php echo esc_html($cn_pagina);?>" required/>
                -->
                <input type="number" class="form-control" id="cn_id_producto_personalizado_CortesLaser" name="cn_id_producto_personalizado_CortesLaser" value="<?php echo esc_html($cn_id_producto_personalizado_CortesLaser);?>" required/>

              </div>

          </div>
        </div>
      </div>

      <p>&nbsp;</p>


        <div class="accordion" id="accordionExample0">

          <!-- Metales-->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingA0">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseA0" aria-expanded="false" aria-controls="collapseA0">
                <h5 class="card-title" style="">Materiales Metálicos</h5>
              </button>
            </h2>
            <div id="collapseA0" class="accordion-collapse collapse " aria-labelledby="headingA0" data-bs-parent="#accordionExample">
              <div class="accordion-body">
            
                <div class="accordion" id="accordionExample1">

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingA1">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseA1" aria-expanded="false" aria-controls="collapseA1">
                        <h5 class="card-title" style="text-align: left;">Acero Inoxidable</h5>
                      </button>
                    </h2>
                    <div id="collapseA1" class="accordion-collapse collapse " aria-labelledby="headingA1" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                    
                      <div class="card-body">

                        

                        <div class="row">

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 1mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_aceroInoxidable_1mm" name="precio_aceroInoxidable_1mm" value="<?php echo esc_html($precio_aceroInoxidable_1mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_aceroInoxidable_1mm" name="preciom2_aceroInoxidable_1mm" value="<?php echo esc_html($preciom2_aceroInoxidable_1mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 1,5mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_aceroInoxidable_1_5mm" name="precio_aceroInoxidable_1_5mm" value="<?php echo esc_html($precio_aceroInoxidable_1_5mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_aceroInoxidable_1_5mm" name="preciom2_aceroInoxidable_1_5mm" value="<?php echo esc_html($preciom2_aceroInoxidable_1_5mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 2mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_aceroInoxidable_2mm" name="precio_aceroInoxidable_2mm" value="<?php echo esc_html($precio_aceroInoxidable_2mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_aceroInoxidable_2mm" name="preciom2_aceroInoxidable_2mm" value="<?php echo esc_html($preciom2_aceroInoxidable_2mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 3mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_aceroInoxidable_3mm" name="precio_aceroInoxidable_3mm" value="<?php echo esc_html($precio_aceroInoxidable_3mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_aceroInoxidable_3mm" name="preciom2_aceroInoxidable_3mm" value="<?php echo esc_html($preciom2_aceroInoxidable_3mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div> 

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 5mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_aceroInoxidable_5mm" name="precio_aceroInoxidable_5mm" value="<?php echo esc_html($precio_aceroInoxidable_5mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_aceroInoxidable_5mm" name="preciom2_aceroInoxidable_5mm" value="<?php echo esc_html($preciom2_aceroInoxidable_5mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>                                 

                        </div>

                      </div>

                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingA2">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseA2" aria-expanded="false" aria-controls="collapseA2">
                        <h5 class="card-title" style="text-align: left;">Acero de Carbono</h5>
                      </button>
                    </h2>
                    <div id="collapseA2" class="accordion-collapse collapse" aria-labelledby="headingA2" data-bs-parent="#accordionExample">
                      <div class="accordion-body">

                      <div class="card-body">

                        

                        <div class="row">

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 1mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_aceroCarbono_1mm" name="precio_aceroCarbono_1mm" value="<?php echo esc_html($precio_aceroCarbono_1mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_aceroCarbono_1mm" name="preciom2_aceroCarbono_1mm" value="<?php echo esc_html($preciom2_aceroCarbono_1mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 1,5mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_aceroCarbono_1_5mm" name="precio_aceroCarbono_1_5mm" value="<?php echo esc_html($precio_aceroCarbono_1_5mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_aceroCarbono_1_5mm" name="preciom2_aceroCarbono_1_5mm" value="<?php echo esc_html($preciom2_aceroCarbono_1_5mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 2mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_aceroCarbono_2mm" name="precio_aceroCarbono_2mm" value="<?php echo esc_html($precio_aceroCarbono_2mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_aceroCarbono_2mm" name="preciom2_aceroCarbono_2mm" value="<?php echo esc_html($preciom2_aceroCarbono_2mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 3mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_aceroCarbono_3mm" name="precio_aceroCarbono_3mm" value="<?php echo esc_html($precio_aceroCarbono_3mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_aceroCarbono_3mm" name="preciom2_aceroCarbono_3mm" value="<?php echo esc_html($preciom2_aceroCarbono_3mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div> 

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 5mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_aceroCarbono_5mm" name="precio_aceroCarbono_5mm" value="<?php echo esc_html($precio_aceroCarbono_5mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_aceroCarbono_5mm" name="preciom2_aceroCarbono_5mm" value="<?php echo esc_html($preciom2_aceroCarbono_5mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>    

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 6mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_aceroCarbono_6mm" name="precio_aceroCarbono_6mm" value="<?php echo esc_html($precio_aceroCarbono_6mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_aceroCarbono_6mm" name="preciom2_aceroCarbono_6mm" value="<?php echo esc_html($preciom2_aceroCarbono_6mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div> 

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 8mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_aceroCarbono_8mm" name="precio_aceroCarbono_8mm" value="<?php echo esc_html($precio_aceroCarbono_8mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_aceroCarbono_8mm" name="preciom2_aceroCarbono_8mm" value="<?php echo esc_html($preciom2_aceroCarbono_8mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>  

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 10mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_aceroCarbono_10mm" name="precio_aceroCarbono_10mm" value="<?php echo esc_html($precio_aceroCarbono_10mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_aceroCarbono_10mm" name="preciom2_aceroCarbono_10mm" value="<?php echo esc_html($preciom2_aceroCarbono_10mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>                                                                       

                        </div>

                      </div>

                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingA3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseA3" aria-expanded="false" aria-controls="collapseA3">
                        <h5 class="card-title" style="text-align: left;">Aluminio</h5>
                      </button>
                    </h2>
                    <div id="collapseA3" class="accordion-collapse collapse" aria-labelledby="headingA3" data-bs-parent="#accordionExample">
                      <div class="accordion-body">

                      <div class="card-body">

                        

                        <div class="row">

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 1,5mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_aluminio_1_5mm" name="precio_aluminio_1_5mm" value="<?php echo esc_html($precio_aluminio_1_5mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_aluminio_1_5mm" name="preciom2_aluminio_1_5mm" value="<?php echo esc_html($preciom2_aluminio_1_5mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 2mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_aluminio_2mm" name="precio_aluminio_2mm" value="<?php echo esc_html($precio_aluminio_2mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_aluminio_2mm" name="preciom2_aluminio_2mm" value="<?php echo esc_html($preciom2_aluminio_2mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 3mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_aluminio_3mm" name="precio_aluminio_3mm" value="<?php echo esc_html($precio_aluminio_3mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_aluminio_3mm" name="preciom2_aluminio_3mm" value="<?php echo esc_html($preciom2_aluminio_3mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>                               

                        </div>

                      </div>

                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingA4">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseA4" aria-expanded="false" aria-controls="collapseA4">
                        <h5 class="card-title" style="text-align: left;">Latón</h5>
                      </button>
                    </h2>
                    <div id="collapseA4" class="accordion-collapse collapse" aria-labelledby="headingA4" data-bs-parent="#accordionExample">
                      <div class="accordion-body">

                      <div class="card-body">

                        

                        <div class="row">

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 0,5mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_laton_0_5mm" name="precio_laton_0_5mm" value="<?php echo esc_html($precio_laton_0_5mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_laton_0_5mm" name="preciom2_laton_0_5mm" value="<?php echo esc_html($preciom2_laton_0_5mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 1,2mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_laton_1_2mm" name="precio_laton_1_2mm" value="<?php echo esc_html($precio_laton_1_2mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_laton_1_2mm" name="preciom2_laton_1_2mm" value="<?php echo esc_html($preciom2_laton_1_2mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 1,5mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_laton_1_5mm" name="precio_laton_1_5mm" value="<?php echo esc_html($precio_laton_1_5mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_laton_1_5mm" name="preciom2_laton_1_5mm" value="<?php echo esc_html($preciom2_laton_1_5mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div> 

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 3mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_laton_3mm" name="precio_laton_3mm" value="<?php echo esc_html($precio_laton_3mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_laton_3mm" name="preciom2_laton_3mm" value="<?php echo esc_html($preciom2_laton_3mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>                                           

                        </div>

                      </div>

                      </div>
                    </div>
                  </div>    

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingA5">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseA5" aria-expanded="false" aria-controls="collapseA5">
                        <h5 class="card-title" style="text-align: left;">Cobre</h5>
                      </button>
                    </h2>
                    <div id="collapseA5" class="accordion-collapse collapse" aria-labelledby="headingA5" data-bs-parent="#accordionExample">
                      <div class="accordion-body">

                      <div class="card-body">

                        

                        <div class="row">

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 1,2mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_cobre_1_2mm" name="precio_cobre_1_2mm" value="<?php echo esc_html($precio_cobre_1_2mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_cobre_1_2mm" name="preciom2_cobre_1_2mm" value="<?php echo esc_html($preciom2_cobre_1_2mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 1,5mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_cobre_1_5mm" name="precio_cobre_1_5mm" value="<?php echo esc_html($precio_cobre_1_5mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_cobre_1_5mm" name="preciom2_cobre_1_5mm" value="<?php echo esc_html($preciom2_cobre_1_5mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 3mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_cobre_3mm" name="precio_cobre_3mm" value="<?php echo esc_html($precio_cobre_3mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_cobre_3mm" name="preciom2_cobre_3mm" value="<?php echo esc_html($preciom2_cobre_3mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>                               

                        </div>

                      </div> 

                      </div>
                    </div>
                  </div>  

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingA6">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseA6" aria-expanded="false" aria-controls="collapseA6">
                        <h5 class="card-title" style="text-align: left;">Acero Galvanizado</h5>
                      </button>
                    </h2>
                    <div id="collapseA6" class="accordion-collapse collapse" aria-labelledby="headingA6" data-bs-parent="#accordionExample">
                      <div class="accordion-body">

                      <div class="card-body">

                        

                        <div class="row">

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 1mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_aceroGalvanizado_1mm" name="precio_aceroGalvanizado_1mm" value="<?php echo esc_html($precio_aceroGalvanizado_1mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_aceroGalvanizado_1mm" name="preciom2_aceroGalvanizado_1mm" value="<?php echo esc_html($preciom2_aceroGalvanizado_1mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 1,5mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_aceroGalvanizado_1_5mm" name="precio_aceroGalvanizado_1_5mm" value="<?php echo esc_html($precio_aceroGalvanizado_1_5mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_aceroGalvanizado_1_5mm" name="preciom2_aceroGalvanizado_1_5mm" value="<?php echo esc_html($preciom2_aceroGalvanizado_1_5mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 2mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_aceroGalvanizado_2mm" name="precio_aceroGalvanizado_2mm" value="<?php echo esc_html($precio_aceroGalvanizado_2mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_aceroGalvanizado_2mm" name="preciom2_aceroGalvanizado_2mm" value="<?php echo esc_html($preciom2_aceroGalvanizado_2mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div> 

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 3mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_aceroGalvanizado_3mm" name="precio_aceroGalvanizado_3mm" value="<?php echo esc_html($precio_aceroGalvanizado_3mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_aceroGalvanizado_3mm" name="preciom2_aceroGalvanizado_3mm" value="<?php echo esc_html($preciom2_aceroGalvanizado_3mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>                                           

                        </div>

                      </div> 

                      </div>
                    </div>
                  </div>                                     

                </div>

              </div>
            </div>
          </div>

          <!-- NO Metales-->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingA01">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseA01" aria-expanded="false" aria-controls="collapseA01">
                <h5 class="card-title" style="">Materiales No Metálicos</h5>
              </button>
            </h2>
            <div id="collapseA01" class="accordion-collapse collapse" aria-labelledby="headingA01" data-bs-parent="#accordionExample">
              <div class="accordion-body">

                <div class="accordion" id="accordionExample2">

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingB1">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB1" aria-expanded="false" aria-controls="collapseB1">
                        <h5 class="card-title" style="text-align: left;">Metacrilatos Incoloro</h5>
                      </button>
                    </h2>
                    <div id="collapseB1" class="accordion-collapse collapse " aria-labelledby="headingB1" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                    
                      <div class="card-body">

                        

                        <div class="row">

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 3mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_metacrilatosIncoloro_3mm" name="precio_metacrilatosIncoloro_3mm" value="<?php echo esc_html($precio_metacrilatosIncoloro_3mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_metacrilatosIncoloro_3mm" name="preciom2_metacrilatosIncoloro_3mm" value="<?php echo esc_html($preciom2_metacrilatosIncoloro_3mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 5mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_metacrilatosIncoloro_5mm" name="precio_metacrilatosIncoloro_5mm" value="<?php echo esc_html($precio_metacrilatosIncoloro_5mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_metacrilatosIncoloro_5mm" name="preciom2_metacrilatosIncoloro_5mm" value="<?php echo esc_html($preciom2_metacrilatosIncoloro_5mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 6mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_metacrilatosIncoloro_6mm" name="precio_metacrilatosIncoloro_6mm" value="<?php echo esc_html($precio_metacrilatosIncoloro_6mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_metacrilatosIncoloro_6mm" name="preciom2_metacrilatosIncoloro_6mm" value="<?php echo esc_html($preciom2_metacrilatosIncoloro_6mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 8mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_metacrilatosIncoloro_8mm" name="precio_metacrilatosIncoloro_8mm" value="<?php echo esc_html($precio_metacrilatosIncoloro_8mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_metacrilatosIncoloro_8mm" name="preciom2_metacrilatosIncoloro_8mm" value="<?php echo esc_html($preciom2_metacrilatosIncoloro_8mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div> 

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 10mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_metacrilatosIncoloro_10mm" name="precio_metacrilatosIncoloro_10mm" value="<?php echo esc_html($precio_metacrilatosIncoloro_10mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_metacrilatosIncoloro_10mm" name="preciom2_metacrilatosIncoloro_10mm" value="<?php echo esc_html($preciom2_metacrilatosIncoloro_10mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>    

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 15mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_metacrilatosIncoloro_15mm" name="precio_metacrilatosIncoloro_15mm" value="<?php echo esc_html($precio_metacrilatosIncoloro_15mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_metacrilatosIncoloro_15mm" name="preciom2_metacrilatosIncoloro_15mm" value="<?php echo esc_html($preciom2_metacrilatosIncoloro_15mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div> 

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 20mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_metacrilatosIncoloro_20mm" name="precio_metacrilatosIncoloro_20mm" value="<?php echo esc_html($precio_metacrilatosIncoloro_20mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_metacrilatosIncoloro_20mm" name="preciom2_metacrilatosIncoloro_20mm" value="<?php echo esc_html($preciom2_metacrilatosIncoloro_20mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>                                                                       

                        </div>

                      </div>

                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingB2">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB2" aria-expanded="false" aria-controls="collapseB2">
                        <h5 class="card-title" style="text-align: left;">Metacrilatos Negro</h5>
                      </button>
                    </h2>
                    <div id="collapseB2" class="accordion-collapse collapse" aria-labelledby="headingB2" data-bs-parent="#accordionExample">
                      <div class="accordion-body">

                      <div class="card-body">

                        

                        <div class="row">

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 3mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_metacrilatosNegro_3mm" name="precio_metacrilatosNegro_3mm" value="<?php echo esc_html($precio_metacrilatosNegro_3mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_metacrilatosNegro_3mm" name="preciom2_metacrilatosNegro_3mm" value="<?php echo esc_html($preciom2_metacrilatosNegro_3mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 5mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_metacrilatosNegro_5mm" name="precio_metacrilatosNegro_5mm" value="<?php echo esc_html($precio_metacrilatosNegro_5mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_metacrilatosNegro_5mm" name="preciom2_metacrilatosNegro_5mm" value="<?php echo esc_html($preciom2_metacrilatosNegro_5mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 8mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_metacrilatosNegro_8mm" name="precio_metacrilatosNegro_8mm" value="<?php echo esc_html($precio_metacrilatosNegro_8mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_metacrilatosNegro_8mm" name="preciom2_metacrilatosNegro_8mm" value="<?php echo esc_html($preciom2_metacrilatosNegro_8mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div> 

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 10mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_metacrilatosNegro_10mm" name="precio_metacrilatosNegro_10mm" value="<?php echo esc_html($precio_metacrilatosNegro_10mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_metacrilatosNegro_10mm" name="preciom2_metacrilatosNegro_10mm" value="<?php echo esc_html($preciom2_metacrilatosNegro_10mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>                                           

                        </div>

                      </div> 

                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingB3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB3" aria-expanded="false" aria-controls="collapseB3">
                        <h5 class="card-title" style="text-align: left;">Metacrilatos Blanco Opal</h5>
                      </button>
                    </h2>
                    <div id="collapseB3" class="accordion-collapse collapse" aria-labelledby="headingB3" data-bs-parent="#accordionExample">
                      <div class="accordion-body">

                      <div class="card-body">

                        

                        <div class="row">

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 3mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_metacrilatosBlancoOpal_3mm" name="precio_metacrilatosBlancoOpal_3mm" value="<?php echo esc_html($precio_metacrilatosBlancoOpal_3mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_metacrilatosBlancoOpal_3mm" name="preciom2_metacrilatosBlancoOpal_3mm" value="<?php echo esc_html($preciom2_metacrilatosBlancoOpal_3mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 5mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_metacrilatosBlancoOpal_5mm" name="precio_metacrilatosBlancoOpal_5mm" value="<?php echo esc_html($precio_metacrilatosBlancoOpal_5mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_metacrilatosBlancoOpal_5mm" name="preciom2_metacrilatosBlancoOpal_5mm" value="<?php echo esc_html($preciom2_metacrilatosBlancoOpal_5mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 8mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_metacrilatosBlancoOpal_8mm" name="precio_metacrilatosBlancoOpal_8mm" value="<?php echo esc_html($precio_metacrilatosBlancoOpal_8mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_metacrilatosBlancoOpal_8mm" name="preciom2_metacrilatosBlancoOpal_8mm" value="<?php echo esc_html($preciom2_metacrilatosBlancoOpal_8mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div> 

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 10mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_metacrilatosBlancoOpal_10mm" name="precio_metacrilatosBlancoOpal_10mm" value="<?php echo esc_html($precio_metacrilatosBlancoOpal_10mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_metacrilatosBlancoOpal_10mm" name="preciom2_metacrilatosBlancoOpal_10mm" value="<?php echo esc_html($preciom2_metacrilatosBlancoOpal_10mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>                                           

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 15mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_metacrilatosBlancoOpal_15mm" name="precio_metacrilatosBlancoOpal_15mm" value="<?php echo esc_html($precio_metacrilatosBlancoOpal_15mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_metacrilatosBlancoOpal_15mm" name="preciom2_metacrilatosBlancoOpal_15mm" value="<?php echo esc_html($preciom2_metacrilatosBlancoOpal_15mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 20mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_metacrilatosBlancoOpal_20mm" name="precio_metacrilatosBlancoOpal_20mm" value="<?php echo esc_html($precio_metacrilatosBlancoOpal_20mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_metacrilatosBlancoOpal_20mm" name="preciom2_metacrilatosBlancoOpal_20mm" value="<?php echo esc_html($preciom2_metacrilatosBlancoOpal_20mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>   

                        </div>

                      </div> 

                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingB4">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB4" aria-expanded="false" aria-controls="collapseB4">
                        <h5 class="card-title" style="text-align: left;">Metacrilatos Blanco</h5>
                      </button>
                    </h2>
                    <div id="collapseB4" class="accordion-collapse collapse" aria-labelledby="headingB4" data-bs-parent="#accordionExample">
                      <div class="accordion-body">

                      <div class="card-body">

                        

                        <div class="row">

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 3mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_metacrilatosBlanco_3mm" name="precio_metacrilatosBlanco_3mm" value="<?php echo esc_html($precio_metacrilatosBlanco_3mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_metacrilatosBlanco_3mm" name="preciom2_metacrilatosBlanco_3mm" value="<?php echo esc_html($preciom2_metacrilatosBlanco_3mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 5mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_metacrilatosBlanco_5mm" name="precio_metacrilatosBlanco_5mm" value="<?php echo esc_html($precio_metacrilatosBlanco_5mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_metacrilatosBlanco_5mm" name="preciom2_metacrilatosBlanco_5mm" value="<?php echo esc_html($preciom2_metacrilatosBlanco_5mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 8mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_metacrilatosBlanco_8mm" name="precio_metacrilatosBlanco_8mm" value="<?php echo esc_html($precio_metacrilatosBlanco_8mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_metacrilatosBlanco_8mm" name="preciom2_metacrilatosBlanco_8mm" value="<?php echo esc_html($preciom2_metacrilatosBlanco_8mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div> 

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 10mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_metacrilatosBlanco_10mm" name="precio_metacrilatosBlanco_10mm" value="<?php echo esc_html($precio_metacrilatosBlanco_10mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_metacrilatosBlanco_10mm" name="preciom2_metacrilatosBlanco_10mm" value="<?php echo esc_html($preciom2_metacrilatosBlanco_10mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>                                           

                        </div>

                      </div> 

                      </div>
                    </div>
                  </div>    

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingB5">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB5" aria-expanded="false" aria-controls="collapseB5">
                        <h5 class="card-title" style="text-align: left;">Metacrilatos Plata Espejo</h5>
                      </button>
                    </h2>
                    <div id="collapseB5" class="accordion-collapse collapse" aria-labelledby="headingB5" data-bs-parent="#accordionExample">
                      <div class="accordion-body">

                      <div class="card-body">

                        

                        <div class="row">

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 3mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_metacrilatosPlataEspejo_3mm" name="precio_metacrilatosPlataEspejo_3mm" value="<?php echo esc_html($precio_metacrilatosPlataEspejo_3mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_metacrilatosPlataEspejo_3mm" name="preciom2_metacrilatosPlataEspejo_3mm" value="<?php echo esc_html($preciom2_metacrilatosPlataEspejo_3mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>                                         

                        </div>

                      </div> 

                      </div>
                    </div>
                  </div>  

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingB6">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB6" aria-expanded="false" aria-controls="collapseB6">
                        <h5 class="card-title" style="text-align: left;">Metacrilatos Dorado Espejo</h5>
                      </button>
                    </h2>
                    <div id="collapseB6" class="accordion-collapse collapse" aria-labelledby="headingB6" data-bs-parent="#accordionExample">
                      <div class="accordion-body">

                      <div class="card-body">

                        

                        <div class="row">

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 3mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_metacrilatosDoradoEspejo_3mm" name="precio_metacrilatosDoradoEspejo_3mm" value="<?php echo esc_html($precio_metacrilatosDoradoEspejo_3mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_metacrilatosDoradoEspejo_3mm" name="preciom2_metacrilatosDoradoEspejo_3mm" value="<?php echo esc_html($preciom2_metacrilatosDoradoEspejo_3mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>                                         

                        </div>

                      </div>

                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingB7">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB7" aria-expanded="false" aria-controls="collapseB7">
                        <h5 class="card-title" style="text-align: left;">Metacrilatos DM</h5>
                      </button>
                    </h2>
                    <div id="collapseB7" class="accordion-collapse collapse" aria-labelledby="headingB7" data-bs-parent="#accordionExample">
                      <div class="accordion-body">

                      <div class="card-body">

                        

                        <div class="row">

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 3mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_metacrilatosDM_3mm" name="precio_metacrilatosDM_3mm" value="<?php echo esc_html($precio_metacrilatosDM_3mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_metacrilatosDM_3mm" name="preciom2_metacrilatosDM_3mm" value="<?php echo esc_html($preciom2_metacrilatosDM_3mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 5mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_metacrilatosDM_5mm" name="precio_metacrilatosDM_5mm" value="<?php echo esc_html($precio_metacrilatosDM_5mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_metacrilatosDM_5mm" name="preciom2_metacrilatosDM_5mm" value="<?php echo esc_html($preciom2_metacrilatosDM_5mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 10mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_metacrilatosDM_10mm" name="precio_metacrilatosDM_10mm" value="<?php echo esc_html($precio_metacrilatosDM_10mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_metacrilatosDM_10mm" name="preciom2_metacrilatosDM_10mm" value="<?php echo esc_html($preciom2_metacrilatosDM_10mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div> 

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 16mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_metacrilatosDM_16mm" name="precio_metacrilatosDM_16mm" value="<?php echo esc_html($precio_metacrilatosDM_16mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_metacrilatosDM_16mm" name="preciom2_metacrilatosDM_16mm" value="<?php echo esc_html($preciom2_metacrilatosDM_16mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>                                           

                        </div>

                      </div> 

                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingB8">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB8" aria-expanded="false" aria-controls="collapseB8">
                        <h5 class="card-title" style="text-align: left;">Metacrilatos Contrachapado Abadul</h5>
                      </button>
                    </h2>
                    <div id="collapseB8" class="accordion-collapse collapse" aria-labelledby="headingB8" data-bs-parent="#accordionExample">
                      <div class="accordion-body">

                      <div class="card-body">

                        

                        <div class="row">

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 6mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_contrachapadoAbadul_6mm" name="precio_contrachapadoAbadul_6mm" value="<?php echo esc_html($precio_contrachapadoAbadul_6mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_contrachapadoAbadul_6mm" name="preciom2_contrachapadoAbadul_6mm" value="<?php echo esc_html($preciom2_contrachapadoAbadul_6mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 9mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_contrachapadoAbadul_9mm" name="precio_contrachapadoAbadul_9mm" value="<?php echo esc_html($precio_contrachapadoAbadul_9mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_contrachapadoAbadul_9mm" name="preciom2_contrachapadoAbadul_9mm" value="<?php echo esc_html($preciom2_contrachapadoAbadul_9mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 12mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_contrachapadoAbadul_12mm" name="precio_contrachapadoAbadul_12mm" value="<?php echo esc_html($precio_contrachapadoAbadul_12mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_contrachapadoAbadul_12mm" name="preciom2_contrachapadoAbadul_12mm" value="<?php echo esc_html($preciom2_contrachapadoAbadul_12mm);?>" required/>
                              </div>

                            
                            </div>
                          </div>
                        </div> 

                          <div class="col-sm-4">
                            <div class="card">
                            <h6 class="card-title">Grosor 15mm:</h6>

                            <div class="row">

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Coste (Euros):</label>
                                <input type="number" step=".01" class="form-control" id="precio_contrachapadoAbadul_15mm" name="precio_contrachapadoAbadul_15mm" value="<?php echo esc_html($precio_contrachapadoAbadul_15mm);?>" required/>
                              </div>

                              <div class="col">
                                <label for="cn_pagina" class="form-label">Precio por m2:</label>
                                <input type="number" step=".01" class="form-control" id="preciom2_contrachapadoAbadul_15mm" name="preciom2_contrachapadoAbadul_15mm" value="<?php echo esc_html($preciom2_contrachapadoAbadul_15mm);?>" required/>
                              </div>

                            </div>
                            </div>
                          </div>                                           

                        </div>

                      </div> 

                      </div>
                    </div>
                  </div>                                                        

                </div>                                       

              </div>
            </div>
          </div>
                                  
        </div>




    </div>  
    <p>&nbsp;</p>

    <center>
      <div class="col-sm-4 text-center">
        
        <div class="row">

          <button type="submit" class="btn btn-primary"> <i class="fas fa-magic"></i> Guardar todo</button>

         </div>

      </div>    
    </center>

</form>

</div>