$(document).ready(function(){
    $("#taskform").submit(function(e){
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'index.php',
            data: $(this).serialize(),
            success: function(response){
                var jsonData = JSON.parse(response)
                console.log(jsonData);
                alert("Done!");
            }
        })
    })
})