## 项目来源

本项目基于：[https://gitee.com/kiCode111/LikeGirl_5.1.0](https://gitee.com/kiCode111/LikeGirl_5.1.0) 项目，继续开发。

#### 更新记录
- 修复管理后台无法登录问题
- 删除了部分广告

#### 启动方法
- Docker + SQLite（推荐）
    - 拉取镜像：`docker pull ghcr.io/panda-995/likegirlsite:latest`
    - 运行容器：`docker run -d --name likegirlsite -p 8080:80 -v likegirl-data:/var/www/html/data ghcr.io/panda-995/likegirlsite:latest`
    - 或使用 Compose：`docker compose up -d`
    - 访问地址：`http://localhost:8080`
    - SQLite 数据库默认保存在容器内 `/var/www/html/data/likegirl.sqlite`，Compose 会用 `likegirl-data` volume 持久化
- 传统 MySQL 方式（可选）
    - 作者是采用ngnix+php反向代理
    - 创建mysql数据库并导入`love20240612.sql`文件
        - create database 数据库名;
        - use 数据库名;
        - source sql文件;
    - 配置文件（`admin/Config_DB.php`）
        - 配置数据库、密码等
        - 请认真填写安全码 尽量设置的`复杂难以猜测` 修改密码等敏感信息需输入安全码
- 默认账号密码：`admin`/`lovezz`
