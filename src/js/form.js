const user = {
    name: '',
    mail: '',
    city: ''
}

$("#name").on("change paste keyup", function () {
    user.name = $(this).val()
});

$("#mail").on("change paste keyup", function () {
    user.mail = $(this).val()
});

$("#city").on("change paste keyup", function () {
    user.city = $(this).val();
});

$('#form').on('change paste keyup', (e) => {
    document.getElementById('#button').disabled = !(user.name && user.mail && user.city);
});

$('#form').on('submit', (e) => {
    e.preventDefault();
    const hasValues = !!(user.name && user.mail && user.city);
    if (hasValues) {
        $.post('./src/js/mail.php', user, (response) => {
        }, 'json')
            .then(response => {
                window.location.hash = null;
                console.log(response)
            })
    }
});
