@extends('layouts.main')

@section('container')
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Age</th>
            <th scope="col">Time Of Death</th>
            <th scope="col">Dead cause by</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($customer as $customers)
          <tr>
            <td>{{ $customers -> name }} </td>
            <td>{{ $customers -> address }} </td>
            <td>{{ $customers -> age }} </td>
            <td>{{ $customers -> time_of_death }}</td>
            <td>{{ $customers -> death_caused_y }} </td>
            <td><a type="button" href="/customer/detail/{{$customers -> id}}">Detail</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>

@endsection