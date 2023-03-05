<x-layout>


    @foreach ($projects as $project)
        <x-project 
        id="{{$project['id']}}"
        title="{{$project['title']}}"
        article="{{$project['article']}}"
        img="{{$project['img']}}"
        />
    @endforeach


</x-layout>