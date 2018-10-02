@extends('tenants.layouts.main')

@section('content')

<h1>Detalhes da empresa <b>{{ $company->name }}</b></h1>

<form action="{{ route('company.update', $company->id) }}" method="post">
    <input type="hidden" name="_method" value="PUT">

    @include('tenants.companies._partials.form')
</form>

@endsection