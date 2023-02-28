$(function () { // wait for document ready
    // init
    var controller = new ScrollMagic.Controller();

    // define movement of panels
    var wipeAnimation = new TimelineMax()
        .fromTo("section.panel.turqoise", 1, {x: "-100%"}, {x: "0%", ease: Linear.easeNone})  // in from left
        .fromTo("section.panel.green", 1, {x: "100%"}, {x: "0%", ease: Linear.easeNone})  // in from right
        .fromTo("section.panel.bordeaux", 1, {y: "-100%"}, {y: "0%", ease: Linear.easeNone}); // in from top

    // create scene to pin and link animation
    new ScrollMagic.Scene({
        triggerElement: "#pinContainer",
        triggerHook: "onLeave",
        duration: "300%"
    })
        .setPin("#pinContainer")
        .setTween(wipeAnimation)
        .addIndicators() // add indicators (requires plugin)
        .addTo(controller);
});

const randomIntegerInRange = () => Math.floor(Math.random() * (360 - 0 + 1)) + 0;
const randomWidthInRange = () => Math.floor(Math.random() * (300 - 20 + 1)) + 20;
const randomWidthBottomInRange = () => Math.floor(Math.random() * (300 - 20 + 1)) + 20;
const randomOpacityInRange = () => (Math.floor(Math.random() * (5 - 0 + 1)) + 0);
const randomAnimationInRange = () => (Math.floor(Math.random() * (2 - 1 + 1)) + 1);
const randomTransformInRange = () => (Math.floor(Math.random() * (240 - 160 + 1)) + 160);
window.addEventListener('DOMContentLoaded', (event) => {
    var elem = document.querySelector('.line');
    for (let i = 0; i < 100; i++) {
        var clone = elem.cloneNode(true);
        var rotate = randomIntegerInRange();
        clone.style.transform = "rotate(" + rotate + "deg)";
        clone.style.transformOrigin = "-" + randomTransformInRange() + "px 0";
        if (rotate < 135 && rotate > 45) {
            clone.style.width = randomWidthBottomInRange() + "px";
        } else {
            clone.style.width = randomWidthInRange() + "px";
        }
        clone.style.display = "block";
        clone.style.opacity = "0." + randomOpacityInRange();
        clone.style.fill = '#00aeef';
        clone.style.stroke = '#00aeef';
        clone.style.animationDelay = randomAnimationInRange() + 's';
        elem.after(clone);
    }

    var elem = document.querySelector('.line1');
    for (let i = 0; i < 100; i++) {
        var clone = elem.cloneNode(true);
        var rotate = randomIntegerInRange();
        clone.style.transform = "rotate(" + rotate + "deg)";
        clone.style.transformOrigin = "-" + randomTransformInRange() + "px 0";
        if (rotate < 135 && rotate > 45) {
            clone.style.width = randomWidthBottomInRange() + "px";
        } else {
            clone.style.width = randomWidthInRange() + "px";
        }
        clone.style.display = "block";
        clone.style.opacity = "0." + randomOpacityInRange();
        clone.style.fill =  '#8cc73b';
        clone.style.stroke =  '#8cc73b';
        clone.style.animationDelay = randomAnimationInRange() + 's';
        elem.after(clone);
    }

    // Query DOM Elements
    const path = document.querySelector('.infinity');
    const circle = document.querySelector('.circle');
    const val = {distance: 0};
    gsap.to(val, {
        distance: path.getTotalLength(),
        repeat: -1,
        duration: 5,
        onUpdate: () => {
            const point = path.getPointAtLength(val.distance);
            circle.setAttribute('cx', point.x);
            circle.setAttribute('cy', point.y);
        }
    });
});