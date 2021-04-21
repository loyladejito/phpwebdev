$(document).ready(function(){
    $("#taskform").submit(function(e){
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'index.php',
            data: $(this).serialize(),
            dtaType: "json",
            success: function(response){
                var jsonData = JSON.parse(response)
                console.log(jsonData);
                // alert("Done!");
            }
        })
    });
    
    
    //     $.getJSON("tasks.txt", function(){
    //         var taskData = '';
    
    //         $.each(taskData, function(key, value){
    
    //             taskData +='<tr>';
    //             taskData +='<td>' +
    //                 value.task + '</td>';
    //             taskData += '</tr>';
    //         });
    //         $('tbody').append('tasks.txt');
    // })
})
