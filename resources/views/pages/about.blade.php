@extends('layouts.web')

@section('content')
    @include('components.jumbo', ['title' => __('main.about us')])

    <section class="about my-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p>
                        {{ config('app.name') }}{{ __('main.aboutOne') }} <span class="text-main">Sean
                            Tv</span>{{ __('main.aboutTwo') }}
                    </p>
                    <p>
                        {{ __('main.aboutThree') }}
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/{{ $video->url }}" title="YouTube video"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <hr>
            <div class="section-title">
                <h1 style="font-size:20px !important">{{ __('main.how do I start earning from') }} {{ config('app.name') }}?
                </h1>
            </div>
            @include('components.how-to-earn')
        </div>
    </section>
@endsection
