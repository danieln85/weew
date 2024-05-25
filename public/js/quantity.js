 /**=====================
     Quantity js
==========================**/

document.querySelectorAll('.qty-left-minus, .qty-right-plus').forEach(button => {
    button.addEventListener('click', function() {
        var input = this.parentElement.querySelector('.input-number');
        var currentValue = parseInt(input.value);
        if (this.classList.contains('qty-left-minus')) {
            if (currentValue > 1) { // Asegúrate de que el valor mínimo es 1
                input.value = currentValue - 1;
            }
        } else {
            if (currentValue < parseInt(input.max)) { // No exceder el stock máximo
                input.value = currentValue + 1;
            }
        }
    });
});




