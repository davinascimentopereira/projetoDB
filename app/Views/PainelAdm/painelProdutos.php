<main id="t3-content" style="min-height: 85vh; background-image: url(<?php //echo base_url('public/images/fundo4.png')
                                                                        ?>) !important;">
   
    <br>


    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-6 table">
                <h2> <?php echo $titulo ?></h2>
                <a class="btn btn-link" href="<?php echo base_url('cadastroProdutos') ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                    </svg></a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID produto</th>
                            <th scope="col">Nome do produto</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Estoque</th>
                            <th scope="col">Acão</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($dados as $key => $dado) {
                            $htm = '<tr>';
                            $htm .= '<td>' . $dado['idProduto'] . '</td>';
                            $htm .= '<td>' . $dado['nomeProduto'] . '</td>';
                            $htm .= '<td>' . $dado['categoria'] . '</td>';
                            $htm .= '<td>' . $dado['precoProduto'] . '</td>';
                            $htm .= '<td>' . $dado['estoque'] . '</td>';
                            $htm .= '<td><a href="' . base_url('editarProduto/' . $dado['idProduto']) . '"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                      </svg></a> / <a href="' . base_url('excluirProduto/' . $dado['idProduto']) . '" onclick="return confirma()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                      <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                    </svg></a></td>';
                            $htm .= '</tr>';

                            echo $htm;
                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php $msg = session()->getFlashData('msg') ?>
        <?php if (!empty($msg)) { ?>
            <div class="col-12 col-md-3 alert alert-danger">
                <?php echo $msg ?>
            <?php } ?>
            </div>
    </div>
</main>
<script>
    function confirma() {
        if (!confirm("Deseja excluir?")) {
            return false;
        }
        return true;
    }
</script>