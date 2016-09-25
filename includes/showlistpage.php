<div class="container"> 
  <div class="row">
    <div class="col-xs-12 cms-content">
      <?php
      include("includes/breadcrumb.php");
      $pagename = $pageUrlName . "/";

      $sql = "SELECT * FROM groups WHERE parentId = '$pageId' ORDER BY onDate DESC, id DESC";

      $newsql = $sql;

      $limit = LISTING_LIMIT;

      $return = Pagination($sql, "");

      $arr = explode(" -- ", $return);

      $start = $arr[0];
      $pagelist = $arr[1];
      $count = $arr[2];

      $newsql .= " LIMIT $start, $limit";

      $result = mysql_query($newsql);

      while ($listRow = $conn->fetchArray($result))
      {
        $arrDate = explode("-", $listRow['onDate']);
        ?>
        <div style="padding:10px 0;">
          <h5 style="font-weight: bold;  margin-bottom:11px;">
            <a style="width: 75%;
               display: inline-block;
               overflow: hidden;" href="<?php echo $listRow['urlname']; ?>"><?php echo $listRow['name']; ?></a>
            <i class="pull-right" style="font-weight:300; font-size: 14px;">
              Updated Date : <?php echo date("M d, Y", mktime(0, 0, 0, $arrDate[1], $arrDate[2], $arrDate[0])); ?>
            </i>
          </h5><!-- end of listTitle -->

          <div style="max-height: 122px;
               overflow: hidden; border-left: 10px solid #bbb;
               padding: 0 15px;">

            <?
            if (file_exists(CMS_GROUPS_DIR . $listRow['image']) && !empty($listRow['image']))
            {
              ?>
              <img style="float: left;
                   margin-right: 15px;
                   margin-top: 0px;
                   max-height: 100%;" src="<?php echo imager($listRow['image'], 150, "", "fix"); ?>" alt="<?php echo $listRow['name']; ?>" />
                 <? } ?>
                 <?php echo nl2br($listRow['shortcontents']); ?>
          </div>
          <div class="clearfix">
            <br>
            <a class="btn btn-default pull-right" href="<?php echo $listRow['urlname']; ?>">Read More</a>
          </div>
          <div style="clear:both;"></div>
        </div><!-- end of listRow -->
        <?
      }
      if ($count > $limit)
        echo $pagelist;
      ?>
    </div>
    
  </div>

</div>