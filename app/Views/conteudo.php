<style>
  .card {
    padding: 0px;
    margin: 5px;
    width: 18rem;
    height: 400px;
  }

  .cardImg {
    width: 100%;
    height: 200px;
  }

  .carousel {
    padding: 0px;
    margin: 0px;
  }
  .img {
            width: 250px;
            height: 500px;
        }
</style>
<main id="t3-content" style="min-height: 70vh;">
  <div class="carousel slide" id="carouselExampleIndicators" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo base_url('public/images/banner.jpg') ?>" class="d-block w-100 img" alt="...">
      </div>
      <?php 
        foreach ($dadosPromocao as $key => $promocao) { 
        $htmPromocao = '<div class="carousel-item">';
        $htmPromocao .= '<img src="'.base_url('public/images/'.$promocao['imagemPromocao']).'" class="d-block w-100 img" alt="...">';
        $htmPromocao .= '</div>';
        echo $htmPromocao;
      } 
      ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="container" style="margin-left: 15%;">
     
    <div class="row">
    <?php 
      if($dadosProdutos == null){
        echo '<p><h2>Nenhum produdo encontrado...</h2></p>';
      }
    ?>
    <?php foreach ($dadosProdutos as $key => $dado) {
        $preco = str_replace(".", ",", $dado['precoProduto']);
        $precoPromocao = str_replace(".", ",", $dado['precoPromocao']);

        $htm = '       <div class="card">';
        $htm .= '           <div><img class="cardImg" src="'.base_url('public/images/'.$dado['imagem']).'" class="card-img-top" alt="..."></div>';
        $htm .= '           <div class="card-body">';
        $htm .= '               <h5 class="card-title">' . $dado['nomeProduto'] . '</h5>';
        if ($dado['precoPromocao'] != 0) {
          $htm .= 'De R$<s>'.$preco.'</s> por '. $precoPromocao; 
      } else {
        $htm .= '               <p class="card-text">Preço: R$ ' . $preco . '</p>';
      }
        $htm .= '               <p class="card-text"> Quantidade: ' . $dado['estoque'] . '</p>';
        $htm .= '           </div>';
        $htm .= '           <a href="'.base_url('produto/'.$dado['idProduto']).'" class="btn btn-primary">Ver produto</a>';
        $htm .= '           </div>';
        echo $htm;
      }
      ?>
    </div>
  </div>
</main>