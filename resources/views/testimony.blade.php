@extends('layout.app')

@section('content')
<section class="probootstrap-section-bg overlay" style="background-image: url(../images/about/ABOUT.jpeg);" data-stellar-background-ratio="0.5" data-section="events">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center probootstrap-animate">
                {{-- judul dari tesimoni : What They  Said --}}
                <div class="probootstrap-heading">
                    <h2 class="primary-heading">What</h2>
                    <h3 class="secondary-heading">They Said</h3>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="probootstrap-section">
    <div class="container">
        <div class="row">
            @forelse ($testimonies as $key => $testimony)
                <div class="col-md-4 col-sm-4 probootstrap-animate">
                    <div class="probootstrap-block-image">
                        <figure><img src="{{ $testimony['image'] }}" alt="Free Bootstrap Template by uicookies.com"></figure>
                        <div class="text">
                            <span class="date">{{ $testimony['title'] }}</span>
                            <h3>"{{ $testimony['result'] }}"</h3>
                            <p>- {{ $testimony['name'] }}, {{ $testimony['profession'] }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-md-4 col-sm-4 probootstrap-animate">
                    <div class="probootstrap-block-image">
                        <figure><img src="" alt="Free Bootstrap Template by uicookies.com"></figure>
                        <div class="text">
                            <span class="date">-</span>
                            <h3>-</h3>
                            <p>-</p>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</section>
@endsection
