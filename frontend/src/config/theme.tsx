import { extendTheme } from "native-base";

export const theme = extendTheme({
  colors: {
    primary: {
      900: "#78350f",
      800: "#92400e",
      700: "#b45309",
      600: "#d97706",
      500: "#f59e0b",
      400: "#fbbf24",
      300: "#fcd34d",
      200: "#fde68a",
      100: "#fef3c7",
      50: "#fffbeb",
    },
  },
  config: {
    initialColorMode: "dark",
  }
});