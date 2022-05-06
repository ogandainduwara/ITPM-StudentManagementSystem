var rollV, cadfV, beneV, afarV;

function readFom() {
    rollV = document.getElementById("roll").value;
    cadfV = document.getElementById("cadf").value;
    beneV = document.getElementById("bene").value;
    afarV = document.getElementById("afar").value;
    console.log(rollV, cadfV, afarV, beneV);
}

document.getElementById("insert").onclick = function() {
    readFom();

    firebase
        .database()
        .ref("student/" + rollV)
        .set({
            rollNo: rollV,
            cadf: cadfV,
            bene: beneV,
            afar: afarV,
        });
    alert("Data Inserted");
    document.getElementById("roll").value = "";
    document.getElementById("cadf").value = "";
    document.getElementById("bene").value = "";
    document.getElementById("afar").value = "";
};

document.getElementById("read").onclick = function() {
    readFom();

    firebase
        .database()
        .ref("student/" + rollV)
        .on("value", function(snap) {
            document.getElementById("roll").value = snap.val().rollNo;
            document.getElementById("cadf").value = snap.val().cadf;
            document.getElementById("bene").value = snap.val().bene;
            document.getElementById("afar").value = snap.val().afar;
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
            name: nameV,
            gender: genderV,
            address: addressV,
        });
    alert("Data Update");
    document.getElementById("roll").value = "";
    document.getElementById("name").value = "";
    document.getElementById("gender").value = "";
    document.getElementById("address").value = "";
};*/
document.getElementById("delete").onclick = function() {
    readFom();

    firebase
        .database()
        .ref("student/" + rollV)
        .remove();
    alert("Data Deleted succesfully ");
    document.getElementById("roll").value = "";
    document.getElementById("cadf").value = "";
    document.getElementById("bene").value = "";
    document.getElementById("afar").value = "";
};