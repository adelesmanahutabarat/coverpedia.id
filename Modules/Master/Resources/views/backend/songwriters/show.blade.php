@extends('layouts.vertical')

@section('title') {{ __($module_action) }} {{ $module_title }} @endsection

@section('breadcrumb')
<x-backend-breadcrumbs>
    <x-backend-breadcrumb-item route='{{route("backend.$module_name.index", $$module_name_singular->id)}}'
        icon='{{ $module_icon }}'>
        {{ $module_title }}
    </x-backend-breadcrumb-item>
    <x-backend-breadcrumb-item type="active">{{ __($module_action) }}</x-backend-breadcrumb-item>
</x-backend-breadcrumbs>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col">
                <h4 class="card-title mb-0">
                    <i class="{{$module_icon}}"></i> {{ $module_title }}
                    <small class="text-muted">{{ __('labels.backend.users.edit.action') }} </small>
                </h4>
                <div class="small text-muted">
                    {{ $module_title }} Management
                </div>
            </div>
            <!--/.col-->
            <div class="col-4">
                <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                    <x-buttons.return-back />
                </div>
            </div>
            <!--/.col-->
        </div>
        <!--/.row-->

        <hr>

        <div class="row mt-4 view">
            <div class="col">
                {{ html()->form('PATCH', route("backend.$module_name.update", $$module_name_singular->id))->class('form-horizontal')->open() }}
                {{ csrf_field() }}

                <table class="table table-hover">
                    <tr>
                        <td>Name</td>
                        <td>:</td>
                        <td>{{ $$module_name_singular->name }}</td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td>:</td>
                        <td>{{ $$module_name_singular->description }}</td>
                    </tr>
                </table>

                {{ html()->form()->close() }}
            </div>
        </div>

    </div>

    <div class="card-footer">
        <div class="row">
            <div class="col">
                <small class="float-right text-muted">

                </small>
            </div>
        </div>
    </div>
</div>

@endsection