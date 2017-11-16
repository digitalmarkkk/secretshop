<div class="content-view">

	<div class="row">
	    <div class="col-sm-12 col-md-12 col-lg-12">
	    
	    <div class="card card-block">
	    	<div id="transaction-data">
	    	</div>
	    	<!-- <?php foreach ($pending_transaction as $key => $value): ?>
	    		<?php print_r($value['content']); ?>
	    	<?php endforeach; ?> -->
	    	<button class="btn btn-primary" id="show">Show Cutomers</button>
	    </div>
		    <div class="card card-block">
		        <div class="current-label m-b-xs b-b p-b-xs">
		        	Current Transaction
		        	<span class="right"><?php echo date('M d, Y h:i A'); ?></span>
		        </div>
		        <div class="row">
		        	<div class="col-sm-8 col-md-8 col-lg-8">
		        		<div class="transaction-info">
		        			<div class="table-responsive">
		        				<table class="table table-bordered table-striped">
			        				<thead>
								        <tr role="row">
								            <th class="bold p-a-xs">
								              	Transaction Request
								            </th>
								            <th class="bold p-a-xs text-align-center">
								              	Status
								            </th>
								        </tr>
								    </thead>
								    <tbody>
								    	<tr>
								    		<td class="p-a-xs">Bill payment</td>
								    		<td class="p-a-xs text-align-center text-success">Success</td>
								    	</tr>
								    	<tr>
								    		<td class="p-a-xs">Opening Account</td>
								    		<td class="p-a-xs text-align-center">Processing</td>
								    	</tr>
								    	<tr>
								    		<td class="p-a-xs">Deposit</td>
								    		<td class="p-a-xs text-align-center">Pending</td>
								    	</tr>
								    	<tr>
								    		<td class="p-a-xs">Withdrawal</td>
								    		<td class="p-a-xs text-align-center">Pending</td>
								    	</tr>
								    	<tr>
								    		<td class="p-a-xs">Money Transfer</td>
								    		<td class="p-a-xs text-align-center">Pending</td>
								    	</tr>
								    </tbody>
			        			</table>
		        			</div>
		        		</div>
		        	</div>
	    			<div class="col-sm-4 col-md-4 col-lg-4">
	    				<div class="current-trans-area m-b-1">
	    					<div class="tcolor1 queue-number text-align-center m-b-1">
	    						1
	    						<span class="view-details">queue number</span>
	    					</div>
	    					<div class="queue-information-area">
	    						<div class="transaction-no">
	    							<span>Transaction No:</span>
	    							<span class="right bold">00000000001</span>
	    						</div>
	    						<div class="transaction-data">
	    							<span>Request Date:</span>
	    							<span class="right"><?php echo date('M d, Y h:i A'); ?></span>
	    						</div>
	    					</div>
	    				</div>
	    				<div class="action-area">
	    					<button class="btn btn-block btn-md btn-primary m-b-xs" type="button">
	    						End Transaction
	    					</button>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	    </div>
	</div>
	<div class="row">
	    <div class="col-sm-12 col-md-12 col-lg-12">
		    <div class="card card-block pending-block">
		    	<div class="pending-label m-b-xs b-b p-b-xs">
		    		Pending Transactions
		    		<span class="right">
		    			Total: 7
		    		</span>
		    	</div>
		        <div class="row">
	    			<div class="col-sm-2 col-md-2 col-lg-2">
	    				<div class="pending-area m-b-1">
	    					<div class="tcolor1 queue-number text-align-center m-b-1">
	    						2
	    						<span class="view-details">(<a href="#">view details</a>)</span>
	    					</div>
	    					<div class="action-area">
	    						<button class="btn btn-block btn-sm btn-primary m-b-xs" type="button">
	    							accept
	    						</button>
	    						<button class="btn btn-block btn-sm m-b-xs btn-secondary" type="button">
	    							reject
	    						</button>
	    						<button class="btn btn-block btn-sm btn-default" type="button">
	    							block
	    						</button>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
		    </div>
	    </div>
	</div>	

</div>


<script type="text/javascript">
$("#transaction-data").click(function() {
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('account/get_pending_data'); ?>",
        success: function(data) {
            $("#transaction-data").html(data);
        }
    });
});
</script>