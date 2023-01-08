@component('mail::message')
Hello admin

There is a deposit request of usdt {{$amount}} from {{$username}}

The transaction hash is {{$hash}}


@component('mail::button', ['url' => 'https://nftspaces.co.uk/admin/deposits'])
Approve Transaction
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
