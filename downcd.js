var rollV, dunmV, dotyV, dofoV;

function readFom() {
    rollV = document.getElementById("roll").value;
    dunmV = document.getElementById("dunm").value;
    dotyV = document.getElementById("doty").value;
    dofoV = document.getElementById("dofo").value;
    console.log(rollV, dunmV, dofoV, dotyV);
}

document.getElementById("insert").onclick = function() {
    readFom();

    firebase
        .database()
        .ref("student/" + rollV)
        .set({
            rollNo: rollV,
            dunm: dunmV,
            doty: dotyV,
            dofo: dofoV,
        });
    alert("Data Inserted");
    document.getElementById("roll").value = "";
    document.getElementById("dunm").value = "";
    document.getElementById("doty").value = "";
    document.getElementById("dofo").value = "";
};

document.getElementById("read").onclick = function() {
    readFom();

    firebase
        .database()
        .ref("student/" + rollV)
        .on("value", function(snap) {
            document.getElementById("roll").value = snap.val().rollNo;
            document.getElementById("dunm").value = snap.val().dunm;
            document.getElementById("doty").value = snap.val().doty;
            document.getElementById("dofo").value = snap.val().dofo;
        });
};
/*
document.getElementById("update").onclick = function() {
    readFom();

    firebase
        .database()
        .ref("student/" + rollV)
        .update({
            //   rollNo: rollV,
            dona: donaV,
            doty: dotyV,
            dofo: dofoV,
        });
    alert("Data Update");
    document.getElementById("roll").value = "";
    document.getElementById("dona").value = "";
    document.getElementById("doty").value = "";
    document.getElementById("dofo").value = "";
};
document.getElementById("delete").onclick = function() {
    readFom();

    firebase
        .database()
        .ref("student/" + rollV)
        .remove();
    alert("Data Deleted");
    document.getElementById("roll").value = "";
    document.getElementById("dona").value = "";
    document.getElementById("doty").value = "";
    document.getElementById("dofo").value = "";
};*/