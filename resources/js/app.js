import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const confirmDelete = document.querySelector("#confirm-delete");

if (confirmDelete) {
    document.querySelectorAll(".js_delete").forEach((button) => {
        // seleziono tutti i button con la classe js-delete
        button.addEventListener("click", function () {
            console.log("hai cliccato id " + this.dataset.id);
            confirmDelete.action = confirmDelete.dataset.template.replace(
                "*****",
                this.dataset.id
            );
        });
    });
}
