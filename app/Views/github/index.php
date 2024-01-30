<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    
    <style>
        .table-container {
            position: relative;
            border: 1px solid #dbdbdb;
            border-radius: 6px;
            overflow: hidden;
        }
        
        .button-container {
            float: right;
            bottom: -30px; 
            right: -30px;
        }
    </style>

    <title>Favorites</title>
</head>
<body>
    <section class="section">
        <div class="container">
            <h1 class="title has-text-centered is-family-code is-size-1">Oshi List</h1>
            <h1 class="title has-text-centered is-family-code is-size-3">List of Favorite Vtubers</h1>
            <div class="table-container">
                <table class="table is-fullwidth is-hoverable table is-bordered">
                    <thead>
                        <tr>
                            <th class="has-text-centered has-background-danger-light is-size-6">NAME</th>
                            <th class="has-text-centered has-background-danger-light is-size-6">DESCRIPTION</th>
                            <th class="has-text-centered has-background-danger-light is-size-6">UPDATE DETAILS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($favorites as $favorites): ?>
                        <tr>
                            <td class="has-text-centered"><?= $favorites['vtuber_name'] ?></td>
                            <td class="has-text-centered"><?= $favorites['vtuber_description'] ?></td>
                            <td class="has-text-centered">
                                <a href="<?= base_url('favorites/edit/') . $favorites['id'] ?>" class="button is-link">Edit</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="button-container">
                <a href=<?=base_url('favorites/create') ?> class="button is-primary">Add an Oshi</a>
            </div>
        </div>
    </section>
</body>
</html>
