<x-head titleName="로그인">
    <x-nav />
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="ms-5 me-5">
        <form action="{{ route('login') }}" method="POST">
           @csrf
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email"  class="form-control" name="email" />
                <label class="form-label" for="form2Example1">이메일</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password"  class="form-control" name="password" />
                <label class="form-label" for="form2Example2">비밀번호</label>
            </div>

            <div class="form-outline mb-4">
                <input type="nickname"  class="form-control" name="nickname" />
                <label class="form-label" for="form2Example2">닉네임</label>
            </div>

            <div class="form-outline mb-4">
                <input type="text"  class="form-control" name="name" />
                <label class="form-label" for="form2Example2">이름</label>
            </div>

            <div class="form-outline mb-4">
                <input type="text" class="form-control" name="company_name" />
                <label class="form-label" for="form2Example2">회사이름</label>
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                        <label class="form-check-label" for="form2Example31"> Remember me </label>
                    </div>
                </div>

                <div class="col">
                    <!-- Simple link -->
                    <a href="#!">Forgot password?</a>
                </div>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

            <!-- Register buttons -->
            <div class="text-center">
                <p>Not a member? <a href="#!">Register</a></p>
                <p>or sign up with:</p>
                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-google"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-github"></i>
                </button>
            </div>
        </form>
    </div>
</x-head>
