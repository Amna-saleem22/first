<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    *, ::after, ::before {
  margin: 0;
  padding: 0;
  box-sizing: inherit; }

a {
  text-decoration: none; }

ul {
  list-style: none; }

html {
  font-size: 62.5%; }

body {
  box-sizing: border-box; 
  font-family: 'Lato', sans-serif;
  font-weight: 400;
  font-size: 1.6rem;
  line-height: 1.7;
  background-color: azure; }

.center-text {
  text-align: center; }

.boxShadow {
  box-shadow: 10px 5px 5px #646363; }



/* ----------------------------- Main Container ----------------------------- */
.main-container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin: 2rem;
  gap: 5rem; }

/* -------------------------------------------------------------------------- */
/* ----------------------------- Card Component ----------------------------- */
.card {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  gap: 1rem;
  width: 30rem;
  height: max-content;
  background-color: #fff;
  border-radius: 1rem;
  border: 2px solid #141414;
  box-shadow: 10px 5px 5px #979797; }
  .card h3 {
    font-size: larger;
    padding-top: .5rem; }

/* -------------------------------------------------------------------------- */


/* -------------------------------- Card- 10 Product Sales -------------------------------- */
.card-10 {
  font-family: Arial, sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #ffffff;
  box-shadow: 10px 5px 5px #979797;
  flex-direction: column; }
  .card-10-chart-container {
    position: relative;
    width: 400px;
    height: 300px;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 10px; }
  .card-10-y-scale {
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    font-size: 14px;
    gap: 2.5rem;
    padding-left: 10px;
    padding-bottom: 60px;
    font-weight: 500; }
  .card-10-bar-chart {
    display: flex;
    align-items: flex-end;
    justify-content: space-around;
    height: 100%;
    margin-left: 30px; }
  .card-10-bar {
    position: relative;
    width: 50px;
    display: flex;
    flex-direction: column;
    align-items: center; }
  .card-10 progress {
    -webkit-appearance: none;
    appearance: none;
    width: 100%;
    background-color: #e0e0e0;
    border-radius: 5px;
    overflow: hidden; }
  .card-10-bar-1 progress {
    height: 200px; }
  .card-10-bar-2 progress {
    height: 100px; }
  .card-10-bar-3 progress {
    height: 150px; }
  .card-10-bar-4 progress {
    height: 90px; }
  .card-10 progress::-webkit-progress-bar {
    background-color: #e0e0e0; }
  .card-10-bar:nth-child(1) progress::-webkit-progress-value {
    background-color: #e74c3c; }
  .card-10-bar:nth-child(2) progress::-webkit-progress-value {
    background-color: #2ecc71; }
  .card-10-bar:nth-child(3) progress::-webkit-progress-value {
    background-color: #f1c40f; }
  .card-10-bar:nth-child(4) progress::-webkit-progress-value {
    background-color: #3498db; }
  .card-10-x-scale {
    text-align: center;
    margin-top: 5px;
    font-size: 14px; }
  .card-10-x-scale label {
    display: block;
    margin-top: 5px;
    font-weight: bold; }

/* -------------------------------------------------------------------------- */

  </style>
</head>
<body>
<div class="main-container">

<!-- ------------------------------- Card-10 Product Sales -------------------------------- -->
<div class="card-10">
    <h3 class="card-10-title">Product Sales</h3>
    <div class="card-10-chart-container">
        <div class="card-10-y-scale">
            <div>100%</div>
            <div>75%</div>
            <div>50%</div>
            <div>25%</div>
            <div>0%</div>
        </div>
        <div class="card-10-bar-chart">
            <div class="card-10-bar card-10-bar-1">
                <progress value="100" max="100"></progress>
                <div class="card-10-x-scale"><label>Product A</label></div>
            </div>
            <div class="card-10-bar card-10-bar-2">
                <progress value="100" max="100"></progress>
                <div class="card-10-x-scale"><label>Product B</label></div>
            </div>
            <div class="card-10-bar card-10-bar-3">
                <progress value="100" max="100"></progress>
                <div class="card-10-x-scale"><label>Product C</label></div>
            </div>
            <div class="card-10-bar card-10-bar-4">
                <progress value="100" max="100"></progress>
                <div class="card-10-x-scale"><label>Product D</label></div>
            </div>
        </div>
    </div>
</div>
<!-- ----------------------------------------------------------------------- -->

</div>
</body>
</html>