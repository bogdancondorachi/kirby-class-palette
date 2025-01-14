import ColourSwatchField from "./components/ColourSwatchField.vue";
import ColourSwatchFieldPreview from "./components/ColourSwatchFieldPreview.vue";

window.panel.plugin("bogdancondorachi/colour-swatch-field", {
  fields: {
    swatch: ColourSwatchField,
  },

  components: {
    "k-swatch-field-preview": ColourSwatchFieldPreview,
  },

  icons: {
    checked: "<path d=\"M9.9997 15.1709L19.1921 5.97852L20.6063 7.39273L9.9997 17.9993L3.63574 11.6354L5.04996 10.2212L9.9997 15.1709Z\" />",
  },
});
