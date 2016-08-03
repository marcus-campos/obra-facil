@section('left-menu')
    <div id="sidebar-menu">
        <ul>
            <li class="text-muted menu-title">Painel</li>

            <li class="has_sub">
                <a href="{{ route('pso') }}" class="waves-effect"><i class="ti-ruler-pencil"></i><span>Planejando sua obra</span> </a>
            </li>

            <!--<li class="has_sub">
                <a href="#" class="waves-effect"><i class="ti-clipboard"></i><span>Acompanhando a obra</span> </a>
            </li>

            <li class="has_sub">
                <a href="#" class="waves-effect"><i class="ti-stats-up"></i><span>Materiais de sua obra</span> </a>
            </li>-->

        </ul>
        <div class="clearfix"></div>
    </div>
@endsection