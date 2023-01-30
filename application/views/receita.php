<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/home.css">
</head>

<style>
  .modal-header{
    background-color:  #4E1784;
    color: white;
  }

  .btn-confirm{
        background-color: #4E1784;
        border: solid 2px #4E1784;
    }
    .btn-confirm:hover{
        background-color: #4E1784;
        border: solid 2px #4E1784;
    }

  .btn-cancel{
        background-color: #F5ECFF;
        border: solid 2px #4E1784;
        color: #4E1784;
    }
    .btn-cancel:hover{
        background-color: #F5ECFF;
        border: solid 2px #4E1784;
        color: #4E1784;
    }

    .input-number{
      border: solid 2px #4E1784;
      text-align: center;
      border-radius: 0.5vh;
    }

    .table{
      max-width: 85vh;
    }

    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    /* Firefox */
    input[type=number] {
      -moz-appearance: textfield;
    }
</style>




<div class="container-fluid main-content">

    <div class="row mt-5">
        <div class="col-6">
            <img src="<?php print_r($imagem[0]->nome_imagem); ?>" width="100%" height="500rem;"  alt="">
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
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-3" id="exampleModalLabel">Preparar Receita</h1>

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


                    foreach ($ingredients as $ingrediente){
                      foreach ($estoque as $produto){
                        if($ingrediente->nome == $produto->id_produto){
                          $ingrediente->nome = $produto->descricao_produto_estoque;
                        }
                      }
                    }

                    foreach ($ingredients as $ingrediente) {


                        echo '
                            <tr class="ingredients">
                                <td class="text-center">'.ucfirst($ingrediente->nome).'</td>
                                <td class="text-center"><input class="input-number percent" style="width: 5vh;" max="100" min="0" type="number" value="'.$ingrediente->porcentagem.'"> %</td>
                                <td class="text-center"><input class="input-number gramas" style="width: 5vh;" type="number" value="0"> g</td>
                            </tr>
                        ';
                        
                    }

                ?>

                
            </tbody>
        </table>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-cancel" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary btn-confirm">Preparar</button>
      </div>
    </div>
  </div>
</div>



<!--  -->
</div>
</body>

<script>

  percents = document.querySelectorAll('.percent');
  gramas = document.querySelectorAll('.gramas');


  
  
  for(let x of gramas){
    
    base = 0;
    x.addEventListener('change', () => {
      
      j = 0;

      for(let i of percents){
        console.log(gramas[0].value);
        if(i.value == 100){
          base = gramas[j].value/100;
          break;
        }
        
        j++;
        
      }
      
  
      j = 0;
  
      for(let i of gramas){
      
      i.value = percents[j].value*base;
      j++;
        
    }
    

      console.log(base);

    });
    
  }

  console.log(base);

</script>