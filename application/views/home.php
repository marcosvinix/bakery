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
</style>

<div class="container-fluid main-content">
            

			<div class="content row d-flex flex-wrap mt-4">
				 <div class="col col-lg-5 col-sm-12 col-xs-12 col-md-12 mm">
					 <div class="card card-1" style="width: 110%;">

						<div class="card-header d-flex notes-header">
							<h3>Notificações</h3>

						</div>
					 </div>
				 </div>

				 <div class="col-1"></div>
				 <div class="col col-lg-6 col-sm-12 col-xs-12 col-md-12 justify-content-center">
					 
					 <div class="row mb-2 mm"  style="height:35vh">
						 <h3 class="purple text-center">Receitas Favoritas</h3>

						 <div class="swiper mySwiper mt-3">
							<div class="swiper-wrapper">

								<div class="swiper-slide card-category" id="1" style="background-image: url('https://portal6.com.br/wp-content/uploads/2022/01/paes.jpg')"><p class="category-name">Pães</p></div>
								<div class="swiper-slide card-category" id="2" style="background-image: url('https://dinorma.com.br/wp-content/uploads/2021/08/Postagens-Duplo-Julho-2022-bolo-amor-de-pai-600x600.png');"><p class="category-name">Bolos</p></div>
								<div class="swiper-slide card-category" id="3" style="background-image: url('https://www.receiteria.com.br/wp-content/uploads/receitas-de-salgados-assados-0.jpg');"><p class="category-name">Salgados</p></div>
								<div class="swiper-slide card-category" id="4" style="background-image: url('https://img-global.cpcdn.com/recipes/e1fe073c69eadde7/1200x630cq70/photo.jpg');"><p class="category-name">Folhados</p></div>
								<div class="swiper-slide card-category" id="5" style="background-image: url('https://media-cdn.tripadvisor.com/media/photo-s/05/f0/13/48/fabrica-de-doces-brasil.jpg');"><p class="category-name">Doces</p></div>
								<div class="swiper-slide card-category" id="6" style="background-image: url('https://media-cdn.tripadvisor.com/media/photo-s/12/3f/31/bd/cafes-variados-e-um-amplo.jpg');"><p class="category-name">Bebidas</p></div>
							</div>
							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>

						 </div>
					 </div>

					 <div class="row mm mm-d">
						 <div class="card pins">
							 <div class="card-header d-flex notes-header">
								 <h3>Anotações</h3>

								 <i class="bi bi-plus-circle-fill"></i>
							 </div>
							 <div class="card-body">
								 <p>ok</p>
								 <p>ok</p>
								 <p>ok</p>
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
