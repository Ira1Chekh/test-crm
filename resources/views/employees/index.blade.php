@extends('layout')

@section('content')
    <div class="box">
        <h1 class="title">{{trans('app.Employees')}}</h1>

        <form action="/employees/create">
            @csrf
            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-success">{{trans('app.CreateEmployee')}}</button>
                </div>
            </div>
        </form>

        <div class="box" style="margin-top: 20px">
            <h2 class="subtitle">{{trans('app.EmployeesList')}}</h2>
            <table class="table is-bordered">
                <thead>
                <tr>
                    <th>{{trans('app.first_name')}}</th>
                    <th>{{trans('app.last_name')}}</th>
                    <th>{{trans('app.CompanyName')}}</th>
                    <th>{{trans('app.Email')}}</th>
                    <th>{{trans('app.phone_number')}}</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($employees as $employee)
                    <tr>
                        <td><a href="/employees/{{$employee->id}}">{{$employee->first_name}}</a></td>
                        <td>{{$employee->last_name}}</td>
                        <td>
                            @foreach ($companies as $company)
                                @if ($employee->company_id === $company->id)
                                    {{$company->name}}
                                    @break
                                @endif
                            @endforeach
                        </td>
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
        <? echo $employees->render() ?>
    </div>
@endsection
