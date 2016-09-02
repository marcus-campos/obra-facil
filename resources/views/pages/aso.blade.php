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

                <form id="basic-form">
                    <div>
                        <h3>Horas diárias</h3>
                        <section>
                            <div class="form-group clearfix">
                                <label class="col-lg-3 control-label " for="hour_day">Quantas horas é esperado trabalhar em 01 dia para a obra?</label>
                                <div class="col-lg-9">
                                    <div class="form-group">
                                        <select class="form-control" id="hour_day" name="hour_day">
                                            @for($x = 1; $x <= 24; $x++)
                                                <option value="{{ $x }}">{{ $x < 2? $x.' hora por dia': $x.' horas por dia' }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label class="col-lg-3 control-label " for="category">Qual é a categoria do serviço a ser realizado?</label>
                                <div class="col-lg-9">
                                    <div class="form-group">
                                        <select class="form-control" id="category" name="category">
                                            <option value="#">Selecione uma categoria</option>
                                            @foreach($category as $cat)
                                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <span id="service_title"></span>
                                <div class="col-lg-9">
                                    <div class="form-group">
                                        <span id="service_span"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="col-lg-3 control-label " for="userName">Qual é o tamanho da obra (em metros)?</label>
                                <div class="col-lg-9">
                                    <div class="form-group">
                                        <input id="meters" name="meters" type="text" class="required form-control" placeholder="1" value="20" required>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <h3>Operarios</h3>
                        <section>
                            <span id="workers">Preencha todos os campos da etapa anterior....</span>
                        </section>
                        <h3>Resultado</h3>
                        <section>
                            <span id="result">Preencha todos os campos da etapa anterior....</span>
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
    <script src="{{ asset('assets/js/ajxscriptW.js') }}"></script>
@endsection