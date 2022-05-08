<?php loadPart('header',$data) ?>
<?php loadPart('pageheader',$data) ?>


    
    <div class="content">
        

    


        <!-- About Start -->
        <div class="container bg-white pt-5">
            <div class="row px-3 pb-5">
                <div class="col-md-12">
                    <h2 class="mb-4 font-weight-bold">Article writer with 10 years of experience</h2>
                    <div class="col-md-4">
                        <img class="img-fluid float-left w-50 mr-4 mb-3" src="img/about.jpg" alt="Image">
                    </div>
                    <div class="col-md-8 m-0">
                        <?php echo file_get_contents('../about.txt') ?>
                    </div>
                </div>
                <div class="col-md-12 pt-4">
                    <div class="d-flex flex-column skills">
                        <div class="progress w-100 mb-4">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">Adaptability</div>
                        </div>
                        <div class="progress w-100 mb-4">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">Research</div>
                        </div>
                        <div class="progress w-100">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Editing</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


    </div>

    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>

<?php loadPart('footer') ?>