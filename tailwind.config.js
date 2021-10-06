const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                rmWhite: {
                    DEFAULT: '#F7FAFC',
                },
                rmGrey: {
                    DEFAULT: '#EAEAEA',
                },
                rmYellow: {
                    DEFAULT: '#DBAB3A',
                },
                rmBlue: {
                    light: '#06396C',
                    DEFAULT: '#021F4B',
                    dark: '#0B1928'
                },
                rmTeal: {
                    light: '#017182',
                    DEFAULT: '#015A68',
                    dark: '#012C37',
                },
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                bebas: ['Bebas Neue', ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                '10xl': '10rem',
                '12xl': '14rem',
            },
            backgroundImage: {
                'rm': "url('/images/rm_background.png')",
                'rmMuted': "url('/images/rm_background_muted.png')",
            },
            outline: {
                blue: '2px solid #ff0000'
            }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
