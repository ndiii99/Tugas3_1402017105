<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" />
  <title>3D Kalkulator</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="slider">
    <h3 id="name" style="color:White">Selamat Datang</h3>
    <script>
      inputName();

      function inputName() {
        var Name = prompt("Masukkan Nama Anda");
        var greeting = "Selamat datang " + Name;
        document.getElementById("name").style.display = "block";
        document.getElementById("name").innerHTML = greeting;
      }
    </script>
    <button class="prev"><i class="fas fa-chevron-left"></i></button>
    <button class="next"><i class="fas fa-chevron-right"></i></button>
    <div class="slides-container">
      <div class="slide active">
        <div class="col-left">
          <h2>Volume Tabung</h2>
          <form id="Formulir" name="formulir" method="post" action="">
            <table width="500" border="0">
              <tr>
                <td width="178"><b>
                    <font color="black" size="5">Masukan jari</td>
                <td><input name="jari" type="text" id="jari"></td>
              </tr>
              <tr>
                <td width="178"><b>
                    <font color="black" size="5">Masukan tinggi</td>
                <td><input name="tinggi" type="text" id="tinggi"></td>
              </tr>
              <tr>
                <td><b>
                    <font color="black" size="5">Hasil Penghitungan volume</td>
                <td><input name="volume" type="text" id="volume"></td>
              </tr>
            </table>
            <p>
              <input name="cari" type="button" id="cari" value="hitung" class="btn" onclick="cariluas()" />
            </p>
          </form>
          <p>&nbsp;</p>
          <script laguage="javascript">
            function cariluas() {
              jari = formulir.jari.value;
              jari = formulir.jari.value;
              tinggi = formulir.tinggi.value;
              formulir.volume.value = 3.14 * jari * jari * tinggi;
            }
          </script>
        </div>
        <div class="col-right">
          <img src="tabung.png" alt="" />
        </div>
      </div>
      <div class="slide">
        <div class="col-left">
          <h2>Volume Kerucut</h2>
          <form id="Formulir" name="formulir" method="post" action="">
            <table width="500" border="0">
              <tr>
                <td width="178"><b>
                    <font color="black" size="5">Masukan jari</td>
                <td><input name="jari" type="text" id="jari"></td>
              </tr>
              <tr>
                <td width="178"><b>
                    <font color="black" size="5">Masukan tinggi</td>
                <td><input name="tinggi" type="text" id="tinggi"></td>
              </tr>
              <tr>
                <td><b>
                    <font color="black" size="5">Hasil Penghitungan volume</td>
                <td><input name="volume" type="text" id="volume"></td>
              </tr>
            </table>
            <p>
              <input name="cari" type="button" id="cari" value="hitung" class="btn" onclick="cariluas()" />
            </p>
          </form>
          <p>&nbsp;</p>
          <script laguage="javascript">
            function cariluas() {
              jari = formulir.jari.value;
              jari = formulir.jari.value;
              tinggi = formulir.tinggi.value;
              formulir.volume.value = 0.33333333 * 3.14 * jari * jari * tinggi;
            }
          </script>
        </div>
        <div class="col-right">
          <img src="kerucut.png" alt="" />
        </div>
      </div>
      <div class="slide">
        <div class="col-left">
          <h2>Bola</h2>
          <form id="Formulir" name="formulir" method="post" action="">
            <table width="500" border="0">
              <tr>
                <td width="178"><b>
                    <font color="black" size="5">Masukan jari</td>
                <td><input name="jari" type="text" id="jari"></td>
              </tr>
              <tr>
                <td><b>
                    <font color="black" size="5">Hasil Penghitungan Luas</td>
                <td><input name="luas" type="text" id="luas"></td>
              </tr>
              <tr>
                <td><b>
                    <font color="black" size="5">Hasil Penghitungan Volume</td>
                <td><input name="volume" type="text" id="volume"></td>
              </tr>
            </table>
            <p>
              <input name="cari" type="button" id="cari" value="hitung" class="btn" onclick="cariluas()" />
            </p>
          </form>
          <p>&nbsp;</p>
          <script laguage="javascript">
            function cariluas() {
              jari = formulir.jari.value;
              jari = formulir.jari.value;
              jari = formulir.jari.value;
              formulir.luas.value = 4 * 3.14 * jari * jari;
              formulir.volume.value = 1.3333333 * 3.14 * jari * jari * jari;
            }
          </script>
        </div>
        <div class="col-right">
          <img src="Bola.png" alt="" />
        </div>
      </div>

    </div>
  </div>
  </div>

  <script src="main.js"></script>
</body>

</html>