<template>
  <div>
    <canvas id="myChart" width="900" height="300"></canvas>
  </div>
</template>

<script>
import Chart from 'chart.js/auto';
  export default {
    name: "Linechart",
    mounted () {
      
      // const config = {
      //   type: 'line',
      //   data: data,
      // };
      // const labels = Utils.months({count: 7});
      // const data = {
      //   labels: labels,
      //   datasets: [{
      //     label: 'My First Dataset',
      //     data: [65, 59, 80, 81, 56, 55, 40],
      //     fill: false,
      //     borderColor: 'rgb(75, 192, 192)',
      //     tension: 0.1
      //   }]
      // };

        const ctx = document.getElementById('myChart');
        const myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Sun', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                datasets: [{
                    label: '# of Sales',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgb(46, 119, 1)'
                    ],
                    borderColor: [
                        'rgb(46, 119, 1)'
                    ],
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

    },
  }

</script>

<style lang="scss" scoped>

</style>