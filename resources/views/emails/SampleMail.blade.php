@component('mail::message')
# Introduction
Hello
The body of your message.



@if (!empty($url))
@component('mail::button', ['url' => $url])
View Order
@endcomponent
@endif


@component('mail::panel')
Dynamic Data :  {{ $data }}
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
