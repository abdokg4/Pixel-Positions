@props(['job'])
<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">{{$job->employer->name}}</div>
    <div class="py-8">
        <h3 class="text-xl font-bold group-hover:text-blue-800 transition-colors duration-500">
            <a href="{{$job->url}}">
                {{$job->title}}
            </a>
        </h3>
        <p class="text-sm mt-4">{{$job->schedule}} - From {{$job->salary}}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach($job->tags as $tag)
                <x-tag :$tag size="small"></x-tag>
            @endforeach

        </div>

        <x-employer-logo :width="42" :employer="$job->employer"/>
    </div>

</x-panel>
