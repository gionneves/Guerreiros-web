$(document).ready(function() {
    $("#limpa").click(function() {
        $("#formID input").each(function() {
            $(this).val("");
        });
    });

    $("#gsim").click(function() {
        $("#gdias").prop("disabled", false);
    });
    $("#gnao").click(function() {
        $("#gdias").prop("disabled", true);
    });

    $("#dias").keyup(function() {
        if (parseInt($(this).val()) > 365) {
            $(this).val(365);
        }
    });

    $("#categoria").blur(function() {
        if ($(this).val().toLowerCase() == "celular") {
            if ($("#celular").length == 0) {
                $("#render").append(
                    '<div id="celular" class="input-group mb-3"><span class="input-group-text">Marca</span><input type="text" class="form-control" list="marcas_datalist" name="marca" id="marca" required /><span class="input-group-text">Modelo</span><input type="text" class="form-control" name="modelo" id="modelo" required /><datalist id="marcas_datalist"><option value="ACER"></option><option value="ALCATEL"></option><option value="APPLE"></option><option value="ASUS"></option><option value="BLACKBERRY"></option><option value="BLU"></option><option value="CASIO"></option><option value="CAT"></option><option value="GOOGLE"></option><option value="HP"></option><option value="HUAWEI"></option><option value="LENOVO"></option><option value="LG"></option><option value="MICROSOFT"></option><option value="MITSUBISHI"></option><option value="MOTOROLA"></option><option value="NOKIA"></option><option value="ONEPLUS"></option><option value="PANASONIC"></option><option value="PHILIPS"></option><option value="SAMSUNG"></option><option value="SONY"></option><option value="TOSHIBA"></option><option value="XIAOMI"></option><option value="OUTROS"></option></datalist></div>'
                );
            }
            $("#tablet").remove();
            $("#videogames").remove();
        } else if ($(this).val().toLowerCase() == "tablet") {
            if ($("#tablet").length == 0) {
                $("#render").append(
                    '<div id="tablet" class="input-group mb-3"><span class="input-group-text">Marca</span><input type="text" class="form-control" list="marcas_datalist" name="marca" id="marca" required /><span class="input-group-text">Modelo</span><input type="text" class="form-control" name="modelo" id="modelo" required /><datalist id="marcas_datalist"><option value="ACER"></option><option value="ALCATEL"></option><option value="AMAZON"></option><option value="APPLE"></option><option value="ARCHOS"></option><option value="ASUS"></option><option value="DELL"></option><option value="HP"></option><option value="HUAWEI"></option><option value="LENOVO"></option><option value="LG"></option><option value="MICROMAX"></option><option value="MICROSOFT"></option><option value="PANASONIC"></option><option value="SAMSUNG"></option><option value="SONY"></option><option value="TCL"></option><option value="PHILIPS"></option><option value="XIAOMI"></option><option value="OUTROS"></option></datalist></div>'
                );
            }
            $("#videogames").remove();
            $("#celular").remove();
        } else if ($(this).val().toLowerCase() == "videogames") {
            if ($("#videogames").length == 0) {
                $("#render").append(
                    '<div id="videogame" class="input-group mb-3"><span class="input-group-text">Marca</span><input type="text" class="form-control" list="marcas_datalist" name="marca" id="marca" required /><span class="input-group-text">Modelo</span><input type="text" class="form-control" name="modelo" id="modelo" required /><datalist id="marcas_datalist"><option value="MICROSOFT"></option><option value="NINTENDO"></option><option value="SONY"></option><option value="OUTROS"></option></datalist><datalist id="sony_consoles"><option value="PS ONE"></option><option value="PLAYSTATION 2 FAT"></option><option value="PLAYSTATION 2 SLIM"></option><option value="PLAYSTATION 3 FAT"></option><option value="PLAYSTATION 3 SLIM"></option><option value="PLAYSTATION 3 SUPER SLIM"></option><option value="PLAYSTATION 4"></option><option value="PLAYSTATION 4 SLIM"></option><option value="PLAYSTATION 4 PRO"></option><option value="PLAYSTATION 5"></option><option value="PLAYSTATION 5 DIGITAL"></option></datalist><datalist id="ms_consoles"><option value="XBOX-360"></option><option value="XBOX-360 CORE"></option><option value="XBOX-360 ELITE"></option><option value="XBOX-360 ARCADE"></option><option value="XBOX-360 S"></option><option value="XBOX-360 E"></option><option value="XBOX-ONE"></option><option value="XBOX-ONE ELITE"></option><option value="XBOX-ONE S"></option><option value="XBOX-ONE S DIGITAL"></option><option value="XBOX-ONE X"></option><option value="XBOX SERIES-X"></option><option value="XBOX SERIES-S"></option></datalist><datalist id="nintendo_consoles"><option value="WII"></option><option value="WII-U"></option><option value="SWITCH"></option><option value="SWITCH LITE"></option></datalis</div>'
                );
            }
            $("#celular").remove();
            $("#tablet").remove();
        } else {
            $("#celular").remove();
            $("#videogames").remove();
            $("#tablet").remove();
        }
    });

    // -------------------------------------------

    $(".num").keyup(function() {
        let x = $("#valor").val();
        let y = $("#custo").val();
        var z = x - y;
        if (z < 0) {
            $("#lucro").val(x - y);
            $("#lucro").removeClass("text-success text-warning").addClass("text-danger");
        } else if (z > 0) {
            $("#lucro").val(x - y);
            $("#lucro").removeClass("text-danger text-warning").addClass("text-success");
        } else {
            $("#lucro").val(x - y);
            $("#lucro").removeClass("text-danger text-success").addClass("text-warning");
        }
    });
    $("#calcPor").click(function() {
        var por = $("#porcent").val() / 100;
        var cust = $("#custo").val();
        var total = por * cust + parseInt(cust);
        $("#valor").val(total);
    });

    //---------------------------------------

    /*         $("#marca").blur(function () {
      let x = $(this).val();
      if (x == "MICROSOFT") {
        $("#modelo").appendTo('list="ms_consoles"');
      } else if (x == "NINTENDO") { 
        $("#modelo").appendTo('list="nintendo_consoles"');
      } else if (x == "SONY") {
        $("#modelo").appendTo('list="sony_consoles"');
      } else if (x == "OUTROS") {
      }
    }); */
});