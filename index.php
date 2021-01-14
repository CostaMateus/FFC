<?php

require_once('includes/functions.php');

$str  = file_get_contents('includes/data.json');

$data = json_decode($str, true);

?>

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
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- Select 2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Date range picker -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />


    <!-- Personal CSS -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" />

    <title>Finanças Família Costa - FFC</title>
</head>

<body>

    <div class="container-fluid bg-fa">
        <nav class="container navbar navbar-expand navbar-light">
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
    </div>

    <div class="container">
        <div class="row mt-2">
            <div class="col">

                <div class="form-row justify-content-between">
                    <div class="form-group col-6 col-md-3 col-lg-2 mb-0">
                        <label for="search_year">Escolha o ano</label>
                        <select id="search_year" class="form-control" style="width: 100%">
                            <option value="1" selected>2021</option>
                            <option value="2">2022</option>
                            <option value="3">2023</option>
                            <option value="4">2024</option>
                            <option value="5">2025</option>
                        </select>
                    </div>

                    <div class="form-group col my-auto">
                        <button id="new_category" type="button" onclick="newCategory()" class="btn btn-light btn-sm float-right">Nova categoria</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="btnMeses row mb-3">
            <div class="col-3 text-center pr-2 mt-3">
                <a id="month_1" href="#m1" data-tab="m1" class="btn btn-light btn-block">JAN</a>
            </div>
            <div class="col-3 text-center px-2 mt-3">
                <a id="month_2" href="#m2" data-tab="m2" class="btn btn-light btn-block">FEV</a>
            </div>
            <div class="col-3 text-center px-2 mt-3">
                <a id="month_3" href="#m3" data-tab="m3" class="btn btn-light btn-block">MAR</a>
            </div>
            <div class="col-3 text-center pl-2 mt-3">
                <a id="month_4" href="#m4" data-tab="m4" class="btn btn-light btn-block">ABR</a>
            </div>
            <div class="col-3 text-center pr-2 mt-3">
                <a id="month_5" href="#m5" data-tab="m5" class="btn btn-light btn-block">MAI</a>
            </div>
            <div class="col-3 text-center px-2 mt-3">
                <a id="month_6" href="#m6" data-tab="m6" class="btn btn-light btn-block">JUN</a>
            </div>
            <div class="col-3 text-center px-2 mt-3">
                <a id="month_7" href="#m7" data-tab="m7" class="btn btn-light btn-block">JUL</a>
            </div>
            <div class="col-3 text-center pl-2 mt-3">
                <a id="month_8" href="#m8" data-tab="m8" class="btn btn-light btn-block">AGO</a>
            </div>
            <div class="col-3 text-center pr-2 mt-3">
                <a id="month_9" href="#m9" data-tab="m9" class="btn btn-light btn-block">SET</a>
            </div>
            <div class="col-3 text-center px-2 mt-3">
                <a id="month_10" href="#m10" data-tab="m10" class="btn btn-light btn-block">OUT</a>
            </div>
            <div class="col-3 text-center px-2 mt-3">
                <a id="month_11" href="#m11" data-tab="m11" class="btn btn-light btn-block">NOV</a>
            </div>
            <div class="col-3 text-center pl-2 mt-3">
                <a id="month_12" href="#m12" data-tab="m12" class="btn btn-light btn-block">DEZ</a>
            </div>
        </div>
    </div>

    <div class="container pb-3 ">
        <hr>
        <div class="tab-content clearfix">

            <?php
            foreach ($data as $year => $months) {
                if ($year == '2021') {
                    foreach ($months as $key => $movs) {
                        $mes_ent = 0;
                        $mes_sai = 0;
                        $mes_ttl = 0;

                        foreach ($movs as $i => $value) {
                            if ($value['type']) {
                                $mes_ent += $value['value'];
                            } else {
                                $mes_sai += $value['value'];
                            }
                        }

                        $mes_ttl = ($mes_ent - $mes_sai);


                        if ($mes_ttl > 0) {
                            $txt = "text-entrada";
                            $sgn = "+R$ ";
                        } elseif ($mes_ttl < 0) {
                            $mes_ttl = substr($mes_ttl, 1);
                            $txt = "text-saida";
                            $sgn = "-R$ ";
                        } else {
                            $txt = "";
                            $sgn = "R$ ";
                        }
            ?>
                        <!-- MES <?= $key; ?> -->
                        <div id="m<?= $key; ?>" class="tab-pane px-3 pb-0 active">
                            <!-- Titulo e btn Movimento -->
                            <div class="row ">
                                <div class="col justify-content-between px-0">
                                    <p class="h4 mb-0 float-left"><?= formatDate($key, $year); ?></p>
                                    <button id="new_category" type="button" onclick="newMoviment()" class="btn btn-secondary btn-sm float-right">Novo movimento</button>
                                </div>
                            </div>

                            <!-- Tabela do mês atual -->
                            <div class="row">
                                <div class="col-12 mt-3 bg-mesAtual">
                                    <div class="d-flex justify-content-between">
                                        <p class="small mt-3 mb-2 ">Entradas e saídas deste mês</p>

                                        <a id="btnMesAtual" class="text-dark " data-toggle="collapse" href="#table-mesAtual-jan" role="button" aria-expanded="true" aria-controls="table-mesAtual-jan">
                                            <i class="bi bi-arrow-up-square" style="font-size: 1.5rem;"></i>
                                        </a>
                                    </div>

                                    <table id="table-mesAtual-jan" class="table table-borderless table-mesAtual collapse show">
                                        <tbody>
                                            <tr>
                                                <td class="text-left py-0 text-entrada">Entradas:</td>
                                                <td class="text-right py-0 text-entrada"><?= $sgn . number_format($mes_ent, 2, ',', '.'); ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left py-0 text-saida">Saídas:</td>
                                                <td class="text-right py-0 text-saida"><?= $sgn . number_format($mes_sai, 2, ',', '.'); ?></td>
                                            </tr>
                                            <tr>
                                                <td class="py-0" colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left py-0 <?= $txt ?>">Total:</td>
                                                <td class="text-right py-0 <?= $txt ?>"><?= $sgn . number_format($mes_ttl, 2, ',', '.'); ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Tabela geral -->
                            <div class="row">
                                <div class="col-12 my-3 bg-balanco">
                                    <div class="d-flex justify-content-between">
                                        <p class="small mt-3 mb-2">Balanço geral</p>

                                        <a id="btnBalancoGeral" class="text-dark " data-toggle="collapse" href="#table-balanco-jan" role="button" aria-expanded="false" aria-controls="table-balanco-jan">
                                            <i class="bi bi-arrow-down-square " style="font-size: 1.5rem;"></i>
                                        </a>

                                    </div>

                                    <table id="table-balanco-jan" class="table table-borderless table-balanco collapse">
                                        <tbody>
                                            <tr>
                                                <td class="text-left py-0 text-entrada">Entradas:</td>
                                                <td class="text-right py-0 text-entrada">R$ 0,00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left py-0 text-saida">Saídas:</td>
                                                <td class="text-right py-0 text-saida">R$ 0,00</td>
                                            </tr>
                                            <tr>
                                                <td class="py-0" colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left py-0 text-entrada">Total:</td>
                                                <td class="text-right py-0 text-entrada">R$ 0,00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Tabela movimentos -->
                            <div class="row">
                                <div class="col-12 mt-0 bg-balanco">
                                    <div class="d-flex justify-content-between">
                                        <p class="small mt-3 mb-2 ">Movimentos deste mês</p>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="tableMovimento_m<?= $key; ?>" class="table table-sm table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th class="">Descrição</th>
                                                    <th class="">Categoria</th>
                                                    <th class="text-center vl">Valor</th>
                                                    <th class="text-center">Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $count = 1;
                                                foreach ($movs as $i => $value) {
                                                    if ($value['type']) {
                                                        $txt = "text-entrada";
                                                        $sgn = "+R$ ";
                                                    } else {
                                                        $txt = "text-saida";
                                                        $sgn = "-R$ ";
                                                    }
                                                ?>
                                                    <tr>
                                                        <td class="text-center"><?= $count++ ?></td>
                                                        <td class=""><?= $value['descrip'] ?></td>
                                                        <td class=""><?= $value['category'] ?></td>
                                                        <td class="text-right <?= $txt ?>"><?= $sgn . number_format($value['value'], 2, ',', '.'); ?></td>
                                                        <td class="text-center d-flex justify-content-center pt-0">
                                                            <button class="btn btn-link text-primary btn-edit p-1" data-id="<?= $value['id'] ?>">
                                                                <i class="bi bi-pencil-square align-middle mb-5"></i>
                                                            </button>
                                                            <button class="btn btn-link text-danger btn-del p-1" data-id="<?= $value['id'] ?>">
                                                                <i class="bi bi-trash align-middle mb-5"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>

            <?php
                    }
                }
            }
            ?>

        </div>

    </div>

    <footer id="footer" class="py-3 bg-fa">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h6 class="mb-0">&copy; <?= date('Y') ?> Finanças Família Costa</h6>
                    <small class="mb-0">Powered by <a href="https://www.linkedin.com/in/costamateus6/" target="_blank" rel="noopener noreferrer">Mateus Costa</a></small>
                </div>
            </div>
        </div>
    </footer>


    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <!-- Select 2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.13.0/dist/sweetalert2.all.min.js"></script>
    <!-- Date range picker -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <script src="includes/functions.js"></script>
    <!-- Custom JS -->
    <script>
        let month_curr = <?= date('m'); ?>;
        switch (month_curr) {
            case 1:
                $('#month_' + month_curr).addClass('active');
                break;
            case 2:
                $('#month_' + month_curr).addClass('active');
                break;
            case 3:
                $('#month_' + month_curr).addClass('active');
                break;
            case 4:
                $('#month_' + month_curr).addClass('active');
                break;
            case 5:
                $('#month_' + month_curr).addClass('active');
                break;
            case 6:
                $('#month_' + month_curr).addClass('active');
                break;
            case 7:
                $('#month_' + month_curr).addClass('active');
                break;
            case 8:
                $('#month_' + month_curr).addClass('active');
                break;
            case 9:
                $('#month_' + month_curr).addClass('active');
                break;
            case 10:
                $('#month_' + month_curr).addClass('active');
                break;
            case 11:
                $('#month_' + month_curr).addClass('active');
                break;
            case 12:
                $('#month_' + month_curr).addClass('active');
                break;
        }

        function newCategory() {
            Swal.fire({
                title: 'Adicionar categoria',
                html: `<input type="text" id="name" class="swal2-input" placeholder="Nome">`,
                confirmButtonText: 'Salvar',
                focusConfirm: false,
                preConfirm: () => {
                    const name = Swal.getPopup().querySelector('#name').value;
                    if (!name) {
                        Swal.showValidationMessage(`Insira um nome para a categoria`)
                    }
                    return {
                        name: name,
                    }
                }
            }).then((result) => {
                // Swal.fire(`Nome: ${result.value.name}`.trim())
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Categoria adicionada!',
                    timer: 4000,
                    showConfirmButton: false
                }).then(function() {
                    window.location.reload();
                });
            });
        }

        function newMoviment() {
            Swal.fire({
                title: 'Date picker',
                html: '<input id="datepicker">',
                showConfirmButton: false,
                customClass: 'swal2-overflow',
                onOpen: function() {
                    $('#datepicker').daterangepicker({
                        "singleDatePicker": true,
                        "showDropdowns": true,
                        "minYear": 2021,
                        "maxYear": 2025,
                        "autoApply": true,
                        "linkedCalendars": false,
                        "showCustomRangeLabel": false,
                        "startDate": Date.now()
                    }, function(start, end, label) {
                        console.log('New date range selected: ' + start.format('YYYY-MM-DD') );
                    });
                },
            }).then(function(result) {

            });
        }
    </script>
</body>

</html>