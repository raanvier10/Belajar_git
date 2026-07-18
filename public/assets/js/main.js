document.addEventListener('DOMContentLoaded', () => {
    // --- Mobile Menu Toggle ---
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // --- Header Scroll Effect ---
    const header = document.getElementById('global-header');
    if (header) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 10) {
                header.classList.add('shadow-elevation-1');
            } else {
                header.classList.remove('shadow-elevation-1');
            }
        });
    }

    // --- Contact Form AJAX Submit ---
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            
            const btnSubmit = document.getElementById('btn-submit');
            const btnText = document.getElementById('btn-text');
            const btnSpinner = document.getElementById('btn-spinner');
            const statusBanner = document.getElementById('form-status');
            const statusIcon = document.getElementById('form-status-icon');
            const statusText = document.getElementById('form-status-text');
            const errorEmail = document.getElementById('error-email');
            
            // Hide previous errors
            errorEmail.classList.add('hidden');
            document.getElementById('email').classList.remove('border-error');
            
            // Loading state
            btnSubmit.disabled = true;
            btnText.classList.add('opacity-0');
            btnSpinner.classList.remove('hidden');
            
            const formData = {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                subject: document.getElementById('subject').value,
                message: document.getElementById('message').value,
            };
            
            try {
                const response = await fetch('/api/contact.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(formData)
                });
                
                const result = await response.json();
                
                statusBanner.classList.remove('hidden', 'bg-error/10', 'text-error', 'bg-success/10', 'text-success');
                
                if (response.ok && result.success) {
                    // Success
                    statusBanner.classList.add('bg-success/10', 'text-success');
                    statusIcon.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>`;
                    statusText.textContent = result.message || "Pesan berhasil dikirim.";
                    contactForm.reset();
                } else {
                    // Validation error
                    statusBanner.classList.add('bg-error/10', 'text-error');
                    statusIcon.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>`;
                    statusText.textContent = "Gagal mengirim pesan. Silakan periksa input Anda.";
                    
                    if (result.errors && result.errors.email) {
                        errorEmail.classList.remove('hidden');
                        document.getElementById('email').classList.add('border-error');
                        errorEmail.innerHTML = `<span class="inline-block w-3 h-3 bg-error text-white text-[9px] text-center font-bold mr-1 align-middle leading-3 rounded-sm">!</span>${result.errors.email}`;
                    }
                }
            } catch (error) {
                // Network error
                statusBanner.classList.remove('hidden');
                statusBanner.classList.add('bg-error/10', 'text-error');
                statusIcon.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>`;
                statusText.textContent = "Terjadi kesalahan sistem. Coba beberapa saat lagi.";
            } finally {
                // Reset loading state
                btnSubmit.disabled = false;
                btnText.classList.remove('opacity-0');
                btnSpinner.classList.add('hidden');
            }
        });
    }
});
