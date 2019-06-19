<style>
    body{
        font-size:1.5rem;
    }
    .accordion {
        max-width: 90%;
        margin: 0 auto;
    }
    .accordion__title {
        font-weight: 300;
        color: #ffffff;
        text-transform: uppercase;
        font-size: 1.125em;
    }
    .accordion__list {
        list-style: none;
        margin: 0;
        padding: 0;
    }
    .accordion__item {
        border-bottom: 1px solid #ffffff;
        visibility: hidden;
    }
    .accordion__item:last-child {
        border-bottom: 0;
    }
    .accordion__item.is-active .accordion__itemTitleWrap::after {
        -webkit-transform: translateX(-20%);
        transform: translateX(-20%);
    }
    .accordion__item.is-active .accordion__itemIconWrap {
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
    }
    .accordion__itemTitleWrap {
        display: flex;
        align-items: center;
        padding: 0 1em;
        color: #000000;
        cursor: pointer;
        position: relative;
        overflow: hidden;
        margin-top: 2em;
    }
    .accordion__itemTitleWrap::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 200%;
        height: 100%;
        z-index: 1;
        transition: -webkit-transform .4s ease;
        transition: transform .4s ease;
        transition: transform .4s ease, -webkit-transform .4s ease;
    }
    .accordion__itemTitleWrap.is-active::after, .accordion__itemTitleWrap:hover::after {
        -webkit-transform: translateX(-20%);
        transform: translateX(-20%);
    }
    .accordion__itemIconWrap {
        width: 1.25em;
        height: 1.25em;
        margin-left: auto;
        position: relative;
        z-index: 10;
    }
    .accordion__itemTitle {
        margin: 0;
        font-family: 'industry', sans-serif;
        color: #1d68a7;
        position: relative;
        z-index: 10;
    }
    .accordion__itemContent {
        font-size: 0.875em;
        height: 0;
        overflow: hidden;
        background-color: #ffffff;
        padding: 0 1.25em;
    }
    .accordion__itemContent p {
        margin: 2em 0;
    }

</style>

<script>
    var Accordion = function() {

        var
            toggleItems,
            items;

        var _init = function() {
            toggleItems     = document.querySelectorAll('.accordion__itemTitleWrap');
            toggleItems     = Array.prototype.slice.call(toggleItems);
            items           = document.querySelectorAll('.accordion__item');
            items           = Array.prototype.slice.call(items);

            _addEventHandlers();
            TweenLite.set(items, {visibility:'visible'});
            TweenMax.staggerFrom(items, 0.9,{opacity:0, x:-100, ease:Power2.easeOut}, 0.3)
        }

        var _addEventHandlers = function() {
            toggleItems.forEach(function(element, index) {
                element.addEventListener('click', _toggleItem, false);
            });
        }

        var _toggleItem = function() {
            var parent = this.parentNode;
            var content = parent.children[1];
            if(!parent.classList.contains('is-active')) {
                parent.classList.add('is-active');
                TweenLite.set(content, {height:'auto'})
                TweenLite.from(content, 0.6, {height: 0, immediateRender:false, ease: Back.easeOut})

            } else {
                parent.classList.remove('is-active');
                TweenLite.to(content, 0.3, {height: 0, immediateRender:false, ease: Power1.easeOut})
            }
        }

        return {
            init: _init
        }

    }();

    Accordion.init();
</script>
