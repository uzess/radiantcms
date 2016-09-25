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
<?php
if ("contact" == $pageUrlName || "contact-us" == $pageUrlName) {
    include "includes/contact.php";
} elseif ("board-member" == $pageUrlName || "member" == $pageUrlName) {
    include "includes/board-member.php";
} else {
    ?>
    <div class="amr-section-8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mission-vission">
                        <?php
                        $result = $groups->getByParentId($pageId);
                        $pageSliderId = 9999999;
                        while ($row = $conn->fetchObject($result)):
                            if ("news" == $row->display):
                                $pageSliderId = $row->id;

                                break;
                            endif;
                        endwhile;

                        $result = $groups->getByParentId($pageSliderId);
                        if ($conn->numRows($result) > 0) {
                            ?>
                            <div class="side-slider">
                                <div id="myCarousel1" class="carousel slide carousel-v1">
                                    <div class="carousel-inner">
                                        <?php
                                        $i = 0;
                                        while ($pageSliderRow = $conn->fetchObject($result)):
                                            $img = CMS_GROUPS_DIR . $pageSliderRow->image;
                                            if (file_exists($img) & !empty($pageSliderRow->image)):
                                                ?>

                                                <div class="item <?php echo $i == 0 ? "active" : ""; $i++; ?>">
                                                     <img src="<?php echo $img; ?>" class="update-parent img-responsive alignleft img-responsive" alt="" style="">

                                                    <div class="carousel-caption">
                                                        <p><?php echo $pageSliderRow->shortcontents; ?></p>
                                                    </div>
                                                </div>

                                                <?php
                                            endif;
                                        endwhile;
                                        ?>
                                    </div>

                                    <div class="carousel-arrow">
                                        <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <a class="right carousel-control" href="#myCarousel1" data-slide="next">
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div><!--side slider-->
                            <?php } ?>
                        <div class="p-lg">
                            <?php echo Pagination($pageContents, "content");
                            ?>
                        </div><!--p-lg-->
                    </div><!--mission-->
                </div><!--col-md-12-->
            </div>
        </div>
    </div><!--amr-section-8-->

<?php } ?>
