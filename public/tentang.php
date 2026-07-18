<?php
$page_title = 'Tentang Saya';
include __DIR__ . '/../app/includes/header.php';
?>

<section class="max-w-[1120px] mx-auto px-md py-16 lg:py-24">
    <div class="flex flex-col md:flex-row gap-16 items-start">
        <div class="w-full md:w-1/3">
            <div class="aspect-square w-full rounded-lg overflow-hidden shadow-elevation-2 ring-1 ring-hairline relative">
                <img src="https://placehold.co/600x600/E9F0FF/2F6FFB?text=Foto+Profil" alt="Foto Profil" class="w-full h-full object-cover">
                <!-- Aksen Pixel -->
                <div class="absolute bottom-4 right-4 bg-canvas px-3 py-1 rounded-sm shadow-elevation-3 font-pixel text-pixel-tag text-ink uppercase">
                    Level 99
                </div>
            </div>
        </div>
        
        <div class="w-full md:w-2/3">
            <span class="font-pixel text-pixel-tag uppercase text-accent-coin tracking-wide bg-canvas-soft px-3 py-1 rounded-pill">
                Player 1
            </span>
            <h1 class="font-heading text-display-lg text-ink mt-4 mb-6">Cerita di Balik Kode</h1>
            
            <div class="prose max-w-none text-body-lg text-body space-y-6">
                <p>
                    Halo! Saya adalah seorang UI/UX Designer dan Web Developer yang bersemangat untuk menciptakan pengalaman digital yang intuitif dan bermakna. Bagi saya, mendesain dan mengkodekan antarmuka sama seperti menyusun level dalam sebuah game: harus jelas tujuannya, menyenangkan untuk dimainkan, dan minim frustrasi.
                </p>
                <p>
                    Perjalanan saya dimulai dari ketertarikan pada bentuk dan fungsi, yang kemudian mendorong saya untuk mempelajari ekosistem web modern (HTML, Tailwind CSS, PHP, Laravel) serta alat desain (Figma). Saya percaya bahwa desain yang baik tidak hanya terlihat cantik, tetapi juga memecahkan masalah pengguna secara efisien.
                </p>
                
                <h3 class="font-heading text-heading-md text-ink mt-8 mb-4">Nilai Profesional</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="p-6 rounded-md bg-canvas-soft border border-hairline">
                        <div class="w-10 h-10 mb-4 bg-primary-soft rounded-sm flex items-center justify-center text-primary">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                        </div>
                        <h4 class="font-heading text-heading-sm text-ink mb-2">Desain Presisi</h4>
                        <p class="text-body-sm text-mute">Setiap piksel dipertimbangkan. Saya merancang antarmuka dengan konsistensi visual yang ketat.</p>
                    </div>
                    <div class="p-6 rounded-md bg-canvas-soft border border-hairline">
                        <div class="w-10 h-10 mb-4 bg-primary-soft rounded-sm flex items-center justify-center text-primary">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                        </div>
                        <h4 class="font-heading text-heading-sm text-ink mb-2">Kode Bersih</h4>
                        <p class="text-body-sm text-mute">Fokus pada HTML semantik, struktur styling yang rapi, dan performa pemuatan halaman optimal.</p>
                    </div>
                </div>
            </div>
            
            <div class="mt-10">
                <a href="/assets/cv.pdf" download class="inline-flex items-center gap-2 h-12 px-7 rounded-pill bg-canvas-soft border border-hairline-strong text-ink font-body font-semibold text-button-md hover:bg-primary-soft hover:text-primary transition-all duration-150">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                    Unduh Curriculum Vitae
                </a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../app/includes/footer.php'; ?>
