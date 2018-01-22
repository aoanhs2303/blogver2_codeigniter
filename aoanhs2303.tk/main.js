$(document).ready(function () {
    
    $('nav.navbar ul li').click(function () {
        $(this).children('ul.sub-menu').slideToggle();
    })
    $('.wrapper-menu').click(function () {
        $(this).toggleClass('open');
    })

    $('pre code').each(function(i, block) {
        hljs.highlightBlock(block);
    });
    $('.content').imagesLoaded(function() {
        $('.content').isotope({
            itemSelector: 'li'
        })
    })
    
    //active menu mansory
    $('ul.mansory-header li').click(function() {
        $('ul.mansory-header li').removeClass('active');
        $(this).addClass('active');
        var kind = $(this).data('kind'); //return name of kind
        $('.content ul').isotope({
            filter: kind
        })
        
        
    })
    $('ul.mansory-header li a').on("click", function(){
        var ten = $(this).text();
        ten = ten + ' pictures';
        
        $('h2.big-title').text(ten);  
    });
    
});


angular.module('tabTrending', [])
    .controller("TabController", function($scope){
        $scope.current_tab = 1;
        $scope.changeTab = function(index) {
            $scope.current_tab = index;
        };
        $scope.isActiveTab = function(index) {
            return index === $scope.current_tab;
        };
    
})


//Xu ly isotope
//    $(window).scroll(function() {
//        var posAng = $('.angular-trending').offset().top;
//        var screenTop = $(document).scrollTop();
//        console.log(screenTop);
//        
//        if(screenTop < posAng) {
//            $('.angular-trending').removeClass('active');
//        }
//        else {
//            $('.angular-trending').addClass('active');
//            
//        }
//        
//    })

