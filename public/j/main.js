function e(elements)
{
    if (typeof(elements) === 'string') {
        elements = document.querySelectorAll(elements)
    } else if (elements.tagName) {
        elements = [elements];
    }

    return elements || [];
}

function removeClass(elements, className)
{
    e(elements).forEach((ele) => {
        let reg = new RegExp(`(^| )${className}($| )`);
        ele.className = ele.className.replace(reg, ' ').trim()
    });
}

function addClass(elements, className)
{
    e(elements).forEach((ele) => {
        ele.className = `${ele.className} ${className}`
    });
}

document.querySelectorAll('nav>ul>li').forEach(function(ele){
    ele.addEventListener('mouseover', function(e){
        removeClass('nav .active', 'active');
    });

    ele.addEventListener('touchstart', function(e){
        let reg = new RegExp(`(^| )active($| )`);
        if (this.className.match(reg)) {
            removeClass(this, 'active');
        } else {
            removeClass('nav .active', 'active');
            addClass(this, 'active')
        }
    });
})

e('html')[0].addEventListener('click', function(){
    removeClass('nav .active', 'active')
})
