function clipBoard() 
{

    commitMsg = $("#commitMsg").val();
    fileName = $("#fileName").val();
    
    if(commitMsg=="")
      {
          alert("Descrição do commit é obrigatória");
          //document.getElementById("filename").focus();
          $("#commitMsg").focus();
          return false;
      }
    else
      {
        gitCommand = "git commit -m '" + commitMsg + "' " + fileName ;
        var dummy = document.createElement("input");
        //dummy.style.display = 'none';
        document.body.appendChild(dummy);
    
        dummy.setAttribute("id", "dummy_id");
        document.getElementById("dummy_id").value=gitCommand;
        dummy.select();
        document.execCommand("copy");
        document.body.removeChild(dummy);
        $("#popuContent").load("./ajaxGit.php?cmd=" +  encodeURI(gitCommand));
        $(".popup, .popup-content").addClass("active");

        //alert(gitCommand);
      }

    //alert(id);
    // valor = $("#" + id).val();
    // input = document.getElementById(id);
    // input.focus();
    // input.select();
    // document.execCommand("copy");
}


function closePopUp()
  {
    $("#popuContent").html("");
    $(".popup, .popup-content").removeClass("active"); 
  }