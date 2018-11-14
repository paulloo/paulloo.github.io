---
layout:     post
title:      "Paul Blog 前端方向的博客分享乐园"
subtitle:   "知识的分享也是对自我的总结，接受鼓励和批评，总要走出这一步！"
author:     "Paul Ding"
header-img: "img/post-bg-06.jpg"
---

<p>想写东西很久了，一直没有勇气，一是想保持低调谦逊的作风，二是自我感觉技术一般，没什么值得分享的。（其实这才是要分享的原因^_^）</p>

<p>因为是第一条微博，不知道写点啥，那就先自我总结一下，然后针对自己有哪些不足的逐个击破。前端东西太多太杂，但无非就是传说中的前端三剑客html,css,javascript.其他的jquery,angular,react,vue...等等都是js的框架和类库罢了,而nodejs按照官网上来说是Javascript运行环境。总之前端三剑客作为基础，学好了，其他的就是看什么场景适用什么工具的问题，只不过要花点时间看说明书而已。</p>

[单行](#test1)

<h2 class="section-heading">HTML</h2>
<blockquote>超级文本标记语言(HyperText Markup Language)</blockquote>

<h2 class="section-heading">CSS</h2>
<blockquote>层叠样式表(Cascading Style Sheets)</blockquote>

#### 文本溢出显示省略号

<a id="test1">单行</a>
```
overflow:hidden;
text-overflow:ellipsis;
white-space:nowrap
```
多行
```
overflow: hidden;
text-overflow: ellipsis;
display: -webkit-box;
-webkit-line-clamp: 2;
-webkit-box-orient: vertical;
```

css3实现动画对号选择按钮
```
<i class="icon-span" :class="{'icon-span-select' : isShow}"></i>

.icon-span{
  display: inline-block;
  background-color: #fff;
  border-radius: 100%;
  border: 1px solid #ccc;
  position: relative;
  width: 20px;
  height: 20px;
  vertical-align: middle;
}
.icon-span::after{
  border: 2px solid transparent;
  border-left: 0;
  border-top: 0;
  content: " ";
  top: 3px;
  left: 6px;
  position: absolute;
  width: 4px;
  height: 8px;
  -webkit-transform: rotate(45deg) scale(0);
  transform: rotate(45deg) scale(0);
  -webkit-transition: -webkit-transform .2s;
  transition: -webkit-transform .2s;
  transition: transform .2s;
  transition: transform .2s, -webkit-transform .2s;
}
.icon-span-select{
  background-color: $color-primary;
  border-color: $color-primary;
}
.icon-span-select::after{
  border-color: #fff;
  -webkit-transform: rotate(45deg) scale(1);
  transform: rotate(45deg) scale(1);
}
```


<h2 class="section-heading">Javascript</h2>
<blockquote>JavaScript，一种高级编程语言，通过解释执行，是一门动态类型，面向对象（基于原型）的直译语言。</blockquote>

<!-- <a href="#">
    <img src="{{ site.baseurl }}/img/post-sample-image.jpg" alt="Post Sample Image">
</a>
<span class="caption text-muted">To go places and do things that have never been done before – that’s what living is all about.</span> -->
<!-- 

<p>Placeholder text by <a href="http://spaceipsum.com/">Space Ipsum</a>. Photographs by <a href="https://www.flickr.com/photos/nasacommons/">NASA on The Commons</a>.</p> -->