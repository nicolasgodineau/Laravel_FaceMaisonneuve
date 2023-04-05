/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            gridTemplateColumns: {
                fluid: "repeat(auto-fit, minmax(150px,1fr))",
            },
            colors: {
                Violetfoncer: "#3F206C",
                Violetclair: "#B7A1FB75",
                Rougefoncer: "#882323",
            },
            fontFamily: {
                body: "Poppins",
            },
        },
    },
    plugins: [require("daisyui")],
};
