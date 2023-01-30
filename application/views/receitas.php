<head>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/home.css">

</head>

<style>
    .card-title{
        color: #4E1784;
    }

    .card-receita{
        background-color: #F5ECFF;
    }

    .card-button{
        background-color: #4E1784;
        border: none;
        width:100%;
    }
    .card-button:hover{
        background-color: #4E1784;
    }

</style>


<div class="container-fluid main-content d-flex flex-wrap">
            
    <?php

        $receitas = json_decode(json_encode($receitas), true);
        if(empty($receitas)){
            echo '
                <div class="card mt-4" style="width: 75rem;">
                    <div class="card-body">
                    <h5 class="card-title">Ops...</h5>
                    <p class="card-text">Parece que você ainda não adicionou receitas a essa categoria!</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addReceita">
                        Launch demo modal
                    </button>
                    </div>
                </div>
            ';
        }

        else{
            
            foreach ($receitas as $receita) {
    
                echo '
                        <div class="card m-2 card-receita" style="width: 18rem;">
                            <img src="'.$receita['nome_imagem'].'" height="180px" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">'.$receita['nome_receita'].'</h5>
                                <a href="'.$title.'/'.$receita['nome_receita'].'" class="btn btn-primary text-center card-button">Preparar</a>
                            </div>
                        </div>
                ';
                
            }

        }
    
    ?>



</body>
