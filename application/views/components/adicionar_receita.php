<style>

    #btnAddReceita{
        position: fixed;
        bottom: 5%;
        left: 5%;
        color: #4E1784;
    }

</style>

<button class="btn">
    
    <i class="bi bi-plus-circle-fill fs-1" data-bs-toggle="modal" data-bs-target="#addReceita" id="btnAddReceita"></i>
    
</button>

<div class="modal fade" id="addReceita" tabindex="-1" aria-labelledby="addReceita" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addReceitaLabel">Adicionar Receita</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    

        <form id="adicionar_receita" action="/p/receitas/adicionar_receita" method="post">
  <!-- Recipe Name Input -->

            <div class="row">
                <div class="col-6">
                    
                <div class="form-group">
                    <label for="recipe_name">Nome da Receita</label>
                    <input type="text" class="form-control" id="recipe_name" name="nome_receita" required>
                </div>

                <div class="form-group">
                    <label for="recipe_description">Modo de Preparo</label>
                    <textarea class="form-control" id="recipe_description" name="modo_preparo" rows="3" required></textarea>
                </div>

                <div class="form-group">
                    <label for="recipe_description">Rendimento</label>
                    <input type="number" class="form-control" id="recipe_description" name="rendimento_receita" required>
                </div>

                <div class="form-group">
                    <label for="recipe_description">Imagem</label>
                    <input class="form-control" id="recipe_description" name="imagem_receita" required>
                </div>
            
                <div class="form-group">
                    <label for="recipe_description">Categoria</label>
                    <select class="form-select" name="categoria_receita" aria-label="Default select example">
                        <option value="default">Selecione uma categoria</option>
                        <?php
                            foreach ($categorias as $categoria) {
                                echo '
                                    <option value="'.$categoria->id_categoria.'">'.ucfirst($categoria->nome_categoria).'</option>
                                ';
                            
                            }
                        ?>
                    </select>
                </div>

                </div>
                <div class="col-6">
                    <div class="form-group">
                    <label for="ingredients">Ingredientes</label>
                    <div id="ingredients-container">
                            
                    </div>
                    <button type="button" class="btn btn-success mt-3" id="add-ingredient-btn">Adicionar Ingrediente</button>
            </div>

                </div>
            </div>

        </form>

        <!--  -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" id="addReceita2" class="btn btn-primary">Adicionar Receita</button>
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
            var option = document.createElement("option");
            option.value = i.id_produto;
            option.text = i.descricao_produto_estoque;
            input.appendChild(option);
            
        }

        var value = document.createElement("input");
        value.setAttribute('name', 'porcentagens[]')
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

