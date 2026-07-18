<?php
$page_title = 'Beranda';
include __DIR__ . '/../app/includes/header.php';
$projects = include __DIR__ . '/../app/data/projects.php';
?>

<!-- Hero Section -->
<section class="max-w-[1120px] mx-auto px-md py-24 lg:py-32 flex flex-col md:flex-row items-center gap-12">
    <div class="flex-1">
        <span class="font-pixel text-pixel-tag uppercase text-accent-coin tracking-wide bg-canvas-soft px-3 py-1 rounded-pill">
            World 1-1 &middot; Portofolio
        </span>
        <h1 class="font-heading text-display-lg lg:text-display-xl text-ink mt-6 leading-tight max-w-3xl">
            Membangun antarmuka yang jelas, <span class="text-primary">satu piksel</span> pada satu waktu.
        </h1>
        <p class="font-body text-body-lg text-body mt-6 max-w-xl">
            Web Developer &amp; UI/UX Designer &mdash; merancang produk digital yang rapi, cepat, dan mudah digunakan.
        </p>
        <div class="mt-8 flex gap-4">
            <a href="/proyek.php" class="inline-flex items-center gap-2 h-12 px-7 rounded-pill bg-primary text-on-primary font-body font-semibold text-button-md hover:bg-primary-deep active:translate-y-[1px] focus-visible:outline-none focus-visible:ring-4 focus-visible:ring-primary-soft transition-all duration-150">
                Lihat Proyek
            </a>
            <a href="/kontak.php" class="inline-flex items-center gap-2 h-12 px-7 rounded-pill bg-transparent border-[1.5px] border-hairline-strong text-ink font-body font-semibold text-button-md hover:bg-canvas-soft hover:border-primary focus-visible:outline-none focus-visible:ring-4 focus-visible:ring-primary-soft transition-all duration-150">
                Hubungi Saya
            </a>
        </div>
    </div>
    
    <div class="hidden md:block flex-1 relative">
        <div class="card-featured aspect-square max-w-md mx-auto">
            <div class="card-featured__inner w-full h-full flex items-center justify-center bg-canvas-soft">
                 <!-- Placeholder for Hero Visual -->
                 <img src="https://placehold.co/400x400/E9F0FF/2F6FFB?text=Hero+Visual" alt="Hero Illustration" class="w-full h-full object-cover" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Coin-Dot Divider -->
<div class="max-w-[1120px] mx-auto px-md py-8">
    <div class="w-full h-[1px] bg-hairline relative flex items-center justify-around px-24">
        <div class="w-1 h-1 bg-accent-coin"></div>
        <div class="w-1 h-1 bg-accent-coin"></div>
        <div class="w-1 h-1 bg-accent-coin"></div>
        <div class="w-1 h-1 bg-accent-coin"></div>
    </div>
</div>

<!-- Featured Projects -->
<section class="max-w-[1120px] mx-auto px-md py-24">
    <div class="flex justify-between items-end mb-12">
        <div>
            <h2 class="font-heading text-heading-lg text-ink">Proyek Unggulan</h2>
            <p class="text-body-md text-mute mt-2">Beberapa hasil karya terbaik saya.</p>
        </div>
        <a href="/proyek.php" class="hidden sm:inline-flex items-center gap-2 h-9 px-[14px] rounded-pill bg-canvas-soft text-primary font-semibold text-button-sm hover:bg-primary hover:text-on-primary transition-colors">
            Lihat Semua
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-lg">
        <?php foreach ($projects as $project): ?>
        <a href="#" class="group block rounded-md bg-surface-card p-4 shadow-elevation-2 border border-hairline hover:shadow-elevation-3 hover:-translate-y-1 transition-all duration-200">
            <div class="aspect-video w-full overflow-hidden rounded-sm mb-4">
                <img src="<?php echo htmlspecialchars($project['thumbnail_path']); ?>" alt="<?php echo htmlspecialchars($project['title']); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
            </div>
            
            <?php if(!empty($project['tech_stack'])): ?>
                <div class="flex gap-2 mb-3 overflow-x-auto pb-1">
                    <?php foreach($project['tech_stack'] as $tech): ?>
                        <span class="inline-flex items-center h-6 px-3 rounded-pill bg-primary-soft text-primary font-body font-semibold text-caption whitespace-nowrap">
                            <?php echo htmlspecialchars($tech); ?>
                        </span>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            
            <h3 class="font-heading font-semibold text-heading-md text-ink mb-2"><?php echo htmlspecialchars($project['title']); ?></h3>
            <p class="text-body-md text-body"><?php echo htmlspecialchars($project['summary']); ?></p>
        </a>
        <?php endforeach; ?>
    </div>
    
    <div class="mt-8 text-center sm:hidden">
        <a href="/proyek.php" class="inline-flex items-center gap-2 h-12 px-7 rounded-pill bg-canvas-soft text-primary font-semibold text-button-md hover:bg-primary hover:text-on-primary transition-colors">
            Lihat Semua Proyek
        </a>
    </div>
</section>

<!-- Call to Action -->
<section class="bg-primary-soft py-24">
    <div class="max-w-[720px] mx-auto px-md text-center">
        <h2 class="font-heading text-display-md text-ink mb-4">Punya Ide Proyek?</h2>
        <p class="text-body-lg text-body mb-8">Mari wujudkan ide Anda menjadi produk digital yang luar biasa bersama.</p>
        <a href="/kontak.php" class="inline-flex items-center gap-2 h-12 px-7 rounded-pill bg-primary text-on-primary font-body font-semibold text-button-md hover:bg-primary-deep transition-colors">
            Mulai Percakapan
        </a>
    </div>
</section>

<?php include __DIR__ . '/../app/includes/footer.php'; ?>
