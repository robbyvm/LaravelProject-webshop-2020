@extends("layouts.master")

@section('content')
<h2>Profiel</h2>
<br>

<div class="mb-5">
    <hr>
    <div class="row mb-2">
        <div class="col-2">{{ __('Gebruikersnaam') }}</div>
        <div class="col-4">{{ $user->name }}</div>

        <div class="col-2">{{ __('Email') }}</div>
        <div class="col-4">{{ $user->email }}</div>
    </div>
</div>

<div class="mb-5">
    <hr>
    @if(isset($userInfo))
    <div class="row mb-2">
        <div class="col-2">{{ __('Naam') }}</div>
        <div class="col-4">{{ $userInfo->name }}</div>

        <div class="col-2">{{ __('Voornaam') }}</div>
        <div class="col-4">{{ $userInfo->firstName }}</div>
    </div>
    <div class="row mb-2">
        <div class="col-2">{{ __('Geslacht') }}</div>
        <div class="col-4">{{ $userInfo->sex == 'm' ? "Man" : "Vrouw" }}</div>

        <div class="col-2">{{ __('Geboortedatum') }}</div>
        <div class="col-4">{{ date('d/m/Y', strtotime($userInfo->birthDate)) }}</div>
    </div>
    @endif
</div>
@endsection