@extends('frontend.layout')

@section('content')
    <div class="hero overlay">
        @foreach ($backgrounds as $background)
            <div class="img-bg rellax">
                <img src="{{ Storage::url($background->background_image) }}" alt="Image" class="img-fluid">
            </div>
        @endforeach
        <div class="container">
            <div class="row align-items-center justify-content-start">
                <div class="col-lg-5">
                    <h1 class="heading" data-aos="fade-up">Saran & Masukan</h1>
                    <p class="mb-5" data-aos="fade-up">
                        VisitMojokerto hadir untuk memberikan pengalaman wisata yang lebih baik.
                        Sampaikan saran dan masukan Anda untuk membantu kami meningkatkan layanan
                        dan destinasi wisata di Kota Mojokerto.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-delay="0">
                    <h2 class="heading mb-5">Berikan Masukan & Saran</h2>
                </div>
            </div>
            <div class="row">
                <!-- Peta -->
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                    <div class="media-entry">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31647.551320447532!2d112.41863126153487!3d-7.471445970909537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780e3c80e50d83%3A0x3027a76e352bd40!2sKota%20Mojokerto!5e0!3m2!1sid!2sid!4v1746873166614!5m2!1sid!2sid"
                            width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>

                <!-- Formulir -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <form id="feedbackForm" class="mb-5">
                        <div class="row g-3">
                            <!-- Nama -->
                            <div class="col-12 mb-3">
                                <input type="text" name="nama" class="form-control" placeholder="Nama Anda" required>
                            </div>

                            <!-- Asal Kota -->
                            <div class="col-12 mb-3">
                                <input type="text" name="kota" class="form-control" placeholder="Asal Kota" required>
                            </div>

                            <!-- Pesan -->
                            <div class="col-12 mb-3">
                                <textarea name="pesan" class="form-control" rows="5" placeholder="Pesan Anda" required></textarea>
                            </div>

                            <!-- Tombol -->
                            <div class="col-12 text-end">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>

                            <!-- Notifikasi -->
                            <div class="col-12 mt-3">
                                <div id="statusMessage" class="text-success" style="display: none;">
                                    ✅ Pesan berhasil dikirim!
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Tambahkan JavaScript agar tidak buka tab baru --}}
    <script>
        document.getElementById('feedbackForm').addEventListener('submit', async function(e) {
            e.preventDefault();

            const form = e.target;
            const data = new FormData(form);
            const url =
                "https://script.google.com/macros/s/AKfycbzOK1DGK8khl_o4xCKYvaXQyhWO_IRpNVpyceY1apuzYLkxEG7b3WTyhEZZI6bHLs8/exec";

            try {
                await fetch(url, {
                    method: 'POST',
                    body: data,
                    mode: 'no-cors'
                });

                form.reset();
                document.getElementById('statusMessage').style.display = 'block';
            } catch (error) {
                alert("Terjadi kesalahan. Silakan coba lagi.");
            }
        });
    </script>
@endsection
