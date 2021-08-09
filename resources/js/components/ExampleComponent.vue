<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="car">{{ username }} This is a Vue js Component!!!</div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
      name: {
          type: String,
          default: "Unknown",
          required: true,
      }
  },
  data() {
    return {
      username: this.name,
    };
  },
  mounted() {
    console.log("Component mounted.");
    console.log("This is new begining of an era");
  },
};
</script>

<style lang="sass" scoped>
// SASS VARIABLES
$font-stack: Helvetica, sans-serif
$primary-color: #333
$background-color: #fff
$font-size: 20px
$padding: 30px 20px
$margin-top: 20px
$padding-vertical: 20px
$border-radius: 10px
$box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset
.car
    font: 100% $font-stack
    font-size: $font-size
    padding: $padding
    margin-top: $margin-top
    border-radius: $border-radius
    color: $primary-color
    background: $background-color
    box-shadow: $box-shadow
</style>
