@extends('layouts.main-layout')


@section('content')
  <table>
    <tr>
      <th>NAME</th>
      <th>LASTNAME</th>
    </tr>
  @foreach ($paganti as $pagante)
    <tr>
      <td>{{$pagante -> name }}</td>
      <td>{{$pagante -> lastname}}</td>
    </tr>
  @endforeach
</table>

@endsection
