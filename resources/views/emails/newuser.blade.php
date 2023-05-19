@component('mail::message')
# {{$other_message['head']}}


{!! $other_message['msg1']  !!}

{!! $other_message['table'] !!}

@component('mail::button', ['url' => $other_message['url']])
{{$other_message['btn_label']}}
@endcomponent

{{$other_message['msg2']}}<br>

{{$other_message['msg3']}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent