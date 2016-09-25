<?php

class Groups {

  function save($id, $name, $urlname, $type, $parentId, $linkType, $shortcontents, $contents, $weight, $hide, $pageTitle, $pageKeyword, $pageDescription, $featured, $display)
  {
    global $conn;

    $id = cleanQuery($id);
    $name = cleanQuery($name);
    $urlname = cleanQuery($urlname);
    $type = cleanQuery($type);
    $parentId = cleanQuery($parentId);
    $linkType = cleanQuery($linkType);
    $shortcontents = cleanQuery($shortcontents);
    $contents = cleanQuery($contents);
    $weight = cleanQuery($weight);
    $hide = cleanQuery($hide);
    $pageTitle = cleanQuery($pageTitle);
    $pageKeyword = cleanQuery($pageKeyword);
    $pageDescription = cleanQuery($pageDescription);
    $featured = cleanQuery($featured);
    $display = cleanQuery($display);

    $date = date('Y-m-d H:i:s');

    if ($id > 0)
      $sql = "UPDATE groups
						SET
							name = '$name',
							urlname = '$urlname',
							parentId='$parentId',
							shortcontents = '$shortcontents',
							contents = '$contents',
							weight = '$weight',
							hide = '$hide',
							pageTitle = '$pageTitle',
							pageKeyword = '$pageKeyword',
							pageDescription = '$pageDescription',
							featured = '$featured',
							display = '$display'
						WHERE
							id = '$id'";
    else
      $sql = "INSERT INTO groups 
						SET
							name = '$name',
							urlname = '$urlname',
							type='$type',
							parentId='$parentId',
							linkType = '$linkType',
							shortcontents = '$shortcontents',
							contents = '$contents',
							weight = '$weight',
							hide = '$hide',
							pageTitle = '$pageTitle',
							pageKeyword = '$pageKeyword',
							pageDescription = '$pageDescription',
							featured = '$featured',
							display = '$display',
							onDate = '$date'";

    $conn->exec($sql);
    if ($id > 0)
      return $conn->affRows();
    return $conn->insertId();
  }

  function saveListSub($id, $name, $urlname, $parentId, $shortcontents, $contents, $featured, $weight, $pageTitle, $pageKeyword, $pageDescription, $onDate)
  {
    global $conn;

    $id = cleanQuery($id);
    $name = cleanQuery($name);
    $urlname = cleanQuery($urlname);
    $parentId = cleanQuery($parentId);
    $shortcontents = cleanQuery($shortcontents);
    $contents = cleanQuery($contents);
    $featured = cleanQuery($featured);
    $weight = cleanQuery($weight);
    $pageTitle = cleanQuery($pageTitle);
    $pageKeyword = cleanQuery($pageKeyword);
    $pageDescription = cleanQuery($pageDescription);
    $onDate = cleanQuery($onDate);

    if ($id > 0)
      $sql = "UPDATE groups
						SET
							name = '$name',
							urlname = '$urlname',
							parentId='$parentId',
							shortcontents = '$shortcontents',
							contents = '$contents',
							featured = '$featured',
							weight = '$weight',
							pageTitle = '$pageTitle',
							pageKeyword = '$pageKeyword',
							pageDescription = '$pageDescription',
							onDate = '$onDate'
						WHERE
							id = '$id'";
    else
      $sql = "INSERT INTO groups 
						SET
							name = '$name',
							urlname = '$urlname',
							parentId='$parentId',
							linkType = 'ListSub',
							shortcontents = '$shortcontents',
							contents = '$contents',
							featured = '$featured',
							weight = '$weight',
							pageTitle = '$pageTitle',
							pageKeyword = '$pageKeyword',
							onDate = '$onDate'";

    $conn->exec($sql);
    if ($id > 0)
      return $conn->affRows();
    return $conn->insertId();
  }

