$(function(){
    $("body").on("click", ".aur-conatact-leads-table-wrap tbody tr", function(){
        var status = $(this).find(".aur-custom-checkbox").is(":checked") ? 'yes' : 'no';
        if(status == "yes"){
            $(this).find(".aur-custom-checkbox").prop("checked", false);
        }else{
            $(this).find(".aur-custom-checkbox").prop("checked", true);
        }
    })
})