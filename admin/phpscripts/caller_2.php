<?php

   require_once('config.php');

?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="admin/css/main.css">
<title>Page</title>
</head>
<body>
	<h1>
    Edit Page in here
  </h1>

  <div>
    <?php
      if(isset($_GET['edit_id'])) {
        $videogoing = $_GET['edit_id'];
        if($videogoing == 'editmovies'){
          $videoplaying = $_GET['id'];
          single_edit("tbl_movies", "movies_id", $videoplaying);
        }
        else{
          echo "Sorry please check it again";
        }
      }

     ?>
  </div>
</body>
</html>
