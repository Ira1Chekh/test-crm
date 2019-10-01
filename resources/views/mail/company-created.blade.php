@component('mail::message')
# New Company

Company {{$company->name}} is created.

@component('mail::button', ['url' => url('/companies/' . $company->id)])
View company
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
