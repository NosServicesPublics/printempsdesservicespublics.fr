import transformerDirectives from '@unocss/transformer-directives'
import {
  defineConfig,
  presetIcons,
  presetTypography,
  presetWind,
} from 'unocss'

const colors = {
  black: '#333333',
  white: '#f9f9f9',
}

const tokens = {
  bg: colors.white,
  font: colors.black,
}

export default defineConfig({
  theme: {
    breakpoints: {
      sm: '576px',
      md: '768px',
      lg: '1024px',
      xl: '1280px',
      xxl: '1536px',
    },
    colors: {
      ...colors,
      ...tokens,
    },
  },

  presets: [
    presetWind(),
    presetIcons({
      extraProperties: {
        'display': 'inline-block',
        'white-space': 'nowrap',
        'vertical-align': 'sub',
      },
    }),
    presetTypography(),
  ],

  transformers: [
    transformerDirectives(),
  ],

  safelist: [
    'i-ri-close-fill',
    'i-ri-mail-line',
    'i-ri-phone-line',
    'i-ri-map-pin-2-line',
    'i-ri-arrow-right-line',
    'i-ri-external-link-line',
    'i-ri-twitter-fill',
    'i-ri-instagram-fill',
    'i-ri-linkedin-box-fill',
    'i-ri-github-fill',
    'items-center',
  ],
})
