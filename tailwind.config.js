/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    darkMode: "class",
    theme: {
        extend: {
            colors: {
                "ice": "#e4eef0"
            },
            backgroundImage: {
                "gradient-radial": "radial-gradient(var(--tw-gradient-stops))",
                "gradient-conic":
                    "conic-gradient(from 180deg at 50% 50%, var(--tw-gradient-stops))",
            },
            height: {
                default: "1px",
                s2: "2px",
                s3: "3px",
                s4: "4px",
                100: "600px",
                120: "120%",
            },
            width: {
                120: "120%",
                82: "350px",
            },
            maxWidth: {
                10: "10px",
                20: "20px",
                30: "30px",
                40: "40px",
                50: "50px",
                60: "60px",
                70: "70px",
                80: "80px",
                90: "90px",
                100: "100px",
                110: "110px",
            },
        },
    },
    plugins: [require("daisyui")],
};
