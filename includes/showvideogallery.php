<div class="container">
  <div class="row">
    <div class="col-xs-12 cms-content">
      <?php
      include("includes/breadcrumb.php");

      $i = 0;
      $pagename = $pageUrlName . "/";
      $sql = "SELECT * FROM groups WHERE parentId = '$pageId' ORDER BY id DESC";

      $newsql = $sql;

      $limit = PAGING_LIMIT;
      $limit = 9;
      $return = Pagination($sql, "");


      $arr = explode(" -- ", $return);

      $start = $arr[0];
      $pagelist = $arr[1];
      $count = $arr[2];

      $newsql .= " LIMIT $start, $limit";

      $result = mysql_query($newsql);

      while ($row = $conn->fetchArray($result))
      {
        $i++;
        ?>
        <div class="col-sm-6 col-md-4">
          <!-- gall main starts -->
          <a data-fancybox-group="video-gallery" class="cmsVideo" href="<?php echo $row['contents']; ?>" >
            <img style="margin-bottom:15px;" src="<?php echo getYouTubeImage($row['contents'], "big"); ?>" 
                 class="thumbnail"  alt="<?php echo $row['title']; ?>"></a>       
        </div>  
        <?php
      }
      if ($count > $limit)
        echo '<div class="clearfix"></div>'.$pagelist;
      ?>

    </div>
    
    <br>
  </div>




