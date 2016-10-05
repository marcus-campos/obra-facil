<?php
$count = 1;
?>
<div class="form-group clearfix">
    <h1 class="text-center">Materiais necessários</h1>
</div>
<div class="panel panel-primary">
    <!-- Default panel contents -->
    <div class="panel-heading">
        <strong><b>Serviço: </b></strong> {{$labor}} <br/>
        <strong><b> Tamanho: </b></strong>{{ $meters }} {{ $unit }}
    </div>
    <div style="height:300px;overflow:auto;">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Materiais</th>
                <th>Quantidade necessária</th>
            </tr>
            </thead>
            <tbody>
                @foreach($valores as $valor)
                    <tr>
                        <th scope="row">{{ $count }}</th>
                        <td>{{ $valor['material'] }}</td>
                        <td>{{ $valor['num_material'].' '. $valor['unit']}}</td>
                    </tr>
                    <?php $count++; ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>