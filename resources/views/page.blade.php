<x-layouts.page-layout :title="$page->title">
    <div class="prose p-10 w-screen">
        <h1>{{$page->name}}</h1>
        <div class="w-full">
            {!! $page->content !!}
        </div>
    </div>
</x-layouts.page-layout>
