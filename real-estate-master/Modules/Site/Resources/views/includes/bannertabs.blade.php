<div class="position-absolute" style="top:25%; left:15%">
    <ul class="nav nav-tabs" id="myTabBanner" role="tablist">
        <li class="nav-item">
            <a class="nav-link banner_link active" id="Sell-tab" data-toggle="tab" href="#Sell" role="tab" aria-controls="Sell"
                aria-selected="true">Selling</a>
        </li>
        <li class="nav-item">
            <a class="nav-link banner_link" id="buy-tab" data-toggle="tab" href="#buy" role="tab" aria-controls="buy"
                aria-selected="false">Buying</a>
        </li>
        <li class="nav-item">
            <a class="nav-link banner_link" id="rent-tab" data-toggle="tab" href="#rent" role="tab" aria-controls="rent"
                aria-selected="false">Rent</a>
        </li>
    </ul>
    <div class="tab-content banner_tab_content" id="myTabContent">
        <div class="tab-pane banner_tabs fade show active" id="Sell" role="tabpanel" aria-labelledby="Sell-tab">
            <p class="d-block">
                Sell your home
                faster
                and <br>for more money
            </p>
            <div class="button my-5">
                <a class="view-all-bottom mt-4" href="{{route('sellingguide')}}">Read More</a>
            </div>
        </div>
        <div class="tab-pane banner_tabs fade" id="buy" role="tabpanel" aria-labelledby="buy-tab">
            <p class="d-block">
                Your perfect home is out
                there.<br>
                We'll help you get it.
            </p>
            <div class="button my-5">
                <a class="view-all-bottom mt-4" href="{{route('buyingguide')}}">Read More</a>
            </div>
        </div>
        <div class="tab-pane banner_tabs fade" id="rent" role="tabpanel" aria-labelledby="rent-tab">
            <p class="d-block">
                Your perfect home is out
                there.<br>
                We'll help you get it for Rent.
            </p>
            <div class="button my-5">
                <a class="view-all-bottom mt-4" href="">Read More</a>
            </div>
        </div>
    </div>
</div>