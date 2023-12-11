---
layout:     post
title:      "不会写博客的程序员不是好司机"
subtitle:   "写博客不是主要的，倒腾服务器和搭建博客才是目的"
date:       2023-12-06 11:00:00
author:     "Paulloo"
header-img: "img/post-bg-2015.jpg"
catalog: true
tags:
    - blog
    - writing
---


## 前言
我是一名不知名一般的前端仔，虽然工作有些年头，但是没咋写过博客，深知自己几斤几两，不太愿意“露脸”。感受到世界的变化，内容自媒体AI大爆炸，躺平不是长久之道。不断积累，持续学习，方能开花结果。

市面上有很多写博客的平台，为啥要自己搭建平台呢，还得整个服务器，不费劲么？唉~说对咯，咱不是写博客，是搭博客平台，玩转服务器，跑个开源项目啥的。我这都卸了装，装了卸好几轮了,乐此不疲! 


## 博客搭建方式

## GitHub Pages + Jekyll

1. **创建 GitHub 账号和 Repository**
   
   首先，你需要创建一个GitHub账号，并在账号下创建一个新的 Repository。Repository 的名称应该为：你的用户名.github.io，例如：username.github.io。

2. **安装 Jekyll**
   
   在本地安装 Jekyll，确保你的电脑上已经安装了 Ruby 环境。在终端运行以下命令来安装 Jekyll:
   
   ```
   gem install jekyll bundler
   ```

3. **克隆Jekyll模板并初始化**

   ```
   git clone https://github.com/Kaijun/hexo-theme-huxblog.git
   cd hexo-theme-huxblog
   bundle install
   ```

4. **本地启动Jekyll**

   通过以下命令启动 Jekyll 的本地服务器，然后在浏览器中打开 `http://localhost:4000` 查看你的博客。

   ```
   bundle exec jekyll serve
   ```

5. **部署到GitHub**

   运行以下命令将你的博客推送到 GitHub，你的博客将会自动构建并部署到 GitHub Pages 上。

   ```
   git add .
   git commit -m "first blog"
   git push
   ```

## NodeBB

1. **安装 Node.js 和 MongoDB**

   NodeBB 是建立在 Node.js 上的，所以你需要先安装 Node.js。MongoDB 是 NodeBB 的数据库，你也需要安装它。

2. **克隆 NodeBB 并进行初始化**
   
   ```
   git clone -b v1.15.x https://github.com/NodeBB/NodeBB.git nodebb
   cd nodebb
   ./nodebb setup
   ```

3. **启动 NodeBB**
   
   ```
   ./nodebb start
   ```

   然后在浏览器中打开 `http://localhost:4567` 查看你的 NodeBB 论坛。

## WordPress

1. **安装 PHP, MySQL 和 Apache**

   WordPress 是建立在 PHP 和 MySQL 上的，所以你需要先安装它们。Apache 是最流行的网页服务器，WordPress 也需要它。

2. **下载并解压 WordPress**
   
   ```
   wget https://wordpress.org/latest.tar.gz
   tar -xzvf latest.tar.gz
   ```

3. **创建 MySQL 数据库和用户**
   
   ```
   mysql -u root -p
   CREATE DATABASE wordpress;
   CREATE USER 'wordpressuser'@'localhost' IDENTIFIED BY 'password';
   GRANT ALL PRIVILEGES ON wordpress.* TO 'wordpressuser'@'localhost';
   FLUSH PRIVILEGES;
   exit
   ```

4. **配置 WordPress**
   
   在浏览器中访问 `http://your_server_ip/wordpress`，并按照提示进行配置。
