
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
