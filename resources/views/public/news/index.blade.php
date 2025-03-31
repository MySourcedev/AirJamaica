@extends('layouts.app')

@section('content')
<section class="news-page py-5 bg-black text-white">
    <div class="container">
        <h2 class="text-center display-4 mb-5">Latest News</h2>

        <!-- News Cards -->
        <div class="row">
            @forelse($news as $item)
                <div class="col-md-4 mb-4">
                    <div class="card shadow hover-card bg-dark text-white">
                        @if($item->hasMedia('featured_image'))
                            <img src="{{ $item->getFirstMediaUrl('featured_image') }}" alt="{{ $item->title }}" class="card-img-top">
                        @else
                            <img src="{{ asset('images/default-news.jpg') }}" alt="Default news image" class="card-img-top">
                        @endif
                        <div class="card-body">
                            <h3 class="card-title mb-3">{{ $item->title }}</h3>
                            <div class="trix-content card-text">
                                {!! Str::limit(strip_tags($item->content), 150) !!}
                            </div>
                            <a href="{{ route('news.show', $item->slug) }}" class="btn btn-primary mt-3">Read More</a>
                        </div>
                        <div class="card-footer bg-transparent border-top-0">
                            <small class="text-muted">
                                Published {{ $item->published_at->diffForHumans() }}
                            </small>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info text-center">
                        No news articles found.
                    </div>
                </div>
            @endforelse
        </div>

        {{ $news->links() }}
    </div>
</section>
@endsection