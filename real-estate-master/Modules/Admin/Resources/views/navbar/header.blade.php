<div class="row admin-sub-menu-header">
	<div class="col-md-8 col-md-offset-2">
        @if(Auth::user())
	    	<nav class="navbar">
		        <div class="">
			        <ul class="nav nav-pills admin-sub-menu">
                    @foreach($menu['sub'] as $item)
						<li class={{ $item['active'] ? 'active' : '' }}> <a href= {{ $item['route'] }}> {{ $item['label'] }} </a> </li>
					@endforeach
			        </ul>
		        </div>
	    	</nav>
	    @endif
	</div>
</div>

<div class="col-md-2 admin-header">
    @if(Auth::user())
    	<nav class="navbar">
	        <div class="">
		        <ul class="nav nav-pills nav-stacked admin-main-menu">
				@foreach($menu['main'] as $item)
					<li class={{ $item['active'] ? 'active' : '' }}> <a href= {{ $item['route'] }}> {{ $item['label'] }} </a> </li>
				@endforeach
		        </ul>
	        </div>
    	</nav>
    @endif
</div>
