<div class="container-fluid">
	 <h1 class="welcome text-center">Welcome to Bankrupt Online Banking</h1>
	 <div class="col-lg-2">
		<div class="card card-container">
			<h2 class='login_title text-center'><p class="input_title"> User:  <?=$this->session->userdata('username')?></p></h2>
			<hr>
			
			<p> <?php foreach($balance as $b): echo 'Available Balance: ' .$b->tbalance; endforeach; ?></p>
			<a class="btn btn-info" href="<?=base_url('dashboard/logout')?>">Logout</a>
		</div><!-- /card-container -->
	</div>
	 <div class="col-lg-10">
		<div class="card card-container">
		
				<ul  class="nav nav-pills" style="padding-top:0px !important;margin-bottom:20px;">
					<li class="active"><a data-toggle="pill" href="#home" href="#" class="btn btn-primary btn-block btn-lg" >Transaction</a></li>
				    <li><a data-toggle="pill" href="#menu1" href="#" class="btn btn-primary btn-block btn-lg" >Transfer Amount</a></li>
				    <li><a data-toggle="pill" href="#menu2" href="#" class="btn btn-primary btn-block btn-lg">All Transaction</a></li>
				    <li><a data-toggle="pill" href="#menu3" href="#" class="btn btn-primary btn-block btn-lg">All Transfer</a></li>
				  <!-- <a data-toggle="pill" href="#menu4" href="#" class="btn btn-primary btn-block btn-lg">Withdraw</a>-->
				</ul>
				
				<div class="tab-content">
					<div id="home" class="tab-pane fade in active">
					  <img src="<?=base_url('assets/images/logo.jpg')?>" class="img-responsive">
					</div>
					<div id="menu1" class="tab-pane fade">
						<div class="container">
					   <form id="frm-transfer">
							<table class="table table-bordered">
								<thead>
									<tr><th>Transfer Details</th></tr>
								</thead>
								<tbody>
									<tr><td>Enter Your Patner Id:
										<input type="text" name="text1" class="form-control" required>
									</tr>
									<tr><td>Enter Your Amount : 
										<input type="text" name="text2" class="form-control" required><br> </td> 
									</tr>
									<tr><td>
										<button type="submit" class="btn btn-default" ><span class="glyphicon glyphicon-transfer"></span> Transfer</button>
										<a type="button"  class="btn btn-default" ><span class="glyphicon glyphicon-arrow-left"></span> back</a>
										
									</td></tr>
								</tbody>
							</table>
						
						</form>
						</div>
					</div>
					<div id="menu2" class="tab-pane fade">
					  <table id="at" class="table table-bordered">
						<thead>
							
							<tr>
								
								<th>Deposit/Withdraw</th>
								<th>Amount</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($alltransfer as $at):?>
							<tr>
								<td><?=$at->tratype?></td>
								<td><?=$at->amt?></td>
							</tr>
						<?php endforeach;?>
						
						</tbody>
					  </table>
					</div>
					<div id="menu3" class="tab-pane fade">
					   <table id="td" class="table table-bordered">
						<thead>
							
							<tr>
								
								<th>To Acc No</th>
								<th>From Acc No</th>
								<th>Amount</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($transferdetails as $td):?>
							<tr>
								<td><?=$td->Toid?></td>
								<td><?=$td->Fromid?></td>
								<td><?=$td->amt?></td>
							</tr>
						<?php endforeach;?>
						
						</tbody>
					  </table>
					</div>
					<div id="menu4" class="tab-pane fade">
					<div class="form-group">
						<form id="frm-withdraw">
								  Enter You Want to Withdraw Amount :  
								  <input type="text" name="text2" value="" class="form-control"/><br>
								  <button type="submit" value="" name="wtd" class="btn btn-default">Submit</button>
								 <input type="button" value="Back" name="home" class="btn btn-default">
						</form>
					</div>
				 </div> 
				
				 
			</div>	
			<div id="loader"></div>
		</div><!-- /card-container -->
		
	</div>
</div>