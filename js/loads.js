function f() {
    $( '#navic' ).load('mainNavic.html');
    $( '[role=main]' ).load('caroMain.html',
        function(responseTxt, statusTxt, xhr){
            if(statusTxt == "success")
                $("#caroMain").carousel({interval: 5000});
            console.log(statusTxt)
            if(statusTxt == "error")
                alert("Error: " + xhr.status + ": " + xhr.statusText);
    });

}