<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Blood Centre Dashboard</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/framer-motion/dist/framer-motion.umd.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .card {
      @apply bg-white shadow-md rounded-2xl p-4 m-2 w-full md:w-1/5 flex flex-col items-center;
    }
    .loading-ring {
      border: 4px solid rgba(0,0,0,0.1);
      border-left-color: #3490dc;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      animation: spin 1s linear infinite;
      margin: auto;
    }
    @keyframes spin {
      to { transform: rotate(360deg); }
    }
  </style>
</head>
<body class="bg-gray-100 min-h-screen p-6">

  <h1 class="text-3xl font-bold text-red-600 mb-6">Stats</h1>

  <div id="dashboard" class="flex flex-wrap justify-center gap-4">
    <!-- Cards will load here -->
  </div>

  <script>
    const dashboardData = [
      { title: "Blood Centres", total: 4329, data: [1269, 1601, 1354, 105] },
      { title: "Active Blood Centres", total: 3262, data: [882, 1182, 1113, 85] },
      { title: "Licensed Blood Centres", total: 2758, data: [672, 1016, 1007, 63] },
      { title: "License Expired", total: 1457, data: [595, 504, 322, 36] },
      { title: "BSU", total: 1462, data: [1453, 9] }
    ];

    const colors = ['#F87171', '#60A5FA', '#FBBF24', '#34D399']; // pink, blue, yellow, green

    const dashboard = document.getElementById('dashboard');

    // First show loading
    dashboardData.forEach((item, index) => {
      const card = document.createElement('div');
      card.className = 'card';
      card.innerHTML = `
        <h2 class="text-lg font-semibold mb-2">${item.title}</h2>
        <div class="text-gray-600 mb-2">Total: ${item.total}</div>
        <div class="loading-ring" id="loader-${index}"></div>
        <canvas id="chart-${index}" class="hidden" width="100" height="100"></canvas>
      `;
      dashboard.appendChild(card);
    });

    // After a delay, replace loading with chart
    setTimeout(() => {
      dashboardData.forEach((item, index) => {
        const loader = document.getElementById(`loader-${index}`);
        const canvas = document.getElementById(`chart-${index}`);

        loader.style.display = 'none';
        canvas.classList.remove('hidden');

        new Chart(canvas, {
          type: 'pie',
          data: {
            labels: item.title === "BSU" ? ['Govt', 'Other'] : ['Govt', 'Private', 'Chartered', 'Redcross'],
            datasets: [{
              data: item.data,
              backgroundColor: item.title === "BSU" ? [colors[0], colors[1]] : colors,
            }]
          },
          options: {
            responsive: true,
            plugins: {
              legend: {
                display: false
              }
            }
          }
        });
      });
    }, 1500); // 1.5s loading animation
  </script>

</body>
</html>
