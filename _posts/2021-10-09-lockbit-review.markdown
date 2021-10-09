---
layout: post
title: 记一次被勒索病毒Lockbit入侵
subtitle: from Paul
categories: [lockbit]
author: Paul
---

节前正逢930流量高峰期，一早到公司发现几名同事的电脑已经被lockbit入侵，一些包含关键代码文件都被加了.lockbit后缀；甚至有台电脑直接霸屏，列出了勒索信息支付方式等等，还“热心”的提供了vpn。
![js](/img/lockbit/lockbit001.jpg)
![js](/img/lockbit/lockbit002.jpg)
由于事发突然，lockbit席卷了200多为同事,运维同事瞬间被小窗炸了锅，甚至有几位运维同事也中了招。当即让我们断网，扫毒，避免再次传播。咨询了一位大厂的安全专家朋友，看看有没有恢复数据的可能，结果答复只有5个字，“不要挣扎了”。哈哈，重新装系统吧。
![js](/img/lockbit/lockbit003.jpg)
事后我们分析了下，大概是因为我们开启了远程控制功能导致的。最后还是让我们多一点网络安全意识吧。少浏览一些有安全隐患的网站。