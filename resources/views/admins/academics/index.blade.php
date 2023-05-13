@extends('layouts.app')

@section('section')

    @include('layouts.bread_crumb', ['title' => Str::ucfirst(request()->segment(2)), 'param1' => request()->segment(1), 'param2' => request()->segment(1)])
    @include('admins.academics.header')

@endsection