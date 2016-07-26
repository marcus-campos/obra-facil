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

@endsection

@section('modals')

@endsection

@section('extra-header')

@endsection

@section('extra-javascript')

@endsection