@component('mail::message')
# Hello {{$name}}

Welcome to {{ config('app.name') }}, we are delighted to have you onboard our platform. Start earning from the 
sale of Nfts today.

#How to start earning
1. Signup and verify your account.
2. Purchase nft from our marketplace.
3. HODL(Hold) the nft to increase its market value for a minimum of two weeks.
4. Earn by the sale.


@component('mail::button', ['url' => 'https://nftspaces.co.uk'])
Purchase nft
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
