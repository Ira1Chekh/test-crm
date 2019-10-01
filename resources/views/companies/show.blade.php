@extends('layout')

@section('content')
    <div class="box">
        <h1 class="title">{{$company->name}}</h1>
        <div class="content">
            <p>{{trans('app.Email')}}: {{$company->email}}</p>
            <p>{{trans('app.Website')}}: {{$company->website}}</p>
            @include('errors')

            <div class="box">
                <a href="/employees">{{trans('app.ShowEmployees')}}</a>
                <h2 class="subtitle">{{trans('app.EmployeesCompany')}}</h2>
                <form action="/employees/create">
                    @csrf
                    <div class="field">
                        <div class="control">
                            <button type="submit" class="button is-success">{{trans('app.CreateEmployee')}}</button>
                        </div>
                    </div>
                </form>
                <table class="table is-bordered" style="margin-top: 20px">
                    <thead>
                        <tr>
                            <th>{{trans('app.first_name')}}</th>
                            <th>{{trans('app.last_name')}}</th>
                            <th>{{trans('app.Email')}}</th>
                            <th>{{trans('app.phone_number')}}</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($employees as $employee)
                            <tr>
                                <td>{{$employee->first_name}}</td>
                                <td>{{$employee->last_name}}</td>
                                <td>{{$employee->email}}</td>
                                <td>{{$employee->phone}}</td>
                                <td>
                                    <form action="/employees/{{$employee->id}}/edit">
                                        @csrf
                                        <div class="field">
                                            <div class="control">
                                                <button type="submit" class="button">{{trans('app.EditEmployee')}}</button>
                                            </div>
                                        </div>
                                    </form>
                                    <form method="post" action="/employees/{{$employee->id}}">
                                        @method('delete')
                                        @csrf
                                        <div class="field">
                                            <div class="control">
                                                <button type="submit" class="button is-danger">{{trans('app.DeleteEmployee')}}</button>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection









