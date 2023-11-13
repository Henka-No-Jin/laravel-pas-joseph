@extends('layouts.main')

<style>
    body {
        font-family: 'Roboto', sans-serif;
        background-color: #f8f9fa;
        color: #343a40;
        margin: 0;
        padding: 0;
    }

    .customer-card {
        max-width: 600px;
        margin: 50px auto;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .customer-image {
        width: 100%;
        height: 700px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .customer-details {
        padding: 20px;
        text-align: center;
    }

    .customer-name {
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 10px;
        color: #007bff;
    }

    .customer-info {
        font-size: 18px;
        margin-bottom: 10px;
    }
</style>

@section('container')

<div class="customer-card">
    <img class="customer-image" src="{{ $revive -> image }}" alt="{{ $revive ->name }}">

    <div class="customer-details">
        <div class="customer-name">{{ $revive ->name }}</div>
        <div class="customer-info">{{ $revive->address }}</div>
        <div class="customer-info">Age: {{ $revive->age }}</div>
        <div class="customer-info">Time of Revive: {{ $revive->time_of_revive }}</div>
        <div class="customer-info">Revive Date: {{ $revive->revive_date }}</div>
    </div>
</div>
@endsection
