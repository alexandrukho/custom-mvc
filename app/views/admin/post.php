<?php require_once "app/views/layouts/header.php" ?>
<div class="container">
    <div class="row controls-button center-align">
        <!-- OPEN POST CREATE -->
        <button data-target="modal1" class="btn modal-trigger red lighten-2">Create Post</button>
        <button data-target="modal1" class="btn modal-trigger red lighten-2 disabled">Some Button</button>
        <button data-target="modal1" class="btn modal-trigger red lighten-2 disabled">Some Button</button>
    </div>
    <div id="modal1" class="modal bottom-sheet">
        <div class="modal-content">
            <h4>Create Post</h4>
            <div class="divider"></div>
            <form action="/post/store" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="input-field col s5">
                        <input id="first_name" type="text" name="title" class="validate" data-length="70">
                        <label for="first_name">Title</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s5">
                    <textarea id="post-content-area" name="content" class="materialize-textarea"
                              placeholder="Post Content"></textarea>
                        <label for="post-content-area">Content</label>
                    </div>
                </div>

                <div class="file-field input-field col s5">
                    <div class="btn">
                        <span>File</span>
                        <input type="file" name="image">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
                <button type="submit" class="modal-action modal-close waves-effect waves-green btn col s12">Create
                </button>
            </form>
        </div>
        <div class="modal-footer">

        </div>
    </div>
</div>
<!-- POST CREATE -->
<div class="container">
    <div class="row">
        <div class="admin-post-list">
            <?php foreach ($data as $post) {
                echo "
                    <div class=\"card col s12 m6 l12 small\">
                        <div class=\"card-image waves-effect waves-block waves-light\">
                        <img class=\"activator\" src=\"$post->image\">
                    </div>
                    <div class=\"card-content\">
                        <span class=\"card-title activator grey-text text-darken-4\">$post->title<i class=\"material-icons right\">more_vert</i></span>
                        <p>$post->content</p>
                    </div>
                    <div class=\"card-reveal admin-post-setting\">
                        <span class=\"card-title grey-text text-darken-4\">Settings<i class=\"material-icons right\">close</i></span>
                        <a class='btn col s12 l4 left' href='/post/delete/?id=$post->id'> Delete this post</a>
                        <a class='btn col s12 l4 right' href=''>Edit post</a>
                    </div>
            </div>
                ";
            } ?>

        </div>
    </div>
</div>
<?php require_once "app/views/layouts/footer.php" ?>
