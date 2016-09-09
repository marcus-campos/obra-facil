<select class="form-control" id="service" name="service">
        <option value="#">Selecione um serviço</option>
    @foreach($service as $serv)
            @if(strlen($serv->name) > 69)
                <option value="{{ $serv->id }}">{{ substr($serv->name, 0, 70) != ""?substr($serv->name, 0, 70):"Serviço não encontrado" }}...</option>
            @else
                <option value="{{ $serv->id }}">{{ $serv->name }}</option>
            @endif
    @endforeach
</select>