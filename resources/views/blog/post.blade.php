<x-app-layout>
    <div class="container mx-auto p-4">
        <div class="p-4 lg:px-24">
            <div class="sm:bg-rmWhite sm:shadow sm:rounded-md sm:p-8">
                <div class="mt-4">
                    <div class="xl:px-20">
                        <h1 class="m:pt-2 text-rmTeal font-bebas sm:text-9xl text-6xl">{{ $blogPost->title }}</h1>
                        <h2 class="text-rmBlue-dark text-2xl font-bebas">{{ $blogPost->created_at }}</h2>
                        <h3 class="mb-4 text-rmBlue-light font-bebas">By {{ $blogPost->user_name }}</h3>
                        <div>
                            {!! $blogPost->content !!}
                            <img class="p-8 w-3/6" src="{{url('/images/rm_patterned_logo.png')}}" alt="Image"/>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
