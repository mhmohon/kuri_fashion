<div class="sociallogin"></div>

<div class="modal fade in" id="so_sociallogin" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
  <div class="modal-dialog block-popup-login">
    <a href="javascript:void(0)" title="Close" class="close close-login fa fa-times-circle" data-dismiss="modal"></a>
    <div class="tt_popup_login"><strong>Sign in Or Register</strong></div>
    <div class="block-content">
      <div class=" col-reg registered-account">
        <div class="block-content">

          {!! Form::open(['route'=>['login'],'name'=>'login','class'=>'form form-login']) !!}
            <fieldset class="fieldset login" data-hasrequired="* Required Fields">
              <div class="field email required email-input">
                <div class="control">
                  <input name="email" value="" autocomplete="off" id="email" type="email" class="input-text" title="Email" placeholder="E-mail Address">
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
        <h2>NEW HERE?</h2>
        <p class="note-reg">Registration is free and easy!</p>
        <ul class="list-log">
          <li>Faster checkout</li>
          <li>Save multiple shipping addresses</li>
          <li>View and track orders and more</li>
        </ul>                                    <a class="btn-reg-popup" title="Register" href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=account/register">Create an account</a>
      </div>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
