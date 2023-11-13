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
        height: auto;
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
    <img class="customer-image" src="{{ $customer -> image }}" alt="{{ $customer -> name }}">

    <div class="customer-details">
        <div class="customer-name">{{ $customer->name }}</div>
        <div class="customer-info">{{ $customer->address }}</div>
        <div class="customer-info">Age: {{ $customer->age }}</div>
        <div class="customer-info">Time of Death: {{ $customer->time_of_death }}</div>
        <div class="customer-info">Death Date: {{ $customer->death_date }}</div>
        <div class="customer-info">Death Caused By: {{ $customer->death_caused_y }}</div>
    </div>
</div>
@endsection
