<?php

function createMenu($parentId, $groupType) {
    global $groups;
    global $conn;
    global $pageUrlName;
    global $pageId;

    if ($parentId == 0)
        $groupResult = $groups->getVisibleByParentIdAndType($parentId, $groupType);
    else
        $groupResult = $groups->getVisibleByParentId($parentId);

    $numRows = $conn->numRows($groupResult);

    if ($numRows > 0) {
        echo "\n" . '<ul';
        if ($parentId == 0)
            echo ' id="sdmtNav" class="nav navbar-nav"';
        echo ">\n";
    }
    $parentUrlName = $groups->getParentUrlName($pageId);
    $i = 0;
    while ($groupRow = $conn->fetchArray($groupResult)) {

        if ($parentId == 0) {
            if (empty($pageUrlName)) {
                if ($i == 0) {
                    echo '<li class="active"><a ';
                    $i++;
                } else {
                    echo '<li><a ';
                }
            } elseif ($groupRow['linkType'] == "Link") {
                if ($groupRow['contents'] == $parentUrlName) {
                    echo '<li class="active"><a ';
                } else {

                    echo '<li><a ';
                }
            } else {

                if ($groupRow['urlname'] == $parentUrlName) {
                    echo '<li class="active" ><a ';
                } else {
                    echo '<li><a ';
                }
            }
        } else
            echo '<li><a ';
        echo " href=\"" . $groupRow['urlname'] . "\" title=\"" . $groupRow['name'] . "\" >";
        if ($groups->haveChild($groupRow['id']) && $groupRow['linkType'] == "Normal Group")
            echo $groupRow['name'] . "<span class=\"caret\"></span></a>";
        else
            echo $groupRow['name'] . "</a>";

        if ($groupRow['linkType'] == "Normal Group")
            createMenu($groupRow['id'], $groupType);
        echo "\n";
        ?>
        </li>
        <?php
    }
    if ($numRows > 0)
        echo '</ul>';
}
?>