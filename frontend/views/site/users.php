
    <table class="table">
        <thead>
            <tr>
                <th>User id</th>
                <th>User Name</th>
            </tr>
        <tbody>
            <?php foreach ($users as $user):?>
                <tr>
                    <th scope="row"><?= $user->id;?></th>
                    <td><?= $user->name;?></td>
                </tr>
            <?php endforeach;?>
        </tbody>
        </thead>
    </table>
