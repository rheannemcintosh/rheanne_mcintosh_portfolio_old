<x-app-layout>
    <div class="container mx-auto sm:p-4">
        <div class="sm:p-4 lg:px-24">
            <div class="">
                <div class="grid xl:grid-cols-3 lg:grid-cols-2 grid-cols-1 gap-8">
                    @foreach ($portfolios as $portfolio)
                        <a href="{{$portfolio->github_url}}">
                            <div class="bg-rmWhite rounded-lg shadow p-4 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                                <div class="{{$portfolio->colour}} p-4 2xl:text-6xl lg:text-5xl text-5xl h-60 mb-2">
                                    <h1 class="text-white font-bebas">{{$portfolio->name}}</h1>
                                </div>
                                <div class="inline-block {{$portfolio->language_colour}} text-white font-bebas py-0.5 px-4 rounded-full">
                                    <h1>{{$portfolio->language}}</h1>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>