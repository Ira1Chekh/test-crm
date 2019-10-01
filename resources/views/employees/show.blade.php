@extends('layout')

@section('content')
    <div class="box">
        <h1 class="title">{{$employee->first_name}} {{$employee->last_name}}</h1>
        <p>{{trans('app.CompanyName')}}: {{$company->name}}</p>
        <p>{{trans('app.Email')}}: {{$employee->email}}</p>
        <p>{{trans('app.phone_number')}}: {{$employee->phone}}</p>
    </div>
@endsection
