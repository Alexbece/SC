<!DOCTYPE html>
<html lang="en">

@include ('_head')

<body class="bg-biru-1">
    <nav class="relative flex items-center justify-between px-8 py-4 bg-white  drop-shadow-lg rounded-[20px] w-full">
        @include ('components.navbar')
    </nav>
    <div class="grid w-full place-content-center">
        <div class="bg-white mt-12 w-full grid 2xl:flex gap-5 p-4 rounded-[30px] shadow-lg">
            <div class="grid h-max gap-10 max-w-[494px]">
                <h2 class="text-3xl font-semibold text-hitam-900">Cara Konsultasi</h2>
                <div class="grid gap-4 ">
                    <div class="grid gap-2">
                        <h4 class="text-lg font-medium text-hitam-500 font-jkt">1. Langkah Pertama :</h4>
                        <p class="text-sm text-wrap text-hitam-500">Pilih Konselor. Pilih Konselor yang tersedia dan
                            klik pada tombol chat untuk mengirim
                            permintaan berkonsultasi.
                        </p>
                    </div>
                    <div class="grid gap-2">
                        <h4 class="text-lg font-medium text-hitam-500 font-jkt">2. Langkah Kedua :</h4>
                        <p class="text-sm text-wrap text-hitam-500">Proses Pembayaran. Lakukan proses pembayaran dan
                            tentukan berapa jangka waktu konsultasi yang Anda inginkan.
                        </p>
                    </div>
                    <div class="grid gap-2">
                        <h4 class="text-lg font-medium text-hitam-500 font-jkt">3. Langkah Kegita :</h4>
                        <p class="text-sm text-wrap text-hitam-500">Tunggu Konselor. Tunggu sampai dokter merespon
                            jawaban Anda (sekitar 2-3 menit).
                        </p>
                    </div>
                    <div class="grid gap-2">
                        <h4 class="text-lg font-medium text-hitam-500 font-jkt">4. Langkah Terakhir :</h4>
                        <p class="text-sm text-wrap text-hitam-500">Bicara dengan Konselor. Setelah Anda terhubung
                            dengan Konselor, silahkan jelaskan kondisi Anda ke Konselor.
                        </p>
                    </div>
                </div>
            </div>

            <div class="h-auto w-[2px] bg-hitam-300"></div>

            <div class="flex flex-col w-full h-auto gap-6">
                <div>
                    <h2 class="text-3xl font-semibold text-hitam-900">Daftar Konselor</h2>
                    <p class="text-sm text-hitam-500">Konsultasi online dengan Konselor terpercaya</p>
                </div>

                <div class="grid gap-6">
                    <div class="flex gap-3">
                        <button
                            class="px-3 py-2 text-sm text-white transition-all duration-500 ease-out rounded-full bg-biru-6 focus:outline-none ">Semua</button>
                        <button
                            class="px-3 py-2 text-sm transition-all duration-500 ease-out rounded-full text-hitam-500 hover:bg-biru-6 hover:text-white focus:outline-none ">Psikiater</button>
                        <button
                            class="px-3 py-2 text-sm transition-all duration-500 ease-out rounded-full text-hitam-500 hover:bg-biru-6 hover:text-white focus:outline-none ">Psikolog</button>
                    </div>
                </div>

                @include ('client.konselor.list_konselor')
                @include ('client.konselor.modal_konselor')

                <ul class="flex items-center justify-center mt-2 w-full h-10 -space-x-px text-base">
                    <li>
                        <a href="#"
                            class="flex items-center justify-center h-10 px-4 leading-tight text-white border ms-0 border-e-0 rounded-s-lg border-biru-6 bg-biru-6 hover:bg-white hover:text-biru-6">
                            <span class="sr-only">Previous</span>
                            <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" aria-current="page"
                            class="z-10 flex items-center justify-center h-10 px-4 leading-tight bg-white border text-biru-6 border-biru-6">1</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center h-10 px-4 leading-tight text-white border border-biru-6 bg-biru-6 hover:bg-white hover:text-biru-6">2</a>
                    </li>
                    <li>
                        <a href="#"
                        class="flex items-center justify-center h-10 px-4 leading-tight text-white border border-biru-6 bg-biru-6 hover:bg-white hover:text-biru-6">3</a>
                    </li>
                    <li>
                        <a href="#"
                        class="flex items-center justify-center h-10 px-4 leading-tight text-white border border-biru-6 bg-biru-6 hover:bg-white hover:text-biru-6">4</a>
                    </li>
                    <li>
                        <a href="#"
                        class="flex items-center justify-center h-10 px-4 leading-tight text-white border border-biru-6 bg-biru-6 hover:bg-white hover:text-biru-6">5</a>
                    </li>
                    <li>
                        <a href="#"
                        class="flex items-center justify-center h-10 px-4 leading-tight text-white border border-biru-6 bg-biru-6 hover:bg-white hover:text-biru-6 rounded-e-lg">
                            <span class="sr-only">Next</span>
                            <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                        </a>
                    </li>
                </ul>

            </div>
        </div>

    </div>

    <footer
        class="bg-white shadow-lg mt-12 rounded-[30px] grid xl:grid-cols-2 gap-12 place-items-center h-max justify-center p-16 transition-all ease-out duration-300">
        @include ('components.footer')
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const modalkonselorButton = document.getElementById('modalkonselorButton');
            const modalkonselor = document.getElementById('modalkonselor');
            const batalButton = document.getElementById('batalkonselorButton');

            if (modalkonselorButton && modalkonselor) {
                modalkonselorButton.addEventListener('click', () => {
                    modalkonselor.classList.remove('hidden');
                });

                if (batalButton) {
                    batalButton.addEventListener('click', () => {
                        modalkonselor.classList.add('hidden');
                    });
                }

                document.addEventListener('click', (event) => {
                    // Jika klik di luar modal, modal ditutup
                    if (modalkonselor && !modalkonselor.contains(event.target) && event.target !== modalkonselorButton) {
                        modalkonselor.classList.add('hidden');
                    }
                });
            }
        });

    </script>
</body>




</html>