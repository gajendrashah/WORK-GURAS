<!-- Indicators -->
{{--<ol class="carousel-indicators">
    @if($firstSlider)
    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
    @endif
    @php
    $count = 1;
    @endphp
    @foreach ($otherSlider as $item)

    <li data-target="#carousel-example-1z" data-slide-to="{{ $count }}"></li>
    @php
    $count++;
    @endphp
    @endforeach
</ol>--}}
<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox"  >
    @if($firstSlider)
    <div class="carousel-item active">
        <div class="position-relative">
            <img src="{{ asset(config('dashboard.slider') . $firstSlider->image) }}" alt="{{ $firstSlider->title }}">
            <div class="desc_ban position-absolute">
                <div class="tab-pane banner_tabs">
                    <h3 class="h3-responsive">{{ $firstSlider->title }}</h3>
                    <div style="background:#fff; height:3px; width:1em; margin:2px 0;"></div>
                    <p class="d-block">
                        {{ $firstSlider->description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    @endif
    @foreach ($otherSlider as $item)
    <div class="carousel-item">
        <div class="position-relative">
            <img src="{{ asset(config('dashboard.slider') . $item->image) }}" alt="{{ $item->title }}">
            <div class="desc_ban position-absolute">
                <div class="tab-pane banner_tabs">
                    <h3 class="h3-responsive">{{ $item->title }}</h3>
                    <div style="background:#fff; height:3px; width:1em; margin:2px 0;"></div>
                    <p class="d-block">
                        {{ $item->description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<!--Controls-->
<a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>
<!--/.Controls-->