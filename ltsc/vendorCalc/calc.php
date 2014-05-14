<div class="vendorCalc row-center row-3col">
	<div class="col calc-step1">
		<h2>STEP 1</h2>
		<div class="seperator"></div>

		<p>Select your lot</p>

		<div class="smallSeperator"></div>

		<label>LTSC TERM</label>

		<select class="calc-termSelect" name="term" autocomplete="off">
			<option data-group="a,b"	value="" selected data-placeholder><em>Select a term...</em></option>
			<option data-group="a"		value="" disabled>5 years (Sold Out)</option>
			<option data-group="a"		value="7">7 years</option>
			<option data-group="b"		value="10">10 years</option>
		</select>

		<label>LOT TYPE</label>

		<select class="calc-lotSizeSelect" name="lotSize" autocomplete="off">
			<option data-group="a,b"	value="" selected data-placeholder><em>Select a lot type...</em></option>
			<option data-group="a"		value="112">Single Park terrace homesites (SP)</option>
			<option data-group="a"		value="150">Dual Park terrace homsites (DP)</option>
			<option data-group="a,b"	value="225">Park-Villa Homesites (PV)</option>
			<option data-group="a,b"	value="300">Family Medium (FM)</option>
			<option data-group="a,b"	value="410">Family Large (FL)</option>
		</select>

		<p></p>

		<div class="smallSeperator"></div>

		<label class="bigLabel">TOTAL VALUE</label>
		<div class="output">$ <span class="calc-output-cost"></span></div>
	
		<div class="seperator"></div>

		<label class="smallLabel">LTSC Component<br/>(Payable over the term)</label>
		<div class="output">$ <span class="calc-output-ltscFee"></span></div>

		<label class="smallLabel">Settlement component<br/>(Due at settlement)</label>
		<div class="output">$ <span class="calc-output-settlement"></span></div>
	</div>

	<div class="col calc-step2">
		<h2>STEP 2</h2>
		<div class="seperator"></div>

		<p>Determine your payments</p>

		<div class="smallSeperator"></div>

		<!--
		<label>INITIAL PAYMENTS</label>
		<textarea class="calc-initialPayment" placeholder="$ ..."></textarea>
		

		<input
			max="12000"
			min="0"
			value="0"
			type="range"
			class="calc-initialPayment rangeslider"
			data-output="#initialPaymentOutput"
		/>
		$ <span id="initialPaymentOutput">0</span>-->

		<label>INITIAL PAYMENTS</label>
		<div class="output smallOutput">
			$ <span class="calc-initialPayment" id="initialPaymentOutput">0</span>
		</div>

		<div
			class="rangeSlider smallRangeSlider calc-initialPaymentSlider"
			data-max="10000"
			data-min="0"
			data-output="#initialPaymentOutput"
		></div>

		<p></p>
		<label>DEFERRED PAYMENTS</label>
		<div class="output smallOutput">
			$ <span class="calc-deferredPayment" id="deferredPaymentOutput">0</span>
		</div>

		<div
			class="rangeSlider smallRangeSlider calc-deferredPaymentSlider"
			data-max="0"
			data-min="0"
			data-output="#deferredPaymentOutput"
		></div>

		<p></p>
		<div class="smallSeperator"></div>

		<!--<label>DEFERRED PAYMENTS</label>
		<div class="output">$ <span class="calc-output-deferred"></span></div>
		-->

		<label>LEGAL FEES</label>
		<div class="output">$ <span class="calc-output-legalFee"></span></div>
	
		<label>STAMP DUTY</label>
		<div class="output">$ <span class="calc-output-stampDuty"></span></div>

		<p></p>
		<div class="seperator"></div>
		<p></p>

		<label>MONTHLY PAYMENTS</label>
		<div class="output">$ <span class="calc-output-monthlyFee"></span></div>
	</div>

	<div class="col calc-step3">
		<h2>STEP 3</h2>
		<div class="seperator"></div>

		<p>Profit projections over <b class="calc-output-term"></b> years</p>

		<div class="smallSeperator"></div>

		<label>SETTLEMENT COST</label>
		<div class="output">$ <span class="calc-output-settlement"></span></div>

		<label>FORECAST VALUE</label>
		<div class="output">$ <span class="calc-output-forecast"></span></div>

		<label>PROFIT / EQUITY</label>
		<div class="output">$ <span class="calc-output-profit"></span></div>

	</div>
</div>