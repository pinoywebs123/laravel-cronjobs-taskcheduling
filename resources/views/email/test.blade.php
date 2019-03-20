@component('mail::message')
Total number of registered users for today is: {{ $count }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
