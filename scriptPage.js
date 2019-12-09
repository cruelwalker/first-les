var x = document.getElementById("filterType").value;
var hideV = document.getElementById("bandFilter");
function onchange(x) {
    if (x.currentTarget.value === 'Band') {
        document.getElementById("bandFilter").style.display = "none";
    }
}
//listen ti the page if the select value changes it indicates the changes and act upon the method 
document.getElementById('filterType').addEventListener('change', onchange);

