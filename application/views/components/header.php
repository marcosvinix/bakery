<div class="row">
    <div class="col-12 header">
        <h1>
            <i class="bi bi-chevron-left fs-2" style="cursor: pointer;" id="back-page"></i>  
            <?php echo ucfirst($title); ?>
        </h1>

        <div class="search-box">
            <input type="text" class="search" placeholder="Pesquisar receitas...">
            <img src="<?php echo base_url('assets/images/sino.png'); ?>" class="bell" width="35px" draggable="false" alt="">
        </div>
    </div>
</div>

<script>

document.getElementById('back-page').addEventListener('click', () => {
    history.go(-1);
})

</script>
