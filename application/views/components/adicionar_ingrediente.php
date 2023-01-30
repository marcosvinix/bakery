<style>

    #btnAddReceita{
        position: fixed;
        bottom: 5%;
        left: 5%;
        color: #4E1784;
    }

    .modal-header{
        background-color:  #4E1784;
        color: white;
    }

    .input-receita{
        border-radius: 1vh;
        border: solid 3px #F5ECFF;
        width: 50vh;
        height: 4vh;
        margin-bottom: 3vh;
        padding: 2vh;
    }

    .inpt-receita{
        border-radius: 1vh;
        border: solid 3px #F5ECFF;
        width: 50vh;
        height: auto;
        margin-bottom: 3vh;
        padding: 2vh;
    }

    .text-receita{
        font-size: 2vh;
        color: #4E1784;
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

<button class="btn">
    
    <i class="bi bi-plus-circle-fill fs-1" data-bs-toggle="modal" data-bs-target="#addIngrediente" id="btnAddReceita"></i>
    
</button>

<div class="modal fade" id="addIngrediente" tabindex="-1" aria-labelledby="addIngrediente" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addReceitaLabel">Adicionar ingrediente</h1>
      </div>
      <div class="modal-body">  

        <form id="adicionar_receita" action="/p/estoque/adicionar_ingrediente" method="post">
  <!-- Recipe Name Input -->

            <div class="row">
                <div class="col-12">
                    
                <div class="form-group">
                    <label for="recipe_name" class="text-receita">Nome do Produto</label>
                    <input type="text" class="form-control input-receita" style="width: 100%;" id="recipe_name" name="nome_ingrediente" required>
                </div>
                <div class="form-group">
                    <label for="recipe_name" class="text-receita">Quantidade Disponivel</label>
                    <input type="text" class="form-control input-receita" style="width: 100%;" id="recipe_name" name="quantidade_disponivel" required>
                </div>
                <div class="form-group">
                    <label for="recipe_name" class="text-receita">Validade Lote</label>
                    <input type="text" class="form-control input-receita" style="width: 100%;" id="recipe_name" name="validade_lote" required>
                </div>
                <div class="form-group">
                    <label for="recipe_name" class="text-receita">Tipo de Produto</label>
                    <input type="text" class="form-control input-receita" style="width: 100%;" id="recipe_name" name="tipo_produto" required>
                </div>
                <div class="form-group">
                    <label for="recipe_name" class="text-receita">Medida do Produto</label>
                    <input type="text" class="form-control input-receita" style="width: 100%;" id="recipe_name" name="medida_produto" required>
                </div>
                <div class="form-group">
                    <label for="recipe_name" class="text-receita">Quantidade Minima</label>
                    <input type="text" class="form-control input-receita" style="width: 100%;" id="recipe_name" name="qntd_minima" required>
                </div>
                <div class="form-group">
                    <label for="recipe_name" class="text-receita">Quantidade Maxima</label>
                    <input type="text" class="form-control input-receita" style="width: 100%;" id="recipe_name" name="qntd_maxima" required>
                </div>


   
              
                </div>
            </div>

        </form>

        <!--  -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-cancel" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" id="addReceita2" class="btn btn-primary btn-confirm">Adicionar Receita</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">


    $(document).ready(function() {

    
        
    let j = 0;

        $.ajax({
        url: "<?php echo base_url('receitas/get_ingredientes'); ?>",
        type: "GET",
        success: function(data) {
            ingredients = JSON.parse(data);
            console.log(ingredients);
        }
        });
    
    $('#add-ingredient-btn').click(function() {

        var input = document.createElement("select");

        input.id = "default";
        var option = document.createElement("option");
        option.value = 'default';
        option.text = 'Selecione um ingrediente';
        input.appendChild(option);
            


        for (let i of ingredients) {
            input.id = "ingrediente"+j;
            input.setAttribute('name', 'ingredientes[]')
            input.setAttribute('class','inpt-receita')
            var option = document.createElement("option");
            option.value = i.id_produto;
            option.text = i.descricao_produto_estoque;
            input.appendChild(option);
            
        }

        var value = document.createElement("input");
        value.setAttribute('name', 'porcentagens[]')
        value.setAttribute('class','input-receita')
        value.setAttribute('placeholder','Porcentagem')
        value.id = "value"+j;

        j++;
        
        $('#ingredients-container').append(input);
        $('#ingredients-container').append(value);
    });
    });

    document.getElementById('addReceita2').addEventListener('click', () => {
        document.getElementById("adicionar_receita").submit();
    })

</script>


</body>
</html>

