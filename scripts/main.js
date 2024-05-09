window.onload = function() {
    var Be_Kuld = document.getElementById("Be_Kuld");
    var Reg_Kuld = document.getElementById("Reg_Kuld");
    var kuld = document.getElementById("kuld");
    if (Be_Kuld) {
        Be_Kuld.disabled = true;
    }
    if (Reg_Kuld) {
        Reg_Kuld.disabled = true;
    }
    if (kuld) {
        kuld.disabled = true;
        }
        
    };
///Belépés
function beleps() {

    var BErendben = true; 

    var Belep_Felh = document.getElementById("Belep_Felh");
    if (Belep_Felh) {
    if (Belep_Felh.value.length<1) { 
        BErendben = false;
    Belep_Felh.style.background = '#f99';
    } else {
        Belep_Felh.style.background = '#9f9';
    }
    }

    var Belep_Jelsz = document.getElementById("Belep_Jelsz");
    if (Belep_Jelsz) {
    if (Belep_Jelsz.value.length<1) { 
        BErendben = false;
    Belep_Jelsz.style.background = '#f99';
    } else {
        Belep_Jelsz.style.background = '#9f9';
    }
    }

    var Be_Kuld = document.getElementById("Be_Kuld");
        if (Be_Kuld) {
            Be_Kuld.disabled = !BErendben;
    }
    return BErendben;
    }

///Regisztral
function regisztral() {

    var REGrendben = true; 

    var Reg_Vnev = document.getElementById("Reg_Vnev");
    if (Reg_Vnev) {
    if (Reg_Vnev.value.length<1) { 
        REGrendben = false;
    Reg_Vnev.style.background = '#f99';
    } else {
        Reg_Vnev.style.background = '#9f9';
    }
    }

    var Reg_Unev = document.getElementById("Reg_Unev");
    if (Reg_Unev) {
    if (Reg_Unev.value.length<1) { 
        REGrendben = false;
    Reg_Unev.style.background = '#f99';
    } else {
        Reg_Unev.style.background = '#9f9';
    }
    }

    var Reg_Felh = document.getElementById("Reg_Felh");
    if (Reg_Felh) {
    if (Reg_Felh.value.length<1) { 
        REGrendben = false;
    Reg_Felh.style.background = '#f99';
    } else {
        Reg_Felh.style.background = '#9f9';
    }
    }

    var Reg_Jelsz = document.getElementById("Reg_Jelsz");
    if (Reg_Jelsz) {
    if (Reg_Jelsz.value.length<1) { 
        REGrendben = false;
    Reg_Jelsz.style.background = '#f99';
    } else {
        Reg_Jelsz.style.background = '#9f9';
    }
    }

    var Reg_Kuld = document.getElementById("Reg_Kuld");
        if (Reg_Kuld) {
            Reg_Kuld.disabled = !REGrendben;
    }
    return REGrendben;
    }
///Üzenet
function ellenoriz() {

    var rendben = true; 
    var fokusz = null; 

    var uzenet = document.getElementById("uzenet");
    if (uzenet) {
    if (uzenet.value.length==0 || uzenet.value.length>120) { 
    rendben = false;
    uzenet.style.background = '#f99';
    fokusz = uzenet; 
    } else {
        uzenet.style.background = '#9f9'; 
    }
    }
    
    var email = document.getElementById("email");
    if (email) { 
    var checkPattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if (!checkPattern.test(email.value)) {
    rendben = false;
    email.style.background = '#f99';
    fokusz = email;
    } else {
    email.style.background = '#9f9';
    }
    }
    
    var nev = document.getElementById("nev");
    if (nev) {
    if (nev.value.length<5) { 
    rendben = false;
    nev.style.background = '#f99';
    fokusz = nev;
    } else {
    nev.style.background = '#9f9';
    }
    }
    
    var kuld = document.getElementById("kuld");
    if (kuld) {
    kuld.disabled = !rendben;
    }
    return rendben;
    }