  function saveGallerySub($id, $parentId, $shortcontents)
  {
    global $conn;

    $id = cleanQuery($id);
    $parentId = cleanQuery($parentId);
    $shortcontents = cleanQuery($shortcontents);

    if ($id > 0)
      $sql = "UPDATE groups
						SET
							shortcontents = '$shortcontents'
						WHERE
							id = '$id'";
    else
      $sql = "INSERT INTO groups 
						SET
							parentId='$parentId',
							linkType = 'GallerySub',
							shortcontents = '$shortcontents',
							onDate = NOW()";

    $conn->exec($sql);
    if ($id > 0)
      return $conn->affRows();
    return $conn->insertId();
  }

  function saveVideoSub($id, $parentId, $contents)
  {
    global $conn;

    $id = cleanQuery($id);
    $parentId = cleanQuery($parentId);
    $contents = cleanQuery($contents);

    if ($id > 0)
      $sql = "UPDATE groups
						SET
							contents = '$contents'
						WHERE
							id = '$id'";
    else
      $sql = "INSERT INTO groups 
						SET
							parentId='$parentId',
							linkType = 'VideoSub',
							contents = '$contents',
							onDate = NOW()";

    $conn->exec($sql);
    if ($id > 0)
      return $conn->affRows();
    return $conn->insertId();
  }

  function saveCategory($id, $name, $urlname, $parentId, $contents, $weight, $pageTitle, $pageKeyword)
  {
    global $conn;

    $id = cleanQuery($id);
    $name = cleanQuery($name);
    $urlname = cleanQuery($urlname);
    $parentId = cleanQuery($parentId);
    $contents = cleanQuery($contents);
    $weight = cleanQuery($weight);
    $pageTitle = cleanQuery($pageTitle);
    $pageKeyword = cleanQuery($pageKeyword);

    if ($id > 0)
      $sql = "UPDATE groups
						SET
							name = '$name',
							urlname = '$urlname',
							parentId='$parentId',
							contents = '$contents',
							weight = '$weight',
							pageTitle = '$pageTitle',
							pageKeyword = '$pageKeyword'
						WHERE
							id = '$id'";
    else
      $sql = "INSERT INTO groups 
						SET
							name = '$name',
							urlname = '$urlname',
							parentId='$parentId',
							linkType = 'ProductCategory',
							contents = '$contents',
							weight = '$weight',
							pageTitle = '$pageTitle',
							pageKeyword = '$pageKeyword',
							onDate = NOW()";

    $conn->exec($sql);
    if ($id > 0)
      return $conn->affRows();
    return $conn->insertId();
  }

  function saveProduct($id, $name, $urlname, $parentId, $shortcontents, $contents, $weight, $pageTitle, $pageKeyword, $code, $price, $featured, $sold, $height, $width, $pcolor, $scolor)
  {
    global $conn;

    $id = cleanQuery($id);
    $name = cleanQuery($name);
    $urlname = cleanQuery($urlname);
    $parentId = cleanQuery($parentId);
    $shortcontents = cleanQuery($shortcontents);
    $contents = cleanQuery($contents);
    $weight = cleanQuery($weight);
    $pageTitle = cleanQuery($pageTitle);
    $pageKeyword = cleanQuery($pageKeyword);
    $code = cleanQuery($code);
    $price = cleanQuery($price);
    $featured = cleanQuery($featured);

    $date = date('Y-m-d H:i:s');

    if ($id > 0)
      $sql = "UPDATE groups
						SET
							name = '$name',
							urlname = '$urlname',
							parentId='$parentId',
							shortcontents = '$shortcontents',
							contents = '$contents',
							weight = '$weight',
							pageTitle = '$pageTitle',
							pageKeyword = '$pageKeyword',
							code = '$code',
							price = '$price',
							featured = '$featured',
							sold = '$sold',
							height = '$height',
							width = '$width',
							pcolor = '$pcolor',
							scolor = '$scolor'
						WHERE
							id = '$id'";
    else
      $sql = "INSERT INTO groups 
						SET
							name = '$name',
							urlname = '$urlname',
							parentId='$parentId',
							linkType = 'Product',
							shortcontents = '$shortcontents',
							contents = '$contents',
							weight = '$weight',
							pageTitle = '$pageTitle',
							pageKeyword = '$pageKeyword',
							code = '$code',
							price = '$price',
							featured = '$featured',
							sold = '$sold',
							height = '$height',
							width = '$width',
							pcolor = '$pcolor',
							scolor = '$scolor'
							onDate = '$date'";

    $conn->exec($sql);
    if ($id > 0)
      return $conn->affRows();
    return $conn->insertId();
  }

