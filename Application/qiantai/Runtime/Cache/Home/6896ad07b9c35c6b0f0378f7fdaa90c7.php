<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="baidu-site-verification" content="dZp166zKjg" />
<meta name="360-site-verification" content="499aff3b27a668c0e2eabcca19550dbb" />
<meta name="sogou_site_verification" content="IVDD5xQmvc"/>
<meta name="shenma-site-verification" content="5fe2c0a8787a7af15fe74244b3a6e1d9_1500984311"> 
<?php if($shuju['biaoti'] != ''): ?><title>《<?php echo ($shuju["biaoti"]); ?>》在线观看/迅雷下载_<?php echo ($shuju["leibie"]["lbmc"]); ?>_521电影资源网</title>
  <meta name="keywords" content="<?php echo ($shuju["biaoti"]); ?>在线观看,<?php echo ($shuju["biaoti"]); ?>迅雷下载" />
  <meta name="description" content="521电影资源网提供《<?php echo ($shuju["biaoti"]); ?>》在线观看和迅雷下载,由<?php echo ($shuju["zhuyan"]); ?>主演" />
  <?php else: ?>
  <?php if($dqlb["lbmc"] != ''): ?><title><?php echo ($dqlb["lbmc"]); ?>_在线<?php echo ($dqlb["lbmc"]); ?>免费-手机<?php echo ($dqlb["lbmc"]); ?>在线观看_521电影资源网</title>
  <meta name="keywords" content="最新<?php echo ($dqlb["lbmc"]); ?>电影下载,<?php echo ($dqlb["lbmc"]); ?>在线观看,好看的<?php echo ($dqlb["lbmc"]); ?>" />
  <meta name="description" content="<?php echo ($wzxx['0']['zdmc']); ?>www.521dyw.com为您提供最新高质量<?php echo ($dqlb["lbmc"]); ?>下载" />
   <?php else: ?>
  <title><?php echo ($wzxx['0']['zdmc']); ?></title>
  <meta name="keywords" content="<?php echo ($wzxx['0']['guanjianzi']); ?>" />
  <meta name="description" content="<?php echo ($wzxx['0']['miaoshu']); ?>" /><?php endif; endif; ?>
<meta name="renderer" content="webkit">
<link href="/dianyingfbb/Public/css/style.css" type="text/css" rel="stylesheet">
<link href="/dianyingfbb/Public/css/fenye.css" type="text/css" rel="stylesheet">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<script type="text/javascript" src="/dianyingfbb/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="/dianyingfbb/Public/js/jquery.slide.js"></script>
<!--[if lt IE 9]>
<script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
<script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.js"></script>
<![endif]-->

</head>
<body>
<script>
(function(){
   var src = (document.location.protocol == "http:") ? "http://js.passport.qihucdn.com/11.0.1.js?b1c8bf6dccb1a47417c9295d4ab0d655":"https://jspassport.ssl.qhimg.com/11.0.1.js?b1c8bf6dccb1a47417c9295d4ab0d655";
   document.write('<script src="' + src + '" id="sozz"><\/script>');
})();
</script>
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
<div id="header">
  <div class="head">
    <div class="logo"><a href="/" title="<?php echo ($wzxx['0']['zdmc']); ?>">
      <?php echo ($wzxx['0']['zdmc']); ?>       </a></div>
    <div class="search">
      <form action='<?php echo U("sousuo/index");?>' method="POST" name="search_news" id="search_news">
        <input type="text" id="keyboard" name="guanjianzi" class="search-input" placeholder="请在此处输入影片片名"/>
        <input type="submit" name="submit" class="sub" value="搜电影" />
      </form>
    </div>
    <p class="plus"><a href="/remen"><i class="i-hot"></i>排行</a><a href="/zuixin"><i class="i-zx"></i>最新</a><a href="http://www.521gxw.com/bzxw/id/34.html" id="feedback" class="last"  target="_blank"><i class="i-qp"></i>合作</a></p>
  </div>
  <div class="menu">
    <p><a href="/" class="curr">首页</a>
      <?php if(is_array($feilei)): foreach($feilei as $k=>$v): if($v['level'] == 0): if($k < 5): ?><a href="<?php echo U('/feilei/',array('id'=>$v['id']));?>"><?php echo ($v["lbmc"]); ?></a><?php endif; endif; endforeach; endif; ?>
    </p>
    <p class="s">
      <?php if(is_array($feilei)): foreach($feilei as $key=>$v): if($v['level'] == 1): ?><a href="<?php echo U('/feilei/',array('id'=>$v['id']));?>"><?php echo ($v["lbmc"]); ?></a><?php endif; endforeach; endif; ?>
    </p>
  </div>
  
