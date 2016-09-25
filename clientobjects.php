<?php
session_start();
error_reporting(E_ERROR);

require_once("data/conn.php");
require_once("data/sqlinjection.php");
require_once('data/settings.php');
require_once("data/constants.php");
require_once("data/constant.php");
require_once("data/youtubeimagegrabber.php");
require_once("data/functions.php");
require_once("data/imagesaver.php");
require_once("includes/sendemail.php");
require_once("includes/pagination.php");
require_once("data/users.php");
require_once("data/groups.php");
require_once("data/listingfiles.php");
require_once("data/testimonials.php");
require_once("data/feedbacks.php");
include("includes/feedbackprocess.php");
include("includes/testimonialprocess.php");


/* * ***************GET URL VARIABLES************* */

$query = "";
if (isset($_GET['query']))
  $query = $_GET['query'];

if (!empty($query))
{
  $pageRow = $groups->getByURLName($query);
  if ($pageRow)
  {
    $pageId = $pageRow['id'];
    $pageName = $pageRow['name'];
    $pageUrlName = $pageRow['urlname'];
    $pageType = $pageRow['type'];
    $pageParentId = $pageRow['parentId'];
    $pageShortContents = $pageRow['shortcontents'];
    $pageContents = $pageRow['contents'];
    $pageLinkType = $pageRow['linkType'];
    $pageHide = $pageRow['hide'];
    $pageWeight = $pageRow['weight'];
    $pageDate = $pageRow['onDate'];
    $pageImage = $pageRow['image'];
    $pageFeatured = $pageRow['featured'];
    $pagePageTitle = $pageRow['pageTitle'];
    $pagePageKeyword = $pageRow['pageKeyword'];
    $pagePageDescription = $pageRow['pageDescription'];
    $pageDisplay = $pageRow['display'];

    if ($pageLinkType == "Link")
    {
      header("Location: " . $pageRow['contents']);
      exit();
    }
    elseif ($pageLinkType == "File")
    {
      header("Location: " . CMS_FILES_DIR . $pageRow['contents']);
      exit();
    }

    if (empty($pagePageTitle))
    {
      $row = $settings->getSettings();
      $pagePageTitle = $row['pageTitle'];
    }
    if (empty($pagePageDescription))
      $pagePageDescription = substr(strip_tags($pageContents), 0, 150);
  }
}
else
{
  $row = $settings->getSettings();
  $pagePageTitle = $row['pageTitle'];
  $pagePageKeyword = $row['pageKeyword'];
  $pagePageDescription = $row['pageDescription'];
}

include("includes/menufunction.php");

///////////////IMAGE CALL IMAGER FUNCTION //////////////////////////////

function imager($source, $width, $height, $fix = "")
{
  list($o_width, $o_height) = getimagesize(CMS_GROUPS_DIR . $source);

  if ($width == "" && $height == "")
  {
    $width = $o_width;
    $height = $o_height;
  }
  if ($width == "")
    $width = floor($o_width * $height / $o_height);
  elseif ($height == "")
    $height = floor($o_height * $width / $o_width);

  $str = 'data/imager.php?file=../' . CMS_GROUPS_DIR . $source . '&amp;mw=' . $width . '&amp;mh=' . $height;
  if (!empty($fix))
    $str .= '&amp;fix';
  return $str;
}


