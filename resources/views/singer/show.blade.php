@extends('adminlte::page')

@section('template_title')
    {{ $singer->name ?? __('Show') . " " . __('Singer') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Singer</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('singers.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Singers:</strong>
                                    {{ $singer->id_singers }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Name:</strong>
                                    {{ $singer->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Gender:</strong>
                                    {{ $singer->gender }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
