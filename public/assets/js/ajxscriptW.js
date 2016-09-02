$("#category").on("change paste keyup", function() {
    var hour_day = $('#hour_day').val();
    var category = $('#category').val();
    var service = $('#service').val();
    var days = $('#days').val();
    var meters = $('#meters').val();

    getServices(category);

    if(hour_day != null && service != null && days != '' && meters != '')
    {
        refreshResult(hour_day, service, days, meters);
        getWorkers(service);
    }
    else
        $('#result').html('Preencha todos os campos da etapa anterior...');
});

$("#service").on("change paste keyup", function() {
    var hour_day = $('#hour_day').val();
    var service = $('#service').val();
    var days = $('#days').val();
    var meters = $('#meters').val();

    if(hour_day != null && service != null && days != '' && meters != '')
    {
        refreshResult(hour_day, service, days, meters);
        getWorkers(service);
    }
    else
        $('#result').html('Preencha todos os campos da etapa anterior...');
});

$("#hour_day").on("change paste keyup", function() {
    var hour_day = $('#hour_day').val();
    var service = $('#service').val();
    var days = $('#days').val();
    var meters = $('#meters').val();
    if(hour_day != null && service != null && days != '' && meters != '')
    {
        refreshResult(hour_day, service, days, meters);
        getWorkers(service);
    }
    else
        $('#result').html('Preencha todos os campos da etapa anterior...');
});

$("#days").on("change paste keyup", function() {
    var hour_day = $('#hour_day').val();
    var service = $('#service').val();
    var days = $('#days').val();
    var meters = $('#meters').val();
    if(hour_day != null && service != null && days != '' && meters != '')
    {
        getWorkers(service);
        refreshResult(hour_day, service, days, meters);
    }
    else
        $('#result').html('Preencha todos os campos da etapa anterior...');
});

$("#meters").on("change paste keyup", function() {
    var hour_day = $('#hour_day').val();
    var service = $('#service').val();
    var days = $('#days').val();
    var meters = $('#meters').val();
    if(hour_day != null && service != null && days != '' && meters != '')
    {
        refreshResult(hour_day, service, days, meters);
        getWorkers(service);
    }
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

function refreshResult(hour_day, service, labor, meters) {
    $.ajax({
        url: './aso/'+service+"/"+meters+"/"+labor+"/"+hour_day,
        type: 'GET',
        success : function (resp) {
            $('#result').html(resp);
        }
    });
}

function getWorkers(service)
{
    $.ajax({
        url: './aso/service/'+service,
        type: 'GET',
        success: function (resp) {
            $('#workers').html(resp);
        }
    });
}

$(document).on('change paste keyup', '#armador', function(){
    alert('oi');
});

$(document).on('change paste keyup', '#carpinteiro', function(){
    alert('oi');
});

$(document).on('change paste keyup', '#eletricista', function(){
    alert('oi');
});

$(document).on('change paste keyup', '#pedreiro', function(){
    alert('oi');
});

$(document).on('change paste keyup', '#pintor', function(){
    alert('oi');
});

$(document).on('change paste keyup', '#servente', function(){
    alert('oi');
});

$(document).on('change paste keyup', '#vidraceiro', function(){
    alert('oi');
});