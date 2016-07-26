@section('left-menu')
    <div id="sidebar-menu">
        <ul>
            <li class="text-muted menu-title">Painel</li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-home"></i><span> Dashboard </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('dashboard.dashboard.home') }}"> Início </a></li>
                    </ul>
                </li>
            <li class="text-muted menu-title">Administração</li>

            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-stats-up"></i><span> Financeiro </span> <span class="menu-arrow"></span></a>
                <ul class="list-unstyled">
                    <li><a href="#"> Dashboard </a></li>
                </ul>
            </li>

            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-shopping-cart"></i><span> eCommerce </span> <span class="menu-arrow"></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{ route('ecommerce.products.products') }}"> Cadastro de Produtos</a></li>
                    <li><a href="#"> Lista de Produtos</a></li>
                </ul>
            </li>

            <li class="text-muted menu-title">Configuração</li>

            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-user"></i><span> Usuários </span> <span class="menu-arrow"></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{ route('settings.users.users') }}"> Lista de Usuários</a></li>
                    <li><a href="#"> Regras de Usuários</a></li>
                </ul>
            </li>

        </ul>
        <div class="clearfix"></div>
    </div>
@endsection