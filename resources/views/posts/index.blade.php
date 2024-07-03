<x-layout meta-title="Blog title" meta-description="Blog description">
    <h1>Blog</h1>
    <x-slot:sidebar>
        Blog sidebar
    </x-slot:sidebar>
    @foreach ($posts as $post)
        <h2>
            <a href="{{route('posts.show',$post)}}">
                {{$post->title}}
            </a>
        </h2>
    @endforeach
</x-layout>