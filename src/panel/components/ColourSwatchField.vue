<template>
  <k-field v-bind="$props" :input="id" class="k-color-field">
    <fieldset
      :disabled="disabled"
      class="k-coloroptions-input k-color-field-options"
    >
      <ul>
        <li v-for="(option, index) in options" :key="index">
          <label :title="option.title ?? option.class">
            <input
              :autofocus="autofocus && index === 0"
              :checked="option.hex === value.hex"
              :disabled="disabled"
              :name="name ?? id"
              :required="required"
              :value="option.hex"
              class="input-hidden"
              type="radio"
              @change="$emit('input', option)"
            >
            <k-color-frame :color="'#' + option.hex">
              <k-icon
                v-if="(option.hex === value.hex)"
                :color="isBrightColor(option.hex) ? 'var(--color-black)' : 'var(--color-white)'"
                style="z-index: var(--z-content)"
                type="checked"
              />
            </k-color-frame>
          </label>
        </li>
      </ul>
    </fieldset>
  </k-field>
</template>

<script>
export default {
  props: {
    help: String,
    value: Object,
    label: String,
    disabled: Boolean,
    required: Boolean,
    options: Object,
  },

  methods: {
    isBrightColor(hex) {
      const color = hex.replace("#", "");
      const [r, g, b] = [0, 2, 4].map(offset => Number.parseInt(color.substr(offset, 2), 16));
      const brightness = (r * 299 + g * 587 + b * 114) / 1000;
      return brightness > 155;
    },
  },
};
</script>
