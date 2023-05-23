/*image slide show functio in carrer page*/ 
alert("hello ");

var imgIndex=0;
carousel(); 
function scarousellideshow(){

    var i;
    var x=document.getElementsByClassName("myslides");
    for(i=0;i<x.length;i++){
        x[i].style.display="none";
       
    }
    
    imgIndex++;
     if(imgIndex>x.length){
     imgIndex=1;

     }
    x[imgIndex-1].style.display="block";
    setTimeout(carousel,2500);
}