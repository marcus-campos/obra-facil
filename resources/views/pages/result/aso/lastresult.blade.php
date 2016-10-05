<?php
    $count = 1;
?>
<div class="form-group clearfix">
    <h1 class="text-center">Quantidade de dias em função de cada um dos insumos de mão de obra</h1>
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
                <th>Mão de obra disponível</th>
                <th>Quantidade de dias (aproximado)</th>
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
                        <td>{{ $valor['total'] }}</td>
                    </tr>
                    <?php $count++; ?>
                @endforeach
            </tbody>
        </table>
    <div class="panel-heading">
        Baseado nas quantidades de profissionais, quantitativos de serviço e horas de trabalhos diários definidos o número de dias necessários para execução total do serviço é de {{ $top }} dias.
    </div>
</div>