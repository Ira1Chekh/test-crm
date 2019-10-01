@extends('layout')

@section('content')
    <h1 class="title">{{trans('app.CreateCompany')}}</h1>
    <form method="post" action="/companies">
        {{csrf_field()}}

        <div class="field">
            <label class="label" for="title">{{trans('app.CompanyName')}}</label>
            <div class="control">
                <input type="text" class="input {{$errors->has('name') ? 'is-danger' : ''}}" name="name"
                       value="{{old('name')}}" required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="title">{{trans('app.Email')}}</label>
            <div class="control">
                <input type="text" class="input {{$errors->has('email') ? 'is-danger' : ''}}" name="email"
                       value="{{old('email')}}" required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="title">{{trans('app.Website')}}</label>
            <div class="control">
                <input type="text" class="input {{$errors->has('website') ? 'is-danger' : ''}}" name="website"
                       value="{{old('website')}}" required>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">{{trans('app.CreateCompany')}}</button>
            </div>
        </div>

        @include('errors')
    </form>
@endsection

