<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>



<body>
    <header>
        <?php include_once('./header.php'); ?>
    </header>
    <main>
        <div class='pagesAnnexes'>
            <a class='retourAcceuil' href="./index.php">Retour a l'accueil</a>



            <div id="carrousselmoi" class="carousel slide " data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carrousselmoi" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#carrousselmoi" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#carrousselmoi" data-bs-slide-to="2"></button>
                    <button type="button" data-bs-target="#carrousselmoi" data-bs-slide-to="3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active"><img src="./caroussel/salle1.jpg" alt="salle_squash" class="d-sm-block w-100">
                        <div class="carousel-caption">
                            <!-- <h4 class="text-body">BC 8</h4> -->
                        </div>
                    </div>

                    <div class="carousel-item"><img src="./caroussel/Squash_court.JPG" alt=" salle_squash" class="d-sm-block w-100">
                        <div class="carousel-caption ">

                        </div>
                    </div>

                    <div class="carousel-item"><img src="./caroussel/images1.jpeg" alt="salle_squash" class="d-sm-block w-100">
                        <div class="carousel-caption">

                        </div>
                    </div>

                    <div class="carousel-item"><img src="./caroussel/les salles.png" alt="salle_squash" class="d-sm-block w-100">
                        <div class="carousel-caption">

                        </div>
                    </div>

                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carrousselmoi" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carrousselmoi" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>


            </div>
        </div>








        <a class='retourAcceuil' href="./index.php">Retour a l'accueil</a>

        </div>
    </main>
    <footer>
        <?php include_once('./footer.php'); ?>
    </footer>
</body>