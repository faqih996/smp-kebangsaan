import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                "poppins": "Poppins",
            },
            fontSize: {
                'heading-1': '48px',
                'heading-2': '36px',
                'heading-3': '34px',
                'heading-4': '30px',
                'heading-5': '28px',
                'heading-6': '26px',
                'heading-7': '24px',
                'heading-8': '20px',
                'heading-9': '18px',
                'heading-10': '14px',
                'heading-11': '12px',
                'heading-12': '10px',
            },
            colors: {
                blue: {
                5: '#e3f2fd',
                10: '#bbdefb',
                20: '#90caf9',
                30: '#64b5f6',
                40: '#42a5f5',
                50: '#2196f3',
                60: '#1e88e5',
                70: '#1976d2',
                80: '#1565c0',
                90: '#0466c8',
                100: '#0d47a1',
                110: '#0a369d',
                120: '#00296b'
                },
                orange: {
                5: '#FDF5E8',
                10: '#F9E3BB',
                20: '#F5D18F',
                30: '#F1BF62',
                40: '#ffcc00',
                50: '#ffbf00',
                60: '#ffb300',
                70: '#ffa600',
                80: '#ff9900',
                90: '#ff8c00',
                100: '#ff8000',
                },
                red: {
                10: '#FDE8E9',
                30: '#F9BBBF',
                50: '#F58F95',
                70: '#F1626A',
                100: '#EB1F2B',
                },
                green: {
                5: '#D2F9D5',
                10: '#BFF5C5',
                30: '#ABF5B4',
                50: '#8CF59C',
                70: '#6FF581',
                100: '#2ED16C',
                200: '#114232'
                },
                gray: {
                10: '#E6E6E7',
                30: '#B4B6B9',
                50: '#82868B',
                70: '#50555D',
                100: '#050D18',
                },
            },
            keyframes: {
                slideToL: {
                "0%": { transform: "translateX(0%)" },
                "100%": { transform: "translateX(-100%)" },
                },
                slideToR: {
                "0%": { transform: "translateX(-100%)" },
                "100%": { transform: "translateX(0%)" },
                },
            },
        },
    },

    plugins: [forms, typography],
};
