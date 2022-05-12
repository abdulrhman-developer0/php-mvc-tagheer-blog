<?php loadPart('header',$data) ?>



<!-- Carousel Start -->
    <div id="blog-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <h2 class="mb-3 text-white font-weight-bold">Tagheer Team</h2>
                    <a href="" class="btn btn-lg btn-outline-light mt-4">Read More</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
<!-- Carousel End -->




<div class="content">
    <div class="container p-0">
        



<!-- Blog List Start -->
<div class="container bg-white pt-5">

    <?php loadPart('show-articles',$data) ?>

</div>
<!-- Blog List End -->


<!-- Subscribe Start -->
<div class="container py-5 px-4 bg-secondary text-center">
<h1 class="text-white font-weight-bold">Subscribe My Newsletter</h1>
<p class="text-white">Subscribe and get my latest article in your inbox</p>
<form class="form-inline justify-content-center">
<div class="input-group">
    <input type="text" class="form-control" placeholder="Your Email">
    <div class="input-group-append">
        <button class="btn btn-primary" type="submit">Subscribe</button>
    </div>
    </div>
</form>
</div>
<!-- Subscribe End -->


</div>

<div class="mb-5"></div>

<!-- Back to Top -->
<a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>

<?php loadPart('footer') ?>