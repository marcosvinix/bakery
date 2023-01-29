<head>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/home.css">

</head>


<div class="container-fluid main-content d-flex flex-wrap justify-content-center">
            
    <?php

        $receitas = json_decode(json_encode($receitas), true);
        if(empty($receitas)){
            echo '
                <div class="card mt-4" style="width: 75rem;">
                    <div class="card-body">
                    <h5 class="card-title">Ops...</h5>
                    <p class="card-text">Parece que você ainda não adicionou receitas a essa categoria!</p>
                    <a href="#" class="btn btn-success">Adicionar receitas</a>
                    </div>
                </div>
            ';
        }

        else{
            
            foreach ($receitas as $receita) {
    
                echo '
                        <div class="card m-2" style="width: 18rem;">
                            <img src="'.$receita['nome_imagem'].'" height="180px" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">'.$receita['nome_receita'].'</h5>
                                <a href="'.$title.'/'.$receita['nome_receita'].'" class="btn btn-primary text-center">Preparar</a>
                            </div>
                        </div>
                ';
                
            }

        }
    
    ?>



</body>