  function saveRegion($id, $name, $urlname)
  {
    global $conn;

    $id = cleanQuery($id);
    $name = cleanQuery($name);
    $urlname = cleanQuery($urlname);

    $date = date('Y-m-d H:i:s');

    if ($id > 0)
      $sql = "UPDATE groups
						SET
							name = '$name',
							urlname = '$urlname'
						WHERE
							id = '$id'";
    else
      $sql = "INSERT INTO groups 
						SET
							name = '$name',
							urlname = '$urlname',
							linkType = 'PackageRegion',
							onDate = '$date'";

    $conn->exec($sql);
    if ($id > 0)
      return $conn->affRows();
    return $conn->insertId();
  }

  function saveImage($id)
  {
    global $conn;
    global $_FILES;
    global $allowedTypes;


    if ($_FILES['image']['size'] <= 0)
      return;

    $id = cleanQuery($id);
    $filename = $_FILES['image']['name'];

    $ext = end(explode(".", $filename));
    $image = $id . "." . $ext;

    if (in_array($_FILES['image']['type'], $allowedTypes))
    {
      copy($_FILES['image']['tmp_name'], "../" . CMS_GROUPS_DIR . $image);
    }

    $sql = "UPDATE groups SET image = '$image' WHERE id = '$id'";
    $conn->exec($sql);
  }

  function saveProductImage($productId)
  {
    global $conn;
    global $_FILES;
    global $allowedTypes;

    if ($_FILES['image']['size'] <= 0)
      return;

    $id = cleanQuery($productId);
    $filename = $_FILES['image']['name'];

    $ext = end(explode(".", $filename));
    $image = $id . "." . $ext;

    if (in_array($_FILES['image']['type'], $allowedTypes))
    {
      copy($_FILES['image']['tmp_name'], "../" . CMS_GROUPS_DIR . $image);
    }
    $sql = "UPDATE groups SET image = '$image' WHERE id = '$id'";
    $conn->exec($sql);
  }

  function updateImage($id, $image)
  {
    global $conn;

    $id = cleanQuery($id);
    $image = cleanQuery($image);

    $sql = "UPDATE groups SET image = '$image' WHERE id = '$id'";
    $conn->exec($sql);
  }

  function updateUrlName($id)
  {
    global $conn;

    $id = cleanQuery($id);

    $sql = "UPDATE groups SET urlname = '$id' WHERE id = '$id'";
    $conn->exec($sql);
  }

  function deleteImage($id)
  {
    global $conn;

    $id = cleanQuery($id);
    $result = $this->getById($id);
    $row = $conn->fetchArray($result);
    $image = "../" . CMS_GROUPS_DIR . $row['image'];

    if (file_exists($image))
      unlink($image);

    $sql = "UPDATE groups SET image = '' WHERE id = '$id'";
    $conn->exec($sql);
  }

  function getById($id)
  {
    global $conn;

    $id = cleanQuery($id);

    $sql = "SElECT * FROM groups WHERE id = '$id'";
    $result = $conn->exec($sql);

    return $result;
  }

  function getByParentId($parentId)
  {
    global $conn;

    $parentId = cleanQuery($parentId);

    $sql = "SElECT * FROM groups WHERE parentId = '$parentId' ORDER BY weight ASC, id DESC";
    $result = $conn->exec($sql);

    return $result;
  }

