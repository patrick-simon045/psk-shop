<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="car">
          Hello <span class="span">{{ username }}</span
          >, this is a Vue js Component!!!
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { default_variables } from "../default-variables";
export default {
  props: {
    name: {
      type: String,
      default: default_variables.name,
      required: true,
    },
  },
  data() {
    return {
      username: this.name,
    };
  },
  mounted() {
    console.log("Component mounted.");
    console.log("This is new begining of a new era of programming");
  },
};
</script>

<style lang="sass" scoped>
// font
$font-stack: Helvetica, sans-serif
$font-size-small: 15px
$font-size-large: 20px
$font-weight: bold
// color
$primary-color: #333
$span-color: #FF0000
$background-color: #fff
// margin
$margin-top: 20px
// padding
$padding: 30px 20px
$padding-vertical: 20px
// border radius
$border-radius: 10px
// box shadow
$box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px

.car
    font: 100% $font-stack
    font-size: $font-size-small
    padding: $padding
    margin-top: $margin-top
    border-radius: $border-radius
    color: $primary-color
    background: $background-color
    box-shadow: $box-shadow

.span
    color: $span-color
    font-weight: $font-weight
    font-size: $font-size-large
</style>
