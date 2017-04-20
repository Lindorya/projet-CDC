$(function(){

    $("#formulaire").submit(function(event){

        var nom        = $("#nom").val();
        var mail      = $("#mail").val();
        var mess      = $("#mess").val();
        var meschamps = nom + mail + mess;

  var nomalerte  = "<span style='color:#292466; margin:auto; display:table;'>Veuillez entrer votre nom</span></span>";
  var mailalerte  = "<span style='color:#292466; margin:auto; display:table;'>Veuillez entrer votre mail</span>";
  var messalerte  = "<span style='color:#292466; margin:auto; display:table;'>Veuillez entrer votre message</span>";
  var erreurenvoi = false;

  $("#nomerr").html("");
  $("#mailerr").html("");
  $("#messerr").html("");
    if (meschamps  == "") {
            $("#msg_all").html(message);
    var erreurenvoi = true;
        }
  if (nom == "") {
            $("#nomerr").html(nomalerte);
    var erreurenvoi = true;
        }
        if (mail == "") {
            $("#mailerr").html(mailalerte);
    var erreurenvoi = true;
        }
  if (mess == "") {
            $("#messerr").html(messalerte);
    var erreurenvoi = true;
        }

  if (erreurenvoi == false) {
            $.ajax({
                type : "POST",
                url: $(this).attr("action"),
                data: $(this).serialize(),
                success : function() {
                  $("#formulaire").html("<span style='color:#595959; margin:auto; display:table;'><p id='publication'>Le message a bien été envoyé !</p></span>");
                },

            });
            return true;
        }
        return false;
    });
});
