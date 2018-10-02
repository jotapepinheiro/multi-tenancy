@extends('tenants.layouts.main')

@section('content')

<h1>Cadastrar nova empresa</h1>

<form action="{{ route('company.store') }}" method="post">
    @include('tenants.companies._partials.form')
</form>

@endsection