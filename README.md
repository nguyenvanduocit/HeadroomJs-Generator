# HeadroomJs Animate Generator
This code is write to generate animate ( in CSS3 ) for HeadroomJs.

# Demo
Demo on Heroku : [Demo](http://headroomjs.senviet.org/) 

# Contribute
The animate was in animate_in.css ( Animate on Scroll-up ) and animate_out.css ( Animate on Scroll-down ).

The animate was wrap by ```/*rotateOutRight*/```

## Example
```css
/*rotateOutRight*/
@-webkit-keyframes rotateOutRight {
    0% {
        opacity: 1;
        -webkit-transform-origin: 0 0;
        -webkit-transform: perspective(800px) rotateY(0deg) translate3d(0px);
    }

    100% {
        opacity: 0;
        -webkit-transform-origin: 20% 0;
        -webkit-transform: perspective(800px) rotateY(-180deg) translateZ(550px);
    }
}
@keyframes rotateOutRight {
    0% {
        opacity: 1;
        transform-origin: 0 0;
        transform: perspective(800px) rotateY(0deg) translate3d(0px);
    }

    100% {
        opacity: 0;
        transform-origin: 20% 0;
        transform: perspective(800px) rotateY(-180deg) translateZ(550px);
    }
}
.rotateOutRight {
    -webkit-backface-visibility: visible !important;
    backface-visibility: visible !important;
    -webkit-animation-name: rotateOutRight;
    animation-name: rotateOutRight;
}
/*rotateOutRight*/
```