<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('asset/images/1543744717.ico'); ?>">
    <title><?php echo $judul; ?></title>
    <style>
        body {
            font-family: 'Oswald', sans-serif;
            margin: 0;
            padding: 0;
        }

        .searchbar {
            margin-bottom: auto;
            margin-top: auto;
            height: 60px;
            background-color: #37474f;
            border-radius: 10px;
            padding: 10px;
        }

        .search_input {
            font-family: 'Open Sans Condensed', sans-serif;
            color: white;
            border: 0;
            outline: 0;
            background: none;
            width: 0;
            caret-color: transparent;
            line-height: 40px;
            font-size: 16px;
            transition: width 0.3s linear;

        }

        .searchbar:hover>.search_input {
            padding: 0 10px;
            width: 450px;
            caret-color: white;
        }

        .searchbar:hover>.search_icon {
            background: white;
            color: #37474f;
        }

        .search_icon {
            height: 40px;
            width: 40px;
            float: right;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            color: #dbd6da;
            background: #37474f;
        }

        .navbar-brand {
            font-size: 30px;
        }
    </style>
    <script type="text/javascript">
        var msg = document.title;
        var speed = 150;
        var endChar = "... ";
        var pos = 0;

        function moveTitle() {
            var ml = msg.length;

            title = msg.substr(pos, ml) + endChar + msg.substr(0, pos);
            document.title = title;

            pos++;
            if (pos > ml) pos = 0;
            window.setTimeout("moveTitle()", speed);
        }

        moveTitle();
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <img src="<?= base_url('asset/unib.png'); ?>" width="50px" class="mr-3">
            <a class="navbar-brand" href="#">SI Repository Skripsi</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#">About</a>
                    <a class="nav-item nav-link" href="http://www.unib.ac.id/">unib.ac.id</a>
                    <a class="nav-item nav-link" href="http://fkip.unib.ac.id/index.php/prodi-s1-pendidikan-non-formal/">pls.fkip.unib.ac.id</a>
                </div>
            </div>
            <form class="form-inline my-2 my-lg-0">
                <div class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user-friends"></i>
                            Login
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= base_url('CLogin_petugas'); ?>">Admin/Operator</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= base_url('CLogin_mhs'); ?>">Anggota</a>
                        </div>
                    </li>
                </div>
            </form>
        </div>
    </nav>