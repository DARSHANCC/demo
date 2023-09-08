@extends('admin.layout.app')
@section('heading')
    {{ 'index' }}
@endsection
@section('content')
    {{ 'hello' }}
@endsection

@section('bread-crumb')
    <li class="breadcrumb-item text-muted">Index</li>
    {{-- <li class="breadcrumb-item text-muted">Account</li> --}}
    {{-- <li class="breadcrumb-item text-dark">Billing</li> --}}
@endsection

@section('username', 'hello')
