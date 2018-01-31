<div class="radio radio-info row_bottom">
									<input type="radio" name="payment_address" value="new" id="new" onclick="showdiv()">		                                            
		                            <label for="new"> I want to use a new address </label>
								</div>
								<div id="payment-new">
									
									<div class="form-group">
									  <input type="text" name="payment_address_1" value="" placeholder="Street Address" ata-validation="required" id="input-payment-address-1" class="form-control">
									</div>
									
									<div class="form-group">
										<select data-validation="required" class="form-control" name="payment_country_id" id="division">
										  <option value="" selected="selected">Please select</option>
										</select>
									</div>
									<div class="form-group">
										
										<select data-validation="required" class="form-control" data-state-label="Loading..." data-empty-label="Please select" name="payment_zone_id" id="region">

											<option value="" selected="selected">Please select</option>
										</select>
									</div>
								</div>