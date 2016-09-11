function cancelarCita(PK)
{
    $.ajax({
    type: "POST",
    url: "./php/cancelarcita.php",
    data: "pkc=" + PK,
    success : function(text){
		location.reload(); 
    }        
    });
}