<div class="container">
    <div class="row">
        <div class="col-12">
            <h1><?= $data['title'] ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <th>Spieler</th>
                    <th>Siege</th>
                    <th>Niederlage</th>
                </thead>
                <tbody>
                    <?php foreach($data['players_list'] as $player): ?>
                    <tr>
                        <td><?= $player->player ?></td>
                        <td><?= $player->wins ?></td>
                        <td><?= $player->defeats ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>