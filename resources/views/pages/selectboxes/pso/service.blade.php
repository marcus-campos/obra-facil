<select class="form-control" id="service" name="service">
        <option value="#">Selecione um serviço</option>
    @foreach($service as $serv)
        <option value="{{ $serv->id }}">{{ $serv->name }}</option>
    @endforeach
</select>