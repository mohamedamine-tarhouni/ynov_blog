<?php include('includes/header.php') ?>

    <body>
        <div class="wrapper">
        <?php require('includes/sidebar.php'); ?>
            <div class="content">

                <?php include('includes/navbar.php') ?>

                
                
                <!-- Blog List Start -->
                <div class="container bg-white pt-5">
                    <div class="row blog-item px-3 pb-5">
                        <div class="col-md-5">
                            <img class="img-fluid mb-4 mb-md-0" src="img\project-steps-slide3.jpg" alt="Image">
                        </div>
                        <div class="col-md-7">
                            <h3 class="mt-md-4 px-md-3 mb-2 py-2 bg-white font-weight-bold">Mes parcours</h3>
                            <div class="d-flex mb-3">
                                <small class="mr-2 text-muted"><i class="fa fa-calendar-alt"></i> 2021/2022</small>

                            </div>
                            <p>
                            Mes parcours dans le domaine de l'informatique
                            </p>
                            <a class="btn btn-link p-0" href="Parcours.php">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="row blog-item px-3 pb-5">
                        <div class="col-md-5">
                            <img class="img-fluid mb-4 mb-md-0" src="img\Business-deal-handshake.webp" alt="Image">
                        </div>
                        <div class="col-md-7">
                            <h3 class="mt-md-4 px-md-3 mb-2 py-2 bg-white font-weight-bold">Debut stage</h3>
                            <div class="d-flex mb-3">
                                <small class="mr-2 text-muted"><i class="fa fa-calendar-alt"></i> Juin 2022</small>

                            </div>
                            <p>
                                Quand j'ai trouvé mon stage
                            </p>
                            <a class="btn btn-link p-0" href="debStage.php">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="row blog-item px-3 pb-5">
                        <div class="col-md-5">
                            <img class="img-fluid mb-4 mb-md-0" src="img\logo_DECISYS-240w (1).webp" alt="Image">
                        </div>
                        <div class="col-md-7">
                            <h3 class="mt-md-4 px-md-3 mb-2 py-2 bg-white font-weight-bold">DECISYS CONSULTING</h3>
                            <div class="d-flex mb-3">

                            </div>
                            <p>
                                l'entreprise avec laquelle j'ai fait mon stage
                            </p>
                            <a class="btn btn-link p-0" href="debStage.php">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    
                </div>
                <!-- Blog List End -->
                <!-- Blog List Start -->
                
                <!-- Blog List End -->
                
                
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
