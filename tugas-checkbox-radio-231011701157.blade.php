<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Survei Minat Baca</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        padding: 20px;
      }
      .container {
        max-width: 500px;
        margin: 0 auto;
        padding: 30px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      }
      h2 {
        text-align: center;
        color: #333;
      }
      label {
        font-size: 16px;
        font-weight: bold;
        margin-bottom: 8px;
        display: block;
        color: #555;
      }
      .checkbox-group,
      .radio-group {
        margin-bottom: 20px;
      }
      .checkbox-group label,
      .radio-group label {
        font-size: 14px;
        font-weight: normal;
        display: block;
        margin-bottom: 5px;
      }
      input[type="checkbox"],
      input[type="radio"] {
        margin-right: 10px;
      }
      button {
        width: 100%;
        padding: 12px;
        background-color: #28a745;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }
      button:hover {
        background-color: #218838;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h2>Survei Minat Baca</h2>
      <form id="surveyForm">
        <div class="checkbox-group">
          <label for="genre">Genre buku apa yang Anda sukai?</label>
          <label><input type="checkbox" name="genre" value="Fiksi" /> Fiksi</label>
          <label><input type="checkbox" name="genre" value="Non-Fiksi" /> Non-Fiksi</label>
          <label><input type="checkbox" name="genre" value="Sains" /> Sains</label>
          <label><input type="checkbox" name="genre" value="Sejarah" /> Sejarah</label>
        </div>

        <div class="radio-group">
          <label>Berapa buku yang Anda baca dalam sebulan?</label>
          <label><input type="radio" name="buku_bulan" value="1-3" /> 1-3 buku</label>
          <label><input type="radio" name="buku_bulan" value="4-6" /> 4-6 buku</label>
          <label><input type="radio" name="buku_bulan" value="7+" /> 7+ buku</label>
        </div>

        <button type="submit">Kirim Survei</button>
      </form>
    </div>

    <script src="alert.js"></script>
  </body>
</html>
