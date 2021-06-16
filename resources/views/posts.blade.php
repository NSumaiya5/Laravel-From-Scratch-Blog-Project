

<x-layout>
    @include('_posts-header')

{{-- @foreach ($posts as $post )

    <article>

<h1><a href="/posts/{{$post->id}}">
{{$post->title}}</a></h1>
<div>{{$post->excerpt}}</div>

    </article>

@endforeach --}}



<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

    <x-post-featured-card :post="$posts"/>

<div class="lg:grid lg:grid-cols-2">
<x-post-card/>
<x-post-card/>
    </div>

    <div class="lg:grid lg:grid-cols-3">
<x-post-card/>
<x-post-card/>
<x-post-card/>





    </div>
</main>

</x-layout>
