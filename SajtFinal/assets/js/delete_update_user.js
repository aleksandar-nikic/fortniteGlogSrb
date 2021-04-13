$(document).ready(function(){
    //BRISANJE KORISNIKA
    $('.delete-user').click(function(){
        var id = $(this).data('id');
        // alert(id);

        $.ajax({
            method: 'POST',
            url: "Code/deleteUser.php",
            dataType: 'json',
            data: {
                id : id
            },
            success: function(podaci){
                alert("User successfuly deleted..");
            },
            error: function(xhr, statusTxt, error){
                var status = xhr.status;
                switch(status){
                    case 500:
                        alert("We are sorry but it's imposible to delete user right now.");
                        break;
                    case 404:
                        alert("Page not found.");
                        break;
                    default:
                        alert("Error: " + status + " - " + statusTxt);
                        break;
                }
            }
        });
    });

    //UPDATE KORISNIKA
    $('.update-user').click(function(){
        var idUser = $(this).data('id');
        // alert(id);

        $.ajax({
            method: 'POST',
            url: "php/ajax_get_user.php",
            dataType: 'json',
            data: {
                id : idUser
            },
            success: function(podaci,status, jqXHR){

                console.log(jqXHR.status); //Dohvatanje statusa koji se vraca sa servera

                console.log("Podaci pristigli sa servera, ime: ", podaci.ime);
                $("#tbIme").val(podaci.ime);
                $("#tbPrezime").val(podaci.prezime);
                $("#tbEmail").val(podaci.email);
                //$("#")
                $("input[name='chbAktivan']").removeAttr('checked');
                if(podaci.aktivan==1){
                    $(`input[name='chbAktivan']`).prop('checked',true);
                    $(`input[name='chbAktivan']`).val(podaci.aktivan);
                }

                // Potrebno je prvo skloniti vrednost checked, za slucaj da je neko vec kliknuo na checkbox, i\ tek onda postaviti vrednost checked na true

                $("#ddlUloga").val(podaci.uloga_id);

                //console.log(podaci.datum_registracije);
                var datumNiz = podaci.datum_registracije.split(" ");
                $("#datumRegistracije").val(datumNiz[0]);

                $("#hiddenKorisnikID").val(podaci.korisnikID);
                /* postavljanje vrednosti za hidden polje koje je obavezno kako bi znali kog korisinka treba izmeniti*/

            },
            error: function(xhr, statusTxt, error){
                var status = xhr.status;
                switch(status){
                    case 500:
                        alert("Greska na serveru. Trenutno nije moguce izbrisati korisnika.");
                        break;
                    case 404:
                        alert("Stranica nije pronadjena.");
                        break;
                    default:
                        alert("Greska error: " + status + " - " + statusTxt);
                        break;
                }
            }
        });
    });
});