$("#category").on("change paste keyup", function() {
    var category = $('#category').val();
    var service = $('#service').val();
    var meters = $('#meters').val();

    getServices(category);

    if(service != null && meters != '')
        refreshResult(service, meters);
    else
        $('#result').html('Preencha todos os campos da etapa anterior...');
});

$("#service").on("change paste keyup", function() {
    var service = $('#service').val();
    var meters = $('#meters').val();

    if(service != null && meters != '')
        refreshResult(service, meters);
    else
        $('#result').html('Preencha todos os campos da etapa anterior...');
});

$("#meters").on("change paste keyup", function() {
    var service = $('#service').val();
    var meters = $('#meters').val();
    if(service != null && meters != '')
        refreshResult(service, meters);
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

function refreshResult(service, meters) {
    $.ajax({
        url: './mso/'+service+"/"+meters,
        type: 'GET',
        success : function (resp) {
            $('#result').html(resp);
        }
    });
}