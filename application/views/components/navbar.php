<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<body>

<div class="container">
    <!-- Nav Bar -->
    <div class="position-fixed nav">
        <div class="nav-column d-flex">

            <a href="home" style="text-decoration: none;">
                <div class="logo">
                    <h5 style="color: white;"> <span><</span>c/in<span>></span></h5>
                </div>
            </a>

            <div class="itens d-flex text-center nav-column-itens">

                <a href="/p/categorias">
                    <img class="nav-btn" draggable="false" src="<?php echo base_url('assets/images/list.png'); ?>">
                </a>

                
                <a href="/p/home">
                    <img class="nav-btn" draggable="false" src="<?php echo base_url('assets/images/home.png'); ?>">
                </a>
                

                <a href="/p/estoque">
                    <img class="nav-btn" draggable="false" src="<?php echo base_url('assets/images/box.png'); ?>">
                </a>



                <img class="nav-btn user-mobile" draggable="false" src="<?php echo base_url('assets/images/user.png'); ?>">
            </div>

            <div class="btn-group dropstart">
            <button type="button" style="background-color: transparent; border: none;" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="nav-btn user-desktop" draggable="false" src="<?php echo base_url('assets/images/user.png'); ?>">
            </button>
            <ul class="dropdown-menu justify-content-center p-2">
                <li>
                    <a href="/p/user" class="btn btn-danger" style="background-color: #4E1784; border: none;">Configurações</a>
                </li>

                <li>
                    <a href="#" class="btn btn-danger mt-2" style="background-color: #4E1784; width:100%; border: none;">Logout</a>
                </li>
            </ul>
            </div>
   
            

        </div>
</div>


    <script src="https://code.jquery.com/jquery-3.6.2.js" integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>