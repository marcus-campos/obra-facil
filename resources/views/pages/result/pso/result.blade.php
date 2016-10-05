<?php
    $count = 1;
?>
<div class="form-group clearfix">
    <h1 class="text-center">Mão de obra necessária</h1>
</div>
<div class="panel panel-primary">
    <!-- Default panel contents -->
    <div class="panel-heading">
        <strong><b>Serviço: </b></strong> {{$labor}} <br/>
        <strong><b>Horas por dia: </b></strong>{{ $horas }} <strong><b> Tamanho: </b></strong>{{ $meters }} {{ $unit }}
    </div>
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Mão de obra</th>
                <th>Mão de obra necessária (aproximado)</th>
                <th>Valor real</th>
            </tr>
            </thead>
            <tbody>
                @foreach($valores as $valor)
                    <tr>
                        <th scope="row">{{ $count }}</th>
                        <td>{{ $valor['labor'] }}</td>
                        <td>{{ $valor['num_labor']>1 ? $valor['num_labor'] .' profissionais.':$valor['num_labor'].' profissional.' }}</td>
                        <td>{{ $valor['real_labor'] }}</td>
                    </tr>
                    <?php $count++; ?>
                @endforeach
            </tbody>
        </table>
</div>