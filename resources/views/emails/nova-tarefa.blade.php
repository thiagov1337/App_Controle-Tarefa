@component('mail::message')
# {{ $tarefa }}

Data limite de conclusão: {{ $data_limite_conclusao }}
@component('mail::button', ['url' => $url])
Clique aqui para ver a Tarefa
@endcomponent

att,<br>
{{ config('app.name') }}
@endcomponent
