$(document).ready(function () {
    $("#enviar").click(function () {
        var cebolinha = $("#cebolinha");
        var cebolinhaPost = cebolinha.val();
        var salsinha = $("#salsinha");
        var salsinhaPost = salsinha.val();
        var rucula = $("#rucula");
        var ruculaPost = rucula.val();
        var alface = $("#alface");
        var alfacePost = alface.val();

        $.post("enviar.php", {cebolinha: cebolinhaPost, salsinha: salsinhaPost, rucula: ruculaPost, alface: alfacePost},
                function (data) {
                    $("#resposta").html(data);
                }
        , "html");

        document.getElementById("#container").innerHTML = location.reload();
    });
});
