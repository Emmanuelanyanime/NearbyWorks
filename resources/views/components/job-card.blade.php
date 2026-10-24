@props(['job'])

@php
    $posted = \Illuminate\Support\Carbon::parse($job['posted_at'])->diffForHumans();
@endphp

<article {{ $attributes->class('nw-job') }}>
    <header class="nw-job__top">
        <x-company-mark :company="$job['company']" />
        <div>
            <p class="nw-job__company">{{ $job['company'] }}</p>
            <p class="nw-job__posted"><x-icon name="clock" /> {{ $posted }}</p>
        </div>
        <span class="nw-job__badge">{{ $job['workplace'] }}</span>
    </header>

    <h3 class="nw-job__title"><a href="{{ route('jobs.show', $job['id']) }}">{{ $job['title'] }}</a></h3>
    <p class="nw-job__summary">{{ $job['summary'] }}</p>

    <ul class="nw-job__meta" aria-label="{{ __('Role details') }}">
        <li><x-icon name="map-pin" /> {{ $job['location'] }}</li>
        <li><x-icon name="briefcase" /> {{ $job['type'] }}</li>
        @if (! empty($job['salary']))
            <li><x-icon name="wallet" /> {{ $job['salary'] }}</li>
        @endif
    </ul>

    @if (! empty($job['tags']))
        <ul class="nw-job__tags" aria-label="{{ __('Skills') }}">
            @foreach ($job['tags'] as $tag)
                <li>{{ $tag }}</li>
            @endforeach
        </ul>
    @endif

    <div class="nw-job__footer">
        <x-apply-button :job="$job" class="nw-button--small" />
    </div>
</article>
