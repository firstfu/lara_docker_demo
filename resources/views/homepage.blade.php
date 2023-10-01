@extends('layout')


@section('content')
    {{-- @dd($blogs->toArray())); --}}
    <!-- Banner -->
    <!--
                                                                                                                                                                                       Note: To show a background image, set the "data-bg" attribute below
                                                                                                                                                                                       to the full filename of your image. This is used in each section to set
                                                                                                                                                                                       the background image.
                                                                                                                                                                                      -->
    <section id="banner" class="bg-img" data-bg="banner.jpg">
        <div class="inner">
            <header>
                <h1>This is Road Trip</h1>
            </header>
        </div>
        <a href="#one" class="more">Learn More</a>
    </section>

    <!-- One -->

    @foreach ($blogs as $blog)
        <section id="one" class="wrapper post bg-img" data-bg="{{ $blog->bg_ima }}">
            <div class="inner">
                <article class="box">
                    <header>
                        <h2>{{ $blog->title }}</h2>
                        <p>{{ $blog->created_at->format('Y.m.d') }}</p>
                    </header>
                    <div class="content">
                        <p>{{ $blog->excerpt }}</p>
                    </div>
                    <footer>
                        <a href="generic.html" class="button alt">Learn More</a>
                    </footer>
                </article>
            </div>
            <a href="#two" class="more">Learn More</a>
        </section>
    @endforeach
@endsection
