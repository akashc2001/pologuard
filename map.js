// Load the map when the document is ready
document.addEventListener("DOMContentLoaded", function () {
  var map = L.map("map").setView([0, 0], 2);

  // Add a tile layer from OpenStreetMap
  L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
    attribution: "© OpenStreetMap contributors",
  }).addTo(map);

// Fetch reported pollution locations from the server
fetch("get_reports.php")
  .then((response) => response.json())
  .then((data) => {
    // Add markers for each reported pollution location
    data.forEach((report) => {
      var marker = L.marker([report.latitude, report.longitude])
      .bindPopup(`
      <b>${report.pollution_type}</b><br>${report.description}<br><p>ID : ${report.id}</p>
      <button onclick="window.location.href='del.php?id=${report.id}'">Delete Location</button>
    `);

      marker.addTo(map);
    });
  });
});
