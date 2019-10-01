@extends('layout')

@section('content')
    <h1 class="title">{{trans('app.CreateEmployee')}}</h1>
    <form method="post" action="/employees">
        {{csrf_field()}}

        <div class="field">
            <label class="label" for="title">{{trans('app.CompanyName')}}</label>
            <div class="control">
                <div class="select">
                    <select name="company_id" class="form-control">
                        @foreach ($companies as $company)
                            <option value="{{$company->id}}">{{$company->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="field">
            <label class="label" for="title">{{trans('app.first_name')}}</label>
            <div class="control">
                <input type="text" class="input {{$errors->has('first_name') ? 'is-danger' : ''}}" name="first_name"
                       value="{{old('first_name')}}" required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="title">{{trans('app.last_name')}}</label>
            <div class="control">
                <input type="text" class="input {{$errors->has('last_name') ? 'is-danger' : ''}}" name="last_name"
                       value="{{old('last_name')}}" required>
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
            <label class="label" for="title">{{trans('app.phone_number')}}</label>
            <div class="control">
                <input type="text" class="input {{$errors->has('phone') ? 'is-danger' : ''}}" name="phone"
                       value="{{old('phone')}}" required>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">{{trans('app.CreateEmployee')}}</button>
            </div>
        </div>

        @include('errors')
    </form>
@endsection


