<div class="container d-flex flex-wrap">
    <?php

        if(empty($result)){
            echo '
                <h1>Não foram encotrados resultados para sua pesquisa...</h1>
            ';
        }

        else{
            foreach ($result as $receita) {
             echo '
             <div class="card m-2" style="width: 18rem;">
                <img src="'.$receita->nome_imagem.'" height="180px" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">'.$receita->nome_receita.'</h5>
                    <a href="./categorias/r/'.$title.'/'.$receita->nome_receita.'" class="btn btn-primary text-center">Preparar</a>
                </div>
            </div>
             
             ';
            }
        }
    
    ?>
</div>