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



	 <!-- 分类筛选 -->
     <div  class="my-3">
          <div class="row">
           		<div class="col-12 col-sm-2 col-md-1">Supplier：</div>
                <div class="col-12 col-sm-10 col-md-11">
                   {pboot:selectall field=ext_type text=All  class='mb-3 btn btn-light' active='mb-3 btn btn-info'}
                   {pboot:select field=ext_type}
                       <a href= "[select:link]" class="mb-3 btn {pboot:if('[select:value]'=='[select:current]')}btn-info{else}btn-light{/pboot:if}">[select:value]</a>  
                   {/pboot:select}
               </div>
          </div>
           
     <div class="row">
           		<div class="col-12 col-sm-2 col-md-1">Delivery Aera：</div>
                <div class="col-12 col-sm-10 col-md-11">
                   {pboot:selectall field=ext_color text=ALL  class='mb-3 btn btn-light' active='mb-3 btn btn-info'}
                   {pboot:select field=ext_color}
                      <a href= "[select:link]" class="mb-3 btn {pboot:if('[select:value]'=='[select:current]')}btn-info{else}btn-light{/pboot:if}">[select:value]</a>  
                   {/pboot:select}
               </div>
          </div>
    </div>
      
	<!-- 图文列表 -->
    <div class="row">
        {pboot:list num=8 order=sorting}
            <div class="col-12 col-sm-6 col-lg-3 wow zoomIn" data-wow-delay="[list:i]00ms" data-wow-duration="1s">
              <div class="card">
                  <div class="card-img-150"><a href="[list:link]"><img class="card-img-top" src="[list:ico]" alt="[list:title]"></a></div>
                  <div class="card-body">
                    <h5 class="card-title"><a href="[list:link]">[list:title lencn=50]</a></h5>
                    <p class="card-text">
                    {pboot:if([list:istop]==1)}
                		<span class="badge badge-danger">置顶</span>
                	{/pboot:if}
                	{pboot:if([list:isrecommend]==1)}
                		<span class="badge badge-warning">推荐</span>
                	{/pboot:if}
                	{pboot:if([list:isheadline]==1)}
                		<span class="badge badge-info">头条</span>
                	{/pboot:if}
                	
                	</p>
                	
                  </div>
               </div>
         	</div>
        {/pboot:list}
    </div>

 	<!-- 分页 -->
{pboot:if({page:rows}>0)}
   <nav aria-label="page navigation" class="my-4">
     <div class="pagination justify-content-center">
     	<a class="page-item page-link" href="{page:index}">Index</a>
     	<a class="page-item page-link" href="{page:pre}">Pre</a>
      	{page:numbar}<!-- 数字条，小屏幕时自动隐藏-->
      	<a class="page-item page-link" href="{page:next}">Next</a>
      	<a class="page-item page-link" href="{page:last}">End</a>
     </div>
   </nav>	
{else}
   	<div class="text-center my-5 text-secondary">未查询到任何数据！</div>
{/pboot:if}
    
  
    
</div>


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
  2 => 'D:/wwwroot/127.0.0.11/template/shop/html/comm/page.html',
  3 => 'D:/wwwroot/127.0.0.11/template/shop/html/comm/foot.html',
); ?>