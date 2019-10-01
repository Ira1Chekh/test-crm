@extends('layout')

@section('content')
    <div class="box">
        <h1 class="title">{{trans('app.Companies')}}</h1>

        <form action="/companies/create">
            @csrf
            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-success">{{trans('app.CreateCompany')}}</button>
                </div>
            </div>
        </form>

        <div class="box" style="margin-top: 20px">
            <h2 class="subtitle">{{trans('app.CompaniesList')}}</h2>
            <table class="table is-bordered">
                <thead>
                    <tr>
                        <th>{{trans('app.CompanyName')}}</th>
                        <th>{{trans('app.Email')}}</th>
                        <th>{{trans('app.Website')}}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($companies as $company)
                        <tr>
                            <td><a href="/companies/{{$company->id}}">{{$company->name}}</a></td>
                            <td>{{$company->email}}</td>
                            <td>{{$company->website}}</td>
                            <td>
                                <form action="/companies/{{$company->id}}/edit">
                                    @csrf
                                    <div class="field">
                                        <div class="control">
                                            <button type="submit" class="button">{{trans('app.EditCompany')}}</button>
                                        </div>
                                    </div>
                                </form>
                                <form method="post" action="/companies/{{$company->id}}">
                                    @method('delete')
                                    @csrf
                                    <div class="field">
                                        <div class="control">
                                            <button type="submit" class="button is-danger">{{trans('app.DeleteCompany')}}</button>
                                        </div>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <? echo $companies->render() ?>
    </div>

@endsection
