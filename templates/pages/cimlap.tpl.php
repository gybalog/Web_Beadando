<script type="text/javascript" src="./scripts/main.js"></script>
<h2>Hungaroring</h2>

<div class="cimlap1">
  <div>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/qGDMyqz3kdo?si=Vx4ragBt71FKTIJ9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        
  </div>
  <div>
        <video width="560" height="315" controls>
            <source src="./video/f1.mp4" type="video/mp4">
        </video>
  </div>
</div>
<div class="cimlap2">
        <p id="demo">A Hungaroring Magyarország legjelentősebb autóverseny-pályája. Budapest és Gödöllő között, az M3-as autópálya közelében található, Mogyoród külterületén (ennek ellenére a nemzetközi sajtóban gyakran budapesti pályaként kommunikálják). A sztrádától a 21 102-es számú mellékúton érhető el.
        A pálya elsősorban a Formula–1 magyar nagydíjról ismert, amit 1986 óta folyamatosan megrendeznek.</p>           
        <button type="button" onclick="hun()">HUN</button>
        <button type="button" onclick="eng()">ENG</button>
        <br>
        <br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5382.566611941525!2d19.247630897546458!3d47.58173134355768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741cf9b8251d89f%3A0x37bb8697bf01f56f!2sHungaroring!5e0!3m2!1shu!2shu!4v1715183786978!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <br>
        <a class="terkep "target="_blank" href="https://www.google.hu/maps/place/Hungaroring/@47.5817313,19.2476309,16z/data=!4m15!1m8!3m7!1s0x4741cf9b8251d89f:0x37bb8697bf01f56f!2sHungaroring!8m2!3d47.5797591!4d19.247416!10e1!16zL20vMDJ4Mnhn!3m5!1s0x4741cf9b8251d89f:0x37bb8697bf01f56f!8m2!3d47.5797591!4d19.247416!16zL20vMDJ4Mnhn?hl=hu&entry=ttu">Nagyobb térkép</a>
   
</div>




<script>
    function hun() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "hun.txt", true);
  xhttp.send();
}
function eng() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "eng.txt", true);
  xhttp.send();
}
</script>
