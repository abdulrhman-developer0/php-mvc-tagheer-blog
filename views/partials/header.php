<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title ?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

<!-- Navbar start -->
<nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
    
    <a href="" class="navbar-brand d-block d-lg-none">Navigation</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav m-auto">
            <a href="/home" class="nav-item nav-link active">Home</a>
            <a href="/blog" class="nav-item nav-link">Blog</a>
            <a href="/about" class="nav-item nav-link">About US</a>
            <a href="/contact" class="nav-item nav-link">Contact US</a>
            <?php if (!$user): ?>
                <a href="/login" class="nav-item nav-link bg-info ml-2">Login</a>
                <a href="/signup" class="nav-item nav-link bg-success ml-2">Signup</a>
            <?php else: ?>
                <a href="/dashbord" class="nav-item nav-link bg-info ml-2">Dashbord</a>
                <a href="/logout" class="nav-item nav-link   bg-primary ml-2">Logout</a>  
            <?php endif ?>
        </div>
    </div>
</nav>
<!-- Navbar End -->