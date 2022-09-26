const baseUrl = document.querySelector("#__url").value;

let alerts = document.querySelector("#alert");

if (alerts !== null) {
    setTimeout(() => {
        // alertNode.classList.add('fade')
        // alertNode.classList.remove('show')
        // alertNot.dispose()
        // alerta = this.alerts.
        alerts.classList.add("d-none");
        setTimeout(() => {
            alerts.parentNode.removeChild(alerts);
        }, 5000);
    }, 5000);
}
