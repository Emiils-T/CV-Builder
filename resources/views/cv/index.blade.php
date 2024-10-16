<x-app-layout>
    @if($cv->empty())
        <div class="content-center"> Appears that you have no cv's. </div>
    @endif
    @foreach($cv as $resume)
        <div>{{$resume->title}}</div>
    @endforeach
</x-app-layout>
