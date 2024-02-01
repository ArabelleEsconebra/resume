<?= $this->extend('github/layout') ?>

  <?= $this->section('content') ?>
    
    <div>
     <?= $this->include('github/nav') ?>
     </div>


    <title>Favorites</title>

    <style>
        .table-container {
            position: relative;
            border-radius: 6px;
            overflow: hidden;
            margin-left: 50px;
            margin-right: 50px;
        }
        
        .button-container{
            padding: 10px 20px;
            background-color: #ff3c00;
            color: white;
            border: 1px solid #C04000;
            border-radius: 4px;
            cursor: pointer;
            float: right;
            margin-right: 50px;
            margin-bottom: 20%;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
        }

        .delete-container{
            color: #dbdbdb;
            background-color: #880808;
            margin-left: 10px;
        }

        .table{
            color: #dbdbdb;
            background-color: rgba(0, 0, 0, 0.9);
            padding: 50px;
            text-align: center;
        }

        h1, h3{
            text-align: center;
        }

        
    </style>
    
    <br>
            <h1 class="title">Oshi List</h1>
            <h3 class="title">List of Favorite Vtubers</h3>
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