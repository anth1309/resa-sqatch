<?php session_start();
if (!isset($_SESSION['user']))
    header('location:index.php'); ?>

<body>
    <header>
        <?php include_once('./header.php'); ?>
    </header>
    <main>
        <div class="pagesAnnexes">
            <a class='retourAcceuil' href="./index.php">Retour a l'accueil</a>
            <div>

                <h1> bienvenue moi <?php echo  $_SESSION['user'];  ?> </h1>
                <a href="./deconexion.php">Déconnexion</a>
                <img src="https://picsum.photos/1500/2000?random=1" />
            </div>
            <a class='retourAcceuil' href="./index.php">Retour a l'accueil</a>
        </div>


    </main>
    <footer>
        <?php include_once('./footer.php'); ?>
    </footer>
</body>