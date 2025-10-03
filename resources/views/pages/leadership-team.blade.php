@extends('main-layout.app')

@section('content')
<!-- Our Team Section Start -->
<div class="our-team" id="leadership-team">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">our team</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">
                        Driven by Talent, Guided by Values
                        <span>Our Team Is the Heart of Everything We Do</span>
                    </h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            @foreach($leaders as $leader)
                <div class="col-lg-6 col-md-6">
                    <div class="team-member-item wow fadeInUp">
                        <div class="team-content">
                            <h3><a href="#">{{ $leader->name }}</a></h3>
                            <p>{{ $leader->position }}</p>
                        </div>

                        @if($leader->content1)
                            <p>{!! html_entity_decode($leader->content1) !!}</p>
                        @endif

                        @if($leader->content2)
                            <p>{!! html_entity_decode($leader->content2) !!}</p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Our Team Section End -->
@endsection
