window.onload = function() {
        prepareListener();
}


function prepareListener() {
        var droppy1;

        droppy1 = document.getElementById("assigndoc");
        droppy1.addEventListener("change",getPatient);

}


function getPatient(){
        this.form.submit();
}
