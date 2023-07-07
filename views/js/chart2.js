var ctx2 = document.getElementById("doughnut").getContext("2d");
var myChart2 = new Chart(ctx2, {
  type: "doughnut",
  data: {
    labels: [
      "Tác giả nghiệp dư",
      "Tác giả bán chuyên",
      "Tác giả chuyên nghiệp",
      "khác",
    ],

    datasets: [
      {
        label: "Hợp tác",
        data: [42, 12, 8, 6],
        backgroundColor: [
          "rgba(41, 155, 99, 1)",
          "rgba(54, 162, 235, 1)",
          "rgba(255, 206, 86, 1)",
          "rgba(120, 46, 139,1)",
        ],
        borderColor: [
          "rgba(41, 155, 99, 1)",
          "rgba(54, 162, 235, 1)",
          "rgba(255, 206, 86, 1)",
          "rgba(120, 46, 139,1)",
        ],
        borderWidth: 1,
      },
    ],
  },
  options: {
    responsive: true,
  },
});
