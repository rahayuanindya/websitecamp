@component('mail::message')
# Register Camp: {{ $checkout->Camp->title }}

Hi, {{ $checkout->User->name }}
<br>
Thank You For Register On <b>{{ $checkout->Camp->title }}</b>, please see payment instruction by click the button below.

@component('mail::button', ['url' => route('user.checkout.invoice', $checkout->id)])
Get Invoice
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
