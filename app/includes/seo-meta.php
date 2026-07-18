<?php
// seo-meta.php
$page_title = isset($page_title) ? $page_title . ' - Portofolio Web' : 'Portofolio Web — Pixel Fresh';
$page_description = isset($page_description) ? $page_description : 'Portofolio UI/UX Designer & Web Developer.';
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo htmlspecialchars($page_title); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
<!-- Open Graph -->
<meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
<meta property="og:type" content="website">

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600&family=Pixelify+Sans:wght@400&display=swap" rel="stylesheet">
<!-- Note: Fallback TT Commons Pro can be replaced with Inter or system UI if not licensed -->

<script src="https://cdn.tailwindcss.com"></script>
<script>
// Configure Tailwind for CDN (same as tailwind.config.js)
tailwind.config = {
  theme: {
    extend: {
      colors: {
        primary: { DEFAULT: '#2F6FFB', deep: '#1E4FD1', soft: '#E9F0FF' },
        accent: { pipe: '#1FA35C', coin: '#F5A623' },
        canvas: { DEFAULT: '#FFFFFF', soft: '#F5F7FB' },
        surface: { card: '#FFFFFF', modal: '#FFFFFF' },
        hairline: { DEFAULT: '#E3E8F0', strong: '#CBD3E1' },
        ink: '#12151C',
        body: '#3D4454',
        mute: '#8891A3',
        'on-primary': '#FFFFFF',
        success: '#1FA35C',
        warning: '#F5A623',
        error: '#E5484D',
        info: '#2F6FFB',
      },
      fontFamily: {
        heading: ['Outfit', 'system-ui', 'sans-serif'],
        body: ['system-ui', '-apple-system', 'Segoe UI', 'sans-serif'], // Using system-ui as fallback for TT Commons Pro
        pixel: ['Pixelify Sans', 'monospace'],
      },
      fontSize: {
        'display-xl': ['4rem', { lineHeight: '1.05', letterSpacing: '-0.02em', fontWeight: '600' }],
        'display-lg': ['3rem', { lineHeight: '1.1', letterSpacing: '-0.015em', fontWeight: '600' }],
        'display-md': ['2.25rem', { lineHeight: '1.15', letterSpacing: '-0.01em', fontWeight: '600' }],
        'heading-lg': ['1.75rem', { lineHeight: '1.25', letterSpacing: '-0.005em', fontWeight: '600' }],
        'heading-md': ['1.375rem', { lineHeight: '1.3', fontWeight: '600' }],
        'heading-sm': ['1.125rem', { lineHeight: '1.35', fontWeight: '600' }],
        'body-lg': ['1.125rem', { lineHeight: '1.6', fontWeight: '400' }],
        'body-md': ['1rem', { lineHeight: '1.6', fontWeight: '400' }],
        'body-sm': ['0.875rem', { lineHeight: '1.5', fontWeight: '400' }],
        'pixel-tag': ['0.6875rem', { lineHeight: '1.4', letterSpacing: '0.04em', fontWeight: '400' }],
      },
      spacing: {
        xxs: '4px', xs: '8px', sm: '12px', md: '16px', lg: '24px', xl: '32px', '2xl': '48px', '3xl': '64px', '4xl': '96px', '5xl': '128px',
      },
      borderRadius: {
        sm: '6px', md: '10px', lg: '16px', pill: '999px',
      },
      boxShadow: {
        'elevation-1': '0 1px 2px rgba(18,21,28,0.04), inset 0 0 0 1px #E3E8F0',
        'elevation-2': '0 2px 4px rgba(18,21,28,0.06), 0 1px 2px rgba(18,21,28,0.04), inset 0 0 0 1px #E3E8F0',
        'elevation-3': '0 4px 8px rgba(18,21,28,0.08), 0 2px 4px rgba(18,21,28,0.05), inset 0 0 0 1px #CBD3E1',
        'elevation-4': '0 8px 16px rgba(18,21,28,0.10), 0 4px 8px rgba(18,21,28,0.06), inset 0 0 0 1px #CBD3E1',
        'elevation-5': '0 16px 32px rgba(18,21,28,0.14), 0 6px 12px rgba(18,21,28,0.08), inset 0 0 0 1px #CBD3E1',
      },
      backgroundImage: {
        'gradient-brand': 'linear-gradient(135deg, #2F6FFB 0%, #1FA35C 100%)',
        'gradient-brand-soft': 'linear-gradient(135deg, #E9F0FF 0%, #E7F7EE 100%)',
        'gradient-coin': 'radial-gradient(circle at 30% 30%, #FFD874 0%, #F5A623 70%)',
      }
    }
  }
}
</script>
<style type="text/tailwindcss">
  @layer base {
    body {
      @apply bg-canvas text-body font-body;
    }
  }
  @layer components {
    .card-featured {
      clip-path: polygon(
        0 12px, 12px 12px, 12px 0,
        calc(100% - 12px) 0, calc(100% - 12px) 12px, 100% 12px,
        100% calc(100% - 12px), calc(100% - 12px) calc(100% - 12px), calc(100% - 12px) 100%,
        12px 100%, 12px calc(100% - 12px), 0 calc(100% - 12px)
      );
      background: linear-gradient(135deg, #2F6FFB 0%, #1FA35C 100%);
      padding: 3px;
    }
    .card-featured > .card-featured__inner {
      clip-path: inherit;
      background: #FFFFFF;
      padding: 32px;
    }
  }
</style>
