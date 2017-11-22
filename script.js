function myFunction() {
    var x = document.getElementById("main");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
function myFunction2() {
    var x = document.getElementById("main2");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
// function myFunction() {
//     var element = document.getElementById("main");
//
//     if (element.classList) {
//         element.classList.toggle("main2");
//     } else {
//         var classes = element.className.split(" ");
//         var i = classes.indexOf("main2");
//
//         if (i >= 0)
//             classes.splice(i, 1);
//         else
//             classes.push("main2");
//             element.className = classes.join(" ");
//     }
// }
