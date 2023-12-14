alert("wech alkhofach");
/*const incritBtn=document.getElementById('incritBtn');
incritBtn.onclick = () => {
    const form = document.querySelector("form");
    let xhttp = new XMLHttpRequest();
    xhttp.open("Post", "./php/process.php", true);
    xhttp.onload = function () {
            if (xhttp.readyState === XMLHttpRequest.DONE) {
                if (xhttp.status === 200) {
                    const data = xhttp.response;
                    if (data !== "") {
                        console.log(data);
                        form.reset();
                } else {
                        console.log(data);

                        console.log('data1');
                }
            } else {
                    console.log('data2');
            }
        } else {
                console.log('data3');
        }
    }
    let formData = new FormData(form);
    xhttp.send(formData);
}*/




$(document).ready(function() {
    $('#incritBtn').click(function(e) {
        e.preventDefault(); // Prevent the default form submission

        const form = $('form')[0];
        let formData = new FormData(form);

        $.ajax({
            url: './php/process.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                if (data !== '') {
                    console.log(data);
                    $(form).trigger('reset'); // Use $(form) instead of form
                } else {
                    console.log(data);
                    console.log('data1');
                }
            },
            error: function() {
                console.log('data2');
            }
        });
    });
});






/*$(document).ready(function() {
    $('#incritBtn').click(function() {
        alert("ostad diali");
        const form = $('form');
        $.ajax({
            url: './php/process.php',
            type: 'POST',
            data: form.serialize(),
        })
        .done(function(data) {
            if (data !== '') {
                console.log(data);
                form.trigger('reset');
            } else {
                console.log(data);
                console.log('data1');
            }
        })
        .fail(function() {
            console.log('data2');
        });
    });
});*/



/*$(document).ready(function() {
    $('#incritBtn').click(function() {
        alert("ostad diali");
        const form = $('form');
        $.ajax({
            url: './php/process.php',
            type: 'POST',
            data: form.serialize(),
            enctype: 'multipart/form-data',
            success: function(data) {
                if (data !== '') {
                    console.log(data);
                    form.trigger('reset');
                } else {
                    console.log(data);
                    console.log('data1');
                }
            },
            error: function() {
                console.log('data2');
            }
        });
    });
});*/