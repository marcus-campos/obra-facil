$("#category").on("change paste keyup", function() {
    var hour_day = $('#hour_day').val();
    var category = $('#category').val();
    var service = $('#service').val();
    var days = $('#days').val();
    var meters = $('#meters').val();

    getServices(category);

    if(hour_day != null && service != null && days != '' && meters != '')
        refreshResult(hour_day, service, days, meters);
    else
        $('#result').html('Preencha todos os campos da etapa anterior...');
});

$("#service").on("change paste keyup", function() {
    var hour_day = $('#hour_day').val();
    var service = $('#service').val();
    var days = $('#days').val();
    var meters = $('#meters').val();

    if(hour_day != null && service != null && days != '' && meters != '')
        refreshResult(hour_day, service, days, meters);
    else
        $('#result').html('Preencha todos os campos da etapa anterior...');
});

$("#hour_day").on("change paste keyup", function() {
    var hour_day = $('#hour_day').val();
    var service = $('#service').val();
    var days = $('#days').val();
    var meters = $('#meters').val();
    if(hour_day != null && service != null && days != '' && meters != '')
        refreshResult(hour_day, service, days, meters);
    else
        $('#result').html('Preencha todos os campos da etapa anterior...');
});

$("#days").on("change paste keyup", function() {
    var hour_day = $('#hour_day').val();
    var service = $('#service').val();
    var days = $('#days').val();
    var meters = $('#meters').val();
    if(hour_day != null && service != null && days != '' && meters != '')
        refreshResult(hour_day, service, days, meters);
    else
        $('#result').html('Preencha todos os campos da etapa anterior...');
});

$("#meters").on("change paste keyup", function() {
    var hour_day = $('#hour_day').val();
    var service = $('#service').val();
    var days = $('#days').val();
    var meters = $('#meters').val();
    if(hour_day != null && service != null && days != '' && meters != '')
        refreshResult(hour_day, service, days, meters);
    else
        $('#result').html('Preencha todos os campos da etapa anterior...');
});

function getServices(category) {
    $.ajax({
        url: './service/'+category,
        type: 'GET',
        data: {
            cat: category
        },
        success : function (resp) {
            $('#service_title').html('<label class="col-lg-3 control-label " for="service">Qual é o serviço a ser realizado?</label>');
            $('#service_span').html(resp);
        }
    });
}

function refreshResult(hour_day, service, days, meters) {
    $.ajax({
        url: './pso/'+service+"/"+meters+"/"+days+"/"+hour_day,
        type: 'GET',
        success : function (resp) {
            $('#result').html(resp);
        }
    });
}