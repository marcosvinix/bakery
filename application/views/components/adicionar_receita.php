<div class="modal fade" id="addReceita" tabindex="-1" aria-labelledby="addReceita" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addReceitaLabel">Adicionar Receita</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!--  -->

        <form action="<?php echo base_url('recipes/insert_recipe'); ?>" method="post">
  <!-- Recipe Name Input -->

            <div class="row">
                <div class="col-6">
                    
                <div class="form-group">
                    <label for="recipe_name">Recipe Name</label>
                    <input type="text" class="form-control" id="recipe_name" name="recipe_name" required>
                </div>

                <div class="form-group">
                    <label for="recipe_description">Recipe Description</label>
                    <textarea class="form-control" id="recipe_description" name="recipe_description" rows="3" required></textarea>
                </div>

                </div>
                <div class="col-6">
                    <div class="form-group">
                    <label for="ingredients">Ingredients</label>
                    <div id="ingredients-container">
                    <!-- Dynamic Ingredients Inputs -->
                    </div>
                    <button type="button" class="btn btn-success mt-3" id="add-ingredient-btn">Add Ingredient</button>
            </div>

                </div>
            </div>

        </form>


        <!--  -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Adicionar Receita</button>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
    // Add Ingredient Button Click Event
    $('#add-ingredient-btn').click(function() {
      // Create a new input element
      var input = $('<input>').attr({
        type: 'text',
        class: 'form-control mt-3',
        name: 'ingredients[]'
      });
      // Append the input to the ingredients container
      $('#ingredients-container').append(input);
    });
  });
</script>