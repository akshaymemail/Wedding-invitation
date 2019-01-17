document.getElementsByClassName('c-button')[0].addEventListener('click', function () {
    document.getElementById('id01').style.display = 'none';
})

document.addEventListener('keyup', function () {
    if (document.getElementById('fname').value != '' && document.getElementById('lname').value != '' && document.getElementById('number').value != '') {
        if (/^\d{10}$/.test(document.getElementById('number').value)) {
            document.getElementById('yes').disabled = false;
            document.getElementById('no').disabled = false;
        } else {
            document.getElementById('yes').disabled = true;
            document.getElementById('no').disabled = true;
        }

    } else {
        document.getElementById('yes').disabled = true;
        document.getElementById('no').disabled = true;
    }
})