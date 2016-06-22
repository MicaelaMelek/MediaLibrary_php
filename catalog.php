<?php
$pageTitle = "Full Catalog";
$section = null;

    if(isset($_GET["cat"])) {
        switch ($_GET["cat"]) {
            case "books":
                $pageTitle = "Books";
                $section = "books";
                break;
            case "movies":
                $pageTitle = "Movies";
                $section = "movies";
                break;
            case "music":
                $pageTitle = "Music";
                $section = "music";
                break;
        }
    }
include("inc/header.php");?>

<div class="section page">
    <h1>Full Catalog</h1>
</div>

<?php include("inc/footer.php");?>