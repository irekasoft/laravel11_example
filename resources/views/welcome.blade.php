@extends('layouts.master')

@section('content')
<center>
  <?php echo \Illuminate\Foundation\Inspiring::quote(); ?>
</center>

<a href="/login">Login</a> | <a href="/register">Register</a>

<div id="Welcome" data-message="123"></div>
@vite(['resources/react/Welcome.jsx'])

@endsection
