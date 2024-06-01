import './bootstrap';

if (typeof download !== 'undefined') {
    download.onclick = function() {
        alert("Comming soon");
    }
}

if (typeof checkout !== 'undefined') {
    ['address', 'card', 'expiry', 'cvv'].forEach(inputId => {
        let inputElement = document.getElementById(inputId);
        if (inputElement) {
            inputElement.addEventListener('input', function (event) {
                if (inputId == 'card') {
                    let value = inputElement.value;
                    let num = value.replace(/\D/g, '');
                    inputElement.value =  num.replace(/(\d{4})/g, '$1 ').trim();
                }
                if (!event.target.value) submit.disabled = true;
                submit.disabled = false;
            });
        }
    });

    checkout.addEventListener('submit', function (event) {
        event.preventDefault();

        const formData = new FormData();
        const formFields = this.querySelectorAll('input');
        formFields.forEach(field => {
            if (field.value.length != 0) {
                formData.append(field.name, field.value);
            }
        });

        fetch(window.location.href, {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                //TODO: create a error UI handler
                if (data == 1) {
                    window.location.href = "/cart";
                    return;
                }
                alert(JSON.stringify(data));
            })
            .catch(error => {
               alert(error);
            });
    });
}