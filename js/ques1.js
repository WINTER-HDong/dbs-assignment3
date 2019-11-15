window.onload = function() {
        prepareListener();
}

function prepareListener() {
        var droppy1;

        droppy1 = document.getElementById("pickdocinfo");
        droppy1.addEventListener("change",getDocInfo);

}

function getDocInfo() {
        this.form.submit();
}


