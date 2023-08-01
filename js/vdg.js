$.post("vdg.php",
    {
        bezeting: 1
    },
    function (data) {
        data = JSON.stringify(data);
        alert(data);


    });


