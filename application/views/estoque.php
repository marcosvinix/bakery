<div class="container">
    <table class="table mt-3">
    <thead style=" color: white; background-color: #4E1784;">
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Quantidade Disp.</th>
            <th scope="col">Validade Lote</th>
            <th scope="col">Tipo Produto</th>
            <th scope="col">Ações</th>
            
        </tr>
    </thead>
    <tbody>
        <?php
        
        foreach ($estoque as $produto) {


            echo '
            <tr>
                <td>'.ucfirst($produto->descricao_produto_estoque).'</td>
                <td>'.ucfirst($produto->quantidade_disponivel).'</td>
                <td>'.ucfirst($produto->validade_lote).'</td>
                <td>'.ucfirst($produto->tipo_produto).'</td>
                <td>
                    <div class="container-fluid d-flex">
                       <a href="./estoque/delete/'.$produto->id_produto.'"> <i class="bi m-1 bi-x-lg"></i> </a>
                       
                    </div>
                </td>
            </tr>
             ';
        }

        
        ?>
        <tr>
            
        </tr>
    </tbody>
    </table>
</div>