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
                rmgrey: {
                    light: '#F7FAFC',
                    DEFAULT: '#EAEAEA',
                    dark: '#D8D8D8',
                },
                rmBlue: {
                    light: '#193965',
                    DEFAULT: '#0F2344',
                    dark: '#0B1928'
                },
                rmTeal: {
                    light: '#377F8A',
                    DEFAULT: '#295D6F',
                    dark: '#184249',
                },
                rhe: {
                    DEFAULT: '#DBAB3A',
                }
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
