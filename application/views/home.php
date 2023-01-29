<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/home.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/swiper.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
	<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>

<style>
	.swiper {
    width: 100%;
    height: 95% !important; 
  }

  .category-name{
	background-color: #4E1784;
	color: white;
	padding: .4vh;
	border-radius: 5px;
}
</style>

<div class="container-fluid main-content">
            

			<div class="content row d-flex flex-wrap mt-4">
				 <div class="col col-lg-5 col-sm-12 col-xs-12 col-md-12 mm">
					 <div class="card card-1" style="width: 110%;">

						<div class="card-header d-flex notes-header mb-3">
							<h3>Notificações</h3>
						</div>

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

					 </div>
				 </div>

				 <div class="col-1"></div>
				 <div class="col col-lg-6 col-sm-12 col-xs-12 col-md-12 justify-content-center">


					 
					 <div class="row mb-2 mm"  style="height:35vh">
						 <h3 class="purple text-center">Receitas Favoritas</h3>

						 <div class="swiper mySwiper mt-3">
							<div class="swiper-wrapper">

							
								
							<?php

  		
								foreach ($favoritas as $receita) {
									echo '
										
										<div class="swiper-slide card-category card-fav" id="'.$receita->nome_receita.'" style="background-image: url('.$receita->nome_imagem.')"><a style="text-decoration: none;" href="./categorias/r/'.$receita->nome_categoria.'/'.$receita->nome_receita.'"><p class="category-name">'.$receita->nome_receita.'</p></a></div>

									';
								}
							?>

							</div>
							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>

						 </div>
					 </div>

					 <div class="row mm mm-d">
						 <div class="card pins">
							 <div class="card-header d-flex notes-header">
								 <h3>Anotações</h3>
								 <i class="bi bi-journal-bookmark-fill"></i>
							 </div>
							 <div class="card-body">
								 <textarea name="anotacao" id="note" cols="30" rows="10" placeholder="Adicione suas anotações aqui..."></textarea>
							 </div>
						 </div>
					 </div>
					 
				 </div>
			</div>

		 </div>

</div>



<!--  -->
</div>

<script>

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });



</script>


</body>
