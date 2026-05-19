<?php
/*
 * @Version：Like Girl 5.1.0
 * @Author: Ki.
 * @Date: 2024-06-07 09:00:00
 * @LastEditTime: 2024-06-07
 * @Description: 花有重开日 人无再少年
 * @Document：https://blog.kikiw.cn/index.php/archives/52/
 * @Copyright (c) 2024 by Ki All Rights Reserved. 
 * @Warning：禁止以任何方式出售本项目 如有发现一切后果自行负责
 * @Warning：禁止以任何方式出售本项目 如有发现一切后果自行负责
 * @Warning：禁止以任何方式出售本项目 如有发现一切后果自行负责
 * @Message：开发不易 版权信息请保留 （删除/更改版权的无耻之人请勿使用 查到一个挂一个）
 * @Message：开发不易 版权信息请保留 （删除/更改版权的无耻之人请勿使用 查到一个挂一个）
 * @Message：开发不易 版权信息请保留 （删除/更改版权的无耻之人请勿使用 查到一个挂一个）
 */

header("Content-Type:text/html; charset=utf8");

//localhost 为数据库地址 一般使用默认的即可 或（127.0.0.1）
$db_address = "localhost";

//数据库用户名
$db_username = "root";

//数据库密码
$db_password = "123456";

//数据库表名
$db_name = "LikeGirl20240612";

//敏感信息修改安全码 建议设置复杂一些
// Docker users can set LIKEGIRL_SECURITY_CODE instead of editing this file.
$Like_Code = getenv('LIKEGIRL_SECURITY_CODE') ?: "Love";

//版本号
$version = 20240612;

// SQLite settings for the Docker image. The old MySQL values are kept above so
// the original admin UI and variable names do not need to change.
$sqlite_path = getenv('LIKEGIRL_SQLITE_PATH') ?: __DIR__ . '/../data/likegirl.sqlite';
$sqlite_seed_file = getenv('LIKEGIRL_SQLITE_SEED') ?: __DIR__ . '/../love20240612.sql';
