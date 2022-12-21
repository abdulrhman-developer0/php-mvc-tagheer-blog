<?php loadPart('header', $data) ?>
<?php loadPart('pageheader', $data) ?>

<div class="content">
    <!-- Contact Start -->
    <div class="container bg-white pt-5">
        <div class="col-md-12 pb-5">
            <div class="contact-form">
                <h2 class="text-center py-2">Login</h2>

                <form method="POST" enctype="multipart/form-data" action="<?php echo $action ?>">

                <div class="control-group">
                        <label for="E">Type your email</label>
                        <input type="text" class="form-control" required name="email"  />
                    </div>

                    <div class="control-group">
                        <label for="E">Type your password</label>
                        <input type="password" class="form-control" required name="password"  />
                    </div>

                    <div class="mt-3">
                        <button class="btn btn-primary" type="submit">Login.</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</div>
<!-- Contact End -->

<?php loadPart('footer') ?>