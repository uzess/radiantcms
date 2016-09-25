<?php
$listResult = $groups->getById($pageId);
$listRow = $conn->fetchArray($listResult);

$pageResult = $groups->getById($pageParentId);
$pageRow = $conn->fetchArray($pageResult);

$navNextResult = $groups->getNextResult($pageId);
$navNextRow = $conn->fetchArray($navNextResult);

$navPreviousResult = $groups->getPreviousResult($pageId);
$navPreviousRow = $conn->fetchArray($navPreviousResult);
?>

<div class="container">
  <div class="row">
    <div class="col-xs-12 cms-content">
      <?php
      include("includes/breadcrumb.php");
      ?>
      <div class="clearfix" style="margin-bottom: 20px;">
        <div style="float: right; margin-right: 10px; height: 30px;"> <a href="<?php echo $navNextRow['urlname']; ?>" class="pAging">Next &raquo;</a> </div>
        <div style="float: right; height: 30px;" > <a href="<?= $navPreviousRow['urlname']; ?>" class="pAging">&laquo; Previous</a> </div>
      </div>

      <?
      if (file_exists(CMS_GROUPS_DIR . $listRow['image']) && !empty($listRow['image']))
      {
        ?>
        <div align="center" style="text-align:center; padding-top:10px;"><img src="<?php echo imager($listRow['image'], 500, 500, ""); ?>" />
          <div style="clear:both"></div>
        </div>
        <br />
      <? } ?>
      <div class="listContent">
        <?php echo $listRow['contents']; ?>
      </div>
    </div>
   
  </div>
</div>


