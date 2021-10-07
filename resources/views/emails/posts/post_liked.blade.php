@component('mail::message')
# Seu post foi gostado

{{$liker->name}} gostou de um dos seus posts

{{--@component('mail::button', ['url' => route('posts.show', $post)])--}}
{{--    View post--}}
{{--@endcomponent--}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
