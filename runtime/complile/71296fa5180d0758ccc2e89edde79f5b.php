<!doctype html>
<html lang="zh">
<head>
	<meta charset="utf-8">
	<title>{pboot:pagetitle}</title>
	<meta name="keywords" content="{pboot:pagekeywords}">
	<meta name="description" content="{pboot:pagedescription}">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,shrink-to-fit=no">
	<link rel="stylesheet" href="{pboot:sitetplpath}/bootstrap/css/bootstrap.min.css" >
	<link rel="stylesheet" href="{pboot:sitetplpath}/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{pboot:sitetplpath}/css/aoyun.css?v=v1.3.5" >
	<link rel="stylesheet" href="{pboot:sitetplpath}/swiper-4.3.5/css/swiper.min.css">
	<link rel="stylesheet" href="{pboot:sitetplpath}/css/animate.css">
	<link rel="shortcut icon" href="{pboot:sitepath}/favicon.ico" type="image/x-icon">
	<script src="{pboot:sitetplpath}/js/jquery-1.12.4.min.js" ></script>
</head>
<body>

<!-- 头部导航 -->
<nav class="navbar navbar-light bg-light fixed-top navbar-expand-lg shadow-sm">
  <div class="container">
	  	<a class="navbar-brand my-1" href="{pboot:sitepath}/">
	      <img src="{pboot:sitelogo}" class="logo-sm-height"  height="50">
	    </a>
	    
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    	<span class="navbar-toggler-icon"></span>
	    </button>
	    
	    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
	        <ul class="navbar-nav">
	       	  <li class="nav-item {pboot:if(0=='{sort:scode}')}active{/pboot:if}">
				 <a class="nav-link" href="{pboot:sitepath}/" >Index</a>
	          </li>
	          {pboot:nav num=10 parent=0}
	              <li class="nav-item {pboot:if('[nav:scode]'=='{sort:tcode}')}active{/pboot:if}">
	                <a class="nav-link" href="[nav:link]">[nav:name]</a>
	              </li>
	          {/pboot:nav}
	      </ul>
	      
	    
	      
	    </div>
    </div>
</nav>

<!--占位导航栏-->
<div style="height:71px;" class="head-sm-height"></div>



<!-- 头部大屏<div class="jumbotron jumbotron-fluid mb-2" style="{pboot:if('{sort:pic}')}background:#e9ecef url({sort:pic}){else}background:#e9ecef url({pboot:sitepath}/static/upload/image/20180412/1523501459462835.jpg){/pboot:if};background-size:cover;no-repeat">
  <div class="container text-light">
    <h1 class="fs-18 fs-sm-26 wow fadeInDown">{sort:name}</h1>
    <p class="fs-14  fs-sm-18 wow fadeInDown">{sort:subname}</p>
  </div>
</div> -->


<div class="container pages">
	<!-- 当前位置 -->

    
    <div class="row">
       	<div class="col-12 col-lg-6 mb-5">
               <div class="view">
               	<a class="arrow-left" href="#"></a>
				<a class="arrow-right" href="#"></a>
                   <div class="swiper-container">
                       <div class="swiper-wrapper" >
                       	   <div class="swiper-slide">
                               <img src="{content:ico}">
                           </div>
                           {pboot:pics num=10 id={content:id}}
                           <div class="swiper-slide">
                               <img src="[pics:src]">
                           </div>
                           {/pboot:pics}
                       </div>
                   </div>
               </div>
               
               <div class="preview mt-3">
                   <a class="arrow-left" href="#"></a>
                   <a class="arrow-right" href="#"></a>
                   <div class="swiper-container" >
                       <div class="swiper-wrapper">
                       	<div class="swiper-slide active-nav swiper-slide-active">
                               <img src="{content:ico}">
                           </div>
                           {pboot:pics num=10 id={content:id}}
                           <div class="swiper-slide">
                               <img src="[pics:src]" alt="[pics:title]">
                           </div>
                           {/pboot:pics}
                       </div>
                   </div>
               </div>
           </div>
            
        	<div class="col-12 col-lg-6 mb-3 pr-3">
            	<h2 class="border-bottom pb-2 fs-sm-28 fs-20">{content:title}</h2>
                <div class="text-secondary my-3 border-bottom-dashed lh-3">
                      	Update Time：{content:date style=Y-m-d}
                </div>
                <div class="text-secondary my-3 border-bottom-dashed lh-3">
                      	PageView：{content:visits}
                </div>
                  <div class="text-secondary my-3 border-bottom-dashed lh-3">
                     	 Price：￥{content:ext_price}
                </div>
                <div class="text-secondary my-3 border-bottom-dashed lh-3">
                      	Supplier：{content:ext_type}
                </div>
                
                <div class="text-secondary my-3 border-bottom-dashed lh-3">
                     	 Delivery Aera：{content:ext_color}
                </div>
               
                <div class="my-3 lh-3">
                	
                     <a href="#" class="btn btn-danger">Add to List</a>
                  
                </div>
            </div>
      </div>
      
      <h5 class="border-bottom border-info pb-2 mb-2"><i class="fa fa-sliders" aria-hidden="true"></i> Product information</h5>
      <div class="content">{content:content}</div>
      
  
</div>


    

<script src="{pboot:sitetplpath}/swiper-4.3.5/js/swiper.min.js"></script>
<script>
var viewSwiper = new Swiper('.view .swiper-container', {
	on:{
		slideChangeTransitionStart: function() {
		    updateNavPosition()
	    }
	}
})

