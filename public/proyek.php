<?php
$page_title = 'Proyek';
include __DIR__ . '/../app/includes/header.php';
$projects = include __DIR__ . '/../app/data/projects.php';
?>

<section class="max-w-[1120px] mx-auto px-md py-16 lg:py-24">
    <div class="mb-12">
        <span class="font-pixel text-pixel-tag uppercase text-accent-coin tracking-wide bg-canvas-soft px-3 py-1 rounded-pill">
            Level Select
        </span>
        <h1 class="font-heading text-display-lg text-ink mt-4 mb-4">Galeri Proyek</h1>
        <p class="text-body-lg text-body max-w-2xl">Kumpulan studi kasus UI/UX dan implementasi Web Development yang pernah saya kerjakan.</p>
    </div>

    <!-- Filter (Visual only for now) -->
    <div class="flex gap-2 mb-8 overflow-x-auto pb-2">
        <button class="h-9 px-4 rounded-pill bg-primary text-on-primary font-semibold text-button-sm whitespace-nowrap">Semua</button>
        <button class="h-9 px-4 rounded-pill bg-canvas-soft text-mute hover:bg-primary-soft hover:text-primary font-semibold text-button-sm whitespace-nowrap transition-colors">UI/UX Design</button>
        <button class="h-9 px-4 rounded-pill bg-canvas-soft text-mute hover:bg-primary-soft hover:text-primary font-semibold text-button-sm whitespace-nowrap transition-colors">Web Development</button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-lg">
        <?php foreach ($projects as $project): ?>
        <a href="#" class="group block rounded-md bg-surface-card p-4 shadow-elevation-2 border border-hairline hover:shadow-elevation-3 hover:-translate-y-1 transition-all duration-200">
            <div class="aspect-video w-full overflow-hidden rounded-sm mb-4 relative">
                <img src="<?php echo htmlspecialchars($project['thumbnail_path']); ?>" alt="<?php echo htmlspecialchars($project['title']); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                <div class="absolute top-2 right-2">
                    <span class="inline-block px-2 py-1 bg-ink/80 backdrop-blur-sm text-canvas font-pixel text-[10px] rounded-sm uppercase">
                        <?php echo $project['category'] === 'uiux' ? 'UI/UX' : 'WEB DEV'; ?>
                    </span>
                </div>
            </div>
            
            <?php if(!empty($project['tech_stack'])): ?>
                <div class="flex gap-2 mb-3 overflow-x-auto pb-1">
                    <?php foreach($project['tech_stack'] as $tech): ?>
                        <span class="inline-flex items-center h-6 px-3 rounded-pill bg-primary-soft text-primary font-body font-semibold text-caption whitespace-nowrap group-hover:-translate-y-0.5 transition-transform duration-200">
                            <?php echo htmlspecialchars($tech); ?>
                        </span>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            
            <h3 class="font-heading font-semibold text-heading-md text-ink mb-2"><?php echo htmlspecialchars($project['title']); ?></h3>
            <p class="text-body-md text-body line-clamp-2"><?php echo htmlspecialchars($project['summary']); ?></p>
        </a>
        <?php endforeach; ?>
    </div>
</section>

<?php include __DIR__ . '/../app/includes/footer.php'; ?>
