@extends('layout')

@section('content')
    <h1 class="title">{{trans('app.EditEmployee')}}</h1>
    <form method="post" action="/employees/{{$employee->id}}" style="margin-bottom: 15px">
        @method('patch')
        @csrf
        <div class="field">
            <label class="label" for="title">{{trans('app.CompanyName')}}</label>
            <div class="control">
                <div class="select">
                    <select name="company_id" class="form-control">
                        @foreach ($companies as $company)
                            @if ($employee->company_id === $company->id)
                            @else
                                <option value="{{$company->id}}">{{$company->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="field">
            <label class="label" for="title">{{trans('app.first_name')}}</label>
            <div class="control">
                <input type="text" class="input" name="first_name" placeholder="First name" value="{{$employee->first_name}}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="title">{{trans('app.last_name')}}</label>
            <div class="control">
                <input type="text" class="input" name="last_name" placeholder="Last name" value="{{$employee->last_name}}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="title">{{trans('app.Email')}}</label>
            <div class="control">
                <input type="text" class="input" name="email" placeholder="Email" value="{{$employee->email}}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="title">{{trans('app.phone_number')}}</label>
            <div class="control">
                <input type="text" class="input" name="phone" placeholder="Phone" value="{{$employee->phone}}">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">{{trans('app.UpdateEmployee')}}</button>
            </div>
        </div>
    </form>

    @include('errors')

    <form method="post" action="/companies/{{$employee->id}}">
        @method('delete')
        @csrf
        <div class="field">
            <div class="control">
                <button type="submit" class="button">{{trans('app.DeleteEmployee')}}</button>
            </div>
        </div>
    </form>
@endsection
