<template>
  <div class="k-color-field-preview">
    <k-color-frame :color="'#' + value.hex" />
  </div>
</template>

<script>
export default {
  props: {
    value: Object,
  },
};
</script>
