const user = {
    name: '',
    mail: '',
    city: ''
};

const formContainer = $('#form');

$("#name").on("change paste keyup", function () {
    user.name = $(this).val()
});

$("#mail").on("change paste keyup", function () {
    user.mail = $(this).val()
});

$("#city").on("change paste keyup", function () {
    user.city = $(this).val();
});

function toggleButton(boolean) {
    document.getElementById('#button').disabled = boolean;
}

function sendMail() {
    return new Promise(() => {
        toggleButton(true);
        $.post('./src/js/mail.php', user, function (response) {
            console.log(response);
        }, 'json');
    })
}

formContainer.on('change paste keyup', (e) => {
    toggleButton(!(user.name && user.mail && user.city));
});

formContainer.on('submit', (e) => {
    e.preventDefault();
    const hasValues = !!(user.name && user.mail && user.city);
    if (hasValues) {
        sendMail()
            .then(() => {
                window.location.hash = 'success';
            })
            .finally(() => {
                toggleButton(false);
            })
    }
    window.location.hash = 'success';
});
