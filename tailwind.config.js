import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', 'Montserrat', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'dark-space': {
                    bg: '#050505',
                    'bg-secondary': '#0a0a0f',
                    cyan: '#00E5FF',
                    violet: '#8A2BE2',
                    orange: '#D35400',
                    green: '#10B981',
                },
            },
            borderRadius: {
                'card': '12px',
                'card-lg': '16px',
            },
        },
    },

    plugins: [forms],
};
