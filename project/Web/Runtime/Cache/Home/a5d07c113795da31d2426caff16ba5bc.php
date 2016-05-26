<?php if (!defined('THINK_PATH')) exit();?>﻿
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	
    <meta charset="utf-8">
    <title>易果生鲜Yiguo网_全球精选_生鲜果蔬 品质食材_易果网yiguo.com</title>
    <meta name="Keywords" content="水果,进口水果,国产水果,蔬菜,肉类,海鲜,禽蛋,粮油,甜点,葡萄酒,易果网">
    <meta name="Description" content="易果生鲜Yiguo网是专业的进口生鲜水果食品网络购物平台，为您精选全球3000多种生鲜果蔬品质食材，在体验网上购物新模式的同时享尽各国新鲜美味，易果网是您悠悦生活的品质之选。">
    <meta property="qc:admins" content="15753240576117576375" />
    <link rel="shortcut icon" href="http://static01.yiguo.com/common/images/yiguo.ico"/>
    <link rel="dns-prefetch" href="//img01.yiguoimg.com" />
    <link rel="dns-prefetch" href="//img02.yiguoimg.com" />
    <link rel="dns-prefetch" href="//img03.yiguoimg.com" />
    <link rel="dns-prefetch" href="//img04.yiguoimg.com" />
    <link rel="dns-prefetch" href="//img05.yiguoimg.com" />
    <link rel="dns-prefetch" href="//img06.yiguoimg.com" />
    <link rel="dns-prefetch" href="//img07.yiguoimg.com" />
    <link rel="dns-prefetch" href="//img08.yiguoimg.com" />
    <link href="/Public/Home/Index/Css/public.css" rel="stylesheet" type="text/css">
    <link href="/Public/Home/Index/Css/customer.css" rel="stylesheet" type="text/css">
    <link href="/Public/Home/Index/Css/pageguide.css" rel="stylesheet" type="text/css">
    <link href="/Public/Home/Index/Css/index.css" rel="stylesheet" type="text/css">
	
    
    <!--IE6png兼容-->
    <!--[if IE 6]>
    <script type="text/javascript" src="Scripts/dd_belatedpng.js" ></script>
    <script type="text/javascript" src="Scripts/ie6_loading.js"></script>
    <![endif]-->
    <script src="/Public/Home/Index/Scripts/jquery.js"></script>
    <script>
        yg_x = new Date();
    </script>
    <script type="text/javascript">
        var _bdhm_top = 0;
        var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
        var _bdhm_tim = new Image(1, 1);
        _bdhm_tim.id = "bdhmPerimg";
        _bdhm_tim.src = _bdhmProtocol + "hm.baidu.com/_tt.gif?si=36a486fbdec46fc52ca666dd2e98f260&rnd=" + Math.round(Math.random() * 2147483647);
        _bdhm_tim.onload = function () { _bdhm_top = 1; }
    </script>
    <!-- start Dplus -->
    <script type="text/javascript">!function (a, b) { if (!b.__SV) { var c, d, e, f; window.dplus = b, b._i = [], b.init = function (a, c, d) { function g(a, b) { var c = b.split("."); 2 == c.length && (a = a[c[0]], b = c[1]), a[b] = function () { a.push([b].concat(Array.prototype.slice.call(arguments, 0))) } } var h = b; for ("undefined" != typeof d ? h = b[d] = [] : d = "dplus", h.people = h.people || [], h.toString = function (a) { var b = "dplus"; return "dplus" !== d && (b += "." + d), a || (b += " (stub)"), b }, h.people.toString = function () { return h.toString(1) + ".people (stub)" }, e = "disable track track_links track_forms register unregister get_property identify clear set_config get_config get_distinct_id track_pageview register_once track_with_tag time_event people.set people.unset people.delete_user".split(" "), f = 0; f < e.length; f++) g(h, e[f]); b._i.push([a, c, d]) }, b.__SV = 1.1, c = a.createElement("script"), c.type = "text/javascript", c.charset = "utf-8", c.async = !0, c.src = "//w.cnzz.com/dplus.php?token=1915ef989c5aence66fa", d = a.getElementsByTagName("script")[0], d.parentNode.insertBefore(c, d) } }(document, window.dplus || []), dplus.init("1915ef989c5aence66fa");</script><!-- end Dplus -->
    <script src="/Public/Home/Index/Scripts/topdsp.js"></script>

    
        
    
