var rollV, bknameV, bchnameV, anumV,eddatV,sizfileV,eddatsV;

function readFom() {
    rollV = document.getElementById("roll").value;
    bknameV = document.getElementById("bkname").value;
    bchnameV = document.getElementById("bchname").value;
    anumV = document.getElementById("anum").value;
    eddatV = document.getElementById("eddat").value;
    sizfileV = document.getElementById("sizfile").value;
    eddatsV = document.getElementById("eddats").value;
    console.log(rollV, bknameV, anumV, bchnameV,eddatV,sizfileV,eddatsV);
}

document.getElementById("insert").onclick = function() {
    readFom();

    firebase
        .database()
        .ref("student/" + rollV)
        .set({
            RollNo: rollV,
            bkname: bknameV,
            bchname: bchnameV,
            anum: anumV,
            eddat:eddatV,
            sizfile: sizfileV,
            eddats: eddatsV,
        });
    alert("Data Inserted succesfully ");
    document.getElementById("roll").value = "";
    document.getElementById("bkname").value = "";
    document.getElementById("bchname").value = "";
    document.getElementById("anum").value = "";
    document.getElementById("eddat").value = "";
    document.getElementById("sizfile").value = "";
    document.getElementById("eddats").value = "";
};

document.getElementById("read").onclick = function() {
    readFom();

    firebase
        .database()
        .ref("student/" + rollV)
        .on("value", function(snap) {
            document.getElementById("roll").value = snap.val().RollNo;
            document.getElementById("bkname").value = snap.val().bkname;
            document.getElementById("bchname").value = snap.val().bchname;
            document.getElementById("anum").value = snap.val().anum;
            document.getElementById("eddat").value = snap.val().eddat;
            document.getElementById("sizfile").value = snap.val().sizfile;
            document.getElementById("eddats").value = snap.val().eddats;
        });
};

document.getElementById("update").onclick = function() {
    readFom();

    firebase
        .database()
        .ref("student/" + rollV)
        .update({
            //   RollNo: rollV,
            bkname: bknameV,
            bchname: bchnameV,
            anum: anumV,
            eddat:eddatV,
            sizfile: sizfileV,
            eddats: eddatsV,
        });
    alert("Data Update");
    document.getElementById("roll").value = "";
    document.getElementById("bkname").value = "";
    document.getElementById("bchname").value = "";
    document.getElementById("anum").value = "";
    document.getElementById("eddat").value = "";
    document.getElementById("sizfile").value = "";
    document.getElementById("eddats").value = "";
};/*
document.getElementById("delete").onclick = function() {
    readFom();

    firebase
        .database()
        .ref("student/" + rollV)
        .remove();
    alert("Data Deleted succesfully");
    document.getElementById("roll").value = "";
    document.getElementById("bkname").value = "";
    document.getElementById("bchname").value = "";
    document.getElementById("anum").value = "";
    document.getElementById("eddat").value = "";
    document.getElementById("sizfile").value = "";
    document.getElementById("eddats").value = "";
};*/