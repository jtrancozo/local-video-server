<?php 

function makeTitle($title = "", $level = 1) {
    return "<h3 class='folder-title title-level-$level'><span>".$title."</span></h3>";
}

function makeLink($link = "") {
    $newPath = explode('\cursos', $link);
    //$newLink = 'http://192.168.0.104:8080/cursos' . $newPath[1];
    $newLink = $GLOBALS["folderURI"] . $newPath[1];

    $fileType = strtolower(pathinfo($link, PATHINFO_EXTENSION));
    $icon = "";

    if ($fileType == 'lnk') {
        return;
    }

    if ($fileType == 'mp4') {
        $icon = '<i class="far fa-play-circle"></i>';

    } else if ($fileType == 'txt') {
        $icon = '<i class="far fa-file-alt"></i>';

    } else if ($fileType == 'doc' || $fileType == 'docx') {
        $icon = '<i class="far fa-file-word"></i>';

    } else if ($fileType == 'pdf') {
        $icon = '<i class="far fa-file-pdf"></i>';

    } else if ($fileType == 'zip' || $fileType == 'rar' || $fileType == '7zip') {
        $icon = '<i class="far fa-file-archive"></i>';

    } else {
        $icon = '<i class="far fa-file"></i>';
    }
    
    return "<a class='link-player' href='{$newLink}'>".
                $icon .    
                pathinfo($link, PATHINFO_FILENAME).
            "</a>";
}


// Função recursiva que escaneia os diretórios e monta a listagem de cursos
function getDirContents($dir, &$results = array(), $level = 1) {
    $files = scandir($dir);

    foreach ($files as $key => $value) {
        $path = realpath($dir . DIRECTORY_SEPARATOR . $value);

        if (!is_dir($path)) {
            // Se for um arquivo
            $results[] = $path;
            // Array opcional caso queira retornar um array;

            echo makeLink($path);

            
        } else if ($value != "." && $value != "..") {
            // se for uma pasta

            echo makeTitle($value, $level);

            echo "<div class='content level-$level'>";
            echo "<div class='inner'>";

        
            getDirContents($path, $results, $level + 1);
            

            echo "</div>";
            echo "</div>";
            
            $results[] = $path;
        }
    }

    return $results;
}