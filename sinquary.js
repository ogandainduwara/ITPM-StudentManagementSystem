var rollV, inquiryV, nicV, contactV, EmailV;

function readFom() {
    rollV = document.getElementById("roll").value;
    inquiryV = document.getElementById("inquiry").value;
    nicV = document.getElementById("nic").value;
    contactV = document.getElementById("contact").value;
    EmailV = document.getElementById("Email").value
    console.log(rollV, inquiryV, nicV, contactV, EmailV);
}

document.getElementById("insert").onclick = function() {
    readFom();

    firebase
        .database()
        .ref("student/" + rollV)
        .set({
            RollNo: rollV,
            inquiry: inquiryV,
            nic: nicV,
            contact: contactV,
            Email: EmailV,
        });
    alert("Data Inserted succesfully");
    document.getElementById("roll").value = "";
    document.getElementById("inquiry").value = "";
    document.getElementById("nic").value = "";
    document.getElementById("contact").value = "";
    document.getElementById("Email").value = "";
};


/*
document.getElementById("read").onclick = function() {
    readFom();

    firebase
        .database()
        .ref("student/" + rollV)
        .on("value", function(snap) {
            document.getElementById("roll").value = snap.val().RollNo;
            document.getElementById("name").value = snap.val().name;
            document.getElementById("down").value = snap.val().down;
            document.getElementById("Dateba").value = snap.val().Dateba;
        });
};

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
};*/
document.getElementById("delete").onclick = function() {
    readFom();

    firebase
        .database()
        .ref("student/" + rollV)
        .remove();
    alert("Data Deleted succesfully");
    document.getElementById("roll").value = "";
    document.getElementById("inquiry").value = "";
    document.getElementById("nic").value = "";
    document.getElementById("contact").value = "";
    document.getElementById("Email").value = "";
};