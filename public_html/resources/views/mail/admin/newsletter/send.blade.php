<x-mail::message>

    <div>
        {!! $msg !!}
    </div>
    
    @lang('messages.t_regards'),
    {{ config('app.name') }}

</x-mail::message>