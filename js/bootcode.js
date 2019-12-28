
    function onPhoneCode(id)
    {
        //phone3
        //prephone3

        phone: document.getElementById('phone' + id);
        pre = $('#prephone' + id).val();
        if (pre === "+7") {
            phone.setAttribute("min", "1000000000");
            phone.setAttribute("max", "9999999999");
        }
        else if (pre === "+380") {
            phone.setAttribute("min", "100000000");
            phone.setAttribute("max", "999999999");
        }
        else {
            phone.setAttribute("min", "900000000");
            phone.setAttribute("max", "999999999");
        }
    };

    onPhoneCode('');
    onPhoneCode(2);
    onPhoneCode(3);

    function getForm(load) {
        //preventDefault();
        load = load || 0;

        var sfx = "";
        if (load == 2 || load == 3)
            sfx = "2";
        else if (load == 4 || load == 5)
            sfx = "3";


        var fname = $('#name' + sfx).val();
        var femail = $('#email' + sfx).val();
        var fphone = $('#prephone' + sfx).val() + $('#phone' + sfx).val();
        var fcode = $('#code' + sfx).val();
		
		//alert(fphone);

        if (!$('#formgetcode' + sfx)[0].checkValidity()) {
            return;
        }

        event.preventDefault();

        //alert(name + ', ' + email + ', ' + phone);

        var jqxhr = $.post("getdata.php", {
                name: fname,
                email: femail,
                phone: fphone,
                code: fcode
            }, function(data) {
                //alert(data);
                data = JSON.parse(data);
                if (data['status'] == 'ok') {
                    if (data['path'] && data['code'] && (load == 1 || load == 3 || load == 5)) {

                        $('#path').val(data['path']);

                        //var link = "download.php?path=" + data['path'] + '&code=' + data['code'];
                        var link = "thanks.php?path=" + data['path'] + '&code=' + data['code'];
                        //$("#dload").href = link;
                        //$("#dload").onclick();
                        window.location.href = link;
                        return;
                    }
                    switch (load) {
                        case 0:
                            $('#code').focus();
                            $('#btn_getlink').prop('disabled', false);
                            break;
                        case 2:
                            $('#code2').focus();
                            $('#btn_getlink').prop('disabled', false);
                            break;
                        default:
                    }
                    //$('#code').val(data['code']);

                    //$("#btn_get").html('Получить ссылку');
                    //alert( "success: " + JSON.stringify(data) );
                } else {
                    alert('Ошибка: ' + data['error']);
                }

            })
            .done(function() {

            })
            .fail(function() {
                alert("unknown error");
            });
    }