@extends('layouts.mainLayout')

@section('main')
@livewire('champions.champion-detail', ['Champion' => $Champion])
@endsection