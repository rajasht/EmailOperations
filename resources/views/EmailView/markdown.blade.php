@component('mail::message')
# Happy Birthday {{$name}}

Keep Growing, Keep Shining.......

@component('mail::button', ['url' => ''])
Birthday Present
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
