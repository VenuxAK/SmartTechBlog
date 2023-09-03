/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            container: {
                center: true,
            },
            colors: {
                primary: "royalblue",
                danger: "crimson",
                success: "springgreen",
            },
        },
    },
    plugins: [],
};
