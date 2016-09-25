<div class="amr-section-11">
    <div class="container">
        <div class="row">
            <?php
            $result = $groups->getByParentId($pageId);
            while ($row = $conn->fetchObject($result)) {
                ?>
                <div class="col-md-4">
                    <div class="member">
                        <div class="team">
                            <?php
                            $img = CMS_GROUPS_DIR . $row->image;
                            if (file_exists($img) & !empty($row->image)):
                                ?>
                                <div class="team-img">
                                    <img src="<?php echo $img; ?>" alt="">
                                </div>
                            <?php endif; ?>
                            <div class="member-detail">
                                <h3><a href="" title=""><?php echo $row->name; ?></a></h3>
                                <span><?php echo $row->shortcontents; ?></span>
                                <div><?php echo $row->contents; ?></div>
                            </div>
                        </div>
                    </div><!-- MEMBER -->
                </div><!--col-4-->
            <?php } ?>
        </div>
    </div>
</div><!--amr-section-11-->





<div class="amr-section-14"></div><!--amr-section-14-->
<div class="amr-section-15"></div><!--amr-section-15-->
<div class="amr-section-16"></div><!--amr-section-16-->

