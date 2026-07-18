<?php
$page_title = 'Kontak';
include __DIR__ . '/../app/includes/header.php';
?>

<section class="max-w-[1120px] mx-auto px-md py-16 lg:py-24">
    <div class="flex flex-col lg:flex-row gap-16">
        <div class="w-full lg:w-1/2">
            <span class="font-pixel text-pixel-tag uppercase text-accent-coin tracking-wide bg-canvas-soft px-3 py-1 rounded-pill">
                Final Stage
            </span>
            <h1 class="font-heading text-display-lg text-ink mt-4 mb-4">Mari Ngobrol!</h1>
            <p class="text-body-lg text-body mb-8">
                Apakah Anda sedang mencari kandidat untuk tim Anda, butuh bantuan untuk proyek web, atau sekadar ingin berjejaring? Kotak masuk saya selalu terbuka.
            </p>
            
            <div class="space-y-6">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-primary-soft text-primary rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    </div>
                    <div>
                        <h4 class="font-heading text-heading-sm text-ink">Email</h4>
                        <a href="mailto:hello@example.com" class="text-body-md text-primary hover:underline">hello@example.com</a>
                    </div>
                </div>
                
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-primary-soft text-primary rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    </div>
                    <div>
                        <h4 class="font-heading text-heading-sm text-ink">Telepon / WhatsApp</h4>
                        <a href="tel:+6281234567890" class="text-body-md text-primary hover:underline">+62 812 3456 7890</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="w-full lg:w-1/2">
            <div class="bg-surface-card p-6 md:p-8 rounded-lg shadow-elevation-2 ring-1 ring-hairline relative">
                <!-- Status Banner -->
                <div id="form-status" class="hidden mb-6 p-4 rounded-md flex items-center gap-3 text-body-sm font-semibold">
                    <span id="form-status-icon"></span>
                    <span id="form-status-text"></span>
                </div>

                <form id="contact-form" class="space-y-5">
                    <div>
                        <label for="name" class="block font-body font-semibold text-heading-sm text-ink mb-2">Nama Lengkap</label>
                        <input type="text" id="name" name="name" required
                               class="w-full h-12 px-4 rounded-sm border-[1.5px] border-hairline font-body text-body-md text-ink placeholder:text-mute focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary-soft transition-all duration-150" 
                               placeholder="Budi Santoso">
                    </div>
                    
                    <div>
                        <label for="email" class="block font-body font-semibold text-heading-sm text-ink mb-2">Email</label>
                        <input type="email" id="email" name="email" required
                               class="w-full h-12 px-4 rounded-sm border-[1.5px] border-hairline font-body text-body-md text-ink placeholder:text-mute focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary-soft transition-all duration-150" 
                               placeholder="budi@example.com">
                        <p class="mt-1 text-caption text-error hidden" id="error-email">
                            <span class="inline-block w-3 h-3 bg-error text-white text-[9px] text-center font-bold mr-1 align-middle leading-3">!</span>Format email tidak valid.
                        </p>
                    </div>
                    
                    <div>
                        <label for="subject" class="block font-body font-semibold text-heading-sm text-ink mb-2">Subjek <span class="text-mute font-normal text-sm">(Opsional)</span></label>
                        <input type="text" id="subject" name="subject"
                               class="w-full h-12 px-4 rounded-sm border-[1.5px] border-hairline font-body text-body-md text-ink placeholder:text-mute focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary-soft transition-all duration-150" 
                               placeholder="Tawaran Kerjasama / Proyek">
                    </div>
                    
                    <div>
                        <label for="message" class="block font-body font-semibold text-heading-sm text-ink mb-2">Pesan</label>
                        <textarea id="message" name="message" required rows="5"
                                  class="w-full p-4 rounded-sm border-[1.5px] border-hairline font-body text-body-md text-ink placeholder:text-mute focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary-soft transition-all duration-150 resize-y" 
                                  placeholder="Tuliskan pesan Anda di sini..."></textarea>
                    </div>
                    
                    <button type="submit" id="btn-submit"
                            class="w-full flex items-center justify-center gap-2 h-12 px-7 rounded-pill bg-primary text-on-primary font-body font-semibold text-button-md hover:bg-primary-deep active:translate-y-[1px] focus-visible:outline-none focus-visible:ring-4 focus-visible:ring-primary-soft transition-all duration-150 relative">
                        <span id="btn-text">Kirim Pesan</span>
                        <span id="btn-spinner" class="hidden absolute right-4">
                            <!-- Spinner pixel block -->
                            <span class="flex gap-1">
                                <span class="w-1.5 h-1.5 bg-white rounded-sm animate-bounce" style="animation-delay: 0ms"></span>
                                <span class="w-1.5 h-1.5 bg-white rounded-sm animate-bounce" style="animation-delay: 150ms"></span>
                                <span class="w-1.5 h-1.5 bg-white rounded-sm animate-bounce" style="animation-delay: 300ms"></span>
                            </span>
                        </span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../app/includes/footer.php'; ?>
