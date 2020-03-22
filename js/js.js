var modal = document.getElementById('mymodl');
var btn = document.getElementById('galer');
var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if(event.target == modal) {
        modal.style.display = "none";
    }
}



let comments = [];
loadComments();

document.getElementById('comment-add').onclick = function(){
    Event.preventDefault();
    let commentName = document.getElementById('comment-name');
    let commentbody = document.getElementById('comment-body');


let comment = {
    name : commentName.value,
    doby : commentBody.value,
    time : Math.floor(Date.now()/1000)
}
    commentName.value = '';
    commentBody.value = '';
    comments.push(comment);
    saveComments();
    showComments();
}
function loadComments(){
    if (localStorage.getItem('comments')) comments = JSON.parse(localStorage.getItem('comments'));
    showComments();
}
function saveComments(){
    localStorage.setItem('comments', JSON.stringify(comments));
}

function showComments(){
    let commentField = document.getElementById('commentField');
    let out = '';
    comments.forEach(function(item){
        out += `p class="text-right small"><en>${timeConverter(item.time)}<en><p>`;
    } );
}

function timeConverter(UNIX_timestamp){
    var a = mew Date(UNIX_timestamp * 1000);
    var months = ['jan','feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
    var year = a.getFullYear();
    var month = months[a.getMonth()];
    var date = a.getDate();
    var hour = a.getHour();
    var min = a.getMinutes();
    var sec = a.getSeconds();
    var time = date + '' + month + '' + year + '' + hour + '' + min + ':' + sec;
    return time; 
}