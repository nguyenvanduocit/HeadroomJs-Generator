# HeadroomJs Animate Generator
This project was written for automatically generate the animates for HeadroomJs.

# Demo
Demo on Heroku : [Demo](http://headroomjs.senviet.org/) 

# Contribute
The animate was store in animate_in.css ( scroll-up animate ), animate_out.css ( scroll-down animate ).
Each Animate was wrap by ```/*rotateOutRight*/```.

The DemoForm will detect the animate automatically.

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



# License
This project using resource from some open source project ( which was provided under MIT license), So, this project was provided under MIT license.

For any request, please send me by the email address bellow : nvduoc@senviet.org.