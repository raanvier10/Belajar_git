<!DOCTYPE html>
<html lang="id">
<head>
    <?php include __DIR__ . '/seo-meta.php'; ?>
    <link rel="stylesheet" href="/assets/css/output.css">
</head>
<body class="bg-canvas text-body font-body flex flex-col min-h-screen antialiased selection:bg-primary-soft selection:text-primary">

<header class="sticky top-0 z-40 bg-canvas shadow-elevation-1 transition-shadow duration-200" id="global-header">
    <div class="max-w-[1120px] mx-auto px-md h-[72px] flex items-center justify-between">
        <!-- Logo -->
        <a href="/index.php" class="font-heading font-semibold text-heading-md text-ink hover:text-primary transition-colors">
            Portofolio
        </a>

        <!-- Desktop Menu -->
        <nav class="hidden md:flex items-center gap-2">
            <a href="/tentang.php" class="inline-flex items-center gap-2 h-9 px-[14px] rounded-md text-body font-semibold text-button-sm hover:bg-primary-soft hover:text-primary transition-colors">Tentang</a>
            <a href="/skill.php" class="inline-flex items-center gap-2 h-9 px-[14px] rounded-md text-body font-semibold text-button-sm hover:bg-primary-soft hover:text-primary transition-colors">Keterampilan</a>
            <a href="/proyek.php" class="inline-flex items-center gap-2 h-9 px-[14px] rounded-md text-body font-semibold text-button-sm hover:bg-primary-soft hover:text-primary transition-colors">Proyek</a>
        </nav>

        <!-- CTA & Mobile Toggle -->
        <div class="flex items-center gap-4">
            <a href="/kontak.php" class="hidden md:inline-flex items-center gap-2 h-9 px-[14px] rounded-pill bg-primary text-on-primary font-semibold text-button-sm hover:bg-primary-deep active:translate-y-[1px] focus-visible:outline-none focus-visible:ring-4 focus-visible:ring-primary-soft transition-all duration-150">
                Hubungi Saya
            </a>
            <button id="mobile-menu-btn" class="md:hidden p-2 text-ink hover:text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </button>
        </div>
    </div>
    
    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="hidden md:hidden bg-canvas border-t border-hairline absolute w-full left-0 top-[72px] shadow-elevation-4">
        <nav class="flex flex-col p-4 gap-2">
            <a href="/index.php" class="block p-3 rounded-md text-ink font-semibold hover:bg-canvas-soft">Beranda</a>
            <a href="/tentang.php" class="block p-3 rounded-md text-ink font-semibold hover:bg-canvas-soft">Tentang</a>
            <a href="/skill.php" class="block p-3 rounded-md text-ink font-semibold hover:bg-canvas-soft">Keterampilan</a>
            <a href="/proyek.php" class="block p-3 rounded-md text-ink font-semibold hover:bg-canvas-soft">Proyek</a>
            <a href="/kontak.php" class="block p-3 rounded-md bg-primary text-on-primary font-semibold text-center mt-2">Hubungi Saya</a>
        </nav>
    </div>
</header>

<main class="flex-grow">
