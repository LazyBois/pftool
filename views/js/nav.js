$(function(){
    hideAllMain();
});

function addNode(newNodeName,action){
    newNodeName = "自定义接口啊";
    action = "hhh";
    var newLi = "<li><a href="+ action +"><i class=\"glyphicon glyphicon-user\"></i>" + newNodeName+"</a></li>"
    alert(newLi);
    document.getElementById("diyAPI").innerHTML+=newLi;
}

function hideAllMain() {
    $("div[name='main']").css("display","none");
}

function showDiv(divId) {
    hideAllMain();
    $(divId).css("display","block");
    $("#design").css("display","block");
}

function showFunction(divId) {
    hideAllMain();
    $("#diy1").css("display","block");
}