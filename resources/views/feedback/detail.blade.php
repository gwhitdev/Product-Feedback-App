<x-app-layout>
    @if($feedback)
        <li>Title: {{ $feedback->title }}</li>
        <li>Detail: {{ $feedback->detail }}</li>
        <li>Votes: {{ $feedback->votes }}</li>
        <li>Comments count: {{ $feedback->comment()->get()->count() }}</li>
    @endif
    
    </x-app-layout>