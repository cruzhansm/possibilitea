module.exports = {
    content: ["./index.html", "./src/**/*.{vue,js,ts,jsx,tsx}"],
    theme: {
        extend: {
            colors: {
                primary: "#2E7701",
                primaryHovered: "#6DBA3E",
                secondary: "#C4C4C4",
                secondaryHovered: "#E0E0E0",
                lightgray: "#696969",
                divider: "#EAEAEA",
                error: "#DE3445",
                inputField: "#F4F4F4",
                inputText: "#000000",
                buttonText: "#FFFFFF",
            },
            fontSize: {
                textButtons: "1.5rem",
                textModal: "1.25rem",
                textInput: "1.25rem",
            },
            fontFamily: {
                inter: ['"Inter-Regular"'],
            },
        },
    },
    plugins: [],
};
