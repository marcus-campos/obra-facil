<?php
$count = 1;
?>
<div class="form-group clearfix">
    <h1 class="text-center">Mão de obra necessária</h1>
</div>
<div class="panel panel-primary">
    <!-- Default panel contents -->
    <div class="panel-heading"><strong><b>Profissionais necessários:</b></strong> {{$labor}}</div>
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Profissionais</th>
            <th>Quantidade</th>
        </tr>
        </thead>
        <tbody>
        @foreach($valores as $valor)
            <tr>
                <th scope="row">{{ $count }}</th>
                <td>{{ $valor['labor'] }}</td>
                <td>{{ $valor['num_labor']>1 ? $valor['num_labor'] .' profissionais.':$valor['num_labor'].' profissional.' }}</td>
            </tr>
            <?php $count++; ?>
        @endforeach
        </tbody>
    </table>
</div>