<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- linking the css file -->
   <link rel="stylesheet" href="css/style.css">
    <!-- linking font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lily+Script+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">  
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
    <!-- linking tailwind css -->
    <link href="<?php echo URLROOT; ?>./dist/output.css" rel="stylesheet">
  <title>Authentification</title>
</head>
<body class="font-mono bg-cyan-100">
		<!-- Container -->
		<div class="container mx-auto">
			<div class="flex justify-center px-6 my-6">
				<!-- Row -->
				<div class="w-full xl:w-3/4 lg:w-11/12 flex">
					<!-- Col -->
					<div
						class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg"
						style="background-image: url('<?= URLROOT ; ?>/img/login.png')"
					></div>

					<!-- Col -->
					<div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
						<h3 class="pt-4 text-2xl text-center">Welcome Back!</h3>
						<form class="px-8 pt-6 pb-8 mb-4 bg-white rounded" action="<?php echo URLROOT ;?>/Autho/login" method="POST">
							<div class="mb-4">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="username">
									Username
								</label>
								<input
									class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
									id="username"
									type="email"
									placeholder="Username"
                  name="email"
								/>
							</div>
							<div class="mb-4">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="password">
									Password
								</label>
								<input
									class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border  rounded shadow appearance-none focus:outline-none focus:shadow-outline"
									id="password"
									type="password"
									placeholder="**************"
                  name="password"
								/>
								<!-- <p class="text-xs italic text-red-500">Please choose a password.</p> -->
							</div>
							<div class="mb-4">
								<input class="mr-2 leading-tight" type="checkbox" id="checkbox_id" />
								<label class="text-sm" for="checkbox_id">
									Remember Me
								</label>
							</div>
              <div>
                <span id="error" class="invisible"><?= $data['email_err']?></span>
              </div>
							<div class="mb-6 text-center">
								<button 
									class="w-full px-4 py-2 font-bold text-white bg-cyan-700 rounded-full hover:bg-cyan-800 focus:outline-none focus:shadow-outline"
								
								>
									Sign In
								</button>
							</div>
							<hr class="mb-6 border-t" />
							<div class="text-center">
								<a
									class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
									href="./register.html"
								>
									Create an Account!
								</a>
							</div>
							<div class="text-center">
								<a
									class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
									href="./forgot-password.html"
								>
									Forgot Password?
								</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
  <script>
    let error = document.getElementById('error');
    if (error.innerHTML.length > 0 ) {
      swal('Try Again!', 'Your email or password not valid', 'error');
    }

  </script>
</html>



















