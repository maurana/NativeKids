import { extendTheme } from "native-base";

export const theme = extendTheme({
  colors: {
    // Add new color
    primary: {
      900: "#881337",
      800: "#9f1239",
      700: "#be123c",
      600: "#e11d48",
      500: "#f43f5e",
      400: "#fb7185",
      300: "#fda4af",
      200: "#fecdd3",
      100: "#ffe4e6",
      50: "#fff1f2",
    },
    // Redefining only one shade, rest of the color will remain same.
    amber: {
      400: "#d97706",
    },
  },
  config: {
    // Changing initialColorMode to 'dark'
    initialColorMode: "dark",
  },
  fontConfig: {
    Roboto: {
      100: {
        normal: "Roboto-Light",
        italic: "Roboto-LightItalic",
      },
      200: {
        normal: "Roboto-Light",
        italic: "Roboto-LightItalic",
      },
      300: {
        normal: "Roboto-Light",
        italic: "Roboto-LightItalic",
      },
      400: {
        normal: "Roboto-Regular",
        italic: "Roboto-Italic",
      },
      500: {
        normal: "Roboto-Medium",
      },
      600: {
        normal: "Roboto-Medium",
        italic: "Roboto-MediumItalic",
      },
      700: {
        normal: 'Roboto-Bold',
      },
      800: {
        normal: 'Roboto-Bold',
        italic: 'Roboto-BoldItalic',
      },
      900: {
        normal: 'Roboto-Bold',
        italic: 'Roboto-BoldItalic',
      },
    },
  },

  // Make sure values below matches any of the keys in `fontConfig`
  fonts: {
    heading: "Roboto",
    body: "Roboto",
    mono: "Roboto",
  },
});