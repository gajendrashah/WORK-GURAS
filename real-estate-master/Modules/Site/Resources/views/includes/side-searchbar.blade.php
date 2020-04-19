<div class="mdc-card">
    <form method="get" action="{{ route('product-list.advsearch') }}" accept-charset="UTF-8"
        class="form-horizontal search-form" role="form">
        <div class="column p-2">
            <div class="col-xs-12 p-2">
                <div class="group">
                    <label>Property Type</label>
                    <div class="col-sm-12 col-lg-12" style=" padding:0;">
                        <select class="form-control" name="property_type" style="height:40px!important;">
                            <option value="">Select Search Category</option>
                            <option value="house">House</option>
                            <option value="land">Land</option>
                            <option value="appartment">Appartment</option>
                            <option value="office">Office</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 p-2">
                <div class="group">
                    <label>Property For</label>
                    <div class="col-sm-12 col-lg-12" style=" padding:0;">
                        <select class="form-control" name="category" style="height:40px!important;">
                            <option value="sell">Purchase</option>
                            <option value="rent">Rent</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 p-2">
                <div class="group">
                    <label>Min Price</label>
                    <div class="col-sm-12 col-lg-12" style=" padding:0;">
                        <select class="form-control" name="from" style="height:40px!important;">
                            <option value="10000">$10,000 </option>
                            <option value="50000">$50,000 </option>
                            <option value="100000">$100,000 </option>
                            <option value="500000">$500,000 </option>
                            <option value="1000000">$10,00,000 </option>
                            <option value="1000000">$50,00,000 </option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 p-2">
                <div class="group">
                    <label>Max Price</label>
                    <div class="col-sm-12 col-lg-12" style=" padding:0;">
                        <select class="form-control" name="to" style="height:40px!important;">
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
                </div>
            </div>
            <div class="col-xs-12 p-2">
                <div class="group">
                    <label>Bedrooms</label>
                    <div class="col-sm-12 col-lg-12" style=" padding:0;">
                        <select class="form-control" name="bedrooms" style="height:40px!important;">
                            <option value="">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 p-2">
                <div class="group">
                    <label>Bathrooms</label>
                    <div class="col-sm-12 col-lg-12" style=" padding:0;">
                        <select class="form-control" name="bathrooms" style="height:40px!important;">
                            <option value="">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 p-2">
                <div class="group">
                    <label>Property Location</label>
                    <div class="col-sm-12 col-lg-12" style=" padding:0;">
                        <input type="text" name="quest" id="quest" class="form-control"
                            placeholder="eg; city, district, address" autocomplete="off" required>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 p-2">
                <button class="btn btn-search" type="submit">
                    <i class="fa fa-search pr-2"></i>Search
                </button>
            </div>
        </div>
    </form>
</div>