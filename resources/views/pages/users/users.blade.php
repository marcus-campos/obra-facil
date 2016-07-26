<!-- Required extends -->
@extends('index')
@extends('menu.left-menu')
@extends('topbar.user-action.user-action')
@extends('topbar.logo')
@extends('css-js.header')
@extends('css-js.javascript')
<!--extends('topbar.notification.notification')-->
<!-- End Required extends -->

@section('title-page')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">{{ isset($title) ? $title : '' }}</h4>
            <ol class="breadcrumb">
                @if(isset($section))
                    <li>
                        {{ isset($system) ? $system : '' }}
                    </li>
                @endif
                @if(isset($section))
                    <li>
                        {{ isset($section) ? $section : '' }}
                    </li>
                @endif
                @if(isset($page))
                    <li class="active">
                        {{ isset($page) ? $page : '' }}
                    </li>
                @endif
            </ol>
        </div>
    </div>
@endsection

@section('container')
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-sm-8">
                        <form role="form">
                            <div class="form-group contact-search m-b-30">
                                <input type="text" id="search" class="form-control" placeholder="Pesquisar">
                                <button type="submit" class="btn btn-white"><i class="fa fa-search"></i></button>
                            </div> <!-- form-group -->
                        </form>
                    </div>
                    <div class="col-sm-4">
                        <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Cadastrar</button>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover mails m-0 table table-actions-bar">
                        <thead>
                        <tr>
                            <th style="min-width: 95px;">
                                <div class="checkbox checkbox-primary checkbox-single m-r-15">
                                    <input id="action-checkbox" type="checkbox">
                                    <label for="action-checkbox"></label>
                                </div>
                                <div class="btn-group dropdown">
                                    <button type="button" class="btn btn-white btn-xs dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><i class="caret"></i></button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Produtos</th>
                            <th>Data Inicial</th>
                            <th style="min-width: 90px;">Ação</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr class="active">
                            <td>
                                <div class="checkbox checkbox-primary m-r-15">
                                    <input id="checkbox2" type="checkbox" checked="">
                                    <label for="checkbox2"></label>
                                </div>

                                <img src="{{ asset('assets/images/users/avatar-2.jpg') }}" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                            </td>

                            <td>
                                Tomaslau
                            </td>

                            <td>
                                <a href="#">tomaslau@dummy.com</a>
                            </td>

                            <td>
                                <b><a href="" class="text-dark"><b>356</b></a> </b>
                            </td>

                            <td>
                                01/11/2003
                            </td>
                            <td>
                                <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="checkbox checkbox-primary m-r-15">
                                    <input id="checkbox1" type="checkbox">
                                    <label for="checkbox1"></label>
                                </div>

                                <img src=" {{ asset('assets/images/users/avatar-1.jpg') }}" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                            </td>

                            <td>
                                Chadengle
                            </td>

                            <td>
                                <a href="#">chadengle@dummy.com</a>
                            </td>

                            <td>
                                <b><a href="" class="text-dark"><b>568</b></a> </b>
                            </td>

                            <td>
                                01/11/2003
                            </td>
                            <td>
                                <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>

        </div> <!-- end col -->


    </div>
@endsection

@section('modals')
    <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Novo Usuário</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Nome</label>
                                <input type="text" class="form-control" id="field-1" placeholder="Ex: Adalberto">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Sobrenome</label>
                                <input type="text" class="form-control" id="field-2" placeholder="Ex: Vasconcelos">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-3" class="control-label">Endereço</label>
                                <input type="text" class="form-control" id="field-3" placeholder="Ex: Rua Estrela">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Número</label>
                                <input type="text" class="form-control" id="field-6" placeholder="Ex: 562">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-5" class="control-label">Complemento</label>
                                <input type="text" class="form-control" id="field-5" placeholder="Ex: Casa, Apto">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-5" class="control-label">CEP</label>
                                <input type="text" class="form-control" id="field-5" placeholder="32640857">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-4" class="control-label">Bairro</label>
                                <input type="text" class="form-control" id="field-4" placeholder="Ex: Ingá">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-4" class="control-label">Cidade</label>
                                <input type="text" class="form-control" id="field-4" placeholder="Ex: Betim">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-4" class="control-label">Estado</label>
                                <input type="text" class="form-control" id="field-4" placeholder="Ex: Minas Gerais">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group no-margin">
                                <label for="field-7" class="control-label">Regras de Usuário</label>
                                <select class="form-control">
                                    <option>Admin</option>
                                    <option>Padrão</option>
                                    <option>Desenvolvedor</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="field-7" class="control-label">Tipo telefone</label>
                            <select class="form-control">
                                <option>Fixo</option>
                                <option>Celular</option>
                                <option>Trabalho</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-4" class="control-label">Telefone</label>
                                <input type="text" class="form-control" id="field-4" placeholder="Ex: (31) 99999-9999">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group no-margin">
                                <label for="field-7" class="control-label">Outras Informações Pessoais</label>
                                <textarea class="form-control autogrow" id="field-7" placeholder="" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px;"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-info waves-effect waves-light">Salvar Alterações</button>
                </div>
            </div>
        </div>
    </div><!-- /.modal -->
@endsection

@section('extra-header')

@endsection

@section('extra-javascript')
    <!-- Modal-Effect -->
    <script src="{{ asset('assets/plugins/custombox/dist/custombox.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/custombox/dist/legacy.min.js') }}"></script>
@endsection