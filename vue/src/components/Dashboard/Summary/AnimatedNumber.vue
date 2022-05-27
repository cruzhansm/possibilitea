<template>
  <div>
      {{ displayNumber }}
  </div>
</template>

<script>
  export default {
    data () {
      name: "displayNumber"
      return {
        displayNumber:0,
        interval:false
      }
    },
    props: {
      number: {
        Number,
      }
    },
    ready () {
      this.displayNumber = this.number ? this.number : 0;
    },
      watch: {
      number () {
        clearInterval(this.interval);

          if(this.number == this.displayNumber) {
            return;
        }

        this.interval = window.setInterval(() => {
          if(this.displayNumber != this.number) {
            var change = (this.number - this.displayNumber) / 10;
            change = change >= 0 ? Math.ceil(change) : Math.floor(change);
            this.displayNumber = this.displayNumber + change;
          }
        }, 20);
      }
  }

    
  }
</script>

<style lang="scss" scoped>

</style>