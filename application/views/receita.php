<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/home.css">
</head>



<div class="container-fluid main-content">

    <div class="row mt-5">
        <div class="col-6">
            <img src="https://www.livrariaarteeciencia.com.br//assets/images/placeholder.png" width="100%"  alt="">
            <button class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#ingredientesReceita" style="width: 100%; height: 5vh; background-color: #4e1784; outline: none; border: none;">Preparar Receita</button>
        </div>

        <div class="col-6">
            <div class="card" style="width: 100%; height: 100%; background-color: #f5ecff;">
                <div class="card-body">
                <h5 class="card-title text-center">Modo de Preparo</h5>

                <p class="card-text"><?php echo $recipe[0]->instrucoes_receita; ?></p>
                </div>
            </div>
        </div>
    </div>


</div>


<!-- Modal -->
<div class="modal fade" id="ingredientesReceita" tabindex="-1" aria-labelledby="ingredientesReceita" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-3" id="exampleModalLabel">Preparar Receita</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <table class="table">
            <thead>
                <tr>
                <th scope="col" class="text-center">Ingrediente</th>
                <th scope="col" class="text-center">Porcentagem</th>
                <th scope="col" class="text-center">Quantidade</th>
                </tr>
            </thead>
            <tbody>
                <?php     

                    foreach ($ingredients as $ingrediente) {

                        echo '
                            <tr>
                                <td class="text-center">'.$ingrediente->nome.'</td>
                                <td class="text-center"><input style="width: 5vh;" max="100" min="0" type="number" value="'.$ingrediente->porcentagem.'">%</td>
                                <td class="text-center"><input style="width: 5vh;" type="number">g</td>
                            </tr>
                        ';
                        
                    }

                ?>

                
            </tbody>
        </table>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Preparar</button>
      </div>
    </div>
  </div>
</div>



<!--  -->
</div>
</body>
