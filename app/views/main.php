<?php require_once "layouts/header.php" ?>

<div class="row">
    <?php foreach ($data as $post) {
        echo "
        <div class=\"col s12 m12 l12 hoverable card-post\">
        <div class=\"card card-product\">
            <div class=\"card-image background\">
                <img src=\"$post->image\">
                <span class=\"card-title col s12\">$post->title</span>
            </div>
            <div class=\"card-content\">
                <p>$post->content</p>
            </div>
            <div class=\"card-action col s12 right-align\">
                <a href=\"#\" class=\"\">Comments</a>
                <a href=\"#\" class=\"waves-effect waves-light btn\">READ</a>
            </div>
        </div>
    </div>
        ";
    }?>

</div>

<?php require_once "layouts/footer.php" ?>
