const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
pagination: theme => ({
            color: theme('colors.purple.600'),
            linkFirst: 'mr-6 border rounded',
            linkSecond: 'rounded-l border-l',
            linkBeforeLast: 'rounded-r border-r',
            linkLast: 'ml-6 border rounded',
            })
    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },

    plugins: [
        require('@tailwindcss/ui'),
        require('tailwindcss-plugins/pagination'),
    ],
};
