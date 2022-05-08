<?php loadPart('header', $data) ?>
<?php loadPart('pageheader', $data) ?>

<div class="content">
    <!-- Contact Start -->
    <div class="container bg-white pt-5">
        <div class="col-md-12 pb-5">
            <div class="contact-form">

                
                <div class="col-md-5 mb-3" onclick="choseImage()">
                    <img class="img-fluid mb-4 mb-md-0" src="<?php  echo (isset($old))?  'uploads/images/'.$old['article_img'] : 'img/logo.jpg' ?>" id="imageShow" alt="Image" />
                </div>

                <form method="POST" enctype="multipart/form-data" action="<?php echo $action ?>">

                    
                    <?php if (isset($old)): ?>
                        <input type="hidden" name="id" value=" <?php echo $old['article_id'] ?>"/>
                        <input type="hidden" name="old_img" value="<?php echo  $old['article_img'] ?>"/>
                    <?php endif ?>

                    <input type="file" id="ifile" onchange="showImage()" name="img" style="display: none;" />

                    <div class="control-group">
                        <input type="text" class="form-control" placeholder="Title" required name="title" value="<?php echo (isset($old))? $old['article_title'] : null ?>" />
                    </div>

                    <div class="control-group">
                        <textarea class="form-control" rows="6" placeholder="Article Content" required name="content"><?php echo (isset($old))? $old['article_content'] : null ?></textarea>
                    </div>

                    <div>
                        <button class="btn btn-primary" type="submit">Publiche.</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Contact End -->

</div>

<?php loadPart('footer') ?>