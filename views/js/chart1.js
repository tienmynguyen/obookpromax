var ctx = document.getElementById("lineChart").getContext("2d");
var myChart = new Chart(ctx, {
  type: "line",
  data: {
    labels: [
      "15",
      "16",
      "17",
      "18",
      "19",
      "20",
      "21",
      "22",
      "23",
      "24",
      "25",
      "26",
    ],
    datasets: [
      {
        label: "Hoàng tử bé",
        data: [150, 210, 260, 280, 260, 210, 250, 260, 240, 190, 230],
        backgroundColor: ["rgb(5, 155, 255)"],
        borderColor: "rgb(5, 155, 255)",

        borderWidth: 1,
      },
      {
        label: "Nhà giả kim",
        data: [170, 190, 200, 220, 150, 270, 290, 292, 170, 130, 130],
        backgroundColor: ["rgb(41, 155, 99)"],
        borderColor: "rgb(41, 155, 99)",

        borderWidth: 1,
      },
      {
        label: "Khéo ăn khéo nói",
        data: [120, 120, 120, 150, 170, 200, 210, 212, 200, 190, 180],
        backgroundColor: ["rgb(120, 46, 139)"],
        borderColor: "rgb(120, 46, 139)",

        borderWidth: 1,
      },
      {
        label: "Người hùng áo trắng ",
        data: [140, 150, 140, 160, 180, 190, 200, 205, 200, 195, 185],
        backgroundColor: ["rgb(249, 154, 156)"],
        borderColor: "rgb(249, 154, 156)",

        borderWidth: 1,
      },
      {
        label: "Harry Portter chương 1 ",
        data: [110, 110, 110, 110, 115, 120, 110, 105, 150, 145, 145],
        backgroundColor: ["rgb(255, 197, 52)"],
        borderColor: "rgb(255, 197, 52)",

        borderWidth: 1,
      },
    ],
  },
  options: {
    responsive: true,
  },
});
