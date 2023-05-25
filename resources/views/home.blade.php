@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body" style="font-size:30px;font-weight:bold;color:green;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    تم تسجيل الدخول بنجاح 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
