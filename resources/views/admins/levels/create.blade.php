@extends('layouts.app')

@section('content')

@include('layouts.bread_crumb', ['title' => Str::ucfirst(request()->segment(2)), 'param1' => request()->segment(1), 'param2' => request()->segment(1)])
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="form-validation">
                <form class="form-valide" action="{{ route('levels.store') }}" method="POST">
                @csrf
                @include('admins.levels.field')
                </form>

            </div>
        </div>
    </div>
</div>

@endsection