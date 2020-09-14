@component('mail::message')
# Welcome to Instra_clone

This is just a Instragram clone 😛😝

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
