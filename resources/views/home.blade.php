@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <p>商品名：{{ $product -> name }}</p>
                    <p>値段：{{ $product -> price }}</p>
                    <p>詳細：{{ $product -> detail }}</p>

                    ログインしました!

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
