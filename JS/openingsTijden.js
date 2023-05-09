// variable maken met Nieuwe datum.
var d = new Date();
// variable maken dat de (d = datum) is de dag van vandaag. 
var n = d.getDay();
// variable maken om de uren en de minuten uit te halen met een nieuw datum.
var now = d.getHours() + "." + d.getMinutes();
// de werktijden in array laten zien.
var weekdays = [
    ["Sunday"], // we are closed, sorry!
    ["Monday", 12.30, 18.00],
    ["Tuesday", 8.30, 18.00],
    ["Wednesday", 8.30, 18.00],
    ["Thursday", 8.30, 18.00],
    ["Friday", 9.00, 17.00],
    ["Saturday", 9.00, 17.00]
];
// de werkdagen in een variable met de naam dag -- [n] is number.
var day = weekdays[n];
    // hier zie je de werk wanneer de winkel is open (zit in de weeksday array).
    if (now > day[1] && now < day[2] || now > day[3] && now < day[4]) 
    {
        //de winkel is open
        console.log();
        window.addEventListener("load", function () {
                    setTimeout(
                        function open(event) {
                            // laat de popup in een blok zien
                            document.querySelector(".popup").style.display = "block";
                            // Komt op de scherm we zijn open.
                            document.querySelector("h2").innerText = "We zijn open!";
                        },
                        //tijd tot dat de text in beeld komt
                        500
                    )
                });
                //als je op (x) klikt dan sluit de pop up
                document.querySelector("#close").addEventListener("click", function () 
                {
                    // de popup 
                    document.querySelector(".popup").style.display = "none";
                });
        } 
        //De winkel is gesloten
        else {
            console.log();
            // De 
            window.addEventListener("load", function () 
            {
                        setTimeout(
                            function open(event) {
                                document.querySelector(".popup").style.display = "block";
                                document.querySelector("h2").innerText = "We zijn gesloten!";
                            },
                            //tijd tot dat de text in beeld komt
                            500
                        )
                    });
                    // function om de de popup dicht maken.
                    document.querySelector("#close").addEventListener("click", function () 
                    {
                        document.querySelector(".popup").style.display = "none";
                    });
        }