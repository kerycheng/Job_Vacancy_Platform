# 工作發佈平台 Job Vacancy Platform

[網頁DEMO連結](http://jobvacancyplatform.ddns.net/)

![image](https://imgur.com/uztd3RA.jpg)
![image](https://imgur.com/RKMFDi6.jpg)
![image](https://imgur.com/nlkF1xG.jpg)


* [概述](#overview)  
  * [專案引用](#site)  
* [環境介紹](#introduce)  
* [管理員帳號](#admin)
  

<h2 id="overview">概述</h2>

具有用戶註冊、登入功能，可在平台上發佈工作招募資訊的平台。


<h3 id="site">專案引用</h3>

本網站主要參考[LaraGigs](https://github.com/bradtraversy/laragigs/)這個專案，並加以修改、完善。

<br>

<h2 id="introduce">環境介紹</h2>  

該專案是使用XAMPP建置Laravel開發環境，最後部署至Google Cloud Platform裡。

本地開發環境：

```
Windows 10
XAMPP v3.3.0
PHP 8.2.0
Apache 2.4.54 (Win64)
OpenSSL 1.1.1p
MariaDB 10.4.27
```

GCP環境：

```
Ubuntu 22.10
PHP 8.2.0
Nginx 1.22.0
MySQL 8.0.32
```

<h2 id="admin">管理員帳號</h2>

管理員Email與密碼：

```
Email: admin@email.com
密碼: admin123
```

管理員具有編輯、刪除所有用戶文章的功能，若想新增管理員帳號可使用以下指令：

```bash
use laravel;
UPDATE users SET role = 'admin' WHERE name = '用戶名稱';
```
