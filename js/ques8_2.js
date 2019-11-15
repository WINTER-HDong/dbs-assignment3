window.onload = function() {
        prepareListener();
}


function prepareListener() {
        var droppy1;

        droppy1 = document.getElementById("stopdoc");
        droppy1.addEventListener("change",getPatient);

}


function getPatient(){
        this.form.submit();
}




