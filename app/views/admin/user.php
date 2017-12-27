<?php require_once "app/views/layouts/header.php" ?>
    <div class="container">
        <div class="row controls-button center-align">
            <!-- OPEN POST CREATE -->
            <button data-target="modalCreateUser" class="btn modal-trigger red lighten-2">Create User</button>
        </div>
        <div id="modalCreateUser" class="modal bottom-sheet">
            <div class="modal-content">
                <h4>Create User</h4>
                <div class="divider"></div>
                <form action="/user/store" method="post">
                    <div class="row">
                        <div class="input-field col s5">
                            <input id="first_name" type="text" name="name" class="validate" data-length="10">
                            <label for="first_name">Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s5">
                            <input id="email" type="email" name="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="switch">
                        <label for="">Admin Status <br></label>
                        <label>
                            Off
                            <input type="checkbox" name="check-status">
                            <span class="lever"></span>
                            On
                        </label>
                    </div>
                    <button type="submit" class="modal-action modal-close waves-effect waves-green btn col s12">Create
                    </button>
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
    <div class="admin-user-list">
        <table>
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Trash</th>
            </tr>
            </thead>

            <tbody>
            <?php foreach ($data as $user) {
                echo "<tr>
                <td>$user->name</td>
                <td>$user->email</td>
                <td>$user->status</td>
                <td><a href='/user/delete/?id=$user->id' title='delete'><i class='material-icons small red-text'>delete_forever</i></a></td>
            </tr>
                        ";
            } ?>
            </tbody>
        </table>
    </div>
<?php require_once "app/views/layouts/footer.php" ?>