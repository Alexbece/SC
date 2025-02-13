<!DOCTYPE html>
<html lang="en">

@include ('_head')


<body class="flex items-center justify-center h-screen">
    <div class="flex items-center container-login lg:w-[1008px] rounded-[20px]">

        <div class="relative hidden h-full shadow-2xl lg:block rounded-l-2xl">
            <span class="absolute top-0 left-0 text-2xl font-semibold text-white m-7 font-jkt">Sini
                Cerita.</span>
            <p class="absolute bottom-0 right-0 text-4xl font-bold text-right text-white m-7 rounded-2xl text-wrap">
                Mari sehat <br>dengan<br>bercerita.</p>


            <img src="{{ asset('client/img/trung-thanh-rzJ4TEQZe4M-unsplash 1.png') }}" alt=""
                class="object-cover h-full img-login">
        </div>

        <div class="flex flex-col justify-center w-full h-full py-12 shadow-2xl form-login px-14">
            <span class="inline-block mt-2 text-xl font-semibold text-center text-biru-6 lg:hidden">Sini
                Cerita.</span>
            <div class="flex flex-col items-center justify-center h-full gap-4">
                <div class="flex flex-col items-center justify-center w-full gap-4">
                    <h1 class="mb-3 text-3xl font-bold text-hitam-800">Login</h1>
                    <form action="{{ route('login.post') }}" method="POST" class="w-full">
                        <div class="flex flex-col items-center justify-center w-full gap-5">
                            @csrf
                            <div class="w-full">
                                <input type="email" name="email" placeholder="Email"
                                    class="font-raleway w-full rounded-md py-[10px] font-light text-white0 text-xs border-[1px] border-hitam-200 px-3 bg-transparent focus:outline-none"
                                    required>
                            </div>
                            <div class="relative flex w-full">
                                <input id="password" type="password" name="password" placeholder="Password"
                                    class="font-raleway w-full rounded-md py-[10px] font-light text-white0 text-xs border-[1px] border-hitam-200 px-3 pr-10 bg-transparent focus:outline-none"
                                    required>
                                <i id="togglePassword"
                                    class="absolute cursor-pointer top-3 right-3 bx bx-hide text-hitam-400"></i>
                            </div>
                            <div class="w-full text-center">
                                <div class="w-full transition-colors rounded-md bg-biru-6 hover:bg-biru-5">
                                    <button type="submit"
                                        class="w-full font-jkt py-[10px] font-semibold text-white text-sm px-4 bg-transparent focus:outline-none">Login</button>
                                </div>
                                <p class="mt-2 text-xs text-hitam-400">Don't have an account? <a
                                        href="{{ route('signup') }}" class="text-xs text-biru-6 hover:text-biru-6">Sign
                                        Up</a></p>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="grid gap-2 place-content-center place-items-center">
                    <p class="text-xs font-light text-hitam-400">or sign up with</p>
                    <a href="{{ route('login.google') }}"
                        class="flex items-center gap-1 px-3 py-2 text-lg font-extrabold transition-all font-jkt bg-biru-1 hover:bg-biru-6 text-hitam-800 focus:outline-none rounded-xl">
                        <i class='text-3xl bx bxl-google'></i> Google
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        const passwordInput = document.getElementById('password');
        const togglePassword = document.getElementById('togglePassword');

        togglePassword.addEventListener('click', function() {
            const isPassword = passwordInput.type === 'password';
            passwordInput.type = isPassword ? 'text' : 'password';

            this.classList.toggle('bx-hide');
            this.classList.toggle('bx-show-alt');
        })
    </script>

    @if (session('error'))
        <div id="errorPopup" class="fixed top-5 text-center bg-red-500 text-white px-4 py-2 rounded-md shadow-lg">
            {{ session('error') }}
        </div>

        <script>
            setTimeout(() => {
                document.getElementById('errorPopup').style.display = 'none';
            }, 3000); // Pop-up akan hilang setelah 3 detik
        </script>
    @endif


</body>

</html>
