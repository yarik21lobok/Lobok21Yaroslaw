function onload() {
    var reg = document.getElementsByClassName("formReg");
    var log = document.getElementsByClassName("formLog");
    var Search = document.getElementById("search");
    var formReg_Log = document.getElementsByClassName("formReg_Log");
    var openReg = document.getElementById("btnReg_open"); //взяття кнопки 'зареєструватися'
    var openSrch = document.getElementById("btnSrch_open"); //взяття кнопки 'зареєструватися'
    var openLog = document.getElementById("btnLog_open"); //взяття кнопки 'авторизуватися'
    var Acc = document.getElementById("Acc"); //взяття кнопки "уже є аккаунт? 'авторизуватися'"
    var noAcc = document.getElementById("noAcc"); //взяття кнопки "немає акаунту? 'зареєструватися'"

    var closeReg = document.getElementById("closeReg");
    var closeLog = document.getElementById("closeLog");
    var closeSrch = document.getElementById("closeSrch");

    openReg.onclick = function() {
        for (var i = 0; i < log.length; i++) log[i].style.display = "none";
        Search.style.display = "none";
        for (var i = 0; i < reg.length; i++) reg[i].style.display = "block";
    };

    noAcc.onclick = function() {
        for (var i = 0; i < log.length; i++) log[i].style.display = "none";
        for (var i = 0; i < reg.length; i++) reg[i].style.display = "block";
    };

    openLog.onclick = function() {
        for (var i = 0; i < reg.length; i++) reg[i].style.display = "none";
        Search.style.display = "none";
        for (var i = 0; i < log.length; i++) log[i].style.display = "block";
    };

    Acc.onclick = function() {
        for (var i = 0; i < reg.length; i++) reg[i].style.display = "none";
        for (var i = 0; i < log.length; i++) log[i].style.display = "block";
    };

    openSrch.onclick = function() {
        for (var i = 0; i < reg.length; i++) reg[i].style.display = "none";
        for (var i = 0; i < log.length; i++) log[i].style.display = "none";
        Search.style.display = "block";
    };


    closeReg.onclick = function() {
        for (var i = 0; i < reg.length; i++) reg[i].style.display = "none";
    };

    closeLog.onclick = function() {
        for (var i = 0; i < log.length; i++) log[i].style.display = "none";
    };

    closeSrch.onclick = function() {
        Search.style.display = "none";
    };

    window.onclick = function(event) {
        if (event.target == reg || event.target == log) {
            for (var i = 0; i < formReg_Log.length; i++)
                formReg_Log[i].style.display = "none";
            for (var i = 0; i < reg.length; i++) reg[i].style.display = "none";
            Search.style.display = "none";
        }
    };
}

function onload_noLog() {
    var SEARCH = document.getElementById("search");

    var openSRCH = document.getElementById("btnSRCH_open"); //взяття кнопки 'зареєструватися'

    var closeSrch = document.getElementById("closeSrch");

    openSRCH.onclick = function() {
        SEARCH.style.display = "block";
    };
    closeSrch.onclick = function() {
        SEARCH.style.display = "none";
    };

}