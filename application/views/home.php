<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/home.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/swiper.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>

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

						 <div class="swiper mySwiper">
							<div class="swiper-wrapper">
								<div class="swiper-slide">Slide 1</div>
								<div class="swiper-slide">Slide 2</div>
								<div class="swiper-slide">Slide 3</div>
								<div class="swiper-slide">Slide 4</div>
								<div class="swiper-slide">Slide 5</div>
								<div class="swiper-slide">Slide 6</div>
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
