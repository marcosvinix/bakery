<div class="row">
    <div class="col-12 header">
        <h1>
            <i class="bi bi-chevron-left fs-2" style="cursor: pointer;" id="back-page"></i>  
            <?php echo ucfirst($title); ?>
        </h1>

        <div class="search-box">
            <form action="/p/pesquisa" id="form-pesquisa">

                <div class="container d-flex">
                    
                    <input type="text" name="q" class="search" placeholder="Pesquisar receitas..." autocomplete="off">
                    <i id="pesquisar" class="bi bi-search fs-3" style="color: #4E1784; margin-left: -10%; margin-right: 1vh; cursor: pointer;"></i>

                    <div class="dropdown-center">
                    <button type="button" data-bs-toggle="dropdown" aria-expanded="false" style="outline: none; border: none; background-color: transparent;"> 
                        <img src="<?php echo base_url('assets/images/sino.png'); ?>" class="bell" width="35px" draggable="false" alt="">
                    </button>
                    <ul class="dropdown-menu" style="width: 35vh;">
                        <?php
							foreach($notificacoes as $n){
								echo '
                                <a href="/p/estoque" style="text-decoration: none;">
                                    <div class="alert alert-warning" role="alert">
                                        O produto <bold>'.ucfirst($n->descricao_produto_estoque).'</bold> está prestes a acabar!
                                    </div>
								</a>
								';
							}
						?>
                    </ul>
                    </div>

                </div>
        
            </form>
        </div>
    </div>
</div>

<script>

document.getElementById('back-page').addEventListener('click', () => {
    history.go(-1);
})

document.getElementById('pesquisar').addEventListener('click', () => {
    document.getElementById("form-pesquisa").submit();
})

</script>
