<!doctype html>
<html lang="en">
  <head>
  	<title>লগিন করুন</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&family=Noto+Sans+Bengali:wght@100..900&family=Noto+Serif+Bengali:wght@100..900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{asset('authentic/css/style.css')}}">
    <style>
       body{
         font-family: "Noto Sans Bengali", serif;
         background-color: aquamarine;
       }
    </style>

	</head>
	<body>
	<section class="p-4">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 style="font-family: Noto Sans Bengali;">{{__('নিবরাস স্কুল এ স্বাগতম')}}</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url({{asset('authentic/images/bg-1.jpg')}});">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 style="font-family: Noto Sans Bengali;" class="mb-4">লগিন করুন</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">

										<a href="https://www.facebook.com/profile.php?id=100064261863518" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										
									</p>
								</div>
			      	</div>
						<form method="POST" action="{{ route('login') }}" class="signin-form">
                            @csrf

			      		<div class="form-group mb-3">
			      			<label for="email" class="col-md-5 col-form-label text-md-end">{{ __('ইমেইল দিন') }}</label>
			      			<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
			      		</div>

		            <div class="form-group mb-3">
                        <label for="password" class="col-md-5 col-form-label text-md-end">{{ __('পাসওয়ার্ড দিন') }}</label>

		            	 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
		            </div>

		            <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary rounded submit px-3">লগিন করুন</button>
                    </div>
		            	
		            
		          </form>
		          <p class="text-center">নতুন ব্যাবহারকারী ? <a data-toggle="tab" href="{{route('register')}}">নতুন একাউন্ট খুলুন</a></p>
		        </div>
		        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{asset('authentic/js/jquery.min.js')}}"></script>
    <script src="{{asset('authentic/js/popper.js')}}"></script>
    <script src="{{asset('authentic/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('authentic/js/main.js')}}"></script>

</body>
</html>


