var rollV, banknaV, banchnV, amuV, dteV;

function readFom() {
    rollV = document.getElementById("roll").value;
    banknaV = document.getElementById("bankna").value;
    banchnV = document.getElementById("banchn").value;
    amuV = document.getElementById("amu").value;
    dteV = document.getElementById("dte").value;
    console.log(rollV, banknaV, amuV, banchnV, dteV);
}

document.getElementById("insert").onclick = function() {
    readFom();

    firebase
        .database()
        .ref("student/" + rollV)
        .set({
            RollNo: rollV,
            bankna: banknaV,
            banchn: banchnV,
            amu: amuV,
            dte: dteV,
        });
    alert("Data Inserted succesfully ");
    document.getElementById("roll").value = "";
    document.getElementById("bankna").value = "";
    document.getElementById("banchn").value = "";
    document.getElementById("amu").value = "";
    document.getElementById("dte").value = "";
};

document.getElementById("read").onclick = function() {
    readFom();

    firebase
        .database()
        .ref("student/" + rollV)
        .on("value", function(snap) {
            document.getElementById("roll").value = snap.val().RollNo;
            document.getElementById("bankna").value = snap.val().bankna;
            document.getElementById("banchn").value = snap.val().banchn;
            document.getElementById("amu").value = snap.val().amu;
            document.getElementById("dte").value = snap.val().dte;
        });
};
/*
document.getElementById("update").onclick = function() {
    readFom();

    firebase
        .database()
        .ref("student/" + rollV)
        .update({
            //   RollNo: rollV,
            name: nameV,
            down: downV,
            Dateba: DatebaV,
        });
    alert("Data Update");
    document.getElementById("roll").value = "";
    document.getElementById("name").value = "";
    document.getElementById("down").value = "";
    document.getElementById("Dateba").value = "";
};
document.getElementById("delete").onclick = function() {
    readFom();

    firebase
        .database()
        .ref("student/" + rollV)
        .remove();
    alert("Data clear succesfully");
    document.getElementById("roll").value = "";
    document.getElementById("bankna").value = "";
    document.getElementById("banchn").value = "";
    document.getElementById("amu").value = "";
    document.getElementById("dte").value = "";
};*/