$('.view .arrow-left,.preview .arrow-left').on('click', function(e) {
	e.preventDefault()
	if (viewSwiper.activeIndex == 0) {
		viewSwiper.slideTo(viewSwiper.slides.length - 1, 1000);
		return
	}
	viewSwiper.slidePrev()
})
$('.view .arrow-right,.preview .arrow-right').on('click', function(e) {
	e.preventDefault()
	if (viewSwiper.activeIndex == viewSwiper.slides.length - 1) {
		viewSwiper.slideTo(0, 1000);
		return
	}
	viewSwiper.slideNext()
})

var previewSwiper = new Swiper('.preview .swiper-container', {
	//visibilityFullFit: true,
	slidesPerView: 'auto',
	allowTouchMove: false,
	on:{
		tap: function() {
		    viewSwiper.slideTo(previewSwiper.clickedIndex)
	  }
	}
})

function updateNavPosition() {
		$('.preview .active-nav').removeClass('active-nav')
		var activeNav = $('.preview .swiper-slide').eq(viewSwiper.activeIndex).addClass('active-nav')
		if (!activeNav.hasClass('swiper-slide-visible')) {
			if (activeNav.index() > previewSwiper.activeIndex) {
				var thumbsPerNav = Math.floor(previewSwiper.width / activeNav.width()) - 1
				previewSwiper.slideTo(activeNav.index() - thumbsPerNav)
			} else {
				previewSwiper.slideTo(activeNav.index())
			}
		}
	}
</script>


<div class="footer mt-3 pt-5 border-top text-secondary bg-light">
	<div class="container">
    	<div class="row pb-5">
            <div class="col-12 col-md-5">
            	<h5>{pboot:companyname}</h5>
                <ul class="lh-2">
                	<li>License： {pboot:companyblicense}  </li>
                   
                    <li>Address：{pboot:companyaddress} </li>
                </ul>
            </div>
            <div class="col-12 col-md-5">
            	<div class="mt-4 d-block d-md-none"></div>
                
            	<h5>Cantact Us</h5>
                <ul class="lh-2">
                    <li>Number ：{pboot:companyphone} </li>
                    <li>Email：     {pboot:companyemail} </li>
                   
                </ul>
            </div>
          
        </div>
	</div>
    <div class="copyright border-top lh-3 text-center  d-none d-md-block">
    	{pboot:sitecopyright}
    </div>
</div>

<!-- 占位 -->
<div style="height:49px;" class="d-block d-sm-none"></div>

<!-- 手机底部导航 -->
<div class="container-fluid bg-info fixed-bottom d-block d-sm-none">
    <div class="row">
        <div class="col-4 p-0 text-center border-right">
            <a href="tel:{pboot:companymobile}" class="text-light d-block pt-3 pb-3"><i class="fa fa-phone" aria-hidden="true"></i> 电话咨询</a>
        </div>
        <div class="col-4 p-0 text-center border-right">
            <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin={pboot:companyqq}&site=qq&menu=yes" class="text-light d-block pt-3 pb-3"><i class="fa fa-qq" aria-hidden="true"></i> 在线咨询</a>
        </div>
        <div class="col-4 p-0 text-center">
			{pboot:sort scode=1}
            <a href="[sort:link]" class="text-light d-block pt-3 pb-3"><i class="fa fa-location-arrow" aria-hidden="true"></i> [sort:name]</a>
			{/pboot:sort}
        </div>
    </div>
</div>

<!-- 在线客服 -->
<div class="online d-none d-md-block">
	
    
	<dl class="scroll-top">
		<dd><i class="fa fa-chevron-up"></i></dd>
		<dd>返回顶部</dd>
	</dl>
</div>

<script src="{pboot:sitetplpath}/js/popper.min.js"></script>
<script src="{pboot:sitetplpath}/bootstrap/js/bootstrap.min.js"></script>
<script src="{pboot:sitetplpath}/js/wow.min.js"></script>
<script src="{pboot:sitetplpath}/js/aoyun.js?v=v1.2.2"></script>
<script>
//ajax提交表单
function subform(obj){
  var url='{pboot:form fcode=2}';
  var tel=$(obj).find("#tel").val();
  
  var reg = /^(1|0)[\d\-]+$/;   
  if (!reg.test(tel)) {
	  alert('电话号码错误！');
	  return false;
  }
  
  $.ajax({
    type: 'POST',
    url: url,
    dataType: 'json',
    data: {
    	tel: tel
    },
    success: function (response, status) {
      if(response.code){
		 alert("您的来电已收到，我们会尽快联系您！");
		 $(obj)[0].reset(); 
      }else{
    	 alert(response.data);
      }
    },
    error:function(xhr,status,error){
      alert('返回数据异常！');
    }
  });
  return false;
}
</script>

{pboot:sitestatistical}

</body>
</html>
<?php return array (
  0 => 'D:/wwwroot/127.0.0.11/template/shop/html/comm/head.html',
  1 => 'D:/wwwroot/127.0.0.11/template/shop/html/comm/top.html',
  2 => 'D:/wwwroot/127.0.0.11/template/shop/html/comm/position.html',
  3 => 'D:/wwwroot/127.0.0.11/template/shop/html/comm/foot.html',
); ?>