@extends('layouts.main')

@section('container')
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Age</th>
            <th scope="col">Time Of Revive</th>
            <th scope="col">Time Of Death</th>
            <th scope="col">Time Before Revive</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($customer_queue as $customers_queue)
          <tr>
            <td>{{ $customers_queue -> name }} </td>
            <td>{{ $customers_queue -> address }} </td>
            <td>{{ $customers_queue -> age }} </td>
            <td>{{ $customers_queue -> time_of_revive }}</td>
            <td>{{ $customers_queue -> time_of_death }}</td>
            <td>{{ $customers_queue -> time_before_revive }} </td>
            <td><a type="button" href="/customer_queue/detail/{{$customers_queue -> id}}">Detail</button></td>
          </tr>
          @endforeach
        </tbody>
      </table>

@endsection