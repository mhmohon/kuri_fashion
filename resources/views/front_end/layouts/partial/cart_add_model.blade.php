<div class="addTo_cart"></div>

<div class="modal fade in" id="addTo_cart" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
  <div class="modal-dialog block-popup-login">
    <a href="javascript:void(0)" title="Close" class="close close-login fa fa-times-circle" data-dismiss="modal"></a>
    <div class="tt_popup_login"><strong>Add Model</strong></div>
    <div class="block-content">
      <div class=" col-reg registered-account">
        <div class="block-content">

          {!! Form::open(['route'=>['login','test'],'name'=>'login','class'=>'form form-login']) !!}
            <fieldset class="fieldset login" data-hasrequired="* Required Fields">
              <div class="field email required email-input">
                <div class="control">
                  <input name="email" autocomplete="off" id="email" type="email" class="input-text" title="Email" placeholder="E-mail Address">
                </div>
              </div>
              <div class="field password required pass-input">
                <div class="control">
                  <input name="password" type="password" autocomplete="off" class="input-text" id="pass" title="Password" placeholder="Password">
                </div>
              </div>
           
              <div class="secondary ft-link-p"><a class="action remind" href="#"><span>Forgot Your Password?</span></a></div>
              <div class="actions-toolbar">
                <div class="primary"><button type="submit" class="action login primary" name="send" id="send2"><span>Login</span></button></div>
              </div>
            </fieldset>
          {{ Form::close() }}
        </div>
      </div>      
      <div class="col-reg login-customer">
        <h3><span>*<span>Available Colour:</h3>
        <div class="row row_bottom">
          <div class="col-md-2">
            <div class="radio radio-info radio-inline">
              <input type="radio" name="product_color" id="product_color" checked>
              <label for="current" id="product_color_label">Blue</label>
            </div>
          </div>
          
        </div>
      </div>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
