<?php
$count = 1;
?>
<div class="form-group clearfix">
    <h1 class="text-center">Mão de obra disponível</h1>
</div>
<div class="panel panel-primary">
    <!-- Default panel contents -->
    <div class="panel-heading"><strong><b>Defina a quantidade de trabalhadores disponíveis: </b></strong></div>
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Profissionais</th>
            <th>Quantidade</th>
        </tr>
        </thead>
        <tbody>
        @foreach($services as $service)
            <tr>
                <th scope="row">{{ $count }}</th>
                <td> <label class="col-lg-3 control-label " for="userName">{{ $service->labor }}</label></td>
                <td><input id="{{ strtolower($service->labor) }}" name="meters" type="text" class="required form-control" placeholder="1" required></td>
            </tr>
            <?php $count++; ?>
        @endforeach
        </tbody>
    </table>
</div>