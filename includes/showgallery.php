<div class="container">
  <div class="row">
    <div class="col-xs-12 cms-content">

      <?php
      include("includes/breadcrumb.php");
      $i = 0;
      $pagename = $pageUrlName . "/";
      $sql = "SELECT * FROM groups WHERE parentId = $pageId ORDER BY id DESC";
      $newsql = $sql;

      $limit = 12;

      $return = Pagination($sql, "");
      $arr = explode(" -- ", $return);

      $start = $arr[0];
      $pagelist = $arr[1];
      $count = $arr[2];

      $newsql .= " LIMIT $start, $limit";

      $result = mysql_query($newsql);
      ?>
      <div class="row">
        <?php
        while ($galleryRow = $conn->fetchArray($result))
        {
          ++$i;
          ?>
          <div style="margin-bottom:15px;" class="col-sm-6 col-md-3">
            <a data-fancybox-group="gallery" class="thumbnail cmsGallery"  href="<?php echo CMS_GROUPS_DIR . $galleryRow['image'] ?>" title="<?php echo $galleryRow['shortcontents']; ?>" style="display:block;" >
              <img src="<?php echo imager($galleryRow['image'], 260, 182, "fix"); ?>" 
                   class=""  border="0" alt="<?= $galleryRow['shortcontents']; ?>"  
                   title="<?= $galleryRow['shortcontents']; ?>" /></a>
          </div>
          <?php
        }
        if ($count > $limit)
          echo '<div class="clearfix"></div>'.$pagelist;
        ?>
      </div>
    </div>
   
  </div>
</div>

