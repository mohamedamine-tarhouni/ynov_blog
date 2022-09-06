<?php include('includes/header.php') ?>

<body>
    <div class="wrapper">
        <?php require('includes/sidebar.php'); ?>
        <div class="content">
            <?php include('includes/navbar.php') ?>

            <!-- Page Header Start -->
            <div class="container py-5 px-2 bg-primary">
                <div class="row py-5 px-4">
                    <div class="col-sm-6 text-center text-md-left">
                        <h1 class="mb-3 mb-md-0 text-white text-uppercase font-weight-bold">About Me</h1>
                    </div>
                    <div class="col-sm-6 text-center text-md-right">
                        <div class="d-inline-flex pt-2">
                            <h4 class="m-0 text-white"><a class="text-white" href="">Home</a></h4>
                            <h4 class="m-0 text-white px-2">/</h4>
                            <h4 class="m-0 text-white">About Me</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- About Start -->
            <div class="container bg-white pt-5">
                <div class="row px-3 pb-5">
                    <div class="col-md-12">
                        <h3 class="mb-4 font-weight-bold">Qui suis je?</h3>
                        <img class="img-fluid float-left w-50 mr-4 mb-3" src="img\parisYnovCampus.webp" alt="Image">
                        <p class="m-0">
                            Je m'appelle Mohamed Amine TARHOUNI et je suis un étudiant chez PARIS YNOV CAMPUS et ma spécialité c'est GAME DESIGN ET PROGRAMMING</p>
                    </div>
                    <div class="col-md-12">
                        <h3 class="mb-4 font-weight-bold">Mes motivations/determinations</h3>
                        <img class="img-fluid float-left w-50 mr-4 mb-3" src="img\game-programming-03.webp" alt="Image">
                        <p class="m-0">
                            Passionné par l'univers du jeux vidéo depuis toujours . Créatif , curieux et
                            motivé, je suis soucieux de réaliser un travail de qualité . Autodidacte et
                            discipliné, je suis un jeune développeur qui souhaite gagner en expérience et
                            travailler dans un domaine qui me passionne</p>

                    </div>

                    <div class="col-md-12 pt-4">
                        <div class="d-flex flex-column skills">
                            <div class="progress w-100 mb-4">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">Créativité</div>
                            </div>
                            <div class="progress w-100 mb-4">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">Rigueur</div>
                            </div>
                            <div class="progress w-100">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Développement</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h3 class="mb-4 font-weight-bold">Mon CV</h3>
                        <p>cliquer sur le CV pour l'agrandir et avoir la possibilité de le télécharger</p>
                        <a href="https://fisio.education/editeur/templates_pdf/5/5/3/8/MTg2Mzl8LSEtfHRlbXBsYXRl/5538_MTg2Mzl8LSEtfHRlbXBsYXRl_63174e5aa0f3d.pdf"><img src="img\CV.png" alt="canard" /></a>
                    </div>
                </div>
            </div>
            <!-- About End -->


            <?php require('includes/footer.php'); ?>
        </div>
    </div>

    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>