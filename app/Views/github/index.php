<?= $this->extend('github/layout') ?>

  <?= $this->section('content') ?>
    
    <div>
     <?= $this->include('github/nav') ?>
     </div>


    <title>Favorites</title>
    
    <br>
            <h1 class="lol">Oshi List</h1>
            <h3 class="lol">List of Favorite Vtubers</h3>
            <br>
            <div class="table-container">
                <table class="table is-fullwidth">
                    <thead>
                        <tr>
                            <th> </th>
                            <th>NAME</th>
                            <th>DESCRIPTION</th>
                            <th>UPDATE DETAILS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($favorites as $favorites): ?>
                        <tr>
                            <td><?= $favorites['id'] ?></td>
                            <td><?= $favorites['vtuber_name'] ?></td>
                            <td><?= $favorites['vtuber_description'] ?></td>
                            <td>
                                <a href="<?= base_url('favorites/edit/') . $favorites['id'] ?>" class="edit-container button is-link">Edit</a>
                                <form style="display:inline" action="<?= base_url('favorites/delete/') . $favorites['id'] ?>" method="post">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="delete-container" onclick="return confirm('Are you sure you want to delete this entry?')">Delete</button>
                                </form>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="button-container">
                <a href=<?=base_url('favorites/create') ?>>Add an Oshi</a>
            </div>

        
  <?= $this->endSection() ?>