  function getVisibleByParentId($parentId)
  {
    global $conn;

    $parentId = cleanQuery($parentId);

    $sql = "SElECT * FROM groups WHERE parentId = '$parentId' AND hide = 'No' ORDER BY weight ASC";
    $result = $conn->exec($sql);

    return $result;
  }

  function getByParentIdAndType($id, $type)
  {
    global $conn;

    $id = cleanQuery($id);
    $type = cleanQuery($type);

    $sql = "SElECT * FROM groups WHERE `type` = '$type' AND parentId = '$id' ORDER BY weight ASC";
    $result = $conn->exec($sql);

    return $result;
  }

  function getVisibleByParentIdAndType($id, $type)
  {
    global $conn;

    $id = cleanQuery($id);
    $type = cleanQuery($type);

    $sql = "SElECT * FROM groups WHERE `type` = '$type' AND parentId = '$id' AND hide = 'No' ORDER BY weight ASC";
    $result = $conn->exec($sql);

    return $result;
  }

  function getByParentIdAndLinkType($id, $linkType)
  {
    global $conn;

    $id = cleanQuery($id);
    $linkType = cleanQuery($linkType);

    $sql = "SElECT * FROM groups WHERE linkType = '$linkType' AND parentId = '$id' ORDER BY weight ASC";
    $result = $conn->exec($sql);

    return $result;
  }

  function getRandomByParentIdWithLimit($parentId, $limit)
  {
    global $conn;

    $sql = "SElECT * FROM groups WHERE `parentId` = '$parentId' order by rand() limit $limit";
    $result = $conn->exec($sql);

    return $result;
  }

  function getParentUrlName($id)
  {
    global $conn;
    $result = $this->getById($id);
    $row = $conn->fetchArray($result);
    if ($row['parentId'] == 0)
      return($row['urlname']);
    else
      return ($this->getParentUrlName($row['parentId']));
  }

  function getUrlNameById($id)
  {
    global $conn;
    $sql = "SELECT urlname FROM groups WHERE id = '$id'";
    $result = $conn->exec($sql);
    $row = $conn->fetchArray($result);
    return $row['urlname'];
  }

  function delete($id)
  {
    global $conn;

    $id = cleanQuery($id);

    $result = $this->getById($id);
    $row = $conn->fetchArray($result);

    $file = "../" . CMS_GROUPS_DIR . $row['image'];

    if (file_exists($file) && !empty($row['image']))
      unlink($file);

    if ($row['linkType'] == "File")
    {
      $file = "../" . CMS_FILES_DIR . $row['contents'];

      if (file_exists($file) && !empty($row['contents']))
        unlink($file);
    }
    else if ($row['linkType'] == "List")
    {
      $lResult = $this->getByParentId($id);
      while ($lRow = $conn->fetchArray($lResult))
        $this->delete($lRow['id']);
    }
    else if ($row['linkType'] == "Gallery")
    {
      $gResult = $this->getByParentId($id);
      while ($gRow = $conn->fetchArray($gResult))
        $this->delete($gRow['id']);
    }
    else if ($row['linkType'] == "Video Gallery")
    {
      $gResult = $this->getByParentId($id);
      while ($gRow = $conn->fetchArray($gResult))
        $this->delete($gRow['id']);
    }

    $sql = "DELETE FROM groups WHERE id = '$id'";
    $conn->exec($sql);
  }

  function getByParentIdWithLimit($parentId, $limit)
  {
    global $conn;


    $sql = "SElECT * FROM groups WHERE parentId = '$parentId' ORDER BY weight DESC, onDate DESC, id DESC LIMIT $limit";
    $result = $conn->exec($sql);

    return $result;
  }

  function getByParentIdWithLimitAndImage($parentId, $limit)
  {
    global $conn;


    $sql = "SElECT * FROM groups WHERE parentId = '$parentId' AND image != '' ORDER BY id DESC LIMIT $limit";
    $result = $conn->exec($sql);

    return $result;
  }

