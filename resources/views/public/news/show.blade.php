@extends('layouts.app')

@section('content')
<section class="news-page py-5 bg-black text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <article class="card bg-dark text-white">
                    @if($newsItem->hasMedia('featured_image'))
                        <img src="{{ $newsItem->getFirstMediaUrl('featured_image') }}" class="card-img-top" alt="{{ $newsItem->title }}">
                    @endif
                    <div class="card-body">
                        <h1 class="card-title mb-4">{{ $newsItem->title }}</h1>
                        <div class="d-flex align-items-center mb-4">
                            <small class="text-muted">
                                Published {{ $newsItem->published_at->format('F j, Y') }}
                            </small>
                        </div>
                        <div class="trix-content">
                            {!! $newsItem->content !!}
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="{{ route('news.index') }}" class="btn btn-outline-light">
                            &larr; Back to News
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
@endsection