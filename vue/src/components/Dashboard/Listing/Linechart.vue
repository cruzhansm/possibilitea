<template>
  <div>
    <canvas id="myChart" width="900" height="300" class="pr-8"></canvas>
  </div>
</template>

<script>
import Chart from 'chart.js/auto';
  export default {
    name: "Linechart",
    mounted () {

        //remove and replace with data from DB 
        let randomArr = [];
        randomArr.push(Math.floor(Math.random()* 10));
        randomArr.push(Math.floor(Math.random()* 15));
        randomArr.push(Math.floor(Math.random()* 20));
        randomArr.push(Math.floor(Math.random()* 30));
        randomArr.push(Math.floor(Math.random()* 35));
        randomArr.push(Math.floor(Math.random()* 40));


        const ctx = document.getElementById('myChart');
        const myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Sun', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                datasets: [{
                    label: '# of Sales',
                    data: randomArr,
                    backgroundColor: [
                        'rgb(46, 119, 1)'
                    ],
                    borderColor: [
                        'rgb(46, 119, 1)'
                    ],
                    borderWidth: 2,
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        color: '#000000'
                    },
                    x:{
                        color: 'black'
                    }
                },
                layout:{
                    padding: 4
                }
            }
        });

    },
  }

</script>

<style lang="scss" scoped>

</style>