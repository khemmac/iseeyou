<div class="modal fade" id="modal-login">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">LOG IN</h4>
			</div>
			<!-- Contact Form -->
			<form name="sentMessage" id="loginForm" method="post">
				<div class="modal-body">
					
					
					<div class="control-group form-group">
						<div class="controls">
							<label>Username (Email Address):</label>
							<input type="email" class="form-control" name="username">
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<label>Password:</label>
							<input type="password" class="form-control" name="password">
						</div>
					</div>
					<div id="success"></div>
				
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
					<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Register</button>
				</div>
			</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="modal-register">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">LOG IN</h4>
			</div>
			<div class="modal-body">
				
				
				<!-- Contact Form -->
				<form name="sentMessage" id="contactForm" novalidate>
					<div class="control-group form-group">
						<div class="controls">
							<label>Nick:</label>
							<input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<label>Gender:</label>
							<input type="password" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
						</div>
					</div>
					<div id="success"></div>
				</form>
				<!-- /.row -->
				
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary">Submit</button>
				<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Register</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript" src="<?= base_url('assets/js/bootstrapvalidator/js/bootstrapValidator.min.js') ?>"></script>
<link href="<?= base_url('assets/js/bootstrapvalidator/css/bootstrapValidator.min.css') ?>" rel="stylesheet">
<script type="text/javascript">
	$(function(){
		$('.b-login').click(function(e){
			e.preventDefault();
			$('#modal-login').modal()
		});
		
		 $('#loginForm').bootstrapValidator({
	        message: 'This value is not valid',
	        feedbackIcons: {
	            valid: 'glyphicon glyphicon-ok',
	            invalid: 'glyphicon glyphicon-remove',
	            validating: 'glyphicon glyphicon-refresh'
	        },
	        fields: {
	            username: {
	                validators: {
	                    notEmpty: {
	                        message: 'The username is required'
	                    }
	                }
	            },
	            password: {
	                validators: {
	                    notEmpty: {
	                        message: 'The password is required'
	                    }
	                }
	            }
	        }
	    });
	});
</script>