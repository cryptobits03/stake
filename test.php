<form method="post" class="needs-validation" id="payout" novalidate="">
                <input type="hidden" name="payout" value="Payout">
                
                <div class="labels_row">
                  <div class="col-md-2 offset-md-2 label">
                    <span style="">currency selection</span>
                  </div>
                  <div class="col-md-3 label">
                    <span style="">enter amount</span>
                  
                  </div>
                  <div class="col-md-2 label">
                    <span style="">your balance</span>
                  </div>
                </div>

                <div class="form-row">
                
                  <div class="col-md-2 offset-md-2">
                    <style type="text/css">
                      .labels_row .label{
                        padding: 0 5px;
                        line-height: 70px;
                        text-align: left;  
                        border: 0 !important; 
                      }
                      .last_col{
                        width: 75% !important;
                        padding-left: 0 !important;
                        padding-right: 0 !important;
                      }
                      .labels_row .label span::first-letter{
                        text-transform: uppercase;
                      }
                      #currency::after {
                        position: absolute;
                        font-family: 'FontAwesome';
                        top: 0;
                        left: 10px;
                        content: "\f005";
                      }
                      #balance_display{
                        display: block;
                        width: 100%;
                        height: calc(1.5em + .75rem + 2px);
                        padding: .375rem .75rem;
                        font-size: 1rem;
                        font-weight: 400;
                        line-height: 1.5;
                        background-color: #e9ecef;
                        color: #495057;
                        border: 1px solid #ced4da;
                        border-radius: .25rem;
                      }
                      #currency{
                        text-transform: capitalize;
                      }


                    </style>
                    
                    <div style="position: relative;">
                    	<select id="currency" onchange="check()" required="" class="form-control">
                    		<option id="select_1_option" value="" style="display: none;">select</option>
                    		<option value="btc">BTC</option>
                    		<option value="eth">ETH</option> 
                    		<option value="trade">TRADE</option> 
                    		<option value="hybrid">HYBRID</option> 
                    	</select>
                       <span class="select-arrow-down" onclick="$('#currency').click()"><i class="fas fa-caret-down"></i></span>
                    </div>
                  </div>

                  <div class="col-md-3 mb-3">
                    <input id="amount_input" type="number" value="" step="0.00000001" class="form-control" oninput="check()" name="amount" placeholder="Enter amount to payout" required="">
					 <span id="changePriceButton" class="max-count"><i class="fas fa-sync-alt"></i><span class="">Use max amount</span></span>
					 <div class="invalid-feedback">
                      Please enter valid amount to payout..                    </div>
                  </div>

                   <div class="col-md-2">
                    <div style="position: relative;">
                      <input disabled="" type="number" name="balance_display" id="balance_display" placeholder="-">
                    </div>
                  </div>

                </div>
        
              <div class="row mt-2">
                <div class="col-md-6 offset-md-3">
                  <p style="text-align:center;" id="saldo_info" class="col-md-12"></p>
                  <p style="text-align:center;" id="value_info"></p>
                </div>
              </div>  
        
              <div class="form-row">
                  <div class="col-md-2 offset-md-2">
                  	Payout fee:
                  </div>
                  <div class="col-md-5 mb-3">
                    <input id="amount_fee_input" value="0.0002" disabled="" type="number" step="0.01" class="form-control" name="fee">
                    <div class="invalid-feedback">
                      Please enter valid amount to payout.                    </div>
                  </div>
                
              </div>
                <div class="form-row">
                  <div class="col-md-2 offset-md-2">
                  	<span style="height: 38px; display:block;">
                      You will receive:
                    </span>
                    <span style="height: 38px; display:block;">
                      USD:
                    </span>
                  </div>
                  <div class="col-md-5 mb-3">
                    <input id="amount_total_input" disabled="" type="number" step="0.01" class="form-control col-md-12" value="0" name="payout_amount" required="">
                    <input id="amount_total_input_usd" disabled="" type="number" step="0.01" class="form-control col-md-12" value="0" name="payout_amount" required="">
                    <div class="invalid-feedback">
                      Please enter valid amount to payout.                    </div>
                  </div>                
                </div>
                <div class="form-row">
                  <div class="col-md-2 offset-md-2">
                    Check if the wallet address is correct:
                  </div>
                  <div class="col-md-5 mb-3">
                    <input readonly="readonly" id="user_wallet_adres" class="form-control" type="text" required="">
					<div class="invalid-feedback">
                       You have to enter wallet address in your profile                    </div>
                  </div>                
                </div>
                <div class="form-row">
                  <div class="col-md-2 offset-md-2">
                    
                  </div>
                  <div class="col-md-5 mb-3">
                    <input id="payout_submit" class="btn btn-primary" type="submit" value="Submit">
                  </div>                
                </div>

            </form>
