/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {  
      colors: {
      "cambridge": {
        100: "#E9ECEA",
        200: "#DEE3E0",
        300: "#D3D9D6",
        400: "#C8D0CC",
        500: "#BDC7C2",
        600: "#B2BDB8",
        700: "#A7B4AE",
        800: "#9CABA4",
        900: "#91A19A",
        950: "#869890",
      },
      "khaki": {
        100: "#F7F5F3",
        200: "#EFEAE6",
        300: "#E7E0DA",
        400: "#DED5CE",
        500: "#D6CBC2",
        600: "#CEC1B6",
        700: "#C6B7A9",
        800: "#BAA898",
      },
      "champagne": {
        100: "#FAF6F0",
        200: "#F5EDE0",
        300: "#EEE0CB",
      },
    }},
  
  },
  plugins: [],
}

