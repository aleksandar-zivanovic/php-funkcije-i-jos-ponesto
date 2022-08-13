<html>
    <button onclick="ptice()">Ptice</button>
    <button onclick="obrisiPtice()">Obrisi Ptice</button>
    <div id="vrste_ptica" style="background-color: lightgoldenrodyellow"></div>


    <script>

//        PRIKAZI PTICE
        function ptice() {
            var vrste_ptica = document.getElementById('vrste_ptica');

            var zahtev = new XMLHttpRequest();
            zahtev.onreadystatechange = function () {
                if (zahtev.readyState == 4 && zahtev.status == 200) {
                    var podaci = JSON.parse(zahtev.responseText);
                    // console.log(podaci);

                    var zapis = "<table border=2>";
                    for (pod of podaci) {
                        zapis += "<tr>";
                        for (vrsta in pod) {
                            zapis += "<th>" + vrsta + "</th>" + "<td>" + pod[vrsta] + "</td>";
                        }
                        zapis += "</tr>";
                    }
                    zapis += "</table>";

                    vrste_ptica.innerHTML = zapis;

                }
            }


            zahtev.open('GET', 'https://mysafeinfo.com/api/data?list=birdgroups&format=json&sort=SpeciesName%20asc&select=SpeciesName&case=default&token=jU6ewy7mx8ClH7FcLTjDRCWnaITHMqgw', true);
            zahtev.send();

        }


//        OBRISI PTICE
        function obrisiPtice() {
            document.getElementById('vrste_ptica').innerHTML = "";
        }
    </script>

    <hr>

    <button onclick="birdsUS()">Birds (U.S.)</button> <button onclick="zatvoriBirdsUS()">Zatvori Birds (U.S.)</button>
    <div id="birds_us" style="background-color: lightcyan"></div>

    <script>
        function birdsUS() {
            var ptice = document.getElementById('birds_us');

            zahtev = new XMLHttpRequest();
            zahtev.onreadystatechange = function () {
                if (zahtev.readyState == 4 && zahtev.status == 200) {
                    var ispis = "<table border=1>";
                    var podaci = JSON.parse(zahtev.responseText);
                    ispis += "<tr><th>ID</th><th>BirdName</th><th>ScientificName</th><th>SpeciesName</th></tr>";
                    for (prvi of podaci) {
                        ispis += "<tr>";
                        for (drugi in prvi) {
                            ispis += "<td>" + prvi[drugi] + "</td>";
                        }
                        ispis += "</tr>";
                    }
                    ispis += "</table>";
                }

                ptice.innerHTML = ispis;
            };

            zahtev.open('GET', 'https://mysafeinfo.com/api/data?list=birdsus&format=json&case=default&token=jU6ewy7mx8ClH7FcLTjDRCWnaITHMqgw', true);
            zahtev.send();
        }


        function zatvoriBirdsUS() {
        var ptice = document.getElementById('birds_us');
        ptice.innerHTML = null;
        }

    </script>

</html>