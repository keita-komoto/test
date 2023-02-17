document.write("問1"+"<br>")
function rrp(radius, pi=3.14 ){
    return "半径"+ radius +"cmの円の面積は"+ radius * radius * pi+"です。";
}

document.write(rrp(5)+"<br>");
document.write(rrp(7)+"<br>");
document.write(rrp(10)+"<br>");

document.write("<br>");
document.write("問2"+"<br>")

function price(group, adult, child){
    return group +"グループの合計金額は"+ (adult*500 + child*200) +"円です。";
}

document.write(price("A",2,4));
document.write("<br>");
document.write(price("B",1,5));
document.write("<br>");
document.write(price("C",3,7));
document.write("<br>");