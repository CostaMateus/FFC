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

    <!-- Personal CSS -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
    <title>Finanças Família Costa - FFC</title>

    <style>
        @media (max-width: 991.98px) {
            .bd-navbar .navbar-nav-scroll {
                max-width: 100%;
                height: 2.5rem;
                margin-top: .25rem;
                overflow: hidden;
            }

            .bd-navbar .navbar-nav-scroll {
                max-width: 100%;
                height: 2.5rem;
                margin-top: .25rem;
                overflow: hidden;
            }

            .bd-navbar .navbar-nav-scroll .navbar-nav {
                padding-bottom: 2rem;
                overflow-x: auto;
                white-space: nowrap;
                -webkit-overflow-scrolling: touch;
            }
        }

        .table-mesAtual td span,
        .table-balanco td span {
            font-size: 18px;
        }

        /* .table-mesAtual .text-entrada,
        .table-mesAtual .text-saida,
        .table-balanco .text-entrada,
        .table-balanco .text-saida {
            font-size: 22px;
        } */

        .text-saldoMes {
            /* font-size: 1.2rem; */
            font-weight: bold;
        }

        .text-entrada {
            color: #030;
        }

        .text-saida {
            color: #C00;
        }

        .bg-fa {
            background-color: #FAFAFA;
        }

        .bg-mesAtual {
            background-color: #F0FFF5;
        }

        .bg-balanco {
            background-color: #F5F5F5;
        }

        .table>tbody>tr>td {
            vertical-align: middle !important;
        }

        .btn-edit,
        .btn-del {
            font-size: 1.25rem;
        }

        .btn-secondary {
            background-color: #A6ACB1 !important;
            border-color: #A6ACB1 !important;
        }
    </style>
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
                        <button id="new_category" type="button" class="btn btn-light btn-sm float-right">Nova categoria</button>
                    </div>
                </div>

            </div>
        </div>

        <!-- <header class="navbar navbar-expand navbar-light flex-column flex-md-row bd-navbar px-0 pb-0">
            <div class="navbar-nav-scroll pb-0">
                <ul class="nav-tabs navbar-nav bd-navbar-nav flex-row">
                    <li class="nav-item">
                        <a id="month_1" class="nav-link" href="#m1" data-tab="m1">Janeiro</a>
                    </li>
                    <li class="nav-item">
                        <a id="month_2" class="nav-link" href="#m2" data-tab="m2">Fevereiro</a>
                    </li>
                    <li class="nav-item">
                        <a id="month_3" class="nav-link" href="#" data-tab="m3">Março</a>
                    </li>
                    <li class="nav-item">
                        <a id="month_4" class="nav-link" href="#" data-tab="m4">Abril</a>
                    </li>
                    <li class="nav-item">
                        <a id="month_5" class="nav-link" href="#">Maio</a>
                    </li>
                    <li class="nav-item">
                        <a id="month_6" class="nav-link" href="#">Junho</a>
                    </li>
                    <li class="nav-item">
                        <a id="month_7" class="nav-link" href="#">Julho</a>
                    </li>
                    <li class="nav-item">
                        <a id="month_8" class="nav-link" href="#">Agosto</a>
                    </li>
                    <li class="nav-item">
                        <a id="month_9" class="nav-link" href="#">Setembro</a>
                    </li>
                    <li class="nav-item">
                        <a id="month_10" class="nav-link" href="#">Outubro</a>
                    </li>
                    <li class="nav-item">
                        <a id="month_11" class="nav-link" href="#m11" data-tab="m11">Novembro</a>
                    </li>
                    <li class="nav-item">
                        <a id="month_12" class="nav-link" href="#">Dezembro</a>
                    </li>
                </ul>
            </div>
        </header> -->

        <div class="btnMeses row mt-3">
            <div class="col-3 text-center pr-2">
                <a id="month_1" href="#m1" data-tab="m1" class="btn btn-light btn-block">JAN</a>
            </div>
            <div class="col-3 text-center px-2">
                <a id="month_2" href="#m2" data-tab="m2" class="btn btn-light btn-block">FEV</a>
            </div>
            <div class="col-3 text-center px-2">
                <a id="month_3" href="#m3" data-tab="m3" class="btn btn-light btn-block">MAR</a>
            </div>
            <div class="col-3 text-center pl-2">
                <a id="month_4" href="#m4" data-tab="m4" class="btn btn-light btn-block">ABR</a>
            </div>
        </div>
        <div class="btnMeses row py-3">
            <div class="col-3 text-center pr-2">
                <a id="month_5" href="#m5" data-tab="m5" class="btn btn-light btn-block">MAI</a>
            </div>
            <div class="col-3 text-center px-2">
                <a id="month_6" href="#m6" data-tab="m6" class="btn btn-light btn-block">JUN</a>
            </div>
            <div class="col-3 text-center px-2">
                <a id="month_7" href="#m7" data-tab="m7" class="btn btn-light btn-block">JUL</a>
            </div>
            <div class="col-3 text-center pl-2">
                <a id="month_8" href="#m8" data-tab="m8" class="btn btn-light btn-block">AGO</a>
            </div>
        </div>
        <div class="btnMeses row mb-3">
            <div class="col-3 text-center pr-2">
                <a id="month_9" href="#m9" data-tab="m9" class="btn btn-light btn-block">SET</a>
            </div>
            <div class="col-3 text-center px-2">
                <a id="month_10" href="#m10" data-tab="m10" class="btn btn-light btn-block">OUT</a>
            </div>
            <div class="col-3 text-center px-2">
                <a id="month_11" href="#m11" data-tab="m11" class="btn btn-light btn-block active">NOV</a>
            </div>
            <div class="col-3 text-center pl-2">
                <a id="month_12" href="#m12" data-tab="m12" class="btn btn-light btn-block">DEZ</a>
            </div>
        </div>

        <div class="tab-content clearfix">
            <!-- JANEIRO -->
            <div id="m1" class="tab-pane px-3 pt-3 pb-0 bg-fa active">
                <div class="row">

                    <!-- Titulo e btn Movimento -->
                    <div class="col-12">
                        <div class="justify-content-between">
                            <p class="h4 mb-0 float-left">Janeiro/21</p>
                            <button id="new_category" type="button" class="btn btn-secondary btn-sm float-right">Novo movimento</button>
                        </div>
                    </div>

                    <!-- Tabela do mês atual -->
                    <div class="col-12 mt-3 bg-mesAtual">
                        <div class="d-flex justify-content-between">
                            <p class="small mt-3 mb-2 ">Entradas e Saídas deste mês</p>

                            <a id="btnMesAtual" class="text-dark " data-toggle="collapse" href="#table-mesAtual-jan" role="button" aria-expanded="true" aria-controls="table-mesAtual-jan">
                                <i class="bi bi-arrow-up-square" style="font-size: 1.5rem;"></i>
                            </a>
                        </div>

                        <table id="table-mesAtual-jan" class="table table-borderless table-mesAtual collapse show">
                            <tbody>
                                <tr>
                                    <td class="text-left py-0">
                                        <span class="text-entrada">Entradas:</span>
                                    </td>
                                    <td class="text-right py-0">
                                        <span class="text-entrada">R$ 4360,00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left py-0">
                                        <span class="text-saida">Saídas:</span>
                                    </td>
                                    <td class="text-right py-0">
                                        <span class="text-saida">R$ 162,70</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-0" colspan="2">
                                        <hr>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left py-0 text-entrada">Total:</td>
                                    <td class="text-right py-0 text-entrada">R$ 4197,30</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Tabela geral -->
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
                                    <td class="text-left py-0">
                                        <span class="text-entrada">Entradas:</span>
                                    </td>
                                    <td class="text-right py-0">
                                        <span class="text-entrada">R$ 4360,00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left py-0">
                                        <span class="text-saida">Saídas:</span>
                                    </td>
                                    <td class="text-right py-0">
                                        <span class="text-saida">R$ 162,70</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-0" colspan="2">
                                        <hr>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left py-0 text-entrada">Total:</td>
                                    <td class="text-right py-0 text-entrada">R$ 4197,30</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Tabela movimentos -->
                    <div class="col-12 mt-0 bg-balanco">
                        <div class="d-flex justify-content-between">
                            <p class="small mt-3 mb-2 ">Movimentos deste mês</p>

                            <form class="form-inline " name="form_filtro_cat" method="get" action="">
                                <input type="hidden" name="mes" value="1">
                                <input type="hidden" name="ano" value="2021">
                                <select id="filter_category" class="form-control form-sm" name="filtro_cat" onchange="form_filtro_cat.submit()">
                                    <option value="">Tudo</option>
                                    <option value="6">Salario</option>
                                    <option value="4">Mercado</option>
                                    <option value="5">Farmacia</option>
                                    <option value="1">Condominio</option>
                                </select>
                            </form>
                        </div>

                        <div class="table-responsive">
                            <table id="tableMovimento" class="table table-sm table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 10%;" class="text-center">#</th>
                                        <th style="width: 25%" class="">Descrição</th>
                                        <th style="width: 25%" lass="">Categoria</th>
                                        <th style="min-width: 115px;" class="text-center">Valor</th>
                                        <th style="width: 10%" class="text-center">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td class="">TDW</td>
                                        <td class="">Salario</td>
                                        <td class="text-right text-entrada">+ 4300,00</td>
                                        <td class="text-center d-flex justify-content-center pt-0">
                                            <button class="btn btn-link text-primary btn-edit p-1" data-id="">
                                                <i class="bi bi-pencil-square align-middle mb-5"></i>
                                            </button>
                                            <button class="btn btn-link text-danger btn-del p-1" data-id="">
                                                <i class="bi bi-trash align-middle mb-5"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- <tr class="d-none" id="editar_mov_1">
                                    <td colspan="3">
                                        <form class="" method="post" action="?mes=1&amp;ano=2021">
                                            <input type="hidden" name="acao" value="editar_mov">
                                            <input type="hidden" name="id" value="1">


                                            <div class="form-group">
                                                <b>Dia:</b> <input type="text" name="dia" size="3" maxlength="2" value="4">
                                            </div>
                                            <div class="form-group">
                                                <b>Tipo:</b> <label for="tipo_receita1" class="text-entrada"><input checked="checked" type="radio" name="tipo" value="1" id="tipo_receita1"> Receita</label>&nbsp; <label for="tipo_despesa1" class="text-saida"><input type="radio" name="tipo" value="0" id="tipo_despesa1"> Despesa</label>
                                            </div>
                                            <div class="form-group">
                                                <b>Categoria:</b>
                                                <select name="cat">
                                                    <option value="1">Condominio</option>
                                                    <option value="2">Energia</option>
                                                    <option value="3">Internet</option>
                                                    <option value="4">Mercado</option>
                                                    <option value="5">Farmacia</option>
                                                    <option selected="" value="6">Salario</option>
                                                    <option value="7">Dentista</option>
                                                </select><br>
                                            </div>
                                            <div class="form-group">
                                                <b>Valor:</b> R$<input type="text" value="4300" name="valor" size="8" maxlength="10">
                                                <br>
                                            </div>
                                            <div class="form-group">
                                                <b>Descricao:</b> <input type="text" name="descricao" value="TDW" maxlength="255">
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="input" value="Alterar">
                                                <a class="float-right" style="color:#FF0000" onclick="return confirm('Tem certeza que deseja apagar?')" href="?mes=1&amp;ano=2021&amp;acao=apagar&amp;id=1" title="Remover">[remover]</a>
                                            </div>
                                        </form>
                                    </td>
                                </tr> -->

                                    <tr>
                                        <td class="text-center">5</td>
                                        <td class="">Mercadinho</td>
                                        <td class="">Mercado</td>
                                        <td class="text-right text-saida">- 30,77</td>
                                        <td class="text-center d-flex justify-content-center pt-0">
                                            <button class="btn btn-link text-primary btn-edit p-1" data-id="">
                                                <i class="bi bi-pencil-square align-middle mb-5"></i>
                                            </button>
                                            <button class="btn btn-link text-danger btn-del p-1" data-id="">
                                                <i class="bi bi-trash align-middle mb-5"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">7</td>
                                        <td class="">Utensilios</td>
                                        <td class="">Mercado</td>
                                        <td class="text-right text-saida">- 15,51</td>
                                        <td class="text-center d-flex justify-content-center pt-0">
                                            <button class="btn btn-link text-primary btn-edit p-1" data-id="">
                                                <i class="bi bi-pencil-square align-middle mb-5"></i>
                                            </button>
                                            <button class="btn btn-link text-danger btn-del p-1" data-id="">
                                                <i class="bi bi-trash align-middle mb-5"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">10</td>
                                        <td class="">Remedios e Oleos</td>
                                        <td class="">Farmacia</td>
                                        <td class="text-right text-saida">- 116,42</td>
                                        <td class="text-center d-flex justify-content-center pt-0">
                                            <button class="btn btn-link text-primary btn-edit p-1" data-id="">
                                                <i class="bi bi-pencil-square align-middle mb-5"></i>
                                            </button>
                                            <button class="btn btn-link text-danger btn-del p-1" data-id="">
                                                <i class="bi bi-trash align-middle mb-5"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">11</td>
                                        <td class="">FJMC</td>
                                        <td class="">Salario</td>
                                        <td class="text-right text-entrada">+ 60,00</td>
                                        <td class="text-center d-flex justify-content-center pt-0">
                                            <button class="btn btn-link text-primary btn-edit p-1" data-id="">
                                                <i class="bi bi-pencil-square align-middle mb-5"></i>
                                            </button>
                                            <button class="btn btn-link text-danger btn-del p-1" data-id="">
                                                <i class="bi bi-trash align-middle mb-5"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">12</td>
                                        <td class="">aa</td>
                                        <td class="">Condominio</td>
                                        <td class="text-right text-saida">- 4300,00</td>
                                        <td class="text-center d-flex justify-content-center pt-0">
                                            <button class="btn btn-link text-primary btn-edit p-1" data-id="">
                                                <i class="bi bi-pencil-square align-middle mb-5"></i>
                                            </button>
                                            <button class="btn btn-link text-danger btn-del p-1" data-id="">
                                                <i class="bi bi-trash align-middle mb-5"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <tr class="text-saldo bg-light">
                                        <td class=""></td>
                                        <td colspan="2" class="text-left text-saldoMes">Saldo</td>
                                        <td class="text-right text-saldoMes text-saida">-R$ 102,70</td>
                                        <td class=""></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

            <!-- FEVEREIRO -->
            <div id="m2" class="tab-pane p-3 bg-fa">
                <div class="row">

                    <!-- Titulo e btn Movimento -->
                    <div class="col-12">
                        <div class="justify-content-between">
                            <p class="h4 mb-0 float-left">Fevereiro/21</p>
                            <button id="new_category" type="button" class="btn btn-primary btn-sm float-right">Novo movimento</button>
                        </div>
                    </div>

                    <!-- Tabela do mês atual -->
                    <div class="col-12 mt-3 bg-mesAtual">
                        <div class="d-flex justify-content-between">
                            <p class="small mt-3 mb-2 ">Entradas e Saídas deste mês</p>

                            <a id="btnMesAtual" class="text-dark " data-toggle="collapse" href="#table-mesAtual-fev" role="button" aria-expanded="true" aria-controls="table-mesAtual-fev">
                                <i class="bi bi-arrow-up-square" style="font-size: 1.5rem;"></i>
                            </a>
                        </div>

                        <table id="table-mesAtual-fev" class="table table-borderless table-mesAtual collapse show" width="100%">
                            <tbody>
                                <tr>
                                    <td class="text-left py-0">
                                        <span class="text-entrada">Entradas:</span>
                                    </td>
                                    <td class="text-right py-0">
                                        <span class="text-entrada">R$ 4360,00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left py-0">
                                        <span class="text-saida">Saídas:</span>
                                    </td>
                                    <td class="text-right py-0">
                                        <span class="text-saida">R$ 4462,70</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-0" colspan="2">
                                        <hr>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left py-0 text-saida">Total:
                                    </td>
                                    <td class="text-right py-0 text-saida">R$ -102,70
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                    <!-- Tabela geral -->
                    <div class="col-12 my-3 bg-balanco">
                        <div class="d-flex justify-content-between">
                            <p class="small mt-3 mb-2">Balanço geral</p>

                            <a id="btnBalancoGeral" class="text-dark " data-toggle="collapse" href="#table-balanco-fev" role="button" aria-expanded="false" aria-controls="table-balanco-fev">
                                <i class="bi bi-arrow-down-square " style="font-size: 1.5rem;"></i>
                            </a>

                        </div>

                        <table id="table-balanco-fev" class="table table-borderless table-balanco collapse">
                            <tbody>
                                <tr>
                                    <td class="text-left py-0">
                                        <span class="text-entrada">Entradas:</span>
                                    </td>
                                    <td class="text-right py-0">
                                        <span class="text-entrada">R$ 4360,00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left py-0">
                                        <span class="text-saida">Saídas:</span>
                                    </td>
                                    <td class="text-right py-0">
                                        <span class="text-saida">R$ 5360,00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-0" colspan="2">
                                        <hr>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left py-0 text-saida">Total:
                                    </td>
                                    <td class="text-right py-0 text-saida">R$ 1000,00
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Tabela movimentos -->
                    <div class="col-12 mt-0 bg-balanco">
                        <div class="d-flex justify-content-between">
                            <p class="small mt-3 mb-2 ">Movimentos deste mês</p>

                            <form class="form-inline " name="form_filtro_cat" method="get" action="">
                                <input type="hidden" name="mes" value="1">
                                <input type="hidden" name="ano" value="2021">
                                <select id="filter_category" class="form-control form-sm" name="filtro_cat" onchange="form_filtro_cat.submit()">
                                    <option value="">Tudo</option>
                                    <option value="6">Salario</option>
                                    <option value="4">Mercado</option>
                                    <option value="5">Farmacia</option>
                                    <option value="1">Condominio</option>
                                </select>
                            </form>
                        </div>

                        <table id="tableMovimento" class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="">Descrição (Categoria)</th>
                                    <th class="text-right">Valor</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td class="">
                                        TDW
                                        <em>(<a href="?mes=1&amp;ano=2021&amp;filtro_cat=6">Salario</a>)</em>
                                        <a href="javascript:;" style="font-size:10px; color:#666" onclick="editFunc('editar_mov_1');" title="Editar">[editar]</a>
                                    </td>
                                    <td class="text-right text-entrada">+ 4300,00</td>
                                </tr>
                                <tr class="d-none" id="editar_mov_1">
                                    <td colspan="3">
                                        <form class="" method="post" action="?mes=1&amp;ano=2021">
                                            <input type="hidden" name="acao" value="editar_mov">
                                            <input type="hidden" name="id" value="1">


                                            <div class="form-group">
                                                <b>Dia:</b> <input type="text" name="dia" size="3" maxlength="2" value="4">
                                            </div>
                                            <div class="form-group">
                                                <b>Tipo:</b> <label for="tipo_receita1" class="text-entrada"><input checked="checked" type="radio" name="tipo" value="1" id="tipo_receita1"> Receita</label>&nbsp; <label for="tipo_despesa1" class="text-saida"><input type="radio" name="tipo" value="0" id="tipo_despesa1"> Despesa</label>
                                            </div>
                                            <div class="form-group">
                                                <b>Categoria:</b>
                                                <select name="cat">
                                                    <option value="1">Condominio</option>
                                                    <option value="2">Energia</option>
                                                    <option value="3">Internet</option>
                                                    <option value="4">Mercado</option>
                                                    <option value="5">Farmacia</option>
                                                    <option selected="" value="6">Salario</option>
                                                    <option value="7">Dentista</option>
                                                </select><br>
                                            </div>
                                            <div class="form-group">
                                                <b>Valor:</b> R$<input type="text" value="4300" name="valor" size="8" maxlength="10">
                                                <br>
                                            </div>
                                            <div class="form-group">
                                                <b>Descricao:</b> <input type="text" name="descricao" value="TDW" maxlength="255">
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="input" value="Alterar">
                                                <a class="float-right" style="color:#FF0000" onclick="return confirm('Tem certeza que deseja apagar?')" href="?mes=1&amp;ano=2021&amp;acao=apagar&amp;id=1" title="Remover">[remover]</a>
                                            </div>
                                        </form>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">5</td>
                                    <td>Mercadinho <em>(<a href="?mes=1&amp;ano=2021&amp;filtro_cat=4">Mercado</a>)</em> <a href="javascript:;" style="font-size:10px; color:#666" onclick="editFunc('editar_mov_3');" title="Editar">[editar]</a></td>
                                    <td class="text-right text-saida">- 30,77</td>
                                </tr>
                                <tr class="d-none" id="editar_mov_3">
                                    <td colspan="3">
                                        <hr>
                                        <form method="post" action="?mes=1&amp;ano=2021">
                                            <input type="hidden" name="acao" value="editar_mov">
                                            <input type="hidden" name="id" value="3">

                                            <b>Dia:</b> <input type="text" name="dia" size="3" maxlength="2" value="5"><br>
                                            <b>Tipo:</b> <label for="tipo_receita3" class="text-entrada"><input type="radio" name="tipo" value="1" id="tipo_receita3"> Receita</label>&nbsp; <label for="tipo_despesa3" class="text-saida"><input checked="checked" type="radio" name="tipo" value="0" id="tipo_despesa3"> Despesa</label><br>
                                            <b>Categoria:</b>
                                            <select name="cat">
                                                <option value="1">Condominio</option>
                                                <option value="2">Energia</option>
                                                <option value="3">Internet</option>
                                                <option selected="" value="4">Mercado</option>
                                                <option value="5">Farmacia</option>
                                                <option value="6">Salario</option>
                                                <option value="7">Dentista</option>
                                            </select><br>
                                            <b>Valor:</b> R$<input type="text" value="30.77" name="valor" size="8" maxlength="10">
                                            <br>
                                            <b>Descricao:</b> <input type="text" name="descricao" value="Mercadinho" size="70" maxlength="255">

                                            <input type="submit" class="input" value="Alterar">
                                        </form>
                                        <div style="text-align: right">
                                            <a style="color:#FF0000" onclick="return confirm('Tem certeza que deseja apagar?')" href="?mes=1&amp;ano=2021&amp;acao=apagar&amp;id=3" title="Remover">[remover]</a>
                                        </div>
                                        <hr>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">7</td>
                                    <td>Utensilios <em>(<a href="?mes=1&amp;ano=2021&amp;filtro_cat=4">Mercado</a>)</em> <a href="javascript:;" style="font-size:10px; color:#666" onclick="editFunc('editar_mov_4');" title="Editar">[editar]</a></td>
                                    <td class="text-right text-saida">- 15,51</td>
                                </tr>
                                <tr class="d-none" id="editar_mov_4">
                                    <td colspan="3">
                                        <hr>
                                        <form method="post" action="?mes=1&amp;ano=2021">
                                            <input type="hidden" name="acao" value="editar_mov">
                                            <input type="hidden" name="id" value="4">

                                            <b>Dia:</b> <input type="text" name="dia" size="3" maxlength="2" value="7"><br>
                                            <b>Tipo:</b> <label for="tipo_receita4" class="text-entrada"><input type="radio" name="tipo" value="1" id="tipo_receita4"> Receita</label>&nbsp; <label for="tipo_despesa4" class="text-saida"><input checked="checked" type="radio" name="tipo" value="0" id="tipo_despesa4"> Despesa</label><br>
                                            <b>Categoria:</b>
                                            <select name="cat">
                                                <option value="1">Condominio</option>
                                                <option value="2">Energia</option>
                                                <option value="3">Internet</option>
                                                <option selected="" value="4">Mercado</option>
                                                <option value="5">Farmacia</option>
                                                <option value="6">Salario</option>
                                                <option value="7">Dentista</option>
                                            </select><br>
                                            <b>Valor:</b> R$<input type="text" value="15.51" name="valor" size="8" maxlength="10">
                                            <br>
                                            <b>Descricao:</b> <input type="text" name="descricao" value="Utensilios" size="70" maxlength="255">

                                            <input type="submit" class="input" value="Alterar">
                                        </form>
                                        <div style="text-align: right">
                                            <a style="color:#FF0000" onclick="return confirm('Tem certeza que deseja apagar?')" href="?mes=1&amp;ano=2021&amp;acao=apagar&amp;id=4" title="Remover">[remover]</a>
                                        </div>
                                        <hr>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">10</td>
                                    <td>Remedios e Oleos <em>(<a href="?mes=1&amp;ano=2021&amp;filtro_cat=5">Farmacia</a>)</em> <a href="javascript:;" style="font-size:10px; color:#666" onclick="editFunc('editar_mov_5');" title="Editar">[editar]</a></td>
                                    <td class="text-right text-saida">- 116,42</td>
                                </tr>
                                <tr class="d-none" id="editar_mov_5">
                                    <td colspan="3">
                                        <hr>
                                        <form method="post" action="?mes=1&amp;ano=2021">
                                            <input type="hidden" name="acao" value="editar_mov">
                                            <input type="hidden" name="id" value="5">

                                            <b>Dia:</b> <input type="text" name="dia" size="3" maxlength="2" value="10"><br>
                                            <b>Tipo:</b> <label for="tipo_receita5" class="text-entrada"><input type="radio" name="tipo" value="1" id="tipo_receita5"> Receita</label>&nbsp; <label for="tipo_despesa5" class="text-saida"><input checked="checked" type="radio" name="tipo" value="0" id="tipo_despesa5"> Despesa</label><br>
                                            <b>Categoria:</b>
                                            <select name="cat">
                                                <option value="1">Condominio</option>
                                                <option value="2">Energia</option>
                                                <option value="3">Internet</option>
                                                <option value="4">Mercado</option>
                                                <option selected="" value="5">Farmacia</option>
                                                <option value="6">Salario</option>
                                                <option value="7">Dentista</option>
                                            </select><br>
                                            <b>Valor:</b> R$<input type="text" value="116.42" name="valor" size="8" maxlength="10">
                                            <br>
                                            <b>Descricao:</b> <input type="text" name="descricao" value="Remedios e Oleos" size="70" maxlength="255">

                                            <input type="submit" class="input" value="Alterar">
                                        </form>
                                        <div style="text-align: right">
                                            <a style="color:#FF0000" onclick="return confirm('Tem certeza que deseja apagar?')" href="?mes=1&amp;ano=2021&amp;acao=apagar&amp;id=5" title="Remover">[remover]</a>
                                        </div>
                                        <hr>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">11</td>
                                    <td>FJMC <em>(<a href="?mes=1&amp;ano=2021&amp;filtro_cat=6">Salario</a>)</em> <a href="javascript:;" style="font-size:10px; color:#666" onclick="editFunc('editar_mov_2');" title="Editar">[editar]</a></td>
                                    <td class="text-right text-entrada">+ 60,00</td>
                                </tr>
                                <tr class="d-none" id="editar_mov_2">
                                    <td colspan="3">
                                        <hr>
                                        <form method="post" action="?mes=1&amp;ano=2021">
                                            <input type="hidden" name="acao" value="editar_mov">
                                            <input type="hidden" name="id" value="2">

                                            <b>Dia:</b> <input type="text" name="dia" size="3" maxlength="2" value="11"><br>
                                            <b>Tipo:</b> <label for="tipo_receita2" class="text-entrada"><input checked="checked" type="radio" name="tipo" value="1" id="tipo_receita2"> Receita</label>&nbsp; <label for="tipo_despesa2" class="text-saida"><input type="radio" name="tipo" value="0" id="tipo_despesa2"> Despesa</label><br>
                                            <b>Categoria:</b>
                                            <select name="cat">
                                                <option value="1">Condominio</option>
                                                <option value="2">Energia</option>
                                                <option value="3">Internet</option>
                                                <option value="4">Mercado</option>
                                                <option value="5">Farmacia</option>
                                                <option selected="" value="6">Salario</option>
                                                <option value="7">Dentista</option>
                                            </select><br>
                                            <b>Valor:</b> R$<input type="text" value="60" name="valor" size="8" maxlength="10">
                                            <br>
                                            <b>Descricao:</b> <input type="text" name="descricao" value="FJMC" size="70" maxlength="255">

                                            <input type="submit" class="input" value="Alterar">
                                        </form>
                                        <div style="text-align: right">
                                            <a style="color:#FF0000" onclick="return confirm('Tem certeza que deseja apagar?')" href="?mes=1&amp;ano=2021&amp;acao=apagar&amp;id=2" title="Remover">[remover]</a>
                                        </div>
                                        <hr>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">12</td>
                                    <td>aa <em>(<a href="?mes=1&amp;ano=2021&amp;filtro_cat=1">Condominio</a>)</em> <a href="javascript:;" style="font-size:10px; color:#666" onclick="editFunc('editar_mov_6');" title="Editar">[editar]</a></td>
                                    <td class="text-right text-saida">- 4300,00</td>
                                </tr>
                                <tr class="d-none" id="editar_mov_6">
                                    <td colspan="3">
                                        <hr>
                                        <form method="post" action="?mes=1&amp;ano=2021">
                                            <input type="hidden" name="acao" value="editar_mov">
                                            <input type="hidden" name="id" value="6">

                                            <b>Dia:</b> <input type="text" name="dia" size="3" maxlength="2" value="12"><br>
                                            <b>Tipo:</b> <label for="tipo_receita6" class="text-entrada"><input type="radio" name="tipo" value="1" id="tipo_receita6"> Receita</label>&nbsp; <label for="tipo_despesa6" class="text-saida"><input checked="checked" type="radio" name="tipo" value="0" id="tipo_despesa6"> Despesa</label><br>
                                            <b>Categoria:</b>
                                            <select name="cat">
                                                <option selected="" value="1">Condominio</option>
                                                <option value="2">Energia</option>
                                                <option value="3">Internet</option>
                                                <option value="4">Mercado</option>
                                                <option value="5">Farmacia</option>
                                                <option value="6">Salario</option>
                                                <option value="7">Dentista</option>
                                            </select><br>
                                            <b>Valor:</b> R$<input type="text" value="4300" name="valor" size="8" maxlength="10">
                                            <br>
                                            <b>Descricao:</b> <input type="text" name="descricao" value="aa" size="70" maxlength="255">

                                            <input type="submit" class="input" value="Alterar">
                                        </form>
                                        <div style="text-align: right">
                                            <a style="color:#FF0000" onclick="return confirm('Tem certeza que deseja apagar?')" href="?mes=1&amp;ano=2021&amp;acao=apagar&amp;id=6" title="Remover">[remover]</a>
                                        </div>
                                        <hr>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="3" class="text-right" style="font-size:22px; color:#C00">R$ -102,70
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <!-- Novembro -->
            <div id="m11" class="tab-pane p-3 bg-fa">
                <div class="row">

                    <!-- Titulo e btn Movimento -->
                    <div class="col-12">
                        <div class="justify-content-between">
                            <p class="h4 mb-0 float-left">Nov/21</p>
                            <button id="new_category" type="button" class="btn btn-primary btn-sm float-right">Novo movimento</button>
                        </div>
                    </div>

                    <!-- Tabela do mês atual -->
                    <div class="col-12 mt-3 bg-mesAtual">
                        <div class="d-flex justify-content-between">
                            <p class="small mt-3 mb-2 ">Entradas e Saídas deste mês</p>

                            <a id="btnMesAtual" class="text-dark " data-toggle="collapse" href="#table-mesAtual-fev" role="button" aria-expanded="true" aria-controls="table-mesAtual-fev">
                                <i class="bi bi-arrow-up-square" style="font-size: 1.5rem;"></i>
                            </a>
                        </div>

                        <table id="table-mesAtual-fev" class="table table-borderless table-mesAtual collapse show" width="100%">
                            <tbody>
                                <tr>
                                    <td class="text-left py-0">
                                        <span class="text-entrada">Entradas:</span>
                                    </td>
                                    <td class="text-right py-0">
                                        <span class="text-entrada">R$ 4360,00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left py-0">
                                        <span class="text-saida">Saídas:</span>
                                    </td>
                                    <td class="text-right py-0">
                                        <span class="text-saida">R$ 4462,70</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-0" colspan="2">
                                        <hr>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left py-0 text-saida">Total:
                                    </td>
                                    <td class="text-right py-0 text-saida">R$ -102,70
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                    <!-- Tabela geral -->
                    <div class="col-12 my-3 bg-balanco">
                        <div class="d-flex justify-content-between">
                            <p class="small mt-3 mb-2">Balanço geral</p>

                            <a id="btnBalancoGeral" class="text-dark " data-toggle="collapse" href="#table-balanco-fev" role="button" aria-expanded="false" aria-controls="table-balanco-fev">
                                <i class="bi bi-arrow-down-square " style="font-size: 1.5rem;"></i>
                            </a>

                        </div>

                        <table id="table-balanco-fev" class="table table-borderless table-balanco collapse">
                            <tbody>
                                <tr>
                                    <td class="text-left py-0">
                                        <span class="text-entrada">Entradas:</span>
                                    </td>
                                    <td class="text-right py-0">
                                        <span class="text-entrada">R$ 4360,00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left py-0">
                                        <span class="text-saida">Saídas:</span>
                                    </td>
                                    <td class="text-right py-0">
                                        <span class="text-saida">R$ 5360,00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-0" colspan="2">
                                        <hr>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left py-0 text-saida">Total:
                                    </td>
                                    <td class="text-right py-0 text-saida">R$ 1000,00
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Tabela movimentos -->
                    <div class="col-12 mt-0 bg-balanco">
                        <div class="d-flex justify-content-between">
                            <p class="small mt-3 mb-2 ">Movimentos deste mês</p>

                            <form class="form-inline " name="form_filtro_cat" method="get" action="">
                                <input type="hidden" name="mes" value="1">
                                <input type="hidden" name="ano" value="2021">
                                <select id="filter_category" class="form-control form-sm" name="filtro_cat" onchange="form_filtro_cat.submit()">
                                    <option value="">Tudo</option>
                                    <option value="6">Salario</option>
                                    <option value="4">Mercado</option>
                                    <option value="5">Farmacia</option>
                                    <option value="1">Condominio</option>
                                </select>
                            </form>
                        </div>

                        <table id="tableMovimento" class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="">Descrição (Categoria)</th>
                                    <th class="text-right">Valor</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td class="">
                                        TDW
                                        <em>(<a href="?mes=1&amp;ano=2021&amp;filtro_cat=6">Salario</a>)</em>
                                        <a href="javascript:;" style="font-size:10px; color:#666" onclick="editFunc('editar_mov_1');" title="Editar">[editar]</a>
                                    </td>
                                    <td class="text-right text-entrada">+ 4300,00</td>
                                </tr>
                                <tr class="d-none" id="editar_mov_1">
                                    <td colspan="3">
                                        <form class="" method="post" action="?mes=1&amp;ano=2021">
                                            <input type="hidden" name="acao" value="editar_mov">
                                            <input type="hidden" name="id" value="1">


                                            <div class="form-group">
                                                <b>Dia:</b> <input type="text" name="dia" size="3" maxlength="2" value="4">
                                            </div>
                                            <div class="form-group">
                                                <b>Tipo:</b> <label for="tipo_receita1" class="text-entrada"><input checked="checked" type="radio" name="tipo" value="1" id="tipo_receita1"> Receita</label>&nbsp; <label for="tipo_despesa1" class="text-saida"><input type="radio" name="tipo" value="0" id="tipo_despesa1"> Despesa</label>
                                            </div>
                                            <div class="form-group">
                                                <b>Categoria:</b>
                                                <select name="cat">
                                                    <option value="1">Condominio</option>
                                                    <option value="2">Energia</option>
                                                    <option value="3">Internet</option>
                                                    <option value="4">Mercado</option>
                                                    <option value="5">Farmacia</option>
                                                    <option selected="" value="6">Salario</option>
                                                    <option value="7">Dentista</option>
                                                </select><br>
                                            </div>
                                            <div class="form-group">
                                                <b>Valor:</b> R$<input type="text" value="4300" name="valor" size="8" maxlength="10">
                                                <br>
                                            </div>
                                            <div class="form-group">
                                                <b>Descricao:</b> <input type="text" name="descricao" value="TDW" maxlength="255">
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="input" value="Alterar">
                                                <a class="float-right" style="color:#FF0000" onclick="return confirm('Tem certeza que deseja apagar?')" href="?mes=1&amp;ano=2021&amp;acao=apagar&amp;id=1" title="Remover">[remover]</a>
                                            </div>
                                        </form>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">5</td>
                                    <td>Mercadinho <em>(<a href="?mes=1&amp;ano=2021&amp;filtro_cat=4">Mercado</a>)</em> <a href="javascript:;" style="font-size:10px; color:#666" onclick="editFunc('editar_mov_3');" title="Editar">[editar]</a></td>
                                    <td class="text-right text-saida">- 30,77</td>
                                </tr>
                                <tr class="d-none" id="editar_mov_3">
                                    <td colspan="3">
                                        <hr>
                                        <form method="post" action="?mes=1&amp;ano=2021">
                                            <input type="hidden" name="acao" value="editar_mov">
                                            <input type="hidden" name="id" value="3">

                                            <b>Dia:</b> <input type="text" name="dia" size="3" maxlength="2" value="5"><br>
                                            <b>Tipo:</b> <label for="tipo_receita3" class="text-entrada"><input type="radio" name="tipo" value="1" id="tipo_receita3"> Receita</label>&nbsp; <label for="tipo_despesa3" class="text-saida"><input checked="checked" type="radio" name="tipo" value="0" id="tipo_despesa3"> Despesa</label><br>
                                            <b>Categoria:</b>
                                            <select name="cat">
                                                <option value="1">Condominio</option>
                                                <option value="2">Energia</option>
                                                <option value="3">Internet</option>
                                                <option selected="" value="4">Mercado</option>
                                                <option value="5">Farmacia</option>
                                                <option value="6">Salario</option>
                                                <option value="7">Dentista</option>
                                            </select><br>
                                            <b>Valor:</b> R$<input type="text" value="30.77" name="valor" size="8" maxlength="10">
                                            <br>
                                            <b>Descricao:</b> <input type="text" name="descricao" value="Mercadinho" size="70" maxlength="255">

                                            <input type="submit" class="input" value="Alterar">
                                        </form>
                                        <div style="text-align: right">
                                            <a style="color:#FF0000" onclick="return confirm('Tem certeza que deseja apagar?')" href="?mes=1&amp;ano=2021&amp;acao=apagar&amp;id=3" title="Remover">[remover]</a>
                                        </div>
                                        <hr>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">7</td>
                                    <td>Utensilios <em>(<a href="?mes=1&amp;ano=2021&amp;filtro_cat=4">Mercado</a>)</em> <a href="javascript:;" style="font-size:10px; color:#666" onclick="editFunc('editar_mov_4');" title="Editar">[editar]</a></td>
                                    <td class="text-right text-saida">- 15,51</td>
                                </tr>
                                <tr class="d-none" id="editar_mov_4">
                                    <td colspan="3">
                                        <hr>
                                        <form method="post" action="?mes=1&amp;ano=2021">
                                            <input type="hidden" name="acao" value="editar_mov">
                                            <input type="hidden" name="id" value="4">

                                            <b>Dia:</b> <input type="text" name="dia" size="3" maxlength="2" value="7"><br>
                                            <b>Tipo:</b> <label for="tipo_receita4" class="text-entrada"><input type="radio" name="tipo" value="1" id="tipo_receita4"> Receita</label>&nbsp; <label for="tipo_despesa4" class="text-saida"><input checked="checked" type="radio" name="tipo" value="0" id="tipo_despesa4"> Despesa</label><br>
                                            <b>Categoria:</b>
                                            <select name="cat">
                                                <option value="1">Condominio</option>
                                                <option value="2">Energia</option>
                                                <option value="3">Internet</option>
                                                <option selected="" value="4">Mercado</option>
                                                <option value="5">Farmacia</option>
                                                <option value="6">Salario</option>
                                                <option value="7">Dentista</option>
                                            </select><br>
                                            <b>Valor:</b> R$<input type="text" value="15.51" name="valor" size="8" maxlength="10">
                                            <br>
                                            <b>Descricao:</b> <input type="text" name="descricao" value="Utensilios" size="70" maxlength="255">

                                            <input type="submit" class="input" value="Alterar">
                                        </form>
                                        <div style="text-align: right">
                                            <a style="color:#FF0000" onclick="return confirm('Tem certeza que deseja apagar?')" href="?mes=1&amp;ano=2021&amp;acao=apagar&amp;id=4" title="Remover">[remover]</a>
                                        </div>
                                        <hr>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">10</td>
                                    <td>Remedios e Oleos <em>(<a href="?mes=1&amp;ano=2021&amp;filtro_cat=5">Farmacia</a>)</em> <a href="javascript:;" style="font-size:10px; color:#666" onclick="editFunc('editar_mov_5');" title="Editar">[editar]</a></td>
                                    <td class="text-right text-saida">- 116,42</td>
                                </tr>
                                <tr class="d-none" id="editar_mov_5">
                                    <td colspan="3">
                                        <hr>
                                        <form method="post" action="?mes=1&amp;ano=2021">
                                            <input type="hidden" name="acao" value="editar_mov">
                                            <input type="hidden" name="id" value="5">

                                            <b>Dia:</b> <input type="text" name="dia" size="3" maxlength="2" value="10"><br>
                                            <b>Tipo:</b> <label for="tipo_receita5" class="text-entrada"><input type="radio" name="tipo" value="1" id="tipo_receita5"> Receita</label>&nbsp; <label for="tipo_despesa5" class="text-saida"><input checked="checked" type="radio" name="tipo" value="0" id="tipo_despesa5"> Despesa</label><br>
                                            <b>Categoria:</b>
                                            <select name="cat">
                                                <option value="1">Condominio</option>
                                                <option value="2">Energia</option>
                                                <option value="3">Internet</option>
                                                <option value="4">Mercado</option>
                                                <option selected="" value="5">Farmacia</option>
                                                <option value="6">Salario</option>
                                                <option value="7">Dentista</option>
                                            </select><br>
                                            <b>Valor:</b> R$<input type="text" value="116.42" name="valor" size="8" maxlength="10">
                                            <br>
                                            <b>Descricao:</b> <input type="text" name="descricao" value="Remedios e Oleos" size="70" maxlength="255">

                                            <input type="submit" class="input" value="Alterar">
                                        </form>
                                        <div style="text-align: right">
                                            <a style="color:#FF0000" onclick="return confirm('Tem certeza que deseja apagar?')" href="?mes=1&amp;ano=2021&amp;acao=apagar&amp;id=5" title="Remover">[remover]</a>
                                        </div>
                                        <hr>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">11</td>
                                    <td>FJMC <em>(<a href="?mes=1&amp;ano=2021&amp;filtro_cat=6">Salario</a>)</em> <a href="javascript:;" style="font-size:10px; color:#666" onclick="editFunc('editar_mov_2');" title="Editar">[editar]</a></td>
                                    <td class="text-right text-entrada">+ 60,00</td>
                                </tr>
                                <tr class="d-none" id="editar_mov_2">
                                    <td colspan="3">
                                        <hr>
                                        <form method="post" action="?mes=1&amp;ano=2021">
                                            <input type="hidden" name="acao" value="editar_mov">
                                            <input type="hidden" name="id" value="2">

                                            <b>Dia:</b> <input type="text" name="dia" size="3" maxlength="2" value="11"><br>
                                            <b>Tipo:</b> <label for="tipo_receita2" class="text-entrada"><input checked="checked" type="radio" name="tipo" value="1" id="tipo_receita2"> Receita</label>&nbsp; <label for="tipo_despesa2" class="text-saida"><input type="radio" name="tipo" value="0" id="tipo_despesa2"> Despesa</label><br>
                                            <b>Categoria:</b>
                                            <select name="cat">
                                                <option value="1">Condominio</option>
                                                <option value="2">Energia</option>
                                                <option value="3">Internet</option>
                                                <option value="4">Mercado</option>
                                                <option value="5">Farmacia</option>
                                                <option selected="" value="6">Salario</option>
                                                <option value="7">Dentista</option>
                                            </select><br>
                                            <b>Valor:</b> R$<input type="text" value="60" name="valor" size="8" maxlength="10">
                                            <br>
                                            <b>Descricao:</b> <input type="text" name="descricao" value="FJMC" size="70" maxlength="255">

                                            <input type="submit" class="input" value="Alterar">
                                        </form>
                                        <div style="text-align: right">
                                            <a style="color:#FF0000" onclick="return confirm('Tem certeza que deseja apagar?')" href="?mes=1&amp;ano=2021&amp;acao=apagar&amp;id=2" title="Remover">[remover]</a>
                                        </div>
                                        <hr>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">12</td>
                                    <td>aa <em>(<a href="?mes=1&amp;ano=2021&amp;filtro_cat=1">Condominio</a>)</em> <a href="javascript:;" style="font-size:10px; color:#666" onclick="editFunc('editar_mov_6');" title="Editar">[editar]</a></td>
                                    <td class="text-right text-saida">- 4300,00</td>
                                </tr>
                                <tr class="d-none" id="editar_mov_6">
                                    <td colspan="3">
                                        <hr>
                                        <form method="post" action="?mes=1&amp;ano=2021">
                                            <input type="hidden" name="acao" value="editar_mov">
                                            <input type="hidden" name="id" value="6">

                                            <b>Dia:</b> <input type="text" name="dia" size="3" maxlength="2" value="12"><br>
                                            <b>Tipo:</b> <label for="tipo_receita6" class="text-entrada"><input type="radio" name="tipo" value="1" id="tipo_receita6"> Receita</label>&nbsp; <label for="tipo_despesa6" class="text-saida"><input checked="checked" type="radio" name="tipo" value="0" id="tipo_despesa6"> Despesa</label><br>
                                            <b>Categoria:</b>
                                            <select name="cat">
                                                <option selected="" value="1">Condominio</option>
                                                <option value="2">Energia</option>
                                                <option value="3">Internet</option>
                                                <option value="4">Mercado</option>
                                                <option value="5">Farmacia</option>
                                                <option value="6">Salario</option>
                                                <option value="7">Dentista</option>
                                            </select><br>
                                            <b>Valor:</b> R$<input type="text" value="4300" name="valor" size="8" maxlength="10">
                                            <br>
                                            <b>Descricao:</b> <input type="text" name="descricao" value="aa" size="70" maxlength="255">

                                            <input type="submit" class="input" value="Alterar">
                                        </form>
                                        <div style="text-align: right">
                                            <a style="color:#FF0000" onclick="return confirm('Tem certeza que deseja apagar?')" href="?mes=1&amp;ano=2021&amp;acao=apagar&amp;id=6" title="Remover">[remover]</a>
                                        </div>
                                        <hr>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="3" class="text-right" style="font-size:22px; color:#C00">R$ -102,70
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <footer id="footer" class="mt-3 py-3 bg-fa">
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


    <!-- Custom JS -->
    <script>
        $("#search_year").select2();
        $("#filter_category").select2();

        $(".btnMeses a").on('click', function() {
            $('.btnMeses a').removeClass('active');
            $(this).addClass('active');
            $('.tab-pane').removeClass('active');
            $('#' + $(this).data('tab')).addClass('active');
        });

        let month_curr = <?= date('m') + 10; ?>;
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

        $('#btnMesAtual').click(function() {
            $(this).find('i').toggleClass('bi-arrow-up-square bi-arrow-down-square');
        });
        $('#btnBalancoGeral').click(function() {
            $(this).find('i').toggleClass('bi-arrow-up-square bi-arrow-down-square');
        });

        window.editFunc = function(id) {
            $('#' + id).toggleClass('d-none d-table-row');
        }

        window.onload = function() {
            $('.tab-pane').removeClass('active');
            $('#month_' + month_curr).addClass('active');
            $('#m' + month_curr).addClass('active');
        }
    </script>
</body>

</html>
