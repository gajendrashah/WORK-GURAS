<h6></span>Sponsered Ads</h6>

<div class="wrapper">
    <div class="scrollbar">
        <ul>
            @foreach ($advertisement as $item)
                <li>
                    <a class="ads-link" href="{{ $item->link }}" target="_blank">
                        <div class="product-list" style="padding:0px; margin:5x 15px 15px 5px;">
                                <img src="{{ asset(config('dashboard.ads') . $item->file_name) }}" alt="img" style="height:100%;width:100%;">
                        </div>
                    </a>
                </li>        
            @endforeach
        </ul>
    </div>
</div>