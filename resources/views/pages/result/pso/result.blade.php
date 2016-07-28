<div class="form-group clearfix">
    <label class="col-lg-2 control-label text-center" for="serv"> Serviço:</label>
    <div class="col-lg-10">
        <h5>{{$labor}}</h5>
    </div>
</div>
<div class="form-group clearfix">
    <h3 class="text-center">Mão de obra necessária</h3>
</div>
@foreach($valores as $valor)
    <div class="form-group clearfix">
        <div>
            <label class="col-lg-2 control-label " for="labor"> {{$valor['labor']}}</label>
            <div class="col-lg-10">
                <h4>{{$valor['num_labor'] > 1? $valor['num_labor']." profissionais.": $valor['num_labor']." profissional"}}</h4>
            </div>
        </div>
    </div>
@endforeach