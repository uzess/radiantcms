<div class="amr-section-10">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="decorated-title">
                    <div class="decorated-title-inner">
                        <div class="rules"></div><!-- /.rules-->
                        <!--<h2 class="title"><a href="">project</a>&nbsp;//&nbsp;past</h2>-->
                        <h2 class="title"><?php include("includes/breadcrumb.php"); ?></h2>
                        <div class="rules"></div><!-- /.rules-->
                    </div><!-- /.decorated-title-inner -->
                </div>
            </div>
        </div>
    </div>
</div><!--amr-section-10-->
<div class="amr-section-8">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mission-vission">
                    <?php
                    $img = CMS_GROUPS_DIR . $pageImage;
                    if (file_exists($img) & !empty($pageImage)):
                        ?>
                        <img src="<?php echo $img; ?>" alt="pre" class="update-parent img-responsive alignleft imageborder size-full wp-image-72 img-responsive">
                    <?php endif; ?>
                    <div class="p-lg">
                        <?php echo Pagination($pageContents, "content");
                        ?>
                    </div><!--p-lg-->
                </div><!--mission-->
            </div><!--col-md-12-->
        </div>
    </div>
</div><!--amr-section-8-->


