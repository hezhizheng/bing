# 两行代码(两个函数)下载必应壁纸

## 使用
- > git clone git@github.com:hezhizheng/bing.git
- > cd bing/
- > vim bing.php // 替换壁纸的保存路径，修改 常量 SAVE_PATH
- > php bing.php // 执行下载

&emsp;&emsp;![微信截图_20190902140227.png](https://i.loli.net/2019/09/02/WrAvwVK6scbmEy2.png)

## Linux 定时执行(crontab)
> 1 0 * * * * php bing.php  // 每天 00:01:00 自动执行下载

## Windows
- 推荐 Windows 定时任务管理器 [go-crontab](https://github.com/hezhizheng/go-crontab)
