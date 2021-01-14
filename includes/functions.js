
let month_curr = (new Date()).getMonth() + 1;
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

$("#search_year").select2();
$("#filter_category").select2();
$("#category_id").select2();

$('#value').mask("#.##0,00", {reverse: true});

$(".btnMeses a").on('click', function () {
    $('.btnMeses a').removeClass('active');
    $(this).addClass('active');
    $('.tab-pane').removeClass('active');
    $('#' + $(this).data('tab')).addClass('active');
});

$('#btnMesAtual').click(function () {
    $(this).find('i').toggleClass('bi-arrow-up-square bi-arrow-down-square');
});
$('#btnBalancoGeral').click(function () {
    $(this).find('i').toggleClass('bi-arrow-up-square bi-arrow-down-square');
});

window.editFunc = function (id) {
    $('#' + id).toggleClass('d-none d-table-row');
}

window.onload = function () {
    $('.tab-pane').removeClass('active');
    $('#month_' + month_curr).addClass('active');
    $('#m' + month_curr).addClass('active');
}

$(document).on('click', '#new-category-btn', function() {
    $('#new-category').modal('show');
});
$('#new-category-form').on('submit', function(e) {
    e.preventDefault();
    console.log( $('#new-category-form').serializeArray() );
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

$(document).on('click', '#new-movement-btn', function() {
    $('#date').daterangepicker({
        "singleDatePicker": true,
        "showDropdowns"   : true,
        "minYear"  : 2021,
        "autoApply": true,
        "locale"   : {
            "firstDay"  : 0,
            "format"    : "DD/MM/YYYY",
            "separator" : " - ",
            "daysOfWeek": [
                "D", "S", "T", "Q", "Q", "S", "S"
            ],
            "monthNames": [
                "Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dec"
            ],
        },
        "startDate": Date.now(),
        "endDate"  : Date.now(),
        "minDate"  : "01/01/2021"
    }, function( start ) {
        console.log( start.format('YYYY-MM-DD') );
    });
    $('#new-movement').modal('show');
});
$('#new-movement-form').on('submit', function(e) {
    e.preventDefault();
    console.log( $('#new-movement-form').serializeArray() );
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Movimento adicionado!',
        timer: 4000,
        showConfirmButton: false
    }).then(function() {
        window.location.reload();
    });
});
