<x-app-layout>
    <div class="container mx-auto p-4">
        <div class="p-4 lg:px-24">
            <div class="sm:bg-rmWhite sm:shadow sm:rounded-md sm:p-8">
                <div class="mt-4">
                    <div class="xl:px-20">
                        @isset ($latestBlogPost)
                            <h1 class="m:pt-2 text-rmTeal font-bebas sm:text-9xl text-6xl">{{ $latestBlogPost->title }}</h1>
                            <h2 class="text-rmBlue-dark text-2xl font-bebas">{{ $latestBlogPost->posted_at->format('l jS F Y') }}</h2>
                            <h3 class="mb-4 text-rmBlue-light font-bebas">By {{ $latestBlogPost->user_name }}</h3>
                            <div class="pb-8">
                                {!! $latestBlogPost->content !!}
                                <br>
                                <p>Thanks, Rheanne</p>
                                <img class="p-8 w-1/5" src="{{url('/images/rm_patterned_logo.png')}}" alt="Image"/>
                            </div>
                        @endisset
                        @foreach ($blogPosts as $blogPost)
                            <hr class="pb-8">
                            <h1 class="m:pt-2 text-rmTeal font-bebas sm:text-9xl text-6xl">{{ $blogPost->title }}</h1>
                            <h2 class="text-rmBlue-dark text-2xl font-bebas">{{ $blogPost->posted_at->format('l jS F Y') }}</h2>
                            <h3 class="mb-4 text-rmBlue-light font-bebas">By {{ $blogPost->user_name }}</h3>
                            <div class="pb-8">
                                {!! $blogPost->content !!}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
