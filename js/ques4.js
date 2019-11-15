window.onload = function() {
        prepareListener();
}


function prepareListener() {
        var droppy2;
        var droppy3;

        droppy2 = document.getElementById("deletedoclist");
        droppy2.addEventListener("change",getPatient);

        droppy3 = document.getElementById("invidemo");
        droppy3.addEventListener("change",delFunction);

}


function getPatient(){
        this.form.submit();
}

function delFunction(e) {
        var r = confirm("Confirm to delete the doctor?");
        var txt;
        if (r == true) {
                txt = e;


        document.getElementById("invisubmit").value = txt;
        document.getElementById("invidemo").submit();
	}
}

