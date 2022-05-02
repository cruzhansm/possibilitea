<template>
  <div class="relative">
      <canvas id="myChart2" width="242" height="260"></canvas>
      <div class="absolute-center text-center">
          <p class="pt-2 font-bold text-primary">58 Total Orders</p>
      </div>
  </div>


</template>

<script>
  import Chart from 'chart.js/auto';

  export default {
    name: "Doughnut",
    mounted () {

      //setup block
        // change the datapoints array with available data from
        const datapoints = [35, 65];
        const data = {
        datasets: [{
        data: datapoints,
        backgroundColor: [
          '#2E7701',
          '#C4C4C4'
        ],
        cutout: '50%',
        }]
      };
        

      //counter plugin block
       const counter = {
        id: 'counter',
        beforeDraw( chart, args, options ) {
        const { ctx, chartArea: { top, right, bottom, left, width, height }} = chart;
        ctx.save();
        ctx.font = options.fontWeight +' '+ options.fontSize + 'px ' + options.fontFamily;
        ctx.textAlign = 'center';
        ctx.fillStyle = options.fontColor;
         ctx.fillText(datapoints[0] + '%', width/2, (height / 2) + (options.fontSize * 0.34));
        // X0 = starting point on the horizontal level l/r
        // yo = starting point on the vertical level t/b
        // x1 = length of the shape in pixel horizontal level
        // yl = length of the shape in pixel vertical level
        }
       }

         // config block
        const config = {
        type: 'doughnut',
        data,
        options: {
          plugins: {
            legend: {
              display: false
            },
            tooltip:{
              enabled: false
            },
            counter:{
              fontColor: "#2E7701",
              fontSize: 30,
              fontWeight: 'bold',
              fontFamily: 'sans-serif'
            }
          }
        },
          plugins: [counter]
        };


         // render init block
        const myChart2 = new Chart (
        document.getElementById('myChart2'),
        config
        );
    },
  }
</script>

<style lang="scss" scoped>

</style>