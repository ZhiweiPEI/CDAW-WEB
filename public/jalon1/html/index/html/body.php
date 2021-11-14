<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>body</title>
    <link rel="stylesheet" href="../../../css/css_index/base.css">
    <link rel="stylesheet" href="../../../css/css_index/body.css">
    <script type="text/javascript" src="../js/jquery.min.js"></script>
</head>
<body>
    <div class="bili-wrapper">
        <div class="bili-wrapper-left f1">
            <div data-index="0" class="lazy-img on">
                <img src="../../../img/viewpage/viewpager_0.jpg" width="440px" height="220px" alt="">
            </div>
            <div data-index="1" class="lazy-img off">
                <img src="../../../img/viewpage/viewpager_1.jpg" width="440px" height="220px" alt="">
            </div>
            <div data-index="2" class="lazy-img off">
                <img src="../../../img/viewpage/viewpager_2.jpg" width="440px" height="220px" alt="">
            </div>
            <div data-index="3" class="lazy-img off">
                <img src="../../../img/viewpage/viewpager_3.jpg" width="440px" height="220px" alt="">
            </div>
            <div data-index="4" class="lazy-img off">
                <img src="../../../img/viewpage/viewpager_4.jpg" width="440px" height="220px" alt="">
            </div>
            <ul class="trigger">
                <li data-index='0' class="trigger-on"></li>
                <li data-index='1'class="trigger-off"></li>
                <li data-index='2' class="trigger-off"></li>
                <li data-index='3' class="trigger-off"></li>
                <li data-index='4' class="trigger-off"></li>
            </ul>
        
        </div>
        <div class="bili-right-info">This is a good movie site</div>
        <div class="bili-wrapper-right  fl ">
            <ul>
                <li class="bili-wrapper-right-img">
                    <img class="bili-wrapper-right-img" src="../../../img/bili-wrapper-right/bili-wrapper-right-img_0.jpg" alt="">
                    <div class=""> </div>
                    <img class="bili-wrapper-right-img" src="../../../img/bili-wrapper-right/bili-wrapper-right-img_1.jpg" alt="">
                    <div class=""></div>
                </li>
                <li class="bili-wrapper-right-img">
                    <img class="bili-wrapper-right-img" src="../../../img/bili-wrapper-right/bili-wrapper-right-img_2.jpg" alt="">
                    <div class=""></div>
                    <img class="bili-wrapper-right-img" src="../../../img/bili-wrapper-right/bili-wrapper-right-img_3.jpg" alt="">
                    <div class=""></div>
                </li>
                <li class="bili-wrapper-right-img">
                    <img class="bili-wrapper-right-img" src="../../../img/bili-wrapper-right/bili-wrapper-right-img_4.jpg" alt="">
                    <div class=""></div>
                    <img class="bili-wrapper-right-img" src="../../../img/bili-wrapper-right/bili-wrapper-right-img_5.jpg" alt="">
                    <div class=""></div>
                </li>
                <li class="bili-wrapper-right-img">
                    <img class="bili-wrapper-right-img" src="../../../img/bili-wrapper-right/bili-wrapper-right-img_0.jpg" alt="">
                    <div class=""></div>
                    <img class="bili-wrapper-right-img" src="../../../img/bili-wrapper-right/bili-wrapper-right-img_1.jpg" alt="">
                    <div class=""></div>
                </li>
                <li class="bili-wrapper-right-img">
                    <img class="bili-wrapper-right-img" src="../../../img/bili-wrapper-right/bili-wrapper-right-img_2.jpg" alt="">
                    <div class=""></div>
                    <img class="bili-wrapper-right-img" src="../../../img/bili-wrapper-right/bili-wrapper-right-img_3.jpg" alt="">
                    <div class=""></div>
                </li>
                
            </ul>
        </div>

    <script type="text/javascript">
        var onclikChangeImg = function() {
                var lis = $('.trigger li')
                lis.each(function() {
                    var li = $(this)
                    li.on('click', function(){
                        li.attr('class', 'trigger-on')
                        //按下改变样式，其他的元素还原
                        var sbs = li.siblings()
                        sbs.each(function() {
                            var otherLi = $(this)
                            otherLi.attr('class', 'trigger-off')
                        })
                        //按下控制图片
                        var index = li.data('index')
                        console.log('index', index)
                        var lazyImgs = $('.lazy-img')
                        lazyImgs.each(function(){
                             var img = $(this)
                             imgIndex = img.data('index')
                            if (index == imgIndex) {
                                img.attr('class', 'lazy-img on')
                            } else {
                                img.attr('class', 'lazy-img off')
                            }
                        })
                    })
                })
        }
        var autoChangeImg = function() {
            var index = 0
            var setTime = function() {
                index++
                index = index % 5
            }
            //定时调用的主函数
            var f = function() {
                setTime()

                //change li
                var lis = $('.trigger li')
                lis.each(function() {
                    var li = $(this)
                    var indexLi = li.data('index')
                    if (index == indexLi) {
                        li.attr('class', 'trigger-on')
                        var sbs = li.siblings()
                        sbs.attr('class', 'trigger-off')
                    }

                    //change img
                    var lazyImgs = $('.lazy-img')
                    lazyImgs.each(function(){
                         var img = $(this)
                         imgIndex = img.data('index')
                            if (index == imgIndex) {
                                img.attr('class', 'lazy-img on')
                            } else {
                                img.attr('class', 'lazy-img off')
                            }
                        })
                })
            }

            window.setInterval(f,'4000')
        }
        var addMask = function() {
            $('.bili-wrapper-right-img').on('mouseover',function(){
                var s = $(this).children()[1]
                $(s).attr('class', 'black-mask display')
            })
            $('.bili-wrapper-right-img').on('mouseout',function(){
                var s = $(this).children()[1]
                $(s).removeClass('display')
            })
        }
        var display = function(o, p) {
            o.on('mouseover', function() {
                p.addClass('display')
            })
            o.on('mouseout', function() {
                p.removeClass('display')
            })
        }
        var displayAll = function() {
            /*bili-wrapper-left p*/
            var o = $('.bili-wrapper-left')
            var p = $('.bili-wrapper-left p')
            display(o, p)
            /**/
            var par = $('.l-con-content')
            for (chi of par) {
                o = $(chi)
                p = $(chi).find('.black-mask')
                console.log('o', o)
                console.log('p', p)
                display(o, p)
            }
            // o = $('.l-con-content')
            // p = $('.l-con-content .black-mask')
            // display(o, p)

        }
        var _main = function() {
            //onclikChangeImg()
            autoChangeImg()
            //addMask()
            displayAll()
        }
        _main()
    </script>
</body>
</html>
