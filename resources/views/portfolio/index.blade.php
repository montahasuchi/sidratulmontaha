@extends('layouts.app')

@section('title', 'Sidratul Montaha | Graphics & UI/UX Designer')

@section('content')



{{-- ABOUT / PROFILE SECTION --}}
<section id="about" class="mb-5">

    <div class="card border-0 shadow-sm rounded-4 p-4 p-lg-5 about-card">

        <div class="row align-items-center g-4">

            {{-- LEFT SIDE → Intro --}}
            <div class="col-lg-7">

                <h1 class="fw-bold mb-2">
                    Hi, I'm <span class="text-accent">{{ $profile['name'] }}</span>
                </h1>

                <h4 class="text-muted fw-semibold mb-3">
                    {{ $profile['title'] }}
                </h4>

                <p class="lead text-light-soft mb-3">
                    {{ $profile['tagline'] }}
                </p>

                <p class="text-muted mb-4">
                    {{ $profile['about'] }}
                </p>

                <div class="d-flex flex-wrap gap-3 mb-4">

                    <span class="badge-soft">
                        <strong>{{ $profile['experience_years'] }}</strong> years experience
                    </span>

                    <span class="badge-soft">
                        Based in {{ $profile['location'] }}
                    </span>

                </div>

                <div class="d-flex flex-wrap align-items-center gap-3">
                    <span class="text-light-soft small">Main Tools:</span>

                    @foreach($profile['main_tools'] as $tool)
                        <span class="badge-tool">{{ $tool }}</span>
                    @endforeach
                </div>
            </div>

            {{-- RIGHT SIDE → Avatar Card --}}
            <div class="col-lg-5">

                <div class="hero-card text-center p-4 p-lg-5">

                    <div class="avatar-circle mx-auto mb-3">
                        <span class="avatar-initials">
                            {{ strtoupper(substr($profile['name'], 0, 1)) }}
                            {{ strtoupper(substr(explode(' ', $profile['name'])[1], 0, 1)) }}
                        </span>
                    </div>

                    <h3 class="mb-1">{{ $profile['name'] }}</h3>
                    <p class="text-muted mb-3">{{ $profile['title'] }}</p>

                    <p class="small text-muted mb-4">
                        {{ $profile['about'] }}
                    </p>

                    <div class="d-flex justify-content-center gap-3 social-links mt-3">

                        <a href="{{ $socials['behance'] }}" target="_blank">Behance</a>
                        <a href="{{ $socials['dribbble'] }}" target="_blank">Dribbble</a>
                        <a href="{{ $socials['linkedin'] }}" target="_blank">LinkedIn</a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<section id="experience" class="mb-5">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="h4 mb-0">Experience</h2>
        <span class="badge-soft">Real Client Work</span>
    </div>

    @foreach($experience as $exp)
        <div class="card border-0 shadow-sm rounded-4 exp-card mb-4">
            <div class="card-body p-4">

                <div class="d-flex justify-content-between flex-wrap mb-2">
                    <div>
                        <h3 class="h5 mb-1">{{ $exp['role'] }}</h3>
                        <p class="text-accent fw-semibold mb-0">{{ $exp['company'] }}</p>
                    </div>

                    <div class="text-end">
                        <p class="small text-muted mb-1">{{ $exp['duration'] }}</p>
                        <span class="badge badge-soft-sm">{{ $exp['type'] }}</span>
                    </div>
                </div>

                <p class="text-muted mb-3">{{ $exp['description'] }}</p>

                <ul class="small text-muted mb-0">
                    @foreach($exp['highlights'] as $point)
                        <li>{{ $point }}</li>
                    @endforeach
                </ul>

            </div>
        </div>
    @endforeach

</section>
    <section id="projects" class="mb-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="h4 mb-0">Selected Projects</h2>
            <span class="text-muted small">More work available on Behance</span>
        </div>

        <div class="row g-4">
            @foreach($projects as $project)
                <div class="col-md-4">
                    <div class="card project-card border-0 h-100 rounded-4 shadow-sm">

                        <div class="project-image-wrapper">
                            <img src="{{ asset('images/' . $project['image']) }}">
                                 class="card-img-top"
                                 alt="{{ $project['title'] }}">
                            <span class="project-category">{{ $project['category'] }}</span>
                        </div>

                        <div class="card-body d-flex flex-column p-3">
                            <h5 class="card-title fw-semibold mb-1">
                                {{ $project['title'] }}
                            </h5>

                            <p class="card-text text-muted small mb-2">
                                {{ $project['description'] }}
                            </p>

                            <div class="mb-3">
                                @foreach($project['tools'] as $tool)
                                    <span class="badge-tool-sm">{{ $tool }}</span>
                                @endforeach
                            </div>

                            <a href="{{ $project['link'] }}" target="_blank"
                               class="mt-auto btn btn-sm btn-outline-accent">
                                View on Behance
                            </a>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </section>
<section id="contact" class="mb-5">
    <div class="card border-0 shadow-sm rounded-4">
        <div class="card-body p-4 p-lg-5 d-lg-flex justify-content-between align-items-center">

            <div class="mb-3 mb-lg-0">
                <h2 class="h4 mb-2">Let’s Work Together</h2>
                <p class="text-muted small mb-0">
                    English learning brand, social media design or UI/UX project থাকলে যোগাযোগ করতে পারেন।
                </p>
            </div>

            <div class="text-lg-end mt-4 mt-lg-0">
                <p class="small text-muted mb-2">Best way to reach me:</p>

                <a href="mailto:{{ $socials['email'] }}"
                   class="btn btn-accent">
                    Email: {{ $socials['email'] }}
                </a>

                <div class="d-flex gap-3 mt-3 justify-content-lg-end">

                    <a href="{{ $socials['behance'] }}" target="_blank" class="social-link">Behance</a>
                    <a href="{{ $socials['dribbble'] }}" target="_blank" class="social-link">Dribbble</a>
                    <a href="{{ $socials['linkedin'] }}" target="_blank" class="social-link">LinkedIn</a>

                </div>
            </div>

        </div>
    </div>
</section>
@endsection

