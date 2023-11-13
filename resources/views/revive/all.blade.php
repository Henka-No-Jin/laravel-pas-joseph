@extends('layouts.main')

@section('container')
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Age</th>
            <th scope="col">Time Of Revive</th>
            <th scope="col">Revive Date</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($revive as $revives)
          <tr>
            <td>{{ $revives -> name }} </td>
            <td>{{ $revives -> address }} </td>
            <td>{{ $revives -> age }} </td>
            <td>{{ $revives -> time_of_revive }}</td>
            <td>{{ $revives -> revive_date }} </td>
            <td><a type="button" href="/revive/detail/{{$revives  -> id}}">Detail</button></td>
          </tr>
          @endforeach
        </tbody>
      </table>

@endsection