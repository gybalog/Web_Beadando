    <script type="text/javascript" src="./scripts/main.js"></script>
    <form action = "?oldal=belep" method = "post">
      <fieldset>
        <legend>Bejlentkezés</legend>
        <br>
        <input type="text" name="felhasznalo" placeholder="felhasználó" id="Belep_Felh" required><br><br>
        <input type="password" name="jelszo" placeholder="jelszó" id="Belep_Jelsz" required><br><br>
        <input type="submit" name="belepes" value="Belépés" id="Be_Kuld">
        <button onclick="beleps();" type="button">Ellenőrzés</button>
        <br>&nbsp;
      </fieldset>
    </form>
    <h3>Regisztrálja magát, ha még nem felhasználó!</h2>
    <form action = "?oldal=regisztral" method = "post">
      <fieldset>
        <legend>Regisztráció</legend>
        <br>
        <input type="text" name="vezeteknev" placeholder="vezetéknév" id="Reg_Vnev" required><br><br>
        <input type="text" name="utonev" placeholder="utónév" id="Reg_Unev" required><br><br>
        <input type="text" name="felhasznalo" placeholder="felhasználói név" id="Reg_Felh" required><br><br>
        <input type="password" name="jelszo" placeholder="jelszó" id="Reg_Jelsz" required><br><br>
        <input type="submit" name="regisztracio" id="Reg_Kuld" value="Regisztráció">
        <button onclick="regisztral();" type="button">Ellenőrzés</button>
        <br>&nbsp;
      </fieldset>
    </form>
