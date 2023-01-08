@component('mail::message')
Hello {{$username}}

We have received your request to deposit usdt {{$amount}}, Please note that this request will be credited if the 
funds have been fully received.

This is your hash

{{$hash}}

@component('mail::button', ['url' => 'https://nftspaces.co.uk/user/deposits'])
View status
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
