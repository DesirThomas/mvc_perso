
    var boite = document.getElementById('dyna-clock')
    function horloge() 
    {
      var heure = new Date()
      var heureGMT = heure.toGMTString()
      boite.textContent = "Il est actuellement " + heure.getHours() + ":" + heure.getMinutes() + ":" + heure.getSeconds() + " mais en GMT il est " + heureGMT
    }
    setInterval("horloge()", 1000)