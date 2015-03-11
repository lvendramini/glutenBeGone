/**
 Script by hscripts.com
 */
var slideimages=new Array()
function slideshowimages()
{
    for (i=0;i<slideshowimages.arguments.length;i++)
    {
        slideimages[i]=new Image()
        slideimages[i].src=slideshowimages.arguments[i]
    }
}


slideshowimages("./img/slideshow/1.jpg","./img/slideshow/2.jpg","./img/slideshow/3.jpg",
"./img/slideshow/4.jpg", "./img/slideshow/5.jpg", "./img/slideshow/6.jpg",
"./img/slideshow/7.jpg", "./img/slideshow/8.jpg", "./img/slideshow/9.jpg",
"./img/slideshow/10.jpg", "./img/slideshow/11.jpg");
var slideshowspeed=2000;
var whichimage=0;
function slideit()
    {
        if (!document.images)
            return;
        document.images.slide.src=slideimages[whichimage].src;
        if (whichimage<slideimages.length-1)
            whichimage++;
        else
            whichimage=0;
        setTimeout("slideit()",slideshowspeed);
    };
slideit();