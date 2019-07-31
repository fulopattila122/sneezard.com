<html>
<?php
    $diff = (new DateTime())->diff(new DateTime('2019-10-02 07:00:00+00:00'));
?>
<head>
    <meta property="og:url"           content="http://szneezard.com" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Szilard is off!" />
    <meta property="og:description"   content="Back in <?= sprintf('%d days %d hours %d minutes %d seconds', $diff->d, $diff->h, $diff->m, $diff->s); ?>" />
    <meta property="og:image"         content="http://szneezard.com/szilard.png" />

    
    <title>Szilard is off!</title>
    
    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap');
    body {
        font-family: 'Poppins', sans-serif;
        color: #343431;
        text-align: center;
        margin-top: 6rem;
    }
    h1 {
        font-size: 3.1em;
    }
    </style>
</head>
<body>
<h1>Szilard is off!</h1>
<h2><span id="timer"></span> until he's back</h2>
<h3>Time is ticking bro!</h3>
<h3 id="millisecs"></h3>
<script>

function startTimer(enddate, display1, display2) {
    
    var now = new Date();
    
    setInterval(function () {
    
        diff = enddate - now;
        days = Math.floor(diff / 1000 / 60 / 60 / 24);
        hours = Math.floor((diff - days * 1000 * 60 * 60 * 24) / 1000 / 60 / 60);
        minutes = Math.floor((diff - days * 1000 * 60 * 60 * 24 - hours * 1000 * 60 * 60) / 1000 / 60);
        seconds = Math.floor((diff - days * 1000 * 60 * 60 * 24 - hours * 1000 * 60 * 60 - minutes * 1000 * 60) / 1000);
        millisecs = diff;

        display1.textContent = days + ' days ' + hours + ' hours ' + minutes + ' minutes ' + seconds + ' seconds';
        display2.textContent = millisecs;

        now = new Date();        
    }, 100);
    
}

document.addEventListener("DOMContentLoaded", function(event) { 
  startTimer(
    new Date('October 2, 2019 07:00:00 GMT'),
    document.querySelector('#timer'),
    document.querySelector('#millisecs')
  );
});

</script>
</body>
</html>
