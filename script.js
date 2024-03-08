document.addEventListener("DOMContentLoaded", function() {
    const qualificationTable = document.getElementById("qualificationTable");
    const qualificationBody = document.getElementById("qualificationBody");
  
    // Qualifications data
    const qualifications = [
      { name: "Bachelor's Degree", year: "2021", percentage: "75.06%" },
      { name: "Intermediate (12th)", year: "2017", percentage: "73.2%" },
      { name: "Highschool (10th)", year: "2016", percentage: "71.3%" }
    ];
  
    // Populate qualifications table
    qualifications.forEach(qualification => {
      const row = document.createElement("tr");
      row.innerHTML = `
        <td>${qualification.name}</td>
        <td>${qualification.year}</td>
        <td>${qualification.percentage}</td>
      `;
      qualificationBody.appendChild(row);
    });
  });
  
  