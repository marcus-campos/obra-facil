<select class="form-control" id="service" name="service">
    @foreach($service as $serv)
        <option value="#">Selecione um serviço</option>
        <option value="{{ $serv->id }}">{{ $serv->name }}</option>
    @endforeach
</select>