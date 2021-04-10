<html>
<head>
    <title></title>

    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="css/video-js.css" rel="stylesheet" />
    <link href="css/font-awesome-all.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />

    
</head>

<body>

<div id="main">

<?php 
    $localFolder = 'D:/cursos/'; // Pasta local com os cursos
    $GLOBALS["folderURI"] = "http://192.168.0.10/cursos"; // URI que aponta para os cursos;

    include 'functions.php'; 

    
    
?>

    <video
        id="my-video"
        class="video-js"
        controls
        preload="auto"
        width="640"
        height="264"
        data-setup="{}"
        >
        <source src="DEFAULT.MP4" type="video/mp4" />
        <p class="vjs-no-js">
            To view this video please enable JavaScript, and consider upgrading to a
            web browser that
            <a href="https://videojs.com/html5-video-support/" target="_blank"
            >supports HTML5 video</a
            >
        </p>
    </video>

    <div id="lista-wrapper">
        <div class="toggle"><<</div>

        <div class="lista">

            <?php 
                // getDirContents('D:/cursos/'); 
                getDirContents($localFolder); 
            ?>
        </div>

    </div>

</div>

<script
  src="js/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

<script src="js/video.min.js"></script>

<script src="js/main.js"></script>

</body>

</html>