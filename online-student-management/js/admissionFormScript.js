/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function validation(){
        var fname = document.getElementById("fname").value;
        if(fname === ""){
            alert("Give First Name");
            return;
        }
        var fname = document.getElementById("lname").value;
        if(fname === ""){
            alert("Give Last Name");
            return;
        }
        var fname = document.getElementById("email").value;
        if(fname === ""){
            alert("Give Email Address");
            return;
        }
        var fname = document.getElementById("faname").value;
        if(fname === ""){
            alert("Give Fathers Name");
            return;
        }
        var fname = document.getElementById("moname").value;
        if(fname === ""){
            alert("Give Mothers Name");
            return;
        }
        var fname = document.getElementById("sscname").value;
        if(fname === ""){
            alert("Give the name of your S.S.C institute");
            return;
        }
        var fname = document.getElementById("sscgpa").value;
        if(fname === ""){
            alert("Give S.S.C GPA");
            return;
        }
        var fname = document.getElementById("hscname").value;
        if(fname === ""){
            alert("Give the name of your S.S.C institute");
            return;
        }
        var dd = document.getElementById("dd").value;
        var mm = document.getElementById("mm").value;
        var yy = document.getElementById("yy").value;
        if(dd === "" || mm === "" || yy === ""){
            alert("Give proper birthday");
            return;
        }
        var fname = document.getElementById("gender-male").value;
        if(fname === ""){
            alert("Give your gender");
            return;
        } 
}