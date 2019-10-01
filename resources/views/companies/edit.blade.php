@extends('layout')

@section('content')
    <h1 class="title">{{trans('app.EditCompany')}}</h1>
    <form method="post" action="/companies/{{$company->id}}" style="margin-bottom: 15px">
        @method('patch')
        @csrf
        <div class="field">
            <label class="label" for="title">{{trans('app.CompanyName')}}</label>
            <div class="control">
                <input type="text" class="input" name="name" placeholder="Name" value="{{$company->name}}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="title">{{trans('app.Email')}}</label>
            <div class="control">
                <input type="text" class="input" name="email" placeholder="Email" value="{{$company->email}}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="title">{{trans('app.Website')}}</label>
            <div class="control">
                <input type="text" class="input" name="website" placeholder="Website" value="{{$company->website}}">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">{{trans('app.UpdateCompany')}}</button>
            </div>
        </div>
    </form>

    @include('errors')

    <form method="post" action="/companies/{{$company->id}}">
        @method('delete')
        @csrf
        <div class="field">
            <div class="control">
                <button type="submit" class="button">{{trans('app.DeleteCompany')}}</button>
            </div>
        </div>
    </form>
@endsection