  function getByParentIdAndTypeWithLimit($parentId, $type, $limit)
  {
    global $conn;
    $parentId = cleanQuery($parentId);

    $sql = "SElECT * FROM groups WHERE parentId = '$parentId' AND `type` = '$type' ORDER BY weight LIMIT $limit";
    $result = $conn->exec($sql);

    return $result;
  }

  function getFeaturedWithLimit($limit)
  {
    global $conn;

    $sql = "SElECT * FROM groups WHERE featured = 'yes' ORDER BY id DESC LIMIT $limit";
    $result = $conn->exec($sql);

    return $result;
  }

  function getByType($type)
  {
    global $conn;

    $sql = "SElECT * FROM groups WHERE type = '$type' ORDER BY weight ASC";
    $result = $conn->exec($sql);

    return $result;
  }

  function getByLinkTypeWithLimit($linkType, $limit)
  {
    global $conn;

    $sql = "SElECT * FROM groups WHERE linkType = '$linkType' ORDER BY id DESC LIMIT $limit";
    $result = $conn->exec($sql);

    return $result;
  }

  function getNameById($id)
  {
    global $conn;

    $sql = "SElECT * FROM groups WHERE id = '$id'";
    $result = $conn->exec($sql);
    $row = $conn->fetchArray($result);
    return $row['name'];
  }

  function comboRecursion($parentId, $selectedId, $times)
  {
    global $conn;
   // global $i;

    if (is_numeric($parentId))
      $sql = "SELECT * FROM groups WHERE parentId = '$parentId' ORDER BY weight ASC";
    else
      $sql = "SELECT * FROM groups WHERE parentId = '0' AND type = '$parentId' ORDER BY weight ASC";

   // echo $sql;
    $result = $conn->exec($sql);

    while ($row = $conn->fetchArray($result))
    {
      $spaces = $this->spaces($times);
      if ($row['linkType'] != "GallerySub" && $row['linkType'] != "ListSub" && $row['linkType'] != "VideoSub")
      {
        if ($row['linkType'] != "Normal Group")
        {
          echo "<optgroup label='" . $row['name'] . "'";
        }
        else
        {
          echo "<option value='" . $row['id'] . "'";
          if ($row['id'] == $selectedId)
            echo " selected ";
        }
        echo ">";
        echo $spaces . $row['name'];
        if ($row['linkType'] != "Normal Group")
          echo "</optgroup>";
        else
          echo "</option>";
      }
      $this->comboRecursion((int) $row['id'], $selectedId, ++$times);

      --$times;
    }
  }

  function spaces($times)
  {
    $spaces = "";
    for ($i = 0; $i < $times; $i++)
      $spaces .= "--";

    return $spaces;
  }

  function writeBreadCrumb($id, $currentPage)
  {
    $list = array();
    // echo $currentPage; die();
    $this->getBreadCrumb($id, $list, $currentPage);
    //print_r($list);
    //if (count($list) > 1)

    for ($i = count($list) - 1; $i > 0; $i--)
    {

      echo $list[$i]."&nbsp;//&nbsp;";
    }
    //if (count($list) > 1)
    {
      echo $currentPage ;
    }
  }

  function getBreadCrumb($id, &$list)
  {
    global $conn;

    $result = $this->getById($id);

    while ($row = $conn->fetchArray($result))
    {

      array_push($list,  $row['name']);

      $this->getBreadCrumb($row['parentId'], $list);
    }
  }

  function isDeletable($id)
  {
    global $conn;

    $result = $this->getByParentId($id);
    if ($conn->numRows($result) > 0)  //has a child group
      return false;

    return true;
  }

  function getLastWeight($type, $parentId)
  {
    global $conn;

    $sql = "SElECT weight FROM groups WHERE `type` = '$type' AND parentId = '$parentId' ORDER BY weight DESC LIMIT 1";
    $result = $conn->exec($sql);
    $numRows = $conn->numRows($result);
    if ($numRows > 0)
    {
      $row = $conn->fetchArray($result);
      return $row['weight'] + 10;
    }
    else
      return 10;
  }

