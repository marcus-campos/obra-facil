<!-- Required extends -->
@extends('index')
@extends('menu.left-menu')
<!--extends('topbar.user-action.user-action')-->
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
        <div class="col-md-12">
            <div class="card-box">

                <form id="basic-form" action="#">
                    <div>
                        <h3>Horas diárias</h3>
                        <section>
                            <div class="form-group clearfix">
                                <label class="col-lg-3 control-label " for="userName">Quantas horas é esperado trabalhar em 01 dia para a obra?</label>
                                <div class="col-lg-9">
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                           @for($x = 1; $x <= 24; $x++)
                                                <option value="{{ $x }}">{{ $x < 2? $x.' hora por dia': $x.' horas por dia' }}</option>
                                           @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label class="col-lg-3 control-label " for="userName">Qual é o serviço a ser realizado?</label>
                                <div class="col-lg-9">
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                            @foreach($category as $cat)
                                                <option value="#">Selecione um serviço</option>
                                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label class="col-lg-3 control-label " for="userName">Em quantos dias a obra deve ser entregue?</label>
                                <div class="col-lg-9">
                                    <div class="form-group">
                                        <input id="name" name="name" type="text" class="required form-control" placeholder="1">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <h3>Resultado</h3>
                        <section>
                            <div class="form-group clearfix">

                                <label class="col-lg-2 control-label" for="name"> First name *</label>
                                <div class="col-lg-10">
                                    <input id="name" name="name" type="text" class="required form-control">
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label class="col-lg-2 control-label " for="surname"> Last name *</label>
                                <div class="col-lg-10">
                                    <input id="surname" name="surname" type="text" class="required form-control">

                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="col-lg-2 control-label " for="email">Email *</label>
                                <div class="col-lg-10">
                                    <input id="email" name="email" type="text" class="required email form-control">
                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="col-lg-2 control-label " for="address">Address *</label>
                                <div class="col-lg-10">
                                    <input id="address" name="address" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="col-lg-12 control-label ">(*) Mandatory</label>
                            </div>

                        </section>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection

@section('modals')

@endsection

@section('extra-header')

    <!--Form Wizard-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/jquery.steps/demo/css/jquery.steps.css') }}" />

@endsection

@section('extra-javascript')
    <!--Form Validation-->
    <script src="{{ asset('assets/plugins/bootstrapvalidator/dist/js/bootstrapValidator.js') }}" type="text/javascript"></script>

    <!--Form Wizard-->
    <script src="{{ asset('assets/plugins/jquery.steps/build/jquery.steps.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-validation/dist/jquery.validate.min.js') }}"></script>

    <!--wizard initialization-->
    <script src="{{ asset('assets/pages/jquery.wizard-init.js') }}" type="text/javascript"></script>
@endsection