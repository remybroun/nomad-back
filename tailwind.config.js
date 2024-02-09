/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')
export default {
    content: [
        './app/**/*.php',
        './resources/**/*.html',
        './resources/**/*.js',
        './resources/**/*.jsx',
        './resources/**/*.ts',
        './resources/**/*.tsx',
        './resources/**/*.php',
        './resources/**/*.vue',
        './resources/**/*.twig',
    ],
    theme: {
        fontSize: {
            xs: ['0.75rem', {lineHeight: '0.5rem'}],
            sm: ['0.875rem', {lineHeight: '1rem'}],
            base: ['1rem', {lineHeight: '1rem'}],
            lg: ['1.125rem', {lineHeight: '1.5rem'}],
            xl: ['1.3rem', {lineHeight: '1.75rem'}],
            '2xl': ['1.5rem', {lineHeight: '2rem'}],
            '3xl': ['2rem', {lineHeight: '2rem'}],
            '4xl': ['2.5rem', {lineHeight: '2.5rem'}],
            '5xl': ['3rem', {lineHeight: '3rem'}],
            '6xl': ['3.5rem', {lineHeight: '1'}],
            '7xl': ['4rem', {lineHeight: '1'}],
            '8xl': ['5rem', {lineHeight: '1.2'}],
            '9xl': ['8rem', {lineHeight: '1.2'}],
        },
        extend: {
            animation: {
                'marquee-slower': 'marquee 30s linear infinite',
                'marquee': 'marquee 20s linear infinite',
                'marquee-faster': 'marquee 10s linear infinite',
                'scroll-slower': 'scroll 15s linear infinite',
            },
            keyframes: {
                marquee: {
                    '0%': {transform: 'translateX(0)'},
                    '100%': {transform: 'translateX(-50%)'},
                }
            },
            colors: {
                'everglade': {
                    '50': '#f1f8f1',
                    '100': '#e0edde',
                    '200': '#c1dbbf',
                    '300': '#94c194',
                    '400': '#65a267',
                    '500': '#458449',
                    '600': '#326937',
                    '700': '#28542d',
                    '800': '#224426',
                    '900': '#1c381f',
                },
            },
            spacing: {
                '120': '30rem',
                '160': '40rem',
            },
            borderRadius: {
                '4xl': '2rem',
                '5xl': '2.5rem',
            },
            fontFamily: {
                serif: ['Playfair Display', ...defaultTheme.fontFamily.serif],
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
                display: ['DM Sans', ...defaultTheme.fontFamily.sans],
            },
            maxWidth: {
                '2xl': '40rem',
            },

            typography: (theme) => ({
                DEFAULT: {
                    css: {
                        color: theme('colors.gray.700'),
                        h1: {
                            fontWeight: '700',
                            letterSpacing: theme('letterSpacing.tighter'),
                            textAlign: 'start',
                            fontFamily: 'DM Sans',
                            color: theme('colors.gray.900'),
                        },

                        h2: {
                            fontWeight: '700',
                            letterSpacing: theme('letterSpacing.tighter'),
                            textAlign: 'start',
                            fontFamily: 'DM Sans',
                            color: theme('colors.gray.900'),
                        },
                        h3: {
                            letterSpacing: theme('letterSpacing.tighter'),
                            textAlign: 'start',
                            fontFamily: 'DM Sans',
                            fontWeight: '600',
                            color: theme('colors.gray.900'),
                        },
                        'ol li:before': {
                            fontWeight: '600',
                            color: theme('colors.gray.500'),
                        },
                        'ul li:before': {
                            backgroundColor: theme('colors.gray.400'),
                        },
                        code: {
                            color: theme('colors.gray.900'),
                        },
                        a: {
                            color: theme('colors.gray.900'),
                            fontWeight: 400,
                        },
                        pre: {
                            color: theme('colors.white'),
                            backgroundColor: theme('colors.gray.800'),
                        },
                        blockquote: {
                            color: theme('colors.gray.900'),
                            borderLeftColor: theme('colors.gray.200'),
                        },
                    },
                },
            }),
        },
    },

    plugins: [
        require('@tailwindcss/typography'),
    ],
}
