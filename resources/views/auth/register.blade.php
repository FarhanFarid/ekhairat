<!DOCTYPE html>

<html lang="en">
	<head>
        @include('layouts.header')
	</head>
	<body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center">

		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<div class="d-flex flex-lg-row-fluid">

					<div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
						<img class="mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="{{asset('media/logo/ekhairat-logo.png')}}" alt="" />
						<h1 class="text-gray-800 fs-2qx fw-bold text-center mb-7">Welcome to Mahkota Hills</h1>
						<div class="text-gray-600 fs-base text-center fw-semibold">
                            This is a centralize system for people in Mahkota Hills.
                            <br/>This system provides various features, advertisement and activities.
                            <br />If you are interested please read the FAQ for more information!
                        </div>
					</div>
				</div>

				<div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-20">
					<div class="bg-body d-flex flex-column flex-center rounded-4 w-md-600px p-10 ms-lg-n10">
						<div class="d-flex flex-center flex-column align-items-stretch h-lg-100 w-md-400px">
							<div class="d-flex flex-center flex-column flex-column-fluid pb-15 pb-lg-20">
                                <div class="border d-flex flex-column flex-center rounded-4 w-md-600px p-10" style="background-color: #fffbf0 !important ; border-color: #c59400 !important">
                                    <form class="w-100" id="signupform">
                                        @csrf
                                        <div class="text-center mb-11">
                                            <h1 class="fw-bolder mb-3" style="color: #5e4807">Sign Up</h1>
                                            <div class="fw-semibold fs-6" style="color: #c59400; font-weight: 500;">Welcome to eKhairat</div>
                                        </div>
                                        <div class="fv-row mb-5">
                                            <div class="col-md-12">
                                                <label for="name" class="form-check-label" style="color: #5e4807; font-weight: 700; font-size: 11px;">Full Name:</label>
                                                <input class="form-control form-control" type="text" name="name" id="name" required>
                                            </div>
                                        </div>
                                        <div class="fv-row mb-5">
                                            <div class="col-md-12">
                                                <label for="email" class="form-check-label" style="color: #5e4807; font-weight: 700; font-size: 11px;">Email:</label>
                                                <input class="form-control form-control" type="text" name="email" id="email" required>
                                            </div>
                                        </div>
                                        <div class="fv-row mb-5">
                                            <div class="col-md-12">
                                                <label for="password" class="form-check-label" style="color: #5e4807; font-weight: 700; font-size: 11px;">Password:</label>
                                                <input class="form-control form-control" type="password" name="password" id="password" required>
                                            </div>
                                        </div>
                                        <div class="fv-row mb-5">
                                            <div class="col-md-12">
                                                <label for="confirmpass" class="form-check-label" style="color: #5e4807; font-weight: 700; font-size: 11px;">Confirm password:</label>
                                                <input class="form-control form-control" type="password" name="confirmpass" id="confirmpass" required>
                                            </div>
                                        </div>
                                        <div class="fv-row mb-5">
                                            <div class="col-md-12">
                                                <label for="address" class="form-check-label" style="color: #5e4807; font-weight: 700; font-size: 11px;">Address:</label>
                                                <textarea class="form-control" data-kt-autosize="true" name="address" id="address" required></textarea>
                                            </div>
                                        </div>
                                        <div class="fv-row mb-5">
                                            <div class="col-md-12">
                                                <label for="phase" class="form-check-label" style="color: #5e4807; font-weight: 700; font-size: 11px;">Phase:</label>
                                                <input class="form-control form-control" type="text" name="phase" id="phase" required>
                                            </div>
                                        </div>
                                        <div class="fv-row mb-5">
                                            <div class="col-md-12">
                                                <label for="dob" class="form-check-label" style="color: #5e4807; font-weight: 700; font-size: 11px;">Date of birth:</label>
                                                <input class="form-control form-control" type="date" name="dob" id="dob" required>
                                            </div>
                                        </div>
                                        <div class="d-grid mb-10">
                                            <button type="button" class="btn btn-primary save-signup">
                                                <span class="indicator-label">Sign Up</span>
                                            </button>
                                        </div>
                                    </form>
                                    <div class="text-gray-500 text-center fw-semibold fs-6">Already a member?
                                    <a href="{{ route('auth.login.index') }}" class="link-primary">Sign in</a></div>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        @include('layouts.footer')
        @include('layouts.script')
	</body>
</html>

<script>
    // global app configuration object
    var config = {
            routes: {
                register: {
                    save : "{{ route('auth.reg.save') }}",
                    dashboard : "{{ route('dashboard.index') }}",
            }
        }
    };
</script>
<script src="{{ asset('js/auth/reg.js') }}"></script>
@stack('script')
