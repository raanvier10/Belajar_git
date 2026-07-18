<?php
$page_title = 'Keterampilan';
include __DIR__ . '/../app/includes/header.php';
$skills = include __DIR__ . '/../app/data/skills.php';

// Group skills by category
$grouped_skills = [];
foreach ($skills as $skill) {
    $grouped_skills[$skill['category']][] = $skill;
}
?>

<section class="max-w-[1120px] mx-auto px-md py-16 lg:py-24">
    <div class="mb-12 text-center max-w-2xl mx-auto">
        <span class="font-pixel text-pixel-tag uppercase text-accent-coin tracking-wide bg-canvas-soft px-3 py-1 rounded-pill">
            Inventory Box
        </span>
        <h1 class="font-heading text-display-lg text-ink mt-4 mb-4">Keterampilan Teknis</h1>
        <p class="text-body-lg text-body">Koleksi perangkat (tools) dan teknologi yang saya gunakan sehari-hari untuk memecahkan masalah digital.</p>
    </div>

    <div class="space-y-16">
        <?php foreach ($grouped_skills as $category => $cat_skills): ?>
        <div>
            <div class="flex items-center gap-4 mb-6">
                <h2 class="font-heading text-heading-lg text-ink"><?php echo htmlspecialchars($category); ?></h2>
                <div class="flex-grow h-[1px] bg-hairline"></div>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <?php foreach ($cat_skills as $skill): ?>
                <div class="rounded-md bg-surface-card p-4 shadow-elevation-1 ring-1 ring-hairline hover:shadow-elevation-2 transition-shadow duration-200">
                    <img src="<?php echo htmlspecialchars($skill['icon_path']); ?>" class="w-10 h-10 mb-3 object-contain" alt="<?php echo htmlspecialchars($skill['name']); ?>" loading="lazy" />
                    <h3 class="font-body font-semibold text-heading-sm text-ink mb-2"><?php echo htmlspecialchars($skill['name']); ?></h3>
                    
                    <!-- Skill Coin-Meter (5 blok koin merepresentasikan proficiency) -->
                    <?php 
                        $level = round($skill['proficiency'] / 20); // 0-100 to 0-5
                    ?>
                    <div class="flex gap-1" aria-label="Level penguasaan <?php echo $skill['proficiency']; ?>%" title="<?php echo $skill['proficiency']; ?>%">
                        <?php for($i = 1; $i <= 5; $i++): ?>
                            <?php if($i <= $level): ?>
                                <span class="w-4 h-4 bg-accent-coin rounded-sm"></span>
                            <?php else: ?>
                                <span class="w-4 h-4 ring-1 ring-hairline-strong rounded-sm bg-canvas-soft"></span>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<?php include __DIR__ . '/../app/includes/footer.php'; ?>
