@component('mail::message')
# Congrats &#x1F44D; &#x1F44D;

Thanks For Using Our service. 

You collect {{$point->points}} Racs in Your Earnings.

After you complete the milestone Money will trasfered in your bank Account.

Good Luck,

{{$point->recieving_email}}

@component('mail::button', ['url' => '/'])
Watch Earnings
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
