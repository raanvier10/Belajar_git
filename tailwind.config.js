/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./public/**/*.php",
    "./app/**/*.php",
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          DEFAULT: '#2F6FFB',
          deep: '#1E4FD1',
          soft: '#E9F0FF',
        },
        accent: {
          pipe: '#1FA35C',
          coin: '#F5A623',
        },
        canvas: {
          DEFAULT: '#FFFFFF',
          soft: '#F5F7FB',
        },
        surface: {
          card: '#FFFFFF',
          modal: '#FFFFFF',
        },
        hairline: {
          DEFAULT: '#E3E8F0',
          strong: '#CBD3E1',
        },
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
        body: ['TT Commons Pro', '-apple-system', 'Segoe UI', 'sans-serif'],
        pixel: ['Pixelify Sans', 'Press Start 2P', 'monospace'],
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
        xxs: '4px',
        xs: '8px',
        sm: '12px',
        md: '16px',
        lg: '24px',
        xl: '32px',
        '2xl': '48px',
        '3xl': '64px',
        '4xl': '96px',
        '5xl': '128px',
      },
      borderRadius: {
        sm: '6px',
        md: '10px',
        lg: '16px',
        pill: '999px',
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
      },
      screens: {
        sm: '481px',
        md: '769px',
        lg: '1025px',
        xl: '1440px',
      },
    },
  },
  plugins: [],
};
