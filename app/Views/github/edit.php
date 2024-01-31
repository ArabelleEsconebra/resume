<html>
<head>      
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ff3c00;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .container {
            width: 80%;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            border: 3px solid #7e7e7e7e;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        .button-container {
            text-align: right;
        }
        .button-container a.button {
            margin-left: 10px;
        }
        .form-container {
            max-width: 600px;
            margin: 0 auto;
        }
        .form-container label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-container input[type="text"],
        .form-container textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .form-container button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }
        .form-container button:hover {
            background-color: #45a049;
        }

    </style>

    <title>Update Details</title>
</head>
<body>
    <div class="container">

        <li  class="is-family-code is-size-6">
        <a href=<?=base_url('favorites') ?>>Index</a>
        </li>

        <li  class="is-family-code is-size-6">
        <a href=<?=base_url('favorites/create') ?>>Create</a>
        </li>

        <h1 class="title has-text-centered is-family-code is-size-1">Edit Details</h1>

        <div class="form-container">
            <form method="post" action="<?= base_url('favorites/update/') . $qwerty["id"]?>">
                <label for="vtuber_name">Vtuber Name:</label>
                <input type="text" id="vtuber_name" name="vtuber_name" value="<?= $qwerty["vtuber_name"] ?>">

                <label for="vtuber_description">Blog Description:</label>
                <textarea name="vtuber_description" id="vtuber_description"><?= $qwerty["vtuber_description"] ?></textarea>

                <button type="submit" class="has-background-grey-dark">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
