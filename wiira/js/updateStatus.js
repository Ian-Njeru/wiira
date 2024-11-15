$(document).on('change',"#status", function(){
    var optionSelected = $("option:selected", this);
    var value = optionSelected.attr("value");
    var id = optionSelected.attr("userId");
    

    var datum = new FormData();
    datum.append("status",value);
    datum.append("wiira_id", id);

    $.ajax({
        url : "model/jobApplicationUpdate.php",
        type: "POST",
        data: datum,
        cache: false,
        contentType: false,
        processData: false,
        success:function(){
            Swal.fire({
                title: "Status Changed",
                icon: "success",
                showConfirmButton: false,
                timer: 1500
            })
        }
        
})

})