  function getSubLastWeight($parentId, $linkType)
  {
    global $conn;

    $sql = "SElECT weight FROM groups WHERE parentId = '$parentId' AND linkType = '$linkType' ORDER BY weight DESC LIMIT 1";
    $result = $conn->exec($sql);
    $numRows = $conn->numRows($result);
    if ($numRows > 0)
    {
      $row = $conn->fetchArray($result);
      return $row['weight'] + 10;
    }
    else
      return 10;
  }

  function getNextResult($id)
  {
    global $conn;

    $result = $this->getById($id);
    $row = $conn->fetchArray($result);

    $parentId = $row['parentId'];

    $sql = "SELECT * FROM groups WHERE  
					parentId = '$parentId' AND id > '$id' LIMIT 1";
    $result = $conn->exec($sql);
    if ($conn->numRows($result) == 0)
    {
      $sql = "SELECT * FROM groups WHERE parentId = '$parentId' LIMIT 1";
      $result = $conn->exec($sql);
      return $result;
    }
    else
    {
      return $result;
    }
  }

  function getPreviousResult($id)
  {
    global $conn;

    $result = $this->getById($id);
    $row = $conn->fetchArray($result);

    $parentId = $row['parentId'];

    $sql = "SELECT * FROM groups WHERE 
					parentId = '$parentId' AND id < '$id' ORDER BY id DESC LIMIT 1";
    $result = $conn->exec($sql);
    if ($conn->numRows($result) == 0)
    {
      $sql = "SELECT * FROM groups WHERE parentId = '$parentId' ORDER BY id DESC LIMIT 1";
      $result = $conn->exec($sql);
      return $result;
    }
    else
    {
      return $result;
    }
  }

  function getMainParent($id)
  {
    global $conn;
    global $mainParentId;

    $sql = "SElECT id, parentId FROM groups WHERE id = '$id'";
    $result = $conn->exec($sql);
    $row = $conn->fetchArray($result);

    if ($row['parentId'] > 0)
      $this->getMainParent($row['parentId']);
    else
    {
      $mainParentId = $id;
      return;
    }
  }

  function getByURLName($urlname)
  {
    global $conn;

    $sql = "SElECT * FROM groups WHERE urlname = '$urlname'";
    $result = $conn->exec($sql);
    $numRows = $conn->numRows($result);
    if ($numRows > 0)
    {
      $row = $conn->fetchArray($result);
      return $row;
    }
    return false;
  }

  function isUnique($id = 0, $urlname)
  {
    global $conn;

    $sql = "SELECT COUNT(id) cnt FROM groups WHERE urlname = '$urlname' AND id <> '$id'";

    $result = $conn->exec($sql);
    $row = $conn->fetchArray($result);
    if ($row['cnt'] > 0)
    {
      return false;
    }
    return true;
  }

  function getPageTitle($id)
  {
    global $conn;

    $sql = "SElECT pageTitle FROM groups WHERE id = '" . cleanQuery($id) . "'";
    $result = $conn->exec($sql);
    $row = $conn->fetchArray($result);
    return $row['pageTitle'];
  }

  function getPageKeyword($id)
  {
    global $conn;

    $sql = "SElECT pageKeyword FROM groups WHERE id = '" . cleanQuery($id) . "'";
    $result = $conn->exec($sql);
    $row = $conn->fetchArray($result);
    return $row['pageKeyword'];
  }

  function haveChild($id)
  {
    global $conn;

    $sql = "SELECT id FROM groups WHERE parentId = '" . cleanQuery($id) . "'";
    $result = $conn->exec($sql);

    if ($conn->numRows($result) > 0)
      return true;
    else
      return false;
  }

}

$groups = new Groups();
?>
