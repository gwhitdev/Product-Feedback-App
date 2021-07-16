<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table>
                    <thead>
                        <tr>
                            <th>Feedback ID</th>
                            <th>Title</th>
                            <th>Details</th>
                            <th>Comments</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Utils</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($feedback as $f)
                            <tr>
                                <td>{{ $f->id }}</td>
                                <td><a href="/feedback/{{$f->id}}">{{ $f->title }}</a></td>
                                <td>{{ $f->detail }}</td>
                                <td><a href="/feedback/{{$f->id}}/comments">{{ $f->comment()->get()->count()}}</a></td>
                                <td>{{ $f->category()->get('category_name')[0]->category_name}}</td>
                                <td>{{ $f->status()->get('status')[0]->status}}</td>
                                <td><a href="/feedback/{{$f->id}}/delete"class="text-red-100">Delete</a></td>
                                </tr>
                            @endforeach
                    </tbody>
            </div>
        </div>
    </div>
</x-app-layout>
