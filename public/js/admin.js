const liseur = document.querySelector("#liseur");
const ecrivain = document.querySelector("#ecrivain");
const livres = document.querySelector("#livres");
const liseurEcrivain = document.querySelector("#liseur-ecrivain");

function createPieCahrt(config, item) {
  return new Chart(item, {
    type: "pie",
    data: config,
    options: {
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });
}

createPieCahrt(
  {
    labels: ["Plan Gratuit", "Plan Basique", "Plan Premium"],
    datasets: [
      {
        label: "Abonnement des liseur",
        data: [300, 50, 100],
        backgroundColor: [
          "rgb(255, 99, 132)",
          "rgb(54, 162, 235)",
          "rgb(255, 205, 86)",
        ],
        hoverOffset: 4,
      },
    ],
  },
  liseur
);

createPieCahrt(
  {
    labels: ["Abonnement Gratuit", "Abonnement Basique", "Abonnement Premium"],
    datasets: [
      {
        label: "Abonnement des écrivains",
        data: [50, 100, 75],
        backgroundColor: [
          "rgb(255, 99, 132)",
          "rgb(54, 162, 235)",
          "rgb(255, 205, 86)",
        ],
        hoverOffset: 4,
      },
    ],
  },
  ecrivain
);

createPieCahrt(
  {
    labels: ["Liseur", "Ecrivain"],
    datasets: [
      {
        label: "Liseurs et Ecrivans",
        data: [450, 50 + 100 + 75],
        backgroundColor: ["rgb(255, 99, 132)", "rgb(54, 162, 235)"],
        hoverOffset: 4,
      },
    ],
  },
  livres
);

createPieCahrt(
  {
    labels: ["Horror", "Enfant", "Anime", "Histoire", "Roman"],
    datasets: [
      {
        label: "Propotion des Livres",
        data: [50, 100, 75, 20, 36],
        backgroundColor: [
          "rgb(255, 99, 132)",
          "rgb(54, 162, 235)",
          "rgb(255, 205, 86)",
          "rgb(25, 25, 6)",
          "#fe4551",
        ],
        hoverOffset: 4,
      },
    ],
  },
  liseurEcrivain
);
