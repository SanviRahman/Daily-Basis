document.getElementById("calculate-btn").addEventListener("click", function () {
  const height = parseFloat(document.getElementById("height").value);
  const weight = parseFloat(document.getElementById("weight").value);

  if (isNaN(height) || isNaN(weight)) {
    alert("Please enter valid values for height and weight.");
    return;
  }

  const bmi = weight / (height / 100) ** 2;
  const classification = getBMIClassification(bmi);

  const resultText = `Your BMI: ${bmi.toFixed(2)} (${classification})`;

  document.getElementById("bmi-result").textContent = resultText;


  document.getElementById("bmi-result").className = `result-${classification
    .toLowerCase()
    .replace(" ", "-")}`;
});

function getBMIClassification(bmi) {
  if (bmi < 18.5) {
    return "Underweight";
  } else if (bmi >= 18.5 && bmi < 24.9) {
    return "Normal Weight";
  } else if (bmi >= 25 && bmi < 29.9) {
    return "Overweight";
  } else {
    return "Obese";
  }
}
