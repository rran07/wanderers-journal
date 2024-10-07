/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
        animation: ['motion-safe'],
        colors: {

        },
        fontFamily:{
            "anton": ["Anton", "sans-serif"]
        },
        backgroundImage: {
            'image-sm': "url('https://picsum.photos/200/300')",
            'image-lg': "url('https://picsum.photos/1200/800')",
          },
        height: {
            'heightCustom': "630px",
            'headerHeight': "840px",
        },
        width: {
            'widthCustom': "1080px",
            'widthCustom1': "489px"
        },

    },
  },
  plugins: [],
}

