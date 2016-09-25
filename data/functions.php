<?php
function formatDate($date, $type)
{
	if($type == "long")
	{
		$arr = explode(" ", $date);
		$arrDate = explode("-", $arr[0]);
		$arrTime = explode(":", $arr[1]);
		
		return date("M j, Y g:i a", mktime($arrTime[0], $arrTime[1], $arrTime[2], $arrDate[1], $arrDate[2], $arrDate[0]));
	}
	elseif($type == "short")
	{
		$arrDate = explode("-", $date);
		
		return date("M j, Y", mktime(0, 0, 0, $arrDate[1], $arrDate[2], $arrDate[0]));
	}
}

function formatCallingTime($fromTime, $toTime)
{
	$time = "";

	if($fromTime > 12)
		$time .= $fromTime - 12;
	else
		$time .= $fromTime;

	if($fromTime >= 12 && $fromTime < 24)
		$time .= " PM";
	else
		$time .= " AM";
	
	$time .= " to ";
	
	if($toTime > 12)
		$time .= $toTime - 12;
	else
		$time .= $toTime;
		
	if($toTime >= 12 && $toTime < 24)
		$time .= " PM";
	else
		$time .= " AM";
	
	return $time;
}

function isHome()
{
  if (empty($_GET['query']) || $_GET['query'] == "home" || $_GET['query'] == "index")
  {
    return TRUE;
  }

  return FALSE;
}

function isLoadedFirstTime()
{
  if (BASELOCATION == $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'])
  {
    return TRUE;
  }

  return FALSE;
}