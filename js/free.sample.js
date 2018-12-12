var qlist = document.getElementsByClassName("questionCard");
var active1 = document.getElementsByClassName("active_section2");

var pr = document.getElementById('prev');
var nx = document.getElementById('nxt');

var i = 0;
var length = qlist.length;
function previous () {
    if (i == 1) {
        alert('Previous is empty now !');
        return;
    }
    i--
    qlist[i].style.display = 'none';
    if (i != 0) {
        qlist[i - 1].style.display = 'block';
    }

    if(i == 1){
        pr.style.display = 'none'
    }
    if(i < 3){
        nx.style.display = 'inline-block'
    }

    if(i ==3){
        document.getElementById('line2').className = 'active_section';
        document.getElementById('span2').className = 'active_section';
        document.getElementById('line3').className = 'active_section';
        document.getElementById('span3').className = 'active_section';
    }
    if(i ==2){
        document.getElementById('line2').className = 'active_section';
        document.getElementById('span2').className = 'active_section';
        document.getElementById('line3').className = '';
        document.getElementById('span3').className = '';
    }
    if(i ==1){
        document.getElementById('line2').className = '';
        document.getElementById('span2').className = '';
        document.getElementById('line3').className = '';
        document.getElementById('span3').className = '';
    }

}
function  next () {
    if (i == length) {
        alert('No More Options!');
        return;
    }
    qlist[i].style.display = 'block';
    if (i != 0) {
        qlist[i-1].style.display = 'none';
    }
    i++

    if(i > 1){
        pr.style.display = 'inline-block'
    }
    if(i == 3){
        nx.style.display = 'none'
    }

    if(i ==2){
        document.getElementById('line2').className = 'active_section';
        document.getElementById('span2').className = 'active_section';
    }
    if(i ==3){
        document.getElementById('line2').className = 'active_section';
        document.getElementById('span2').className = 'active_section';
        document.getElementById('line3').className = 'active_section';
        document.getElementById('span3').className = 'active_section';
    }
}

// function onSubmit(){
//     console.log("OnSubmit button is working !")
//     if (i == length) {
//         alert('No More Options!');
//         return;
//     }
//     qlist[i].style.display = 'block';
//     if (i != 0) {
//         qlist[i-1].style.display = 'none';
//     }
//     i++
//     if(length == 4){
//         document.getElementById('line2').className = 'active_section';
//         document.getElementById('span2').className = 'active_section';
//         document.getElementById('line3').className = 'active_section';
//         document.getElementById('span3').className = 'active_section';
//         document.getElementById('line4').className = 'active_section';
//         document.getElementById('span4').className = 'active_section';
//         pr.style.display = 'inline-block'
//     }
// }