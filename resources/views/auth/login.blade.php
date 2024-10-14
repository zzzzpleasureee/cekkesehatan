
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Cek Kesehatan </title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/pages/auth.css') }}">

</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<div class="text-center">
										<a href="index.html"><img src="{{ asset('/images/logo/cekKesehatan.png') }}" alt="logo"  width="300" height="132" />
									</div>
                                    
                                        <form action="{{ route('login') }}" method="POST">
                                            @csrf

                                        <div class="form-group position-relative has-icon-left mb-4">
                                            <label class="form-label">Email</label>
                                            <input type="text" name="email" class="form-control form-control-xl" placeholder="E-Mail">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
                                            
                                            @error('email')
                                             <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group position-relative has-icon-left mb-4">
                                            <label class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control form-control-xl" placeholder="Password">
                                            <div class="form-control-icon">
                                                <i class="bi bi-shield-lock"></i>
                                            </div>
                                            @error('password')
                                             <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <small>
                                            <a href="index.html">Forgot password?</a>
                                          </small>
                                        <button type ="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                                    </form>
								</div>
							</div>
                            <div class="col-lg-7 d-none d-lg-block">
                                <div id="auth-right">
                        
                                </div>
                            </div>
                        
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>
</body>

</html>