var labors = new Array();

$("#category").on("change paste keyup", function() {
    var hour_day = $('#hour_day').val();
    var category = $('#category').val();
    var service = $('#service').val();
    var days = $('#days').val();
    var meters = $('#meters').val();

    getServices(category);

    if(hour_day != null && service != null && days != '' && meters != '')
    {
        //refreshResult(hour_day, service, days, meters);
        getWorkers(service);
    }
    else
        $('#result').html('Preencha todos os campos da etapa anterior...');
});

$(document).on("change paste keyup", "#service", function() {
    var hour_day = $('#hour_day').val();
    var service = $('#service').val();
    var days = $('#days').val();
    var meters = $('#meters').val();
    refreshService(service);

    if(hour_day != null && service != null && days != '' && meters != '')
    {
        //refreshResult(hour_day, service, days, meters);
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
        //refreshResult(hour_day, service, days, meters);
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
        //refreshResult(hour_day, service, days, meters);
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
        //refreshResult(hour_day, service, days, meters);
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

/*function refreshResult(hour_day, service, labor, meters) {
    $.ajax({
        url: './aso/'+service+"/"+meters+"/"+labor+"/"+hour_day,
        type: 'GET',
        success : function (resp) {
            $('#result').html(resp);
        }
    });
}*/

function getWorkers(service)
{
    $.ajax({
        url: './aso/service/'+service,
        type: 'GET',
        success: function (resp) {
            $('#workers').html(resp);
            console.log(hour_day);
        }
    });
}

$(document).on('change paste keyup', '#armador', function(){
    addLabor('armador');
    lastResult();
});

$(document).on('change paste keyup', '#carpinteiro', function(){
    addLabor('carpinteiro');
    lastResult();
});

$(document).on('change paste keyup', '#eletricista', function(){
    addLabor('eletricista');
    lastResult();
});

$(document).on('change paste keyup', '#pedreiro', function(){
    addLabor('pedreiro');
    lastResult();
});

$(document).on('change paste keyup', '#pintor', function(){
    addLabor('pintor');
    lastResult();
});

$(document).on('change paste keyup', '#servente', function(){
    addLabor('servente');
    lastResult();
});

$(document).on('change paste keyup', '#vidraceiro', function(){
    addLabor('vidraceiro');
    lastResult();
});

function lastResult() {

    var hourDay = $('#hour_day').val();
    var service = $('#service').val();
    var days = $('#days').val();
    var meters = $('#meters').val();

    $.ajax({
        url: './aso/calc',
        type: 'POST',
        data: {
            meters: meters,
            service: service,
            days: days,
            hourday: hourDay,
            labors: labors
        },
        success : function (resp) {
            $('#result').html(resp);
        }
    });
}

function addLabor(laborType) {
    var labor = labors.map(function(e){return e.labor}).indexOf(laborType);
    console.log(labor);
    if(labor == -1)
    {
        labors.push({
            labor: laborType,
            val: $('#'+laborType).val()
        });
    }
    else{
        labors[labor].val = $('#'+laborType).val();
    }

    lastResult();
}


function refreshService(id) {
    $.ajax({
        url : './pservice/'+id,
        type: 'GET',
        success: function (resp) {
            $.ajax({
                url: './punit/'+id,
                type: 'GET',
                success: function (resp) {
                    $('#unit').html(resp);
                }
            });
            $('#pservice').html(resp);
            $('#labelpservice').html('Serviço selecionado: ');
        }
    });
}