</div>
<script type="text/javascript">
  var dj='<?php echo U("xiangqing/dj");?>';
  var sqlj='<?php echo U("index/sqlj");?>';
</script>
       
<div id="main">
  <div class="side">
      <div class="box slide-box">
      <div class="title t2"><b>最近更新资源</b></div>
      <ul class="list bluelink">
        <?php if(is_array($zjgx)): foreach($zjgx as $key=>$v): ?><li><a class="liulan" id='<?php echo ($v["id"]); ?>' href="<?php echo U('/shipin/',array('id'=>$v['id']));?>" target="_blank" title="<?php echo ($v["biaoti"]); ?>">
            <?php echo (date('m-d',$v["cjsj"])); ?>          <?php echo ($v["biaoti"]); ?>          </a></li><?php endforeach; endif; ?>               
       </ul>
    </div>
      <!--/box-->  
    <div class="box slide-box">
      <div class="title t2"><b>热门搜索</b></div>
      <ul class="list bluelink">
        <?php if(is_array($rmss)): foreach($rmss as $key=>$v): ?><li><a class="liulan" id='<?php echo ($v["id"]); ?>' href="<?php echo U('/shipin/',array('id'=>$v['id']));?>" target="_blank" title="<?php echo ($v["biaoti"]); ?>">
            <?php echo (date('m-d',$v["cjsj"])); ?>          <?php echo ($v["biaoti"]); ?>          </a></li><?php endforeach; endif; ?>               
       </ul>
    </div>
    <!--/box--> 
    <div class="box slide-box">
      <div class="title t2"><b>热门资源</b></div>
      <ul class="list bluelink">
        <?php if(is_array($rmzy)): foreach($rmzy as $key=>$v): ?><li><a class="liulan" id='<?php echo ($v["id"]); ?>' href="<?php echo U('/shipin/',array('id'=>$v['id']));?>" target="_blank" title="<?php echo ($v["biaoti"]); ?>">
            <?php echo (date('m-d',$v["cjsj"])); ?>          <?php echo ($v["biaoti"]); ?>          </a></li><?php endforeach; endif; ?>               
       </ul>
    </div>
      <!--/box-->  
  </div>
  <div class="col">
    <div class="box boutique">
      <div class="title t2"><b>精品推荐</b>
        <dl>
          <dd class="on">最新</dd>
          <dd>周榜</dd>
          <dd>月榜</dd>
          <dd>福利</dd>
        </dl>
      </div>
      <div class="bd">
        <div class="bdcon">
          <div class="boutlist">
            <ul class="clearfix">
            <?php if(is_array($zxzy)): foreach($zxzy as $key=>$v): ?><li>
                <a href="<?php echo U('/shipin/',array('id'=>$v['id']));?>" id='<?php echo ($v["id"]); ?>' title="<?php echo ($v["biaoti"]); ?>" class="link1 liulan"  target="_blank">
                  <div class="video-img">
                  <img src="<?php echo ($v["wzfm"]); ?>" alt='<?php echo ($v["biaoti"]); ?>'>
                  <div class="mask">
                    <i class="bgbbg"></i>
                    <p>主演：<?php echo ($v["zhuyan"]); ?></p>
                    <p>地区/年份：<?php echo ($v["diqu"]["lbmc"]); ?>/<?php echo ($v["sysj"]); ?></p>
                    <p>浏览次数：<?php echo ($v["llcs"]); ?></p>
                  </div>
                </div>
                <div class="video-text">
                  <p><?php echo (msubstr($v["biaoti"],0,10,'utf-8',false)); ?></p>
                  <span><?php echo ($v["leibie"]["lbmc"]); ?></span>
                </div>
                </a>
              </li><?php endforeach; endif; ?>
            </ul>
          </div>
          <!--周榜-->
          <div class="boutlist">
            <ul>
              <?php if(is_array($zhoubang)): foreach($zhoubang as $key=>$v): ?><li>
                <a href="<?php echo U('/shipin/',array('id'=>$v['id']));?>" id='<?php echo ($v["id"]); ?>' title="<?php echo ($v["biaoti"]); ?>" class="link1 liulan"  target="_blank">
                  <div class="video-img">
                  <img src="<?php echo ($v["wzfm"]); ?>" alt='<?php echo ($v["biaoti"]); ?>'>
                  <div class="mask">
                    <i class="bgbbg"></i>
                    <p>主演：<?php echo ($v["zhuyan"]); ?></p>
                    <p>地区/年份：<?php echo ($v["diqu"]["lbmc"]); ?>/<?php echo ($v["sysj"]); ?></p>
                    <p>浏览次数：<?php echo ($v["llcs"]); ?></p>
                  </div>
                </div>
                <div class="video-text">
                  <p><?php echo (msubstr($v["biaoti"],0,10,'utf-8',false)); ?></p>
                  <span><?php echo ($v["leibie"]["lbmc"]); ?></span>
                </div>
                </a>
              </li><?php endforeach; endif; ?>
            </ul>
          </div>
          <!--月榜-->
          <div class="boutlist">
            <ul>
             <?php if(is_array($yuebang)): foreach($yuebang as $key=>$v): ?><li>
                <a href="<?php echo U('/shipin/',array('id'=>$v['id']));?>" id='<?php echo ($v["id"]); ?>' title="<?php echo ($v["biaoti"]); ?>" class="link1 liulan"  target="_blank">
                  <div class="video-img">
                  <img src="<?php echo ($v["wzfm"]); ?>" alt='<?php echo ($v["biaoti"]); ?>'>
                  <div class="mask">
                    <i class="bgbbg"></i>
                    <p>主演：<?php echo ($v["zhuyan"]); ?></p>
                    <p>地区/年份：<?php echo ($v["diqu"]["lbmc"]); ?>/<?php echo ($v["sysj"]); ?></p>
                    <p>浏览次数：<?php echo ($v["llcs"]); ?></p>
                  </div>
                </div>
                <div class="video-text">
                  <p><?php echo (msubstr($v["biaoti"],0,10,'utf-8',false)); ?></p>
                  <span><?php echo ($v["leibie"]["lbmc"]); ?></span>
                </div>
                </a>
              </li><?php endforeach; endif; ?> 
            </ul>
          </div>
           <!--福利-->
          <div class="boutlist">
            <ul>
             <?php if(is_array($fuli)): foreach($fuli as $key=>$v): ?><li>
                <a href="<?php echo U('/shipin/',array('id'=>$v['id']));?>" id='<?php echo ($v["id"]); ?>' title="<?php echo ($v["biaoti"]); ?>" class="link1 liulan"  target="_blank">
                  <div class="video-img">
                  <img src="<?php echo ($v["wzfm"]); ?>" alt='<?php echo ($v["biaoti"]); ?>'>
                  <div class="mask">
                    <i class="bgbbg"></i>
                    <p>主演：<?php echo ($v["zhuyan"]); ?></p>
                    <p>地区/年份：<?php echo ($v["diqu"]["lbmc"]); ?>/<?php echo ($v["sysj"]); ?></p>
                    <p>浏览次数：<?php echo ($v["llcs"]); ?></p>
                  </div>
                </div>
                <div class="video-text">
                  <p><?php echo (msubstr($v["biaoti"],0,10,'utf-8',false)); ?></p>
                  <span><?php echo ($v["leibie"]["lbmc"]); ?></span>
                </div>
                </a>
              </li><?php endforeach; endif; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--/box--> 
    <script>jQuery(".boutique").slide({ titCell:".title dl dd",mainCell:".bdcon",effect:"fold",delayTime:200 });</script>
    <div class="bq">

      <div class="box">
        <div class="title"><b>迅雷电影资源</b><span><a href="<?php echo U('/feilei/',array('id'=>1));?>" target="_blank">更多>></a></span></div>
        <ul class="list">
         <?php if(is_array($dyzy)): foreach($dyzy as $key=>$v): ?><li><span><?php echo (date('m/d H:s',$v["cjsj"])); ?></span>
                 <a class="liulan" id='<?php echo ($v["id"]); ?>' href="<?php echo U('/shipin/',array('id'=>$v['id']));?>" title="<?php echo ($v["biaoti"]); ?>" class="liulan" target="_blank">
                  <?php echo ($v["biaoti"]); ?></a>
               </li><?php endforeach; endif; ?>     
      </div>
      <!--/box-->
      <div class="box">
        <div class="title"><b>迅雷电视资源</b><span><a href="<?php echo U('/feilei/',array('id'=>2));?>" target="_blank">更多>></a></span></div>
        <ul class="list">
        <?php if(is_array($dszy)): foreach($dszy as $key=>$v): ?><li><span><?php echo (date('m/d H:s',$v["cjsj"])); ?></span>
               <a class="liulan" id='<?php echo ($v["id"]); ?>' href="<?php echo U('/shipin/',array('id'=>$v['id']));?>" title="<?php echo ($v["biaoti"]); ?>" class="liulan"  target="_blank">
                <?php echo ($v["biaoti"]); ?></a>
               </li><?php endforeach; endif; ?>     
         </ul>
      </div>
      <!--/box-->
      <div class="box">
        <div class="title"><b>迅雷综艺片资源</b><span><a href="<?php echo U('/feilei/',array('id'=>4));?>" target="_blank">更多>></a></span></div>
        <ul class="list">
        <?php if(is_array($zyzy)): foreach($zyzy as $key=>$v): if($v['djid'] == 4): ?><li><span><?php echo (date('m/d H:s',$v["cjsj"])); ?></span>
               <a class="liulan" id='<?php echo ($v["id"]); ?>' href="<?php echo U('/shipin/',array('id'=>$v['id']));?>" title="<?php echo ($v["biaoti"]); ?>" class="liulan" target="_blank">
                <?php echo ($v["biaoti"]); ?></a>
               </li><?php endif; endforeach; endif; ?>     
                  </ul>
      </div>
      <!--/box-->
      <div class="box">
        <div class="title"><b>迅雷动画片资源</b><span><a href="<?php echo U('/feilei/',array('id'=>3));?>" target="_blank">更多>></a></span></div>
        <ul class="list">
        <?php if(is_array($dhzy)): foreach($dhzy as $key=>$v): if($v['djid'] == 3): ?><li><span><?php echo (date('m/d H:s',$v["cjsj"])); ?></span>
               <a class="liulan" id='<?php echo ($v["id"]); ?>' href="<?php echo U('/shipin/',array('id'=>$v['id']));?>" title="<?php echo ($v["biaoti"]); ?>" class="liulan" target="_blank">
                <?php echo ($v["biaoti"]); ?></a>
               </li><?php endif; endforeach; endif; ?>
                  </ul>
      </div>
      <!--/box--> 
    </div>
  </div>
  <div class="cr"></div>
    <div class="link">
      <h4><b>友情链接</b><span><a href="http://www.521gxw.com/yhdl.html"  target="_blank">申请链接</a></span></h4>
        <p>  
        <?php if(is_array($yqlj)): foreach($yqlj as $key=>$v): ?><a href="<?php echo ($v["url"]); ?>" target="_blank" class="sqlj" id='<?php echo ($v["id"]); ?>' rel="nofollow"><?php echo ($v["ljmc"]); ?></a><?php endforeach; endif; ?>
        </p>
    </div>
</div>

<div id="footer">
  <p>免责声明:本站所有数据均采集第三方网站，如果侵犯了你的权益，请发邮件至：<?php echo ($wzxx[0]['youxiang']); ?>，我们会及时删除侵权内容，谢谢合作！</p>
  <p><a href="http://www.521gxw.com/show/id/52.html" target="_blank">521电影网源代码</a></p><script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1254959650'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/z_stat.php%3Fid%3D1254959650%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));</script>
  <p>Copyright &#169; 2017 <?php echo ($wzxx[0]['zdwz']); ?>. All Rights Reserved.
      </p>
</div>
<div id="gotop"><a href="javascript:;" class="got"><i>返回顶部</i></a></div>
<script src="/dianyingfbb/Public/js/layer.js"></script> 

<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
</script>
<script type="text/javascript">
$('p.plus a.last').on('click', function(){
    layer.tips('请发邮件至 guanliyuan@521dyw.com!', '#feedback');
});
</script> 
</body>
</html>