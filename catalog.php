<?php
include ("inc/data.php");
include ("inc/functions.php");
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

<div class="section catalog page">

    <div class="wrapper">
        <h1><?php
            if($section != null){
                echo "<a href ='catalog.php'>Full Catalog</a> &gt;";
            }
                echo $pageTitle;

            ?></h1>
        <ul class="items">
           <?php
           $cat = array_category($catalog,$section);
           foreach ($cat as $id){
                    echo get_item_html($id, $catalog[$id]);
                }
            ?>
        </ul>
    </div>

</div>

<?php include("inc/footer.php");?>