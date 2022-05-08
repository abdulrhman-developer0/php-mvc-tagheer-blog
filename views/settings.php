<?php loadPart('header', $data) ?>
<?php loadPart('pageheader', $data) ?>

<div class="content">
    <!-- Contact Start -->
    <div class="container bg-white pt-5">
        <div class="col-md-12 pb-5">
            <div class="contact-form">
                <h2 class="text-center py-2">Settings</h2>

                <form method="POST" enctype="multipart/form-data" action="<?php echo $action ?>">

                    <h4 class="mt-2">Contact info</h4>
                    <div class="control-group">
                        <label for="E">Address</label>
                        <input type="text" class="form-control" required name="contact[address]"  value="<?php echo $settings->contact->address ?>" />
                    </div>
                    <div class="control-group">
                        <label for="E">Phone Number</label>
                        <input type="text" class="form-control" required name="contact[phone]"  value="<?php echo  $settings->contact->phone ?>" />
                    </div>
                    <div class="control-group">
                        <label for="E">Email</label>
                        <input type="text" class="form-control" required name="contact[email]"  value="<?php echo $settings->contact->email ?>" />
                    </div>


                    <div class="mt-3">
                        <button class="btn btn-primary" type="submit">Save.</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    
</div>
<!-- Contact End -->

<?php loadPart('footer') ?>