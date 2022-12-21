<?php loadPart('header',$data) ?>

<div class="container">
    <h1 class="text-center my-5">Admin Dashbord</h1>
    <div class="row">

        <div class="col-md-5 bg-primary m-2">
            <h3 class="text-center text-white mt-3">0</h3>
            <p class="text-center text-white mt-2">Articles</p>
        </div>

        <div class="col-md-6 bg-info my-2">
            <h3 class="text-center text-white mt-3">0</h3>
            <p class="text-center text-white mt-2">Coments</p>
        </div>
        
        <div class="col-md-5 bg-danger m-2 ">
            <h3 class="text-center text-white mt-3">0</h3>
            <p class="text-center text-white mt-2">Visitors users</p>
        </div>
        
        <div class="col-md-6 bg-warning my-2">
            <h3 class="text-center text-white mt-3">0</h3>
            <p class="text-center text-white mt-2"> Subscribers</p>
        </div>

    </div>


    <div class="row my-5 bg-white">
        <a href="/add" target="_blank" class="btn btn-primary text-center text-white col-md-4">Add New Article</a>
        <p class="ml-4 mt-2">Create New Article in Blog</p>
    </div>

    <div class="row my-5 bg-white">
        <a href="/settings" target="_blank" class="btn btn-info text-center text-white col-md-4">Settings..</a>
        <p class="ml-4 mt-2">Editing and Change Webbsite settings</p>
    </div>

    <div class="row my-5 bg-white">
        <a href="/subscribers" target="_blank" class="btn btn-warning text-center text-white col-md-4">subscribers</a>
        <p class="ml-4 mt-2">Mange All subscribers</p>
    </div>

</div>
<?php loadPart('footer') ?>