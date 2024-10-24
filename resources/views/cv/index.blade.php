<x-app-layout>
    @if(Auth::check()==null)
            <div class="flex justify-center w-full">
                <div class="content-center"> Please login to create a cv. </div>
            </div>
    @else
        @if($cv->empty())
            <div class="flex justify-center w-full">
                <div class="content-center"> Appears that you have no cv's. </div>
            </div>
        @endif
    @endif
    @foreach($cv as $resume)
        <div>{{$resume->title}}</div>
    @endforeach
</x-app-layout>
