<div class="search_bar_container position-absolute">
    <div class="search-box-wrapper" style="padding:20px 0;">
        <div class="search-box-inner">
            <div class="container">
                <div class="search-box map show-search-box">
                    <form method="get" action="{{ route('product-list.advsearch') }}" accept-charset="UTF-8"
                        class="form-horizontal search-form" role="form">
                        <div class="row">
                            <div class="col-sm-3 col-lg-3 m-2 easy-autocomplete eac-blue-light" style="padding:0">
                                <input type="text" name="quest" id="quest" class="form-control"
                                    placeholder="What are you looking for ?" autocomplete="off" required>
                            </div>
                            <div class="col-sm-3 col-lg-3 m-2" style=" padding:0;">
                                <select class="form-control" name="property_type" style="height:40px!important;">
                                    <option value="">Select Search Category</option>
                                    <option value="house">House</option>
                                    <option value="land">Land</option>
                                    <option value="appartment">Appartment</option>
                                    <option value="office">Office</option>
                                </select>
                            </div>
                            <div class="col-sm-1 col-lg-1 my-2 mx-1" style=" padding:0; max-width:12%; flex:0 0 12%">
                                <select class="form-control" name="from" style="height:40px!important;">
                                    <option value="">Min Price</option>
                                    <option value="10000">$10,000</option>
                                    <option value="50000">$50,000</option>
                                    <option value="100000">$100,000</option>
                                    <option value="500000">$500,000</option>
                                    <option value="1000000">$10,00,000</option>
                                    <option value="5000000">$50,00,000</option>
                                </select>
                            </div>
                            <div class="col-sm-1 col-lg-1 my-2 mx-1" style=" padding:0; max-width:12%; flex:0 0 12%">
                                <select class="form-control" name="to" style="height:40px!important;">
                                    <option value="">Max Price</option>
                                    <option value="10000">$10,000</option>
                                    <option value="50000">$50,000</option>
                                    <option value="100000">$100,000</option>
                                    <option value="500000">$500,000</option>
                                    <option value="1000000">$10,00,000</option>
                                    <option value="5000000">$50,00,000</option>
                                    <option value="10000000">$1,00,00,000</option>
                                    <option value="100000000">$10,00,00,000</option>
                                </select>
                            </div>
                            <div class="col-sm-2 col-lg-2 m-2" style=" padding:0; max-width:10%; flex:0 0 10%">
                                <select class="form-control" name="category" style="height:40px!important;">
                                    <option value="sell">Purchase</option>
                                    <option value="rent">Rent</option>
                                </select>
                            </div>
                            <div class="col-sm-1 col-lg-1 m-2">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-search search_tbn_s">
                                        <i class="zmdi zmdi-search"></i> Search
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>