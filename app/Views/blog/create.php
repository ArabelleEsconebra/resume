<html>
    <head>      
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #FF7F7F;
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
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .table-container {
            position: relative;
            border: 1px solid #dbdbdb;
            border-radius: 6px;
            overflow: hidden;
            margin-bottom: 20px;
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

        body {
            font-family: "Lato", sans-serif;
        }

        .sidenav {
            width: 130px;
            position: fixed;
            z-index: 1;
            top: 20px;
            left: 10px;
            background: #eee;
            overflow-x: hidden;
            padding: 8px 0;
        }

        .sidenav a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 25px;
            color: #2196F3;
            display: block;
        }

        .sidenav a:hover {      
            color: #f1f1f1;
        }

        .main {     
            margin-left: 160px; /* Same as the width of the sidenav */
            font-size: 28px; /* Increased text to enable scrolling */
            padding: 0px 10px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
    </style>

    <title>Blog</title>
    </head>

    <body>
    <div class="container">
        <h1 class="title has-text-centered is-family-code is-size-1">Create a Blog</h1>
        <a href=<?=base_url('blog') ?>>Index</a>
        <a href=<?=base_url('blog/edit') ?>>Edit</a>

        <form method="post" action="<?= base_url('blog/store') ?>">
            <label for="blog_title">Blog Title:</label><br>
            <input type="text" id="blog_title" name="blog_title"><br>

            <label for="blog_description">Blog Description:</label><br>
            <textarea name="blog_description" id="blog_description"></textarea>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>
