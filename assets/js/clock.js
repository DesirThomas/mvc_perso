var boite = document.getElementById('dyna-clock')

    function horloge() {

    var d = new Date
    var h = d.getHours()

    var m = d.getUTCMinutes()
        if (m<10) {m='0'+m}

    var s = d.getUTCSeconds()
        if (s<10) {s='0'+s}

        boite.textContent = 'Il est '+h+'h'+m+' et '+s+' secondes.'

}
setInterval("horloge()", 1000)