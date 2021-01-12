<!DOCTYPE html>

<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=0">
    <meta name="description" content="Site das Finanças da Família Costa - FFC" />
    <meta name="keywords" content="Site; FFC; Finanças; Família; Família Costa; Finanças da Família Costa" />
    <meta name="author" content="Mateus Lopes Costa" />

    <!-- Favicon.ico - root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Select 2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Personal CSS -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
    <title>Finanças Família Costa - FFC</title>
</head>

<body>

    <div class="container">

        <nav class="navbar navbar-expand navbar-light bg-light">
            <span class="navbar-brand mb-0 h1">Finanças Família Costa</span>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <span class="navbar-text">
                            <?= "Hoje: " . date('d/m/Y'); ?>
                        </span>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="row mt-2">
            <div class="col">

                <div class="form-row justify-content-between">
                    <div class="form-group col-6 col-md-3 col-lg-2">
                        <label for="search_year">Escolha o ano</label>
                        <select id="search_year" class="form-control" style="width: 100%">
                            <option value="1" selected >2021</option>
                            <option value="2"          >2022</option>
                            <option value="3"          >2023</option>
                            <option value="4"          >2024</option>
                            <option value="5"          >2025</option>
                        </select>
                    </div>

                    <div class="form-group col my-auto">
                        <button id="new_category" type="button" class="btn btn-primary btn-sm float-right" >Nova categoria</button>
                    </div>
                </div>

            </div>
        </div>

        <ul class="nav nav-tabs d-flex" >
            <li class="nav-item">
                <a id="month_1" class="nav-link" href="#">JAN</a>
            </li>
            <li class="nav-item">
                <a id="month_2" class="nav-link" href="#">FEV</a>
            </li>
            <li class="nav-item">
                <a id="month_3" class="nav-link" href="#">MAR</a>
            </li>
            <li class="nav-item">
                <a id="month_4" class="nav-link" href="#">ABR</a>
            </li>
            <li class="nav-item">
                <a id="month_5" class="nav-link" href="#">MAI</a>
            </li>
            <li class="nav-item">
                <a id="month_6" class="nav-link" href="#">JUN</a>
            </li>
            <li class="nav-item">
                <a id="month_7" class="nav-link" href="#">JUL</a>
            </li>
            <li class="nav-item">
                <a id="month_8" class="nav-link" href="#">AGO</a>
            </li>
            <li class="nav-item">
                <a id="month_9" class="nav-link" href="#">SET</a>
            </li>
            <li class="nav-item">
                <a id="month_10" class="nav-link" href="#">OUT</a>
            </li>
            <li class="nav-item">
                <a id="month_11" class="nav-link" href="#">NOV</a>
            </li>
            <li class="nav-item">
                <a id="month_12" class="nav-link" href="#">DEZ</a>
            </li>
        </ulmonth_01>

    </div>



    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <!-- Select 2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.13.0/dist/sweetalert2.all.min.js"></script>


    <!-- Custom JS -->
    <script>
        $("#search_year").select2();

        $(".nav-link").on('click', function() {
            $('.nav-link').removeClass('active');
            $(this).addClass('active');
        });

        let month_curr = <?=date('m'); ?>;
        switch ( month_curr ) {
            case 1:
                $('#month_'+month_curr).addClass('active');
                break;
            case 2:
                $('#month_'+month_curr).addClass('active');
                break;
            case 3:
                $('#month_'+month_curr).addClass('active');
                break;
            case 4:
                $('#month_'+month_curr).addClass('active');
                break;
            case 5:
                $('#month_'+month_curr).addClass('active');
                break;
            case 6:
                $('#month_'+month_curr).addClass('active');
                break;
            case 7:
                $('#month_'+month_curr).addClass('active');
                break;
            case 8:
                $('#month_'+month_curr).addClass('active');
                break;
            case 9:
                $('#month_'+month_curr).addClass('active');
                break;
            case 10:
                $('#month_'+month_curr).addClass('active');
                break;
            case 11:
                $('#month_'+month_curr).addClass('active');
                break;
            case 12:
                $('#month_'+month_curr).addClass('active');
                break;
        }

    </script>
</body>

</html>
