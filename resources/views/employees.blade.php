@extends('layouts.base-layout')

@section('content')
    <ul>
        @foreach ($employees as $employee)
            <li>
                {{ $employee->name }} {{ $employee->last_name }} - #tasks: {{ $employee->tasks()->count() }}
            </li>            
        @endforeach
    </ul>
@endsection