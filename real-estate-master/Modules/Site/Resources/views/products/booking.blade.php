  <div class="site-section" style="padding:2rem 0;">
      <div class="container">
          <div class="row block-9">

              <div class="col-md-12">
                  <div id="flash_message">

                  </div>
                  {{ Form::open([
                    'url' => route('product.booking.submit', $product->id) ,
                    'method' => 'POST',
                    'class' => 'form-horizontal',
                    'enctype'=>'multipart/form-data',
                    'id' => 'form'
                    ])
                    }}

                  <div class="form-group">
                      {!! Form::text('name',null, ['class'=>'form-control px-3 py-2',
                      'placeholder'=>"Full Name"]) !!}
                      <span class="text-danger">{{ $errors->first('name') }}</span>
                  </div>

                  <div class="form-group">
                      {!! Form::email('email',null, ['class'=>'form-control px-3 py-2',
                      'placeholder'=>"Email"]) !!}
                      <span class="text-danger">{{ $errors->first('email') }}</span>
                  </div>

                  <div class="form-group">
                      {!! Form::number('contact',null, ['class'=>'form-control px-3 py-2',
                      'placeholder'=>"Contact"]) !!}
                      <span class="text-danger">{{ $errors->first('contact') }}</span>
                  </div>

                  <div class="form-group">
                      {!! Form::text('address',null, ['class'=>'form-control px-3 py-2',
                      'placeholder'=>"Full Address"]) !!}
                      <span class="text-danger">{{ $errors->first('address') }}</span>
                  </div>
                  <div class="form-group">
                      <label>Purchase Immediatly <sup> *</sup></label>
                      <label class="control control--radio">
                          {!! Form::radio('is_immediate_purchase', '1' , true);!!}
                          Sell
                          <div class="control__indicator"></div>
                      </label>
                      <label class="control control--radio">
                          {!! Form::radio('is_immediate_purchase', 'Rent');!!}
                          Rent
                          <div class="control__indicator"></div>
                      </label>
                  </div>
                  <div class="form-group">
                      {!! Form::textarea('details', null, ['style' =>
                      'resize:none;width:100%;height:150px;padding:1em', 'cols' =>
                      '30', 'rows' => '7', 'placeholder'=>"Request Message"]) !!}
                      <span class="text-danger">{{ $errors->first('details') }}</span>
                  </div>

                  <div class="form-group">
                      {{ Form::label('', '', ['class' => 'control-label col-sm-3']) }}
                      <div>
                          <input type="submit" value="Submit" class="send_btn btn btn-primary py-3 px-5">
                      </div>
                  </div>
                  {{ Form::close() }}

              </div>


          </div>
      </div>
  </div>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>