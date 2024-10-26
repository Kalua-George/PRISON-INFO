window.onload = function() {
    // Get the canvas elements
    const mchart = document.getElementById('maleChart');
    const fchart = document.getElementById('femaleChart');

    if (mchart && fchart) {
        // Initialize Male Age Distribution Chart
        new Chart(mchart, {
            type: 'bar',
            data: {
                labels: ['15-30', '31-45', '46-60', '61-75', '76-90'],
                datasets: [{
                    label: 'Male Age Distribution',
                    data: [20, 45, 10, 10, 5],
                    borderWidth: 1,
                    backgroundColor: 'rgba(54, 162, 235, 0.5)'
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

        // Initialize Female Age Distribution Chart
        new Chart(fchart, {
            type: 'bar',
            data: {
                labels: ['15-30', '31-45', '46-60', '61-75', '76-90'],
                datasets: [{
                    label: 'Female Age Distribution',
                    data: [20, 45, 32, 3, 0],
                    borderWidth: 1,
                    backgroundColor: 'rgb(255,100,50)'
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
    } else {
        console.error("Canvas elements with IDs 'maleChart' and 'femaleChart' were not found.");
    }
};
