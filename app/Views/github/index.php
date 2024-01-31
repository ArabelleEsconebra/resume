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
            margin-left: 10%;
            margin-right: 10%;
        }
        
        .button-container {
            padding: 10px 20px;
            background-color: #ff3c00;
            color: white;
            border: 1px solid #C04000;
            border-radius: 4px;
            cursor: pointer;
            float: right;
            margin-right: 10%;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
        }

        .table{
            color: #dbdbdb;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 50px;
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
                            <th>NAME</th>
                            <th>DESCRIPTION</th>
                            <th>UPDATE DETAILS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($favorites as $favorites): ?>
                        <tr>
                            <td><?= $favorites['vtuber_name'] ?></td>
                            <td><?= $favorites['vtuber_description'] ?></td>
                            <td>
                                <a href="<?= base_url('favorites/edit/') . $favorites['id'] ?>" class="button is-link">Edit</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="button-container">
                <a href=<?=base_url('favorites/create') ?>>Add an Oshi</a>
            </div>

        
  <?= $this->endSection() ?>