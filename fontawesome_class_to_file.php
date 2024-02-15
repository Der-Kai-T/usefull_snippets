<?php
/*
Change Fontawesome Class to file-name
*/

    $icon = $item->item->icon;

    $icon = explode(" ", $icon);

    if (count($icon) == 2) {
        $folder = "";
        switch ($icon[0]) {
            case "fas":
                $folder = "solid";
                break;
            case "far":
                $folder = "regular";
                break;
            case "fab":
                $folder = "brands";
                break;
        }

        $file = substr($icon[1], 3);

        if (substr($file, -7) == "-circle") {
            $file = "circle-" . substr($file, 0, -7);
        }
        $icon = $folder . DIRECTORY_SEPARATOR . $file . ".svg";
    } else {
        $icon = "solid/question-circle.svg";
    }


?>
