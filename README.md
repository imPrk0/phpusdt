# PHP 版本的 USDT 支付网关

Author: [Prk](https://imprk.me)


## 前端代码

在 2016 年一直到 2022 年之间，PHP 作为主流建站语言时，直接将 HTML 嵌入进 PHP 中响应给用户是个非常好的主意。

但是，这几年，前端技术崛起，前后端分离成为主流，所以我在本项目采用前后端分离的模式去架构；就像 2017 年起草的 [发卡系统](https://github.com/tai7sy/card-system) 那样。

- [前端仓库](https://github.com/imPrk0/phpusdt-admin)

> 本人是 [Vue.js](https://vuejs.org) 爱好者，认为 **Vue.js > React**。


## 基本不会维护

你会发现，我的代码写的足够简陋。没错，原因也十分的简单，因为本项目本身也是在给 [EpUSDT](https://github.com/assimon/epusdt) “擦屁股”，满足要求即可，不会写更多的内容。


## “痛批” EpUSDT 项目

[EpUSDT](https://github.com/assimon/epusdt)&nbsp;(Easy Payment Usdt) 是 [assimon](https://utf8.hk) 开发的一个好的项目，这点需要承认。

> 该作者同时也是 "[独角数卡](https://github.com/assimon/dujiaoka)" 自动发卡系统的作者。

最后一次有效的 commit 和发版停留在了西元 2022 年，目前该项目存在的问题是：

- 没有后台管理系统，完全依赖 Telegram 进行管理
- Telegram 无法进行 “补单”
- 缺少 “主动查询订单” 的功能

而且该项目仅仅只能监控一个地址，需要用 Go 吗？太重了！

所以这个项目就有了。

[EpUSDT](https://github.com/assimon/epusdt) 与本系统均是通过 `https://apilist.tronscanapi.com` 提供的 API 进行查询交易状态。这也就是为什么我说 [EpUSDT](https://github.com/assimon/epusdt) 项目根本没有必要使用 Go 去写。

从并发上来讲，现在用的比较多的 [彩虹易支付](https://pay.cccyun.cc) 也是使用 PHP 写的，并且也存在前端 Ajax 轮询查询订单状态。

> 如果你看到了这里那么我还没开发完你等着就行了我后面会更新文档
