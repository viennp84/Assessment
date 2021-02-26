<html>
<head>
<title>User Login</title>
</head>
<body>
	<div>
		<form action="doRegister" method="post">
			{{csrf_field()}}
			<!-- Table Div -->
			<div class="demo-table">
				<div class="form-head">Register</div>
				<div class="form-column">
					<div>
						<label for="firstname">First Name</label><span id="user-info"
							class="error-info"></span>
					</div>
					<div>
						<input name="firstname" id="firstname" type="text"
							class="demo_input_box">
					</div>
				</div>
					<div class="form-column">
					<div>
						<label for="lastname">Last Name</label><span id="user-info"
							class="error-info"></span>
					</div>
					<div>
						<input name="lastname" id="firstname" type="text"
							class="demo_input_box">
					</div>
				</div>

				<div class="form-column">
					<div>
						<label for="username">Username</label><span id="user-info"
							class="error-info"></span>
					</div>
					<div>
						<input name="username" id="username" type="text"
							class="demo_input_box">
					</div>
				</div>
				<div class="form-column">
					<div>
						<label for="password">Password</label><span id="user-info"
							class="error-info"></span>
					</div>
					<div>
						<input name="password" id="password" type="text"
							class="demo_input_box">
					</div>
				</div>
				<div>
					<input type="submit" class="btnLogin"/>
				</div>
			</div>
			<!-- End Table Div -->
		</form>
		{{Session::get('firstname')}}
		{{Session::get('lastname')}}
		{{Session::get('username')}}
		{{Session::get('password')}}
		{{Session::get('isFound')}}
	</div>
</body>
</html>