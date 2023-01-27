   <!-- Conteudo principal -->
   <head>

        <link rel="stylesheet" href="<?php echo base_url('assets/css/swiper.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/receitas.css'); ?>">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    </head>
    
    
    <div class="container-fluid main-content">
        
        <div class="row mt-4 categorias">
            <h3 class="text-center">Selecione uma categoria</h3>
            <div class="swiper mySwiper mt-3">
                <div class="swiper-wrapper">

                    <div class="swiper-slide card-category category" id="paes " style="background-image: url('https://portal6.com.br/wp-content/uploads/2022/01/paes.jpg')"><p class="category-name">Pães</p></div>
                    <div class="swiper-slide card-category category" id="bolos" style="background-image: url('https://dinorma.com.br/wp-content/uploads/2021/08/Postagens-Duplo-Julho-2022-bolo-amor-de-pai-600x600.png');"><p class="category-name">Bolos</p></div>
                    <div class="swiper-slide card-category category" id="salgados" style="background-image: url('https://www.receiteria.com.br/wp-content/uploads/receitas-de-salgados-assados-0.jpg');"><p class="category-name">Salgados</p></div>
                    <div class="swiper-slide card-category category" id="folhados" style="background-image: url('https://img-global.cpcdn.com/recipes/e1fe073c69eadde7/1200x630cq70/photo.jpg');"><p class="category-name">Folhados</p></div>
                    <div class="swiper-slide card-category category" id="doces" style="background-image: url('https://media-cdn.tripadvisor.com/media/photo-s/05/f0/13/48/fabrica-de-doces-brasil.jpg');"><p class="category-name">Doces</p></div>
                    <div class="swiper-slide card-category category" id="bebidas" style="background-image: url('https://media-cdn.tripadvisor.com/media/photo-s/12/3f/31/bd/cafes-variados-e-um-amplo.jpg');"><p class="category-name">Bebidas</p></div>
                    <div class="swiper-slide card-category category" id="outros" style="background-image: url('https://blog.zanottirefrigeracao.com.br/wp-content/uploads/diversidade-de-produtos-padaria_2.jpg');"><p class="category-name">Outros</p></div>
                </div>
                <div class="swiper-button-next"></div>
                 <div class="swiper-button-prev"></div>
                </div>
            </div>
            
            
        </div>
        
    </div>
    
</div>
</body>

<script>
  

</script>

<script>

cards = document.querySelectorAll('.category');

for(let i of cards){

  i.addEventListener('click', () => {
    window.location.href = `categorias/r/${i.id}`;
  })
}

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