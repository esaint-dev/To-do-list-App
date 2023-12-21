const mainEL = document.getElementById('main-box');
const inputEL = document.getElementById('input-box')

inputEL.addEventListener('click', (event) => {
    event.preventDefault();
    mainEL.style.height='50vh'
});

$('submit').on('click', function(){
    $.ajax({
        type: 'post',
        url: 'add_task.php',
        data: $('#input-form').serialize(),
        success: function(response){
            $('#ajax-data').html(response)

        },

        error: function(){
            alert('error')
        }
    })
})