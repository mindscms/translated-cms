@extends('layouts.admin')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-primary">{{ __('Backend/users.add_new_user') }}</h6>
            <div class="ml-auto">
                <a href="{{ route('admin.users.index') }}" class="btn btn-primary">
                    <span class="icon text-white-50">
                        <i class="fa fa-home"></i>
                    </span>
                    <span class="text">{{ __('Backend/users.users') }}</span>
                </a>
            </div>
        </div>
        <div class="card-body">

            {!! Form::open(['route' => 'admin.users.store', 'method' => 'post', 'files' => true]) !!}
            <div class="row">
                <div class="col-3">
                    <div class="form-group">
                        {!! Form::label('name', __('Backend/users.name')) !!}
                        {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                        @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        {!! Form::label('username', __('Backend/users.username')) !!}
                        {!! Form::text('username', old('username'), ['class' => 'form-control']) !!}
                        @error('username')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        {!! Form::label('email', __('Backend/users.email')) !!}
                        {!! Form::text('email', old('email'), ['class' => 'form-control']) !!}
                        @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        {!! Form::label('mobile', __('Backend/users.mobile')) !!}
                        {!! Form::text('mobile', old('mobile'), ['class' => 'form-control']) !!}
                        @error('mobile')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-3">
                    <div class="form-group">
                        {!! Form::label('password', __('Backend/users.password')) !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                        @error('password')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        {!! Form::label('status', __('Backend/users.status')) !!}
                        {!! Form::select('status', ['' => '---', '1' => __('Backend/users.active'), '0' => __('Backend/users.inactive')],old('status'), ['class' => 'form-control']) !!}
                        @error('status')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        {!! Form::label('receive_email', __('Backend/users.receive_email')) !!}
                        {!! Form::select('receive_email', ['' => '---', '1' => __('Backend/users.yes'), '0' => __('Backend/users.no')],old('receive_email'), ['class' => 'form-control']) !!}
                        @error('receive_email')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        {!! Form::label('bio', __('Backend/users.bio')) !!}
                        {!! Form::textarea('bio', old('bio'), ['class' => 'form-control']) !!}
                        @error('bio')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="row pt-4">
                <div class="col-12">
                    {!! Form::label('user_image', __('Backend/users.image')) !!}
                    <br>
                    <div class="file-loading">
                        {!! Form::file('user_image', ['id' => 'user-image', 'class' => 'file-input-overview']) !!}
                        <span class="form-text text-muted">{{ __('Backend/users.image_hint') }}</span>
                        @error('user_image')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="form-group pt-4">
                {!! Form::submit(__('Backend/users.submit'), ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection
@section('script')
    <script>
        $(function () {
            $('#user-image').fileinput({
                theme: "fas",
                maxFileCount: 1,
                allowedFileTypes: ['image'],
                showCancel: true,
                showRemove: false,
                showUpload: false,
                overwriteInitial: false,
            });
        });
    </script>
@endsection
