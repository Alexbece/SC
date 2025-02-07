<!DOCTYPE html>
<html lang="en">
@include ('_head')

<body class="profilKonselor">
    <nav
        class="relative flex items-center justify-between px-6 py-4 bg-white drop-shadow-lg rounded-[20px] w-auto h-max">
        @include ('components.navbar')
    </nav>

    <section class="container-profil px-4 py-2 w-full h-max bg-white mt-10 rounded-[20px] grid gap-4">
        <div class="grid w-full gap-4 py-4 border-b-2 lg:flex h-max">
            <div class="flex gap-4 lg:w-[500px] w-full place-items-center bg-hitam-50 rounded-xl p-4">
                <img src="{{asset('client/img/foto_dokter/foto_doctor_1.jpg')}}" alt=""
                    class="rounded-lg object-center object-cover w-110px] h-[150px] border-2 top-0 p-1 border-biru-6">
                <div>
                    <h1 class="text-xl font-semibold text-hitam-900">Dr. Mamen S,Psi.</h1>
                    <p class="text-hitam-500">Psikiater</p>
                    <div class="flex items-center gap-2 px-2 py-1 mt-2 text-white rounded-lg h-max w-max bg-biru-6">
                        <i class=" bx bx-like"></i>
                        <p class="">100%</p>
                    </div>
                </div>
            </div>

            <div class="grid w-full gap-3 p-4 bg-hitam-50 rounded-xl">
                <div class="grid grid-cols-3">
                    <p>Nama lengkap</p>
                    <p>Farrel Kurniawan Yassar</p>
                </div>
                <div class="grid grid-cols-3">
                    <p>Nomor STR</p>
                    <p>01298409123</p>
                </div>
                <div class="grid grid-cols-3">
                    <p>Spesialis</p>
                    <p>Psikolog</p>
                </div>
                <div class="grid grid-cols-3">
                    <p>Pengalaman</p>
                    <p>18 Tahun</p>
                </div>
                <div class="grid grid-cols-3">
                    <p>Harga layanan</p>
                    <p>Rp 75.000 / Jam</p>
                </div>
            </div>
        </div>

        <div class="grid items-center w-full gap-8 pb-3 lg:items-start lg:flex">
            <div class="grid w-full gap-6 place-items-start">
                <h2 class="px-3 text-lg font-bold text-hitam-900">Hari ketersediaan dokter / minggu</h2>
                <div class="grid grid-cols-2 gap-3 2xl:grid-cols-4 xl:grid-cols-3 place-items-center">
                    <button class="px-3 py-1 text-lg rounded-full text-hitam-600 bg-hitam-50 h-max w-max">Senin</button>
                    <button class="px-3 py-1 text-lg text-white rounded-full bg-biru-6 h-max w-max">Selasa</button>
                    <button class="px-3 py-1 text-lg rounded-full text-hitam-600 bg-hitam-50 h-max w-max">Rabu</button>
                    <button class="px-3 py-1 text-lg rounded-full text-hitam-600 bg-hitam-50 h-max w-max">Kamis</button>
                    <button class="px-3 py-1 text-lg rounded-full bg-hitam-50 text-biru-6 h-max w-max">Jumat</button>
                    <button class="px-3 py-1 text-lg rounded-full text-hitam-600 bg-hitam-50 h-max w-max">Sabtu</button>
                    <button class="px-3 py-1 text-lg rounded-full bg-hitam-50 text-biru-6 h-max w-max">Minggu</button>
                </div>
            </div>

            <div class="w-[1.5px] h-full bg-hitam-100 hidden lg:flex"></div>

            <div class="grid w-full gap-6 place-items-start">
                <h2 class="px-3 text-lg font-bold text-hitam-900">Jam ketersediaan dokter</h2>
                <div class="grid grid-cols-3 gap-3 place-items-center">
                    <button class="px-3 py-1 text-lg text-white rounded-full bg-biru-6 h-max w-max">07.00</button>
                    <button class="px-3 py-1 text-lg rounded-full bg-hitam-50 text-biru-6 h-max w-max">13.00</button>
                    <button class="px-3 py-1 text-lg rounded-full bg-hitam-50 text-biru-6 h-max w-max">15.00</button>
                </div>
            </div>

            <div class="w-[1.5px] h-full bg-hitam-100 hidden lg:flex"></div>

            <div class="flex items-center justify-center w-full h-full">
                <button class="w-full p-3 font-semibold text-white rounded-xl bg-biru-6 h-max">Lanjut konsultasi</button>
            </div>
        </div>
    </section>
</body>

</html>