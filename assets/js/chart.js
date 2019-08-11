
let myChart = document.getElementById('myChart').getContext('2d');
let massPopChart = new Chart(myChart, {
    type: 'horizontalBar', //bar, horizontal, pie,line,dougnut,radar,and polar area
    data: {
        labels: ['a', 'b', 'c', 'd'],
        datasets: [{
            data: [
                1000,
                2000,
                3221,
                800,
            ],
            label: 'test',

            backgroundColor: '#149DD5',

        }]
    },
    options: {}
});

// pieChart
let myChart2 = document.getElementById('myChart2').getContext('2d');
let massPopChart2 = new Chart(myChart2, {
    type: 'line', //bar, horizontal, pie,line,dougnut,radar,and polar area
    data: {
        labels: ['a', 'b', 'c', 'd'],
        datasets: [{
            data: [
                1000,
                2000,
                3221,
                800,
            ],
            label: 'test',

            backgroundColor: '#149DD5',

        }]
    },
    options: {}
});