</head>
<body id="body">
    <div class="w">
        <div id="topads" >
            <script id="topadstpl" type="text/x-handlebars-template">
                {{#TopAds}}
                <a href="{{Link}}">
                    <img src="/Public/Home/Index/Picture/265fe465c78d40819cd88d08eb8aa343.gif" style="width:100%;" />
                </a>
                {{/TopAds}}
            </script>
        </div>
        <!-- 顶部工具栏 -->
        <div class="site-nav">
            <div class="wrap">
                <ul class="fl">
                    <li>欢迎光临易果生鲜！</li>
                    <!--送货城市 开始-->
                   <!--  <li class="city clearfix" id="chuo">
                        <div class="city-sz">配送至：</div>
                        <div class="city-tit">
                            <a class="city-name" href="javascript:void(0)">上海<s></s></a>
                        </div>
                        <div class="city-con" id="citylist"> -->
                            <script id="_citytpl" type="text/x-handlebars-template">
                                <div class="headline">
                                    <a>&gt;&gt;</a><a href="javascript:;" v="64" aid="00000000-0000-0000-0000-000000000000">全国其它城市</a> 请根据您的收货地址选择
                                </div>
                                <div class="city-hot"><span><i></i>热门城市</span>
                                    {{#each HotCity}}
                                    <a href="javascript:;" v="{{WebCode}}" aid="{{AreaId}}" _type="{{DeliveryType}}">{{AreaName}}</a>
                                    {{/each}}
                                </div>
                                <div class="citylist border">
                                    {{#each CityLeft}}
                                    <dl>
                                        <dt>{{@key}}</dt>
                                        <dd>
                                            {{#each this}}
                                            {{#equal WebShow 2}}
                                            <a href="javascript:;" class="hot" v="{{WebCode}}" aid="{{AreaId}}" _type="{{DeliveryType}}"><strong>{{AreaName}}</strong></a>
                                            {{else}}
                                            <a href="javascript:;" v="{{WebCode}}" aid="{{AreaId}}" _type="{{DeliveryType}}">{{AreaName}}</a>
                                            {{/equal}}
                                            {{/each}}
                                        </dd>
                                    </dl>
                                    {{/each}}
                                </div>
                                <div class="citylist">
                                    {{#each CityRight}}
                                    <dl>
                                        <dt>{{@key}}</dt>
                                        <dd>
                                            {{#each this}}
                                            {{#equal WebShow 2}}
                                            <a href="javascript:;" class="hot" v="{{WebCode}}" aid="{{AreaId}}" _type="{{DeliveryType}}"><strong>{{AreaName}}</strong></a>
                                            {{else}}
                                            <a href="javascript:;" v="{{WebCode}}" aid="{{AreaId}}" _type="{{DeliveryType}}">{{AreaName}}</a>
                                            {{/equal}}
                                            {{/each}}
                                        </dd>
                                    </dl>
                                    {{/each}}
                                </div>
                            </script>
                        <!-- </div>
                    </li> -->
                    <li class="city clearfix" id="chuo">
                        <div class="city-sz">配送至：</div>
                        <div class="city-tit">
                            <a class="city-name" href="javascript:void(0)">上海<s></s></a>
                        </div>
                        <div class="city-con" id="citylist">
                        <div class="headline">
                            <a>&gt;&gt;</a><a href="javascript:;" v="64" aid="00000000-0000-0000-0000-000000000000">全国其它城市</a> 请根据您的收货地址选择
                        </div>
                        <div class="city-hot"><span><i></i>热门城市</span>
                            <a href="javascript:;" v="1" aid="312d0556-0671-4f2e-8bac-7b8873b5a03a" _type="1">上海</a>
                            <a href="javascript:;" v="2" aid="eabbe02f-59e0-46e6-90e7-cd8a89dbb98f" _type="1">北京</a>
                            <a href="javascript:;" v="8" aid="93570b8c-0a0a-4818-8317-75a0d14093a5" _type="1">天津</a>
                            <a href="javascript:;" v="128" aid="9069d884-96c5-4478-bb49-d6ba55b751c8" _type="1">南京市</a>
                            <a href="javascript:;" v="128" aid="dec5b754-fe58-48d6-8b37-6bc91ee08460" _type="1">苏州市</a>
                            <a href="javascript:;" v="128" aid="0dbb02ef-c055-429f-97b6-5dc7a5bfeda8" _type="1">昆山市</a>
                            <a href="javascript:;" v="128" aid="361bc174-b1e5-4fb6-8f69-c391dcd92644" _type="1">无锡市</a>
                            <a href="javascript:;" v="128" aid="a10524be-acea-451e-9280-df0514e11e2b" _type="1">杭州市</a>
                            <a href="javascript:;" v="128" aid="c0a5de4e-9087-4678-9056-f589ad833656" _type="1">宁波市</a>
                        </div>
                        <div class="citylist border">
                            <dl>
                                <dt>A</dt>
                                <dd>
                                    <a href="javascript:;" v="16" aid="78d6e5b9-669d-481f-b395-cea5e1e6e5a0" _type="0">安庆市</a>
                                </dd>
                            </dl>
                            <dl>
                                <dt>B</dt>
                                <dd>
                                    <a href="javascript:;" v="32" aid="daf7b0e2-35ea-4183-93e2-03dd4e7211d0" _type="0">滨州市</a>
                                    <a href="javascript:;" class="hot" v="2" aid="eabbe02f-59e0-46e6-90e7-cd8a89dbb98f" _type="1"><strong>北京</strong></a>
                                    <a href="javascript:;" v="32" aid="15b6c4e6-69f2-4001-a631-62c0c36102b1" _type="0">北京(郊区)</a>
                                </dd>
                            </dl>
                            <dl>
                                <dt>C</dt>
                                <dd>
                                    <a href="javascript:;" v="4" aid="8a72d144-cc9b-42b4-884e-393854bb15ee" _type="0">慈溪市</a>
                                    <a href="javascript:;" v="16" aid="708f0b6e-91f2-4731-8576-07c78ea08351" _type="0">成都市</a>
                                    <a href="javascript:;" v="32" aid="25123e41-42e0-40e5-b2bd-76ba94daa655" _type="0">长春市</a>
                                    <a href="javascript:;" v="4" aid="05037210-573c-436b-b24a-9d345dca54f7" _type="0">常熟市</a>
                                    <a href="javascript:;" v="4" aid="a338e3c1-e7e7-4482-b248-c5875b22a27b" _type="0">常州市</a>
                                    <a href="javascript:;" v="16" aid="e450593b-b52f-4233-b106-cb518acb3896" _type="0">长沙市</a>
                                    <a href="javascript:;" v="32" aid="ee36933d-939f-4f6b-8a2b-d060ee9ca495" _type="0">沧州市</a>
                                    <a href="javascript:;" v="16" aid="7c046210-81f3-4638-a09b-6b2e8ecbe957" _type="0">重庆</a>
                                </dd>
                            </dl>
                            <dl>
                                <dt>D</dt>
                                <dd>
                                    <a href="javascript:;" class="hot" v="512" aid="20c2f64b-c91f-4095-8fb4-3f1fbbb55f82" _type="0"><strong>东莞市</strong></a>
                                    <a href="javascript:;" v="32" aid="3220a369-6a2d-4415-a46a-75a699214736" _type="0">大连市</a>
                                    <a href="javascript:;" v="32" aid="dd7cbdb8-6463-436f-ba09-93c69150f137" _type="0">东营市</a>
                                    <a href="javascript:;" v="32" aid="8f1e3541-74b4-4993-b242-a2bf9bf15d0d" _type="0">德州市</a>
                                </dd>
                            </dl>
                            <dl>
                                <dt>F</dt>
                                <dd>
                                    <a href="javascript:;" class="hot" v="512" aid="6a637459-eca9-46b8-964d-35c11cad039a" _type="0"><strong>佛山市</strong></a>
                                    <a href="javascript:;" v="16" aid="46e851bf-6fb4-4250-8c90-4f7774a176f1" _type="0">福州市</a>
                                    <a href="javascript:;" v="4" aid="c7f7d216-b6aa-4287-84ec-8d8cd0dbec04" _type="0">奉化市</a>
                                </dd>
                            </dl>
                            <dl>
                                <dt>G</dt>
                                <dd>
                                    <a href="javascript:;" class="hot" v="512" aid="c8dbd17f-a8e0-43b1-b9ce-de1efdc2670e" _type="0"><strong>广州市</strong></a>
                                </dd>
                            </dl>
                            <dl>
                                <dt>H</dt>
                                <dd>
                                    <a href="javascript:;" v="32" aid="4e09d210-7744-44fe-a45f-1e166aa92c2c" _type="0">菏泽市</a>
                                    <a href="javascript:;" v="4" aid="7254d134-678b-4976-86f0-520fab6bcc46" _type="0">海宁市</a>
                                    <a href="javascript:;" v="16" aid="f2b41b20-c240-4e27-a7b4-5828f8fca3e9" _type="0">合肥市</a>
                                    <a href="javascript:;" class="hot" v="512" aid="63179983-02f7-44a3-a69f-0f9589e44a35" _type="0"><strong>惠州市</strong></a>
                                    <a href="javascript:;" v="32" aid="18cd4b6e-a0c3-4190-9988-c724c1da8bf5" _type="0">哈尔滨市</a>
                                    <a href="javascript:;" v="4" aid="9fb6eac6-ea03-409b-89d9-e13c27e01576" _type="0">湖州市</a>
                                    <a href="javascript:;" v="4" aid="3c2af8a1-c3eb-418b-97ee-e5f92c44f8ad" _type="0">淮安市</a>
                                    <a href="javascript:;" class="hot" v="128" aid="a10524be-acea-451e-9280-df0514e11e2b" _type="1"><strong>杭州市</strong></a>
                                </dd>
                            </dl>
                            <dl>
                                <dt>J</dt>
                                <dd>
                                    <a href="javascript:;" v="32" aid="97fe0ada-54d3-4b5f-9096-19ad57929d07" _type="0">济南市</a>
                                    <a href="javascript:;" v="32" aid="69417568-9e3a-49c6-b21d-5282b7239922" _type="0">吉林市</a>
                                    <a href="javascript:;" v="4" aid="ddd4e4d0-afb3-46c6-8aa6-6257c8ce9bee" _type="0">嘉兴市</a>
                                    <a href="javascript:;" v="16" aid="91c38a9c-30e0-4e44-af39-9b5d49928509" _type="0">景德镇市</a>
                                    <a href="javascript:;" class="hot" v="512" aid="43ba3517-6aa8-423b-9f02-a3b0fd681740" _type="0"><strong>江门市</strong></a>
                                    <a href="javascript:;" v="4" aid="72f8f62e-e5cb-418f-9419-a542c409d122" _type="0">江阴市</a>
                                    <a href="javascript:;" v="4" aid="1e07c926-06e9-40cd-b257-a78d1d313ae7" _type="0">金华市</a>
                                    <a href="javascript:;" v="4" aid="4673dd12-4056-4590-8267-8c0aff24b792" _type="0">嘉善市</a>
                                    <a href="javascript:;" v="32" aid="c64e3be4-5e14-4a74-ae4f-f6cd366ae624" _type="0">济宁市</a>
                                </dd>
                            </dl>
                            <dl>
                                <dt>K</dt>
                                <dd>
                                    <a href="javascript:;" class="hot" v="128" aid="0dbb02ef-c055-429f-97b6-5dc7a5bfeda8" _type="1"><strong>昆山市</strong></a>
                                </dd>
                            </dl>
                            <dl>
                                <dt>L</dt>
                                <dd>
                                    <a href="javascript:;" v="4" aid="b0efaf6f-ec54-4264-b0a5-2012a9ec7ee8" _type="0">丽水市</a>
                                    <a href="javascript:;" v="32" aid="afbcecb5-0f4c-4e28-aeb4-53372dd301a7" _type="0">临沂市</a>
                                    <a href="javascript:;" v="32" aid="bc3c25d7-7308-40aa-8fd7-60b96ba87bf4" _type="0">聊城市</a>
                                    <a href="javascript:;" v="32" aid="8edda15e-0e21-436c-978d-68eb5bb14ef7" _type="0">兰州市</a>
                                    <a href="javascript:;" v="4" aid="b2d5732b-b0f8-4fdf-b011-b95b31effa1d" _type="0">连云港市</a>
                                    <a href="javascript:;" v="32" aid="297c5d78-4d09-42cc-ac13-8421f201b6a9" _type="0">辽阳市</a>
                                    <a href="javascript:;" v="32" aid="fec2b413-bdf1-4c6d-98ec-d2de0f237be0" _type="0">莱芜市</a>
                                    <a href="javascript:;" v="256" aid="7f21282c-4bd0-45c0-a195-87663f9c27eb" _type="0">廊坊市</a>
                                </dd>
                            </dl>
                        </div>
                        <div class="citylist">
                            <dl>
                                <dt>M</dt>
                                <dd>
                                    <a href="javascript:;" v="4" aid="45a989b7-d34e-40c7-aca1-990923eda2cd" _type="0">马鞍山市</a>
                                </dd>
                            </dl>
                            <dl>
                                <dt>N</dt>
                                <dd>
                                    <a href="javascript:;" v="64" aid="7cd187b5-8b3f-4c1a-8115-24a5e2d18f3a" _type="0">南宁市</a>
                                    <a href="javascript:;" v="16" aid="75fbd2c7-8cbc-4bbd-94ef-5eb037a75be5" _type="0">南昌市</a>
                                    <a href="javascript:;" v="4" aid="603d28a7-b4c8-4a13-823f-d627c2655557" _type="0">南通市</a>
                                    <a href="javascript:;" class="hot" v="128" aid="9069d884-96c5-4478-bb49-d6ba55b751c8" _type="1"><strong>南京市</strong></a>
                                    <a href="javascript:;" class="hot" v="128" aid="c0a5de4e-9087-4678-9056-f589ad833656" _type="1"><strong>宁波市</strong></a>
                                </dd>
                            </dl>
                            <dl>
                                <dt>Q</dt>
                                <dd>
                                    <a href="javascript:;" v="16" aid="2b3763ec-2491-4ee0-97a6-20cf70f81933" _type="0">泉州市</a>
                                    <a href="javascript:;" v="32" aid="5d9e78ba-c583-4962-b279-2a8948df9ee1" _type="0">秦皇岛市</a>
                                    <a href="javascript:;" v="32" aid="7ced387b-577d-4060-83d1-13b78f60ff53" _type="0">青岛市</a>
                                    <a href="javascript:;" class="hot" v="512" aid="f7330b43-1177-4686-9a04-9f5176d046e3" _type="0"><strong>清远市</strong></a>
                                    <a href="javascript:;" v="4" aid="4693602d-80d7-4b72-b3b5-ca6a26f051f1" _type="0">衢州市</a>
                                </dd>
                            </dl>
                            <dl>
                                <dt>R</dt>
                                <dd>
                                    <a href="javascript:;" v="32" aid="d1bcc39a-7383-40ca-add9-ee3feb38b677" _type="0">日照市</a>
                                </dd>
                            </dl>
                            <dl>
                                <dt>S</dt>
                                <dd>
                                    <a href="javascript:;" v="4" aid="df2e0859-ed44-4e81-95a5-1c8b59381b99" _type="0">绍兴市</a>
                                    <a href="javascript:;" v="4" aid="7e8111e6-d7ce-41ce-a660-3033ab81705c" _type="0">宿迁市</a>
                                    <a href="javascript:;" v="32" aid="191a03f0-5acf-4bba-8d79-551fa80f77c2" _type="0">沈阳市</a>
                                    <a href="javascript:;" class="hot" v="512" aid="0540d74e-0ffb-4a3a-ab79-ec590dd49947" _type="0"><strong>深圳市</strong></a>
                                    <a href="javascript:;" class="hot" v="1" aid="312d0556-0671-4f2e-8bac-7b8873b5a03a" _type="1"><strong>上海</strong></a>
                                    <a href="javascript:;" v="16" aid="98373b1b-201c-4753-b540-14bb1cd6564e" _type="0">上海(郊区)</a>
                                    <a href="javascript:;" class="hot" v="128" aid="dec5b754-fe58-48d6-8b37-6bc91ee08460" _type="1"><strong>苏州市</strong></a>
                                    <a href="javascript:;" v="256" aid="28eab84c-07bf-439f-bb96-92274545c77b" _type="0">石家庄市</a>
                                </dd>
                            </dl>
                            <dl>
                                <dt>T</dt>
                                <dd>
                                    <a href="javascript:;" v="32" aid="17ee7ac2-d7ce-4c02-80ea-1babea0a8933" _type="0">唐山市</a>
                                    <a href="javascript:;" v="32" aid="245dccf7-34cb-466f-aa68-45a242927e18" _type="0">太原市</a>
                                    <a href="javascript:;" v="4" aid="5fddc946-9a0c-4dad-bc92-5e05aa5658cd" _type="0">台州市</a>
                                    <a href="javascript:;" v="32" aid="63ae9bcf-002f-4514-b052-66702274b1c7" _type="0">泰安市</a>
                                    <a href="javascript:;" v="16" aid="0d920097-3f8a-4ac5-8d48-c7ba7b344ab3" _type="0">桐乡市</a>
                                    <a href="javascript:;" v="4" aid="6ba21255-37f7-4619-859c-fde2bb914c4c" _type="0">泰州市</a>
                                    <a href="javascript:;" class="hot" v="8" aid="93570b8c-0a0a-4818-8317-75a0d14093a5" _type="1"><strong>天津</strong></a>
                                </dd>
                            </dl>
                            <dl>
                                <dt>W</dt>
                                <dd>
                                    <a href="javascript:;" v="32" aid="556550b5-ea16-4b86-9ecd-1b66d20b297b" _type="0">潍坊市</a>
                                    <a href="javascript:;" v="16" aid="3a5c6df3-9ca1-41a8-bc9c-453050bb7897" _type="0">武汉市</a>
                                    <a href="javascript:;" v="4" aid="734d3328-587c-4b16-bddc-9c8682e76ea5" _type="0">温州市</a>
                                    <a href="javascript:;" v="32" aid="08727bb1-22ea-40ca-81f9-7dc9b0fcabd0" _type="0">威海市</a>
                                    <a href="javascript:;" v="4" aid="33b3203d-c4b6-4c91-abd0-f3f0a226e461" _type="0">吴江市</a>
                                    <a href="javascript:;" class="hot" v="128" aid="361bc174-b1e5-4fb6-8f69-c391dcd92644" _type="1"><strong>无锡市</strong></a>
                                </dd>
                            </dl>
                            <dl>
                                <dt>X</dt>
                                <dd>
                                    <a href="javascript:;" v="16" aid="9a2b3612-8529-4ddf-86bd-60b7a46444a7" _type="0">西安市</a>
                                    <a href="javascript:;" v="16" aid="146a4ea1-7ba2-4e0b-bf92-a56ddc2d4eb2" _type="0">厦门市</a>
                                    <a href="javascript:;" v="4" aid="95e8ce6d-2c7e-4364-9b66-8903c1afd338" _type="0">徐州市</a>
                                </dd>
                            </dl>
                            <dl>
                                <dt>Y</dt>
                                <dd>
                                    <a href="javascript:;" v="4" aid="3ed942ac-0504-479b-8808-4d9ca08df39b" _type="0">扬州市</a>
                                    <a href="javascript:;" v="4" aid="36ccf429-efe3-4192-9530-6fbee4984621" _type="0">盐城市</a>
                                    <a href="javascript:;" v="32" aid="7d381d70-fc5a-4d1c-8dd0-9400fd5280fd" _type="0">烟台市</a>
                                    <a href="javascript:;" v="4" aid="6b804583-e3d5-47d5-8bc5-a6a1f46a4cf8" _type="0">余姚市</a>
                                    <a href="javascript:;" v="4" aid="c9d4fe94-a93a-4382-bf3f-acc16233a71d" _type="0">义乌市</a>
                                    <a href="javascript:;" v="32" aid="d1c0ada7-06b3-4d53-8f91-ccdc9f61d9ba" _type="0">银川市</a>
                                </dd>
                            </dl>
                            <dl>
                                <dt>Z</dt>
                                <dd>
                                    <a href="javascript:;" class="hot" v="512" aid="0718b3bf-b99b-4aa4-97bd-4a4da0b92464" _type="0"><strong>珠海市</strong></a>
                                    <a href="javascript:;" v="16" aid="2aac03c9-daf1-4aa8-9505-0bc169742e8a" _type="0">郑州市</a>
                                    <a href="javascript:;" class="hot" v="512" aid="29bd9fa7-274c-4257-85e2-a22e2cd1d2ce" _type="0"><strong>中山市</strong></a>
                                    <a href="javascript:;" v="4" aid="04d2148e-5d5a-4372-a8a1-ad6fd9756b2b" _type="0">舟山市</a>
                                    <a href="javascript:;" v="32" aid="b07704cf-41a9-4997-8ac4-7e739d7e978a" _type="0">枣庄市</a>
                                    <a href="javascript:;" v="32" aid="9e21dcb6-47fa-42f8-89c3-9216ba489f1e" _type="0">淄博市</a>
                                    <a href="javascript:;" v="4" aid="26b6f9a2-850b-4cab-be30-d62e6221dab9" _type="0">镇江市</a>
                                    <a href="javascript:;" class="hot" v="512" aid="49c234d6-d1c7-4b9d-be06-e2ebd08e4618" _type="0"><strong>肇庆市</strong></a>
                                </dd>
                            </dl>
                        </div>
                    
                    </li>
                    <!--送货城市 结束-->
                </ul>
                <script type="text/javascript">
                    $('#chuo').mouseover(function(){
                    
                        $(this).addClass('city clearfix current');
                    })
                    
                </script>
                <script type="text/javascript"> 
                    $('#chuo').mouseout(function(){
                    
                        $(this).removeClass("current");
                    })
                </script>

                <ul class="fr">
                    <li class="TEL"><a rel="nofollow" href="http://home.yiguo.com/Trade/OnlineDelivery" target="_blank"><i></i>提货券入口</a></li> 
                    <li class="pay"><a rel="nofollow" href="http://home.yiguo.com/Recharge/Index" target="_blank"><i></i>储值卡</a></li>


                    <li class="mobile">
                        <div class="tit"><a href="javascript:void(0)"><i></i>手机易果<s></s></a></div>
                        <div class="con">
                            <div class="item"><img src="/Public/Home/Index/Picture/qrcode_app.jpg" width="125" height="125"><span>扫一扫下载APP</span></div>
                            <div class="item"><img src="/Public/Home/Index/Picture/qrcode_wechat.jpg" width="125" height="125"><span>易果生鲜微信</span></div>
                        </div>
                    </li>

                    <li class="myyiguo">
                        
                        <div class="tit"><a rel="nofollow" href="<?php echo U('Home/Grzx/index');?>" target="_blank"><i></i>我的易果<s></s></a></div>
                        <div class="con">
                            <a rel="nofollow" href="http://home.yiguo.com/Trade/OrderList">我的订单</a>
                            <a rel="nofollow" href="http://home.yiguo.com/Trade/MyCoupons">我的优惠券<b id="coupon">0</b></a>
                            <a rel="nofollow" href="http://home.yiguo.com/Trade/MyCollection">我的收藏</a>
                            <a rel="nofollow" href="http://home.yiguo.com/Trade/UMoney">我的悠币</a>
                            <a rel="nofollow" href="http://home.yiguo.com/Trade/BackOrder">我的退换货</a>
                            <a rel="nofollow" href="http://home.yiguo.com/Account/Balance">预存款查询</a>
                            <a rel="nofollow" href="http://event.yiguo.com/activity/">立即充值</a>
                            <a rel="nofollow" href="javascript:;" class="logout" style="display:none;">退出</a>
                            
                        </div>
                    </li>
                    
                    <?php  if(isset($_SESSION['Home'])){ ?>
                        <li id="_logout"><a href="<?php echo U('Home/Login/loginout');?>" class="logout">[退出]</a></li>
                        <li id="_loginname"><a rel="nofollow" href="<?php echo U('Home/Grzx/index');?>"><?php echo $_SESSION['Home']['username'] ?></a></li>
                    <?php
 }else{ ?>
                        <li id="_register"><a rel="nofollow" href="<?php echo U('Home/Login/loginup');?>">[注册]</a></li>
                        <li id="_login">
                            <a rel="nofollow" href="<?php echo U('Home/Login/index');?>">[登录]</a>
                        </li>
                    <?php
 } ?>
                </ul>
            </div>
        </div>
        <!-- 头部 -->

        <div class="header clearfix">
            <div class="wrap">
                <div class="logo">
                    <a href="<?php echo U(Home/Index/index);?>"></a>
                </div>
                <!--搜索 开始-->
                <div class="search" style="position:relative;">
                    <div class="search-bar clearfix">
                        <input type="text" id="keyword" name="keyword" class="search-input" value="输入商品名／编号／拼音" onfocus=" if (this.value == '输入商品名／编号／拼音') {this.value = '';this.style.color = '#000';} " onblur=" if (this.value == '') {this.value = '输入商品名／编号／拼音';this.style.color = '#999';} " style="color: rgb(153, 153, 153);">
                        <input class="search-btn" type="submit" value="搜索">
                    </div>
                    <ul class="hide" id="shelper" style="display: none;"></ul>
                    <div class="search-keywords" id="keywords">
                        <script id="keywordstpl" type="text/x-handlebars-template">
                            {{#KeyWords}}
                            {{#equal IsImportant true}}
                            <a href="{{Link}}" class="hot" target="_blank">{{Text}}</a>
                            {{else}}
                            <a href="{{Link}}" target="_blank">{{Text}}</a>
                            {{/equal}}
                            {{/KeyWords}}
                        </script>
                    </div>
                </div>
                <!--购物车 开始-->
                <div class="shopping-cart">
        <dl>
        <dt class="shopping-btn"><a href="http://cart.yiguo.com/"> <span class="totleNum"><b>0</b></span><b class="totlePrice">0.0</b></a></dt>
        <dd class="shopping-list">
            <div class="spacer"></div>
            <div class="nogoods" style="display:none;">
                购物车中还没有商品，赶紧选购吧！
            </div>
            <div class="goods">
                <p id="deliveryType" style="display:none;">满100元包邮！</p>
                <ul></ul>
                <div class="price-total">
                    <div><span class="totleNum">共<b>0</b>件商品</span><span>共计<b class="totlePrice">¥0.00</b></span></div>
                    <div><a href="http://cart.yiguo.com/" class="settleup">去购物车</a></div>
                </div>
            </div>
        </dd>
    </dl>
</div>
                <!--购物车 结束-->
            </div>
        </div>
        
<div class="header-nav">
    <div class="wrap">
        <!--商品分类 开始-->
        <div class="catalogs">
            
            <div class="catalogs-title"><a href="javascript:;">全部商品分类▼</a></div>
            <div class="catalogs-list" style="display:none">
                    
                    <?php if(is_array($cates)): foreach($cates as $k=>$v): if(($k < 11 )): ?><div class="item">
                                <h3 class="t<?php echo ($k+1); ?>_channelhome"><a href="http://www.yiguo.com/products/05_channelhome.html"><i></i><?php echo ($v["name"]); ?><s>></s></a></h3>
                                <div class="sub-item">
                                    <h4><a href="http://www.yiguo.com/products/05_channelhome.html"><?php echo ($v["name"]); ?></a></h4>
                                        <div class="sub-list">
                                            <?php if(is_array($catex)): foreach($catex as $ke=>$vo): if(($v['id'] == $vo['pid'])): ?><a href="http://www.yiguo.com/products/0502_guochanniurou.html" target="_blank"><?php echo ($vo["name"]); ?></a><?php endif; endforeach; endif; ?>
                                        </div>
                                        <div class="catalogs-ad">
                                            <a href="http://www.yiguo.com/products/05_channelhome.html"><img src="/Public/Home/Index/Picture/<?php echo ($k); ?>.png" alt="暂无图片"></a>
                                        </div>
                                </div>
                            </div><?php endif; endforeach; endif; ?>   
                       
            </div>
        </div>
        <!--商品分类 结束-->
    </div>
</div>


<!-- 轮播广告 -->
<div class="banner-slider">
    <ul class="b-slider">
                <li style="background:#efefef;">
                    <a  target="_blank">
                        <div class="slider-wrap">
                            <span class="banner-text">
                                <img src="/Public/Home/Index/Picture/9570168995651753.png" height="500" />
                            </span>
                        </div>

                        <div class="banner-main" style="background:url(/Public/Home/Index/Images/9288694018842793.jpg)"></div>
                    </a>
                </li>
                <li style="background:#efefef;">
                    <a  target="_blank">
                        <div class="slider-wrap">
                            <span class="banner-text">
                                <img src="/Public/Home/Index/Picture/9570169033433258.png" height="500" />
                            </span>
                        </div>

                        <div class="banner-main" style="background:url(/Public/Home/Index/Images/9288694056657066.jpg)"></div>
                    </a>
                </li>
                <li style="background:#efefef;">
                    <a  target="_blank">
                        <div class="slider-wrap">
                            <span class="banner-text">
                                <img src="/Public/Home/Index/Picture/9570168994046121.png" height="500" />
                            </span>
                        </div>

                        <div class="banner-main" style="background:url(/Public/Home/Index/Images/9288694017269929.jpg)"></div>
                    </a>
                </li>
                <li style="background:#efefef;">
                    <a  target="_blank">
                        <div class="slider-wrap">
                            <span class="banner-text">
                                <img src="/Public/Home/Index/Picture/9570169035268266.png" height="500" />
                            </span>
                        </div>

                        <div class="banner-main" style="background:url(/Public/Home/Index/Images/9288694058492074.jpg)"></div>
                    </a>
                </li>
                <li style="background:#efefef;">
                    <a  target="_blank">
                        <div class="slider-wrap">
                            <span class="banner-text">
                                <img src="/Public/Home/Index/Picture/9570169040347306.png" height="500" />
                            </span>
                        </div>

                        <div class="banner-main" style="background:url(/Public/Home/Index/Images/9288694063702186.jpg)"></div>
                    </a>
                </li>
                <li style="background:#efefef;">
                    <a  target="_blank">
                        <div class="slider-wrap">
                            <span class="banner-text">
                                <img src="/Public/Home/Index/Picture/9570169033302186.png" height="500" />
                            </span>
                        </div>

                        <div class="banner-main" style="background:url(/Public/Home/Index/Images/9288694056525994.jpg)"></div>
                    </a>
                </li>
                <li style="background:#efefef;">
                    <a  target="_blank">
                        <div class="slider-wrap">
                            <span class="banner-text">
                                <img src="/Public/Home/Index/Picture/9570168903114916.png" height="500" />
                            </span>
                        </div>

                        <div class="banner-main" style="background:url(/Public/Home/Index/Images/9288693926338724.jpg)"></div>
                    </a>
                </li>
                <li style="background:#efefef;">
                    <a  target="_blank">
                        <div class="slider-wrap">
                            <span class="banner-text">
                                <img src="/Public/Home/Index/Picture/9570168028274806.png" height="500" />
                            </span>
                        </div>

                        <div class="banner-main" style="background:url(/Public/Home/Index/Images/9288693051498614.jpg)"></div>
                    </a>
                </li>
    </ul>
    <div class="b-btn">
        <a class="prev" href="javascript:void(0)"></a>
        <a class="next" href="javascript:void(0)"></a>
    </div>
    <div class="b-dot">
        <ul></ul>
    </div>
</div>

<!-- 活动、广告位 -->

    <div class="wrap ad-item">
        <ul>
                <li>
                    <a href="http://www.yiguo.com/activity/sale/3200" target="_blank">
                        <img src="/Public/Home/Index/Picture/9288692687216739.jpg" width="290">
                            <p><b>新品专区</b>探访源头产地 臻选当令时鲜</p>
                    </a>
                </li>
                <li>
                    <a href="http://www.yiguo.com/activity/sale/3203" target="_blank">
                        <img src="/Public/Home/Index/Picture/9288692888445038.jpg" width="290">
                            <p><b>优质生活</b>美食有态度，生活更有味</p>
                    </a>
                </li>
                <li>
                    <a href="http://www.yiguo.com/activity/bankactivity" target="_blank">
                        <img src="/Public/Home/Index/Picture/9288692687347811.jpg" width="290">
                            <p><b>银行专区 </b>银行卡专享 超值购实惠</p>
                    </a>
                </li>
                <li>
                    <a href="http://article.yiguo.com/" target="_blank">
                        <img src="/Public/Home/Index/Picture/9288692687413347.jpg" width="290">
                            <p><b>菜谱专栏</b>大厨私房菜 餐桌新食尚</p>
                    </a>
                </li>
        </ul>
    </div>

<!-- 商品楼层 -->
<?php if(is_array($cates)): foreach($cates as $k=>$v): if(($k < 10 )): ?><div class="floor wrap <?php echo ($k+1); ?>_channelhome clearfix loadfloor loaded" id="t<?php echo ($k+1); ?>_channelhome" data-url="/Home/Floor?floorId=01_channelhome">
            <div class="floor-title ">
                <h2><a href="http://www.yiguo.com/products/0<?php echo ($k+1); ?>_channelhome.html" target="_blank"><i>F<?php echo ($k+1); ?></i><?php echo ($v["name"]); ?></a></h2>
                    
                    <span class="keyword">
                        <!-- 子类遍历 -->
                        <?php if(is_array($catex)): foreach($catex as $ke=>$vo): if(($v['id'] == $vo['pid'])): ?><a href="http://search.yiguo.com/?keyword=%E6%B3%B0%E5%9B%BD" target="_blank" class=""><?php echo ($vo["name"]); ?></a><?php endif; endforeach; endif; ?>
                    </span>
                    
            </div>
            <div class="floor-con floor-layout2">
                <div class="floor-side"><a href="http://search.yiguo.com/?keyword=%E6%96%B0%E8%A5%BF%E5%85%B0%E6%B0%B4%E6%9E%9C" target="_blank"><img src="<?php echo ($v["pic"]); ?>" height="463" width="275"></a></div>
                    <div class="floor-main">
                        <ul>
                            <?php $i = 0; ?>
                            <?php foreach ($goodss as $key => $value) { if($v['id'] == $value['cid']){ $i ++; if($i <= 8){ echo '<li>
                                         <a href="http://www.yiguo.com/product/11522.html" target="_blank">
                                        <img src="'.$value['pic'].'" height="230" width="230">
                                        </a>
                                        </li>'; } } } ?>
                          
                        </ul>
                    </div>
                </div>
            </div><?php endif; endforeach; endif; ?>

        <!--腰线 开始
        <!------- 楼层引导 ------->
        
<div class="floor-guide" style="display: none;">
    <div class="mui-nav">
        <?php if(is_array($cates)): foreach($cates as $k=>$v): if(($k < 10 )): ?><a href="#t<?php echo ($k+1); ?>_channelhome">
                    <b class="icon_<?php echo ($k+1); ?>_channelhome">&nbsp;</b>
                    <em><?php echo ($v["name"]); ?></em>
                    <i>&nbsp;</i>
                </a><?php endif; endforeach; endif; ?>
    </div>
</div>

        <!--腰线 结束
                    <!--摇一摇-->



    <div class="footer_service">
        <div class="wrap">
            <ul>
                <li class="s1">
                    <b>全球精选</b>
                    <span>一站式生鲜购物方案</span>
                </li>
                <li class="s2">
                    <b>多仓直发</b>
                    <span>特有次日达配送服务</span>
                </li>
                <li class="s3">
                    <b>源头直采</b>
                    <span>精选正宗品质好食材</span>
                </li>
                <li class="s4">
                    <b>天天底价</b>
                    <span>会员专属优惠购不停</span>
                </li>
            </ul>
        </div>
    </div>


<!------- 页尾 ------->
<div class="footer">
    <div class="wrap">
        <dl class="col1">
            <dt>新手指南</dt>
            <dd>
                <p><a href="/help/registersteps.html">账户注册</a></p>
                <p><a href="/help/gouwuliucheng.html">购物流程</a></p>
                <p><a href="/help/ordering.html">订购方式</a></p>
                <p><a href="/help/ubremark.html">悠币说明</a></p>
                <p><a href="http://www.yiguo.com/activity_vip.html">会员等级</a></p>
            </dd>
        </dl>
        <dl class="col2">
            <dt>付款方式</dt>
            <dd>
                <p><a href="/help/payment.html">支付方式</a>/<a href="/help/invoiceremark.html">发票说明</a></p>
                <p><a href="/help/chongzhiliucheng.html">充值说明</a>/<a href="/help/usechuzhika.html">储值卡说明</a></p>
                <p><a href="/help/usegiftcard.html">优惠代码/礼品卡说明</a></p>
                <p><a href="/help/cardbuynotes.html">卡券购买章程</a></p>
            </dd>
        </dl>
        <dl class="col3">
            <dt>配送方式</dt>
            <dd>
                <p><a href="/help/sendyuefei.html">配送运费</a></p>
                <p><a href="/help/sendquyu.html">配送范围</a></p>
                <p><a href="/help/sendtime.html">配送时间</a></p>
            </dd>
        </dl>
        <dl class="col4">
            <dt>售后服务</dt>
            <dd>
                <p><a href="/help/tuihuanhuoshuoming.html">退换货政策</a></p>
                <p><a href="/help/huanhuolc.html">退换货流程</a></p>
                <p><a href="/help/qa.html">常见问题</a></p>
                <p><a href="http://home.yiguo.com/Trade/Advice">投诉与建议</a></p>
            </dd>
        </dl>
        <dl class="col5">
            <dt>关于我们</dt>
            <dd>
                <p><a href="/help/introduction.html">公司介绍</a></p>
                <p><a href="/help/contact.html">联系我们</a></p>
                <p><a href="/help/procooperation.html">业务合作</a></p>
                <p><a href="/help/chengxinjubao.html">诚信举报</a></p>
                <p><a href="http://yiguo.zhiye.com/home" target="_blank" rel="nofollow">人才招聘</a></p>
                <p><a href="/help/friendurl.html">友情链接</a></p>
                
            </dd>
        </dl>
        <div class="service"><span>客服热线 400-000-7788 企业采购或团购，请转2号键咨询</span><span>周一至周日 9:00-21:00</span></div>
        <div class="copyright">
            <p>所有图片均受著作权保护，未经许可任何单位与个人不得使用、复制、转载、摘编，违者必究法律责任。</p>
            <p>沪ICP备09008015号 Copyright © 2005-2016 <a href="http://www.yiguo.com/">上海易果电子商务有限公司</a>版权所有</p>
            <p class="authentication">
                <a href="http://shwg.dianping.com/index.html" target="_blank" rel="nofollow"><img src="/Public/Home/Index/Picture/2517491005058doc.png" height="47"></a>
                <a href="http://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&amp;entyId=20110512114405424" target="_blank"><img src="/Public/Home/Index/Picture/footer_copy.gif" width="47px" height="47px"></a>
                <a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=31010502000002" style="display: inline-block; text-decoration: none; height: 20px; line-height: 20px;"><img src="/Public/Home/Index/Picture/ghs.png" style="float: left;"/><span style="float: left; height: 20px; line-height: 20px; margin: 0px 0px 0px 5px; color: #939393;">沪公网安备 31010502000002号</span></a>

            </p>
        </div>
    </div>
</div>



        <!------- 侧边悬浮 ------->
        <div class="sidebar" id="sidebar">
            <a href="#body" class="s-btn goTop"></a>
            
        </div>

    </div>

    <script src="/Public/Home/Index/Scripts/jquery.cookie.js"></script>
    <script src="/Public/Home/Index/Scripts/handlebars-v3.0.1.js"></script>
    <script src="/Public/Home/Index/Scripts/utaste.js"></script>
    <script src="/Public/Home/Index/Scripts/base.js"></script>
    <script src="/Public/Home/Index/Scripts/jquery.superslide.js"></script>
    <script src="/Public/Home/Index/Scripts/sidebar.js"></script>
    <script src="/Public/Home/Index/Scripts/floor-guide.js"></script>
    <script src="/Public/Home/Index/Scripts/global-v2.js"></script>
    <script src="/Public/Home/Index/Scripts/search.js"></script>
    <script src="/Public/Home/Index/Scripts/app.js"></script>
    <script src="/Public/Home/Index/Scripts/common.js"></script>
    <script src="/Public/Home/Index/Scripts/util.js"></script>
    <script>
        $(function () {
            app.init();
        })
    </script>
    <!--yiguoStats-->
    <script type="text/javascript">
        var _yaq = _yaq || [];
        _yaq.push(['_operate', 'view']);
        _yaq.push(['_site', 'YiGuo']);
        _yaq.push(['categoryid', '']);
        _yaq.push(['behaviorid', '']);
        _yaq.push(['behavior', '']);

        (function () {
            var ya = document.createElement('script'); ya.type = 'text/javascript'; ya.async = true;
            ya.src = "http://tracker.yiguo.com/Scripts/yiguoStats.min.js";
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ya, s);
        })();

    </script>
  
    
            <script>
                $(function () {
                    app.floorscroll(".loadfloor", 0);
                    app.changeCategory();
                    app.fixedheader();
                    $(".prev,.next").hover(function () {
                        $(this).fadeTo("show", 0.7);
                    }, function () {
                        $(this).fadeTo("show", 0.3);
                    })
                    //首页焦点图
                    $(".banner-slider").hover(function () {
                        $(this).find(".prev,.next").fadeTo("show", 0.3);
                    }, function () {
                        $(this).find(".prev,.next").hide();
                    })
                    $(".banner-slider").slide({
                        titCell: ".b-dot ul", mainCell: ".b-slider", effect: "fold", autoPlay: true, interTime: 4500, autoPage: true,
                        endFun: function (i, c) {
                            $(".b-slider li").removeClass("current").eq(i).addClass("current");
                        }
                    });

                    //$(function () {
                    //    if ($.cookie('firstvisit') == "true") {
                    //        $(".page-tips").remove();
                    //    } else {
                    //        $(".page-tips").show();
                    //        $(".page-tips a").click(function () {
                    //            $(this).parent().remove();
                    //            $.cookie("firstvisit", "true", { expires: 365, path: '/', domian: 'yiguo.com' });
                    //        });
                    //    }
                    //    if ($.cookie('activity') != 'true') {
                    //        if ($("#tenyears_ad")) {
                    //            $("#tenyears_ad").show();
                    //            $("#tenyears_ad .close").click(function () {
                    //                $.cookie("activity", "true", { path: '/' });
                    //            });
                    //        }
                    //    }
                    //})

                })
            </script>
            <script type="text/javascript">
                window.__zp_tag_params = {
                    pagetype: "shouye",
                };
            </script>

        
    <script src="/Public/Home/Index/Scripts/stats.js"></script>
    
    <noscript><img src="/Public/Home/Index/Picture/adv.gif" style="display:none;" /></noscript>
  
</body>
</html>