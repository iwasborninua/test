<table class="table">
    <thead>
        <tr>
            <th>id $advertisement</th>
            <th>user advertisements</th>
            <th>text</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($advertisements as $advertisement):?>
            <tr>
                <th scope="row"><?= $advertisement->id?></th>
                <td><?= $advertisement->user->name?></td>
                <td><?= $advertisement->title?></td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>