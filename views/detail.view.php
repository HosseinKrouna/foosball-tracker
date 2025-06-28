<div class="container">
    <div class="row">
        <div class="col-12">
            <a href="index.php">Zurück zur Startseite</a>
        </div>
    </div>
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
                    <th>Niederlagen</th>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $data['player']->player ?></td>
                        <td><?= $data['player']->wins ?></td>
                        <td><?= $data['player']->defeats ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>