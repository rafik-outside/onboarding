<article @php(post_class())>
    @if ($imgUrl || $title)

        <header class="bg-mint post-content__header-gutter-l">
            <div class="container">
                <div class="row">
                    @if ($imgUrl)
                        <div class="col-md-8 ">
                            <img class="post-content__image" src="{{ $imgUrl }}" alt="{{ $imgAlt }}">
                        </div>
                    @endif
                    <div class="col-md-8 offset-md-4  text-white post-content__title-container">
                        <div class="p-xl-20 p-xl-20 p-md-10 p-6 bg-sky border-top-8 border-space">
                            <h1 class="h2 mb-0">
                                {{ $title }}
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            {{-- @include('partials.entry-meta') --}}
        </header>
        <div class="post-content">
            <div class="container">
                <div class="row">
                    <div class="entry-content   col-md-10 col-xl-8 mx-auto py-md-20 py-10">
                        @php(the_content())
                    </div>
                </div>
            </div>
        </div>
    @endif



    @if ($relatedPosts)
        <footer class="bg-blush py-xl-40  py-md-20 py-10">
            <div class="container">
                <div class="row">
                    @foreach ($relatedPosts as $relatedPost)
                        <div class="col-md-6 col-xl-4">
                            @component('components.post-card', [
                                'title' => $relatedPost['title'],
                                'imgUrl' => $relatedPost['imageUrl'],
                                'imgAlt' => $relatedPost['imageAlt'],
                                'date' => $relatedPost['date'],
                                'postUrl' => $relatedPost['postUrl'],
                            ])
                            @endcomponent
                        </div>
                    @endforeach
                </div>
            </div>
        </footer>
    @endif

    @php(comments_template())


</article>
