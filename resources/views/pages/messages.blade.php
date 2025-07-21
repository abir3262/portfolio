@extends('layouts.app')
@section('title', 'All Messages')
@section('content')

<section style="padding: 40px;">
  <h2>All Messages</h2>
  <table border="1" cellpadding="10">
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Message</th>
      <th>Time</th>
    </tr>
    @foreach($messages as $msg)
      <tr>
        <td>{{ $msg->name }}</td>
        <td>{{ $msg->email }}</td>
        <td>{{ $msg->message }}</td>
        <td>{{ $msg->created_at->diffForHumans() }}</td>
      </tr>
    @endforeach
  </table>
</section>

@